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

// For captchapack_gets_num()
require_once MYBB_ROOT . 'inc/plugins/captchapack.php';

function task_captchapack($task) {
  global $db;

  // Delete old captcha entries, those older than one hour
  $cut = TIME_NOW - 60 * 60 * captchapack_gets_num('cleanupinterval', 1);
  $db->delete_query("captcha_captchapack", "dateline < '{$cut}'");
}
