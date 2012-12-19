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
$l['captchapack_error_no_hash']       = '您没有发送验证码的hash。';
$l['captchapack_error_no_ans']        = '您没有输入验证码。';
$l['captchapack_error_invalid_hash']  = '您发送的验证码hash不正确。';
$l['captchapack_error_invalid_fmt']   = '您的验证码回答格式不正确。';
$l['captchapack_error_invalid_ans']   = '您的验证码回答不正确。';
$l['captchapack_error_too_fast']      = '您填表太快了！';

// ASCII art CAPTCHA
$l['captchapack_asciiart_title']      = 'ASCII art 验证码';
$l['captchapack_asciiart_desc']       = '请在下面文本框内输入右边用ASCII art表示的文字。这个步骤用于防止自动注册。';

// CSS CAPTCHA
$l['captchapack_css_title']           = 'CSS 验证码';
$l['captchapack_css_desc']            = '请在下面文本框内输入右边显示的文字。这个步骤用于防止自动注册。';

// Route CAPTCHA
$l['captchapack_route_title']         = 'Route 验证码';
$l['captchapack_route_desc']          = '请在下面文本框内输入右边显示的文字（按照折线的方向，从左上角开始）。这个步骤用于防止自动注册。';

// Unrelated word CAPTCHA
$l['captchapack_unrelatedword_title'] = '不相关单词验证码';
$l['captchapack_unrelatedword_desc']  = '请在下面文本框内输入右边的单词中不相关的一个。这个步骤用于防止自动注册。';

// Replacement CAPTCHA
$l['captchapack_replacement_title']   = '字符替换验证码';
$l['captchapack_replacement_desc']    = '请按照右边显示的规则替换右面字符串中的字符，并将结果输入到下面文本框中。这个步骤用于防止自动注册。';

// Math CAPTCHA
$l['captchapack_math_title']          = '算数验证码';
$l['captchapack_math_desc']           = '请将右面表达式的结果（用阿拉伯数字表示）输入到下面的文本框中。这个步骤用于防止自动注册。';
