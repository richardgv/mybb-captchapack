<?php
/**
 * MyBB CAPTCHA Pack (development version)
 *
 * Author:    Richard Grenville < https://github.com/richardgv/ >
 * Homepage:  < https://github.com/richardgv/mybb-captchapack >
 * License:   GPL-2+
 * Compatible with (hopefully) MyBB 1.6.x
 */

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
  die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");

// Shorthand name for PluginLibrary
if(!defined("PLUGINLIBRARY"))
  define("PLUGINLIBRARY", MYBB_ROOT . "inc/plugins/pluginlibrary.php");

// Tell MyBB when to run the hooks
// $plugins->add_hook("hook name", "function name");
$plugins->add_hook('member_register_start', 'captchapack_display');
$plugins->add_hook('datahandler_user_validate', 'captchapack_validate');

/**
 * Basic information about the plugin.
 */
function captchapack_info() {
  return array(
    "name"          => "CAPTCHA pack",
    "description"   => "MyBB port of Drupal's CAPTCHA pack.",
    "website"       => "https://github.com/richardgv/mybb-captchapack",
    "author"        => "Richard Grenville",
    "authorsite"    => "https://github.com/richardgv",
    "version"       => "20121209-git",
    "guid"          => "",
    "compatibility" => "16"
  );
}

/**
 * Install function for the plugin.
 *
 * Creates <code>captcha_captchapack</code> table in the database. Add
 * cleanup task.
 */
function captchapack_install() {
  require_once MYBB_ROOT . 'inc/functions_task.php';

  global $db, $PL, $cache;

  // PluginLibrary dependency check
  if (!file_exists(PLUGINLIBRARY)) {
    flash_message("The selected plugin could not be installed because <a href=\"http://mods.mybb.com/view/pluginlibrary\">PluginLibrary</a> is missing.", "error");
    admin_redirect("index.php?module=config-plugins");
  }

  // Load PluginLibrary
  $PL or require_once PLUGINLIBRARY;

  // PluginLibrary version check
  if ($PL->version < 11) {
    flash_message("PluginLibrary is too old.", "error");
    admin_redirect("index.php?module=config-plugins");
  }

  // Create table
  $tbl_name = TABLE_PREFIX . 'captcha_captchapack';
  $db->query("create table `$tbl_name` (
    `hash`      binary(20)    not null,
    `ip`        int unsigned  not null  default '0',
    `dateline`  bigint(30)    not null  default '0',
    `answer`    char(255)     not null  default '',
    primary key (`hash`, `ip`)
  );");

  // Add index to dateline to accelerate CAPTCHA cleanup
  $db->query("alter table `$tbl_name` add index (`dateline`);");

  // Insert task
  // Code stolen from MyBB itself
  $new_task = array(
    "title" => $db->escape_string('CAPTCHA Pack Cleanup'),
    "description" => $db->escape_string('Clean up old CAPTCHA entries.'),
    "file" => $db->escape_string('captchapack'),
    "minute" => $db->escape_string('0'),
    "hour" => $db->escape_string('*'),
    "day" => $db->escape_string('*'),
    "month" => $db->escape_string('*'),
    "weekday" => $db->escape_string('*'),
    "enabled" => 0,
    "logging" => 1
  );
  $new_task['nextrun'] = fetch_next_run($new_task);
  $db->insert_query("tasks", $new_task);
  $cache->update_tasks();

}

/**
 * Uninstall function for the plugin.
 *
 * Drops <code>captcha_captchapack</code> table in the database.
 */
function captchapack_uninstall() {
  global $PL, $db;
  $PL or require_once PLUGINLIBRARY;

  // Drop template and stylesheet
  $PL->templates_delete('captchapack');
  $PL->stylesheet_delete('captchapack');

  // Drop captchapack table
  $tbl_name = TABLE_PREFIX . 'captcha_captchapack';
  $db->query("drop table `$tbl_name`;");

  // Drop task
  $db->delete_query('tasks', "file = 'captchapack'");

  // Just in case there's something wrong
  $db->delete_query('tasks', "title = 'CAPTCHA Pack Cleanup'");
}

/**
 * Check whether the plugin is installed, by checking the presense of the
 * database table.
 */
function captchapack_is_installed() {
  global $db;

  return (bool) ($db->table_exists("captcha_captchapack"));
}

/**
 * Activate function of the plugin.
 */
function captchapack_activate() {
  global $PL, $db, $lang;
  $PL or require_once PLUGINLIBRARY;

  // Create template
  $lang->load("member");
  $PL->templates('captchapack',
    'CAPTCHA Pack Plugin',
    array('captcha' => <<<EOF
<br />
<fieldset class="trow2">
<legend><strong>{$lang->image_verification}</strong></legend>
<table cellspacing="0" cellpadding="{$theme['tablespace']}">
<tr>
<td><span class="smalltext">{$lang->verification_note}</span></td>
<td rowspan="2" align="center"><div class="captchapack-captcha{\$captchapack_classes}">{\$captchapack_challenge}</div><br /><span style="color: red;" class="smalltext">{$lang->verification_subnote}</span>
</td>
</tr>
<tr>
<td><input type="text" class="textbox" name="captchapack-answer" value="" /><input type="hidden" name="captchapack-hash" value="{\$captchapack_hash}" /></td>
</tr>
</table>
</fieldset>
EOF
    )
  );

  // Add stylesheet
  $PL->stylesheet('captchapack', <<<EOF
.captchapack-captcha {
  font-family: monospace;
}

.captchapack-captcha-route {
  position: relative;
  width: 200px;
  height: 200px;
}

.captchapack-captcha-route div {
  display: inline-block;
}

.captchapack-captcha .captchapack-css-wrap {
  display: inline-block;
  width: 15px;
}

.captchapack-captcha .captchapack-css-wrap .captchapack-css-l, .captchapack-captcha .captchapack-css-wrap .captchapack-css-r {
  display: inline-block;
  width: 7px;
}

.captchapack-captcha .captchapack-css-wrap .captchapack-css-l {
  float: left;
}

.captchapack-captcha .captchapack-css-wrap .captchapack-css-r {
  float: right;
}
EOF
  );

  // Add settings
  $PL->settings('captchapack', 'CAPTCHA Pack',
    'Settings of the CAPTCHA pack MyBB plugin.',
    array(
      'enabled' => array(
        'title' => 'Enable CAPTCHA Pack CAPTCHA',
        'description' => '',
        'value' => 1,
      ),
      'type' => array(
        'title' => 'Type of CAPTCHA',
        'description' => '',
        'optionscode' => "select\nasciiart=asciiart\ncss=css\nroute=route",
        'value' => 'asciiart',
      ),
      'num' => array(
        'title' => 'CAPTCHA length',
        'description' => '',
        'optionscode' => 'text',
        'value' => '5',
      ),
      'asciiart_style' => array(
        'title' => 'ASCII art CAPTCHA style',
        'description' => '',
        'optionscode' => "select\nroman=roman\nunivers=univers",
        'value' => 'roman',
      ),
      'route_tablesize' => array(
        'title' => 'Route CAPTCHA table size',
        'description' => '',
        'optionscode' => 'text',
        'value' => '5',
      ),
    ));

  // Add CAPTCHA to register page template
  require_once MYBB_ROOT . 'inc/adminfunctions_templates.php';
  find_replace_templatesets("member_register", '#{\$regimage}#', "{\$captchapack}{\$regimage}");

  // Enable task
  $db->update_query('tasks', array('enabled' => 1),
    "file = 'captchapack'");
}

/**
 * Deactivate function of the plugin.
 */
function captchapack_deactivate() {
  global $db;
  $PL or require_once PLUGINLIBRARY;

  // Deactivate stylesheet
  $PL->stylesheet_deactivate('captchapack');

  // Delete settings
  $PL->settings_delete('captchapack');

  // Remove CAPTCHA from register page template
  require_once MYBB_ROOT . 'inc/adminfunctions_templates.php';
  find_replace_templatesets("member_register", '#{\$captchapack}{\$regimage}#', "{\$regimage}");

  // Disable task
  $db->update_query('tasks', array('enabled' => 0),
    "file = 'captchapack'");
}

/**
 * Get a numeric value from settings.
 */
function captchapack_gets_num($key, $default) {
  global $mybb;

  $num = 0;
  if (isset($mybb->settings['captchapack_' . $key]))
    $num = (int) $mybb->settings['captchapack_' . $key];
  if ($num <= 0)
    $num = $default;

  return $num;
}

/**
 * Insert a record of a CAPTCHA to database.
 */
function captchapack_dbinsert($captcha) {
  global $db;

  if (!$captcha['challenge'] || !$captcha['answer'])
    return;

  $ip = ip2long(get_ip());
  // Use replace_query() here just in case we have a conflict.
  $db->replace_query('captcha_captchapack', array(
    "hash"      => $db->escape_string($captcha['hash_raw']),
    "ip"        => $ip,
    "dateline"  => TIME_NOW,
    "answer"    => $db->escape_string(strtolower($captcha['answer'])),
  ));
}
/**
 * Drop the record of a CAPTCHA from database.
 */
function captchapack_dbdrop($hash) {
  global $db;

  $hash = $db->escape_string($hash);
  $db->delete_query("captcha_captchapack", "hash = X'{$hash}';");
}

/**
 * Validate the record of a CAPTCHA.
 */
function captchapack_dbvalidate($hash, $answer) {
  global $db;

  $hash = $db->escape_string($hash);
  $answer = $db->escape_string(strtolower($answer));
  $ip = ip2long(get_ip());
  $query = $db->simple_select("captcha_captchapack", "*",
      "hash = X'{$hash}' AND ip = '{$ip}' and answer = '{$answer}'");
  $result = $db->fetch_array($query);
  return !empty($result['dateline']);
}

/**
 * Display callback function.
 */
function captchapack_display() {
  global $templates, $captchapack, $mybb;

  // Quit if it's not enabled
  if (!$mybb->settings['captchapack_enabled'])
    return;

  // Get the CAPTCHA
  $arr_captcha = array('challenge' => '', 'answer' => '');
  $type = $mybb->settings['captchapack_type'];
  if (function_exists('captchapack_gen_' . $type)) {
    $opts = array(
      'num' => captchapack_gets_num('num', 5),
    );
    // Special options for particular CAPTCHA types
    switch ($type) {
    case 'asciiart':
      require_once MYBB_ROOT . 'inc/plugins/captchapack-data.php';
      $opts['data'] = captchapack_gen_asciiart_data(
        $mybb->settings['captchapack_asciiart_style']);
      break;
    case 'route':
      $opts['tablesize'] = captchapack_gets_num('route_tablesize', 5);
      break;
    }
    $arr_captcha = call_user_func('captchapack_gen_' . $type, $opts);
  }

  // Insert to database
  $arr_captcha['hash'] = sha1($arr_captcha['challenge']);
  $arr_captcha['hash_raw'] = sha1($arr_captcha['challenge'], true);
  captchapack_dbinsert($arr_captcha);

  // Display it
  $captchapack_classes = ' captchapack-captcha-' . $mybb->settings['captchapack_type'];
  $captchapack_challenge = $arr_captcha['challenge'];
  $captchapack_hash = $arr_captcha['hash'];

  eval("\$captchapack = \"" . $templates->get("captchapack_captcha")."\";");
}

/**
 * Validation callback function.
 */
function captchapack_validate($reg) {
  global $mybb, $db, $lang;

  // Quit if it's not enabled
  if (!$mybb->settings['captchapack_enabled'])
    return;

  // Quit if the hash field is gone
  if (empty($mybb->input['captchapack-hash'])) {
    $reg->set_error('Hash of the CAPTCHA not found.');
    return;
  }

  // Quit if hash in invalid
  if (!preg_match('/^[0-9a-f]{40}$/', $mybb->input['captchapack-hash'])) {
    $reg->set_error('Hash of the CAPTCHA invalid.');
    return;
  }

  // Validate
  $hash = $mybb->input['captchapack-hash'];

  if (!empty($mybb->input['captchapack-answer'])) {
    $answer = trim($mybb->input['captchapack-answer']);

    // Filter out answers that don't follow the correct format to save one
    // database query. Note this also means changing the CAPTCHA length
    // invalidates existing CAPTCHAs.
    $num = captchapack_gets_num('num', 5);
    if (!preg_match("/^\w{{$num}}$/", $answer))
      $reg->set_error('The CAPTCHA code you entered looks incorrect.');
    elseif (!captchapack_dbvalidate($hash, $answer))
      $reg->set_error('The CAPTCHA code you entered is incorrect.');
  }
  else {
    $reg->set_error('No valid answer for CAPTCHA.');
  };

  // Drop all entries with the hash
  captchapack_dbdrop($hash);
}

/**
 * Generate an ASCII art CAPTCHA.
 *
 * @return An associative array of CAPTCHA, with <code>challenge</code>
 *         member set to a string of the challenge, <code>answer</code>
 *         set to the answer.
 */
function captchapack_gen_asciiart($opts = NULL) {
  // ==== Determine options ====
  /// Default options.
  $opts_def = array(
    'num' => 5,
    'data' => array(),
  );
  if ($opts)
    $opts = array_merge($opts_def, $opts);
  else
    $opts = $opts_def;

  // ==== Generate the CAPTCHA ====
  $captcha = array(
    'challenge' => array(),
    'answer'    => '',
  );
  $symbols = $opts['data'];
  if (!$symbols)
    return $captcha;

  for ($i = 0; $i < $opts['num']; ++$i) {
    $ans = array_rand($symbols);
    $captcha['answer'] .= $ans;
    // $cur_clng = $symbols[$ans][array_rand($symbols[$ans])];
    $cur_clng = $symbols[$ans];
    foreach ($cur_clng as $key => $val)
      $captcha['challenge'][$key] .= $val;
  }

  // Convert HTML entities
  $cvtable = get_html_translation_table(HTML_ENTITIES);
  $cvtable[' '] = '&nbsp;';
  foreach ($captcha['challenge'] as &$line)
    $line = strtr($line, $cvtable);

  $captcha['challenge'] = implode($captcha['challenge'], '<br />');

  return $captcha;
}

/**
 * Generate a CSS CAPTCHA.
 *
 * @return An associative array of CAPTCHA, with <code>challenge</code>
 *         member set to a string of the challenge, <code>answer</code>
 *         set to the answer.
 */
function captchapack_gen_css($opts) {
  // ==== Determine options ====
  /// Default options.
  $opts_def = array(
    'num'     => 8,
    'chars'   => array_merge(range('a', 'z'), range('0', '9')),
  );
  if ($opts)
    $opts = array_merge($opts_def, $opts);
  else
    $opts = $opts_def;

  // ==== Generate the CAPTCHA ====
  $captcha = array(
    'challenge' => '',
    'answer'    => '',
  );

  $symbols = $opts['chars'];
  if (!$symbols)
    return $captcha;
  $ans = '';
  $ans_prev = '';
  for ($i = 0; $i < $opts['num']; ++$i) {
    $ans_prev = $ans;
    $ans = $symbols[array_rand($symbols)];
    $captcha['answer'] .= $ans;
    $c = '';
    if ($i % 2)
      $c = (mt_rand(0, 1) ?
          "<div class='captchapack-css-l'>$ans_prev</div><div class='captchapack-css-r'>$ans</div>":
          "<div class='captchapack-css-r'>$ans</div><div class='captchapack-css-l'>$ans_prev</div>"
        );
    elseif ($i == $opts['num'] - 1)
      $c = "<div class='captchapack-css-l'>$ans</div>";
    if ($c)
      $captcha['challenge'] .= "<div class='captchapack-css-wrap'>$c</div>";
  }

  return $captcha;
}

/**
 * Generate a route CAPTCHA.
 *
 * @return An associative array of CAPTCHA, with <code>challenge</code>
 *         member set to a string of the challenge, <code>answer</code>
 *         set to the answer.
 */
function captchapack_gen_route($opts) {
  // ==== Determine options ====
  /// Default options.
  $opts_def = array(
    'num'         => 8,
    'tablesize'   => 5,
    'chars'       => array_merge(range('a', 'z'), range('0', '9')),
    'height'      => 15,
    'width'       => 15,
  );

  if ($opts)
    $opts = array_merge($opts_def, $opts);
  else
    $opts = $opts_def;

  // ==== Generate the CAPTCHA ====
  $captcha = array(
    'challenge' => '',
    'answer'    => '',
  );

  // ===== Initialize table =====
  $symbols = $opts['chars'];
  if (!$symbols)
    return $captcha;

  $sz = $opts['tablesize'];
  $table = array();
  for ($i = 0; $i < $sz; ++$i) {
    $table[$i] = array();
    for ($j = 0; $j < $sz; ++$j)
      $table[$i][$j] = 0;
  }

  // ===== Fill table =====
  $elements = array();
  $pos = array(0, 0);
  $pos_last = array(0, 0);
  for ($i = 0; $i < $opts['num']; ++$i) {
    $ans = $symbols[array_rand($symbols)];
    if ($i) {
      $ppos = array();
      foreach (array(-1, 0, 1) as $ofx)
        foreach (array(-1, 0, 1) as $ofy) {
          // Avoid going backward
          if ($ofx + $ofy < 0)
            continue;
          $tgtx = $pos_last[0] + $ofx;
          $tgty = $pos_last[1] + $ofy;
          if ($tgtx >= 0 && $tgtx < $sz
              && $tgty >= 0 && $tgty < $sz
              && !$table[$tgtx][$tgty])
            $ppos[] = array($tgtx, $tgty);
        }
      // If there's no available place, quit with an empty CAPTCHA
      if (!$ppos)
        return $captcha;
      $pos = $ppos[array_rand($ppos)];
    }
    $ans = $symbols[array_rand($symbols)];
    $captcha['answer'] .= $ans;
    $table[$pos[0]][$pos[1]] = 1;

    // Form the element
    $left = $opts['width'] * $pos[0] * 2;
    $top = $opts['height'] * $pos[1] * 2;
    $elements[] = "<div style='position: absolute; left: {$left}px; top: {$top}px;'>{$ans}</div>";

    // Form the direction indicator
    if (!$i)
      continue;

    $sign = '';
    $ofx = $pos[0] - $pos_last[0];
    $ofy = $pos[1] - $pos_last[1];
    if ($ofx > 0) {
      if ($ofy > 0)       $sign = '\\';
      elseif (0 == $ofy)  $sign = '-';
      else                $sign = '/';
    }
    else if (0 == $ofx) {
      if ($ofy > 0)       $sign = '|';
      elseif (0 == $ofy)  $sign = '.';
      else                $sign = '|';
    }
    else {
      if ($ofy > 0)       $sign = '/';
      elseif (0 == $ofy)  $sign = '-';
      else                $sign = '\\';
    }
    $left = $opts['width'] * ($pos[0] * 2 - $ofx);
    $top = $opts['height'] * ($pos[1] * 2 - $ofy);
    $elements[] = "<div style='position: absolute; left: {$left}px; top: {$top}px;'>{$sign}</div>";

    $pos_last = $pos;
  }
  shuffle($elements);
  $captcha['challenge'] = implode($elements);

  return $captcha;
}

