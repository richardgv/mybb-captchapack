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
if (!defined('IN_MYBB'))
  die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");

// Error messages
$l['captchapack_error_no_hash']       = 'Hash of the CAPTCHA not found.';
$l['captchapack_error_no_ans']        = 'No answer for CAPTCHA.';
$l['captchapack_error_invalid_hash']  = 'Hash of the CAPTCHA invalid.';
$l['captchapack_error_invalid_fmt']   = 'The CAPTCHA code you entered looks incorrect.';
$l['captchapack_error_invalid_ans']   = 'The CAPTCHA code you entered is incorrect.';
$l['captchapack_error_too_fast']      = 'You filled the form too fast!';

// ASCII art CAPTCHA
$l['captchapack_asciiart_title']      = 'ASCII art CAPTCHA';
$l['captchapack_asciiart_desc']       = 'Please enter the text represented in ASCII art into the text box below it. This process is used to prevent automated signups.';

// CSS CAPTCHA
$l['captchapack_css_title']           = 'CSS CAPTCHA';
$l['captchapack_css_desc']            = 'Please enter the text on the right side into the text box below it. This process is used to prevent automated signups.';

// Route CAPTCHA
$l['captchapack_route_title']         = 'Route CAPTCHA';
$l['captchapack_route_desc']          = 'Please enter the text in the graph (follow the lines from the top-left corner) into the text box below it. This process is used to prevent automated signups.';

// Unrelated word CAPTCHA
$l['captchapack_unrelatedword_title'] = 'Unrelated word CAPTCHA';
$l['captchapack_unrelatedword_desc']  = 'Please enter the unrelated word in the group of words into the text box below it. This process is used to prevent automated signups.';

// Replacement CAPTCHA
$l['captchapack_replacement_title'] = 'Replacement CAPTCHA';
$l['captchapack_replacement_desc']  = 'Please replace the characters in the string on the right side according to the rules below, and enter the result into the text box below it. This process is used to prevent automated signups.';

