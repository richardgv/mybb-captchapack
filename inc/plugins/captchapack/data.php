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

/**
 * Return data for ASCII art CAPTCHA.
 *
 * Code from Drupal CAPTCHA Pack module.
 */
function captchapack_gen_asciiart_data($style) {
  $font = array();

  switch ($style) {
  case 'alphabet':

    // Font definition based on figlet font "alphabet" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 7;
    // $font['name'] = 'alphabet';
    // $font['comment'] = 'Alphabet by Wendell Hicken 11/93 (whicken@parasoft.com)Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed6    - height of a character5    - height of a character, not including descenders20   - max line length (excluding comment lines) + a fudge factor15   - default smushmode for this font (like "-m 15" on command line)12   - number of comment lines';
    $font['a'] = array(
      '    ',
      '    ',
      ' aa ',
      'a a ',
      'aaa ',
      '    ',
      '    ',
    );
    $font['b'] = array(
      'b    ',
      'b    ',
      'bbb  ',
      'b  b ',
      'bbb  ',
      '     ',
      '     ',
    );
    $font['c'] = array(
      '     ',
      '     ',
      ' ccc ',
      'c    ',
      ' ccc ',
      '     ',
      '     ',
    );
    $font['d'] = array(
      '   d ',
      '   d ',
      ' ddd ',
      'd  d ',
      ' ddd ',
      '     ',
      '     ',
    );
    $font['e'] = array(
      '    ',
      '    ',
      'eee ',
      'e e ',
      'ee  ',
      '    ',
      '    ',
    );
    $font['f'] = array(
      ' ff ',
      ' f  ',
      'fff ',
      ' f  ',
      ' f  ',
      '    ',
      '    ',
    );
    $font['g'] = array(
      '    ',
      '    ',
      'ggg ',
      'g g ',
      'ggg ',
      '  g ',
      'ggg ',
    );
    $font['h'] = array(
      'h    ',
      'h    ',
      'hhh  ',
      'h  h ',
      'h  h ',
      '     ',
      '     ',
    );
    $font['i'] = array(
      '   ',
      'ii ',
      '   ',
      'ii ',
      'ii ',
      '   ',
      '   ',
    );
    $font['j'] = array(
      '     ',
      '   j ',
      '     ',
      '   j ',
      '   j ',
      'j  j ',
      ' jj  ',
    );
    $font['k'] = array(
      'k    ',
      'k k  ',
      'kk   ',
      'k k  ',
      'k  k ',
      '     ',
      '     ',
    );
    $font['l'] = array(
      'l ',
      'l ',
      'l ',
      'l ',
      'l ',
      '  ',
      '  ',
    );
    $font['m'] = array(
      '      ',
      '      ',
      'mmmm  ',
      'm m m ',
      'm m m ',
      '      ',
      '      ',
    );
    $font['n'] = array(
      '     ',
      '     ',
      'nnn  ',
      'n  n ',
      'n  n ',
      '     ',
      '     ',
    );
    $font['o'] = array(
      '    ',
      '    ',
      'ooo ',
      'o o ',
      'ooo ',
      '    ',
      '    ',
    );
    $font['p'] = array(
      '     ',
      '     ',
      'ppp  ',
      'p  p ',
      'ppp  ',
      'p    ',
      'p    ',
    );
    $font['q'] = array(
      '      ',
      '      ',
      ' qqq  ',
      'q  q  ',
      ' qqq  ',
      '   q  ',
      '   qq ',
    );
    $font['r'] = array(
      '    ',
      '    ',
      'rrr ',
      'r   ',
      'r   ',
      '    ',
      '    ',
    );
    $font['s'] = array(
      '    ',
      '    ',
      ' ss ',
      ' s  ',
      'ss  ',
      '    ',
      '    ',
    );
    $font['t'] = array(
      ' t  ',
      ' t  ',
      'ttt ',
      ' t  ',
      ' tt ',
      '    ',
      '    ',
    );
    $font['u'] = array(
      '     ',
      '     ',
      'u  u ',
      'u  u ',
      ' uuu ',
      '     ',
      '     ',
    );
    $font['v'] = array(
      '    ',
      '    ',
      'v v ',
      'v v ',
      ' v  ',
      '    ',
      '    ',
    );
    $font['w'] = array(
      '      ',
      '      ',
      'w   w ',
      'w w w ',
      ' w w  ',
      '      ',
      '      ',
    );
    $font['x'] = array(
      '    ',
      '    ',
      'x x ',
      ' x  ',
      'x x ',
      '    ',
      '    ',
    );
    $font['y'] = array(
      '     ',
      '     ',
      'y  y ',
      'y  y ',
      ' yyy ',
      '   y ',
      'yyy  ',
    );
    $font['z'] = array(
      '    ',
      '    ',
      'zz  ',
      ' z  ',
      ' zz ',
      '    ',
      '    ',
    );
    $font['A'] = array(
      ' AA  ',
      'A  A ',
      'AAAA ',
      'A  A ',
      'A  A ',
      '     ',
      '     ',
    );
    $font['B'] = array(
      'BBBB  ',
      'B   B ',
      'BBBB  ',
      'B   B ',
      'BBBB  ',
      '      ',
      '      ',
    );
    $font['C'] = array(
      ' CCC ',
      'C    ',
      'C    ',
      'C    ',
      ' CCC ',
      '     ',
      '     ',
    );
    $font['D'] = array(
      'DDD  ',
      'D  D ',
      'D  D ',
      'D  D ',
      'DDD  ',
      '     ',
      '     ',
    );
    $font['E'] = array(
      'EEEE ',
      'E    ',
      'EEE  ',
      'E    ',
      'EEEE ',
      '     ',
      '     ',
    );
    $font['F'] = array(
      'FFFF ',
      'F    ',
      'FFF  ',
      'F    ',
      'F    ',
      '     ',
      '     ',
    );
    $font['G'] = array(
      ' GGG  ',
      'G     ',
      'G  GG ',
      'G   G ',
      ' GGG  ',
      '      ',
      '      ',
    );
    $font['H'] = array(
      'H  H ',
      'H  H ',
      'HHHH ',
      'H  H ',
      'H  H ',
      '     ',
      '     ',
    );
    $font['I'] = array(
      'III ',
      ' I  ',
      ' I  ',
      ' I  ',
      'III ',
      '    ',
      '    ',
    );
    $font['J'] = array(
      '    J ',
      '    J ',
      '    J ',
      'J   J ',
      ' JJJ  ',
      '      ',
      '      ',
    );
    $font['K'] = array(
      'K  K ',
      'K K  ',
      'KK   ',
      'K K  ',
      'K  K ',
      '     ',
      '     ',
    );
    $font['L'] = array(
      'L    ',
      'L    ',
      'L    ',
      'L    ',
      'LLLL ',
      '     ',
      '     ',
    );
    $font['M'] = array(
      'M   M ',
      'MM MM ',
      'M M M ',
      'M   M ',
      'M   M ',
      '      ',
      '      ',
    );
    $font['N'] = array(
      'N   N ',
      'NN  N ',
      'N N N ',
      'N  NN ',
      'N   N ',
      '      ',
      '      ',
    );
    $font['O'] = array(
      ' OOO  ',
      'O   O ',
      'O   O ',
      'O   O ',
      ' OOO  ',
      '      ',
      '      ',
    );
    $font['P'] = array(
      'PPPP  ',
      'P   P ',
      'PPPP  ',
      'P     ',
      'P     ',
      '      ',
      '      ',
    );
    $font['Q'] = array(
      ' QQQ   ',
      'Q   Q  ',
      'Q   Q  ',
      'Q  QQ  ',
      ' QQQQ  ',
      '     Q ',
      '       ',
    );
    $font['R'] = array(
      'RRRR  ',
      'R   R ',
      'RRRR  ',
      'R R   ',
      'R  RR ',
      '      ',
      '      ',
    );
    $font['S'] = array(
      ' SSS  ',
      'S     ',
      ' SSS  ',
      '    S ',
      'SSSS  ',
      '      ',
      '      ',
    );
    $font['T'] = array(
      'TTTTTT ',
      '  TT   ',
      '  TT   ',
      '  TT   ',
      '  TT   ',
      '       ',
      '       ',
    );
    $font['U'] = array(
      'U   U ',
      'U   U ',
      'U   U ',
      'U   U ',
      ' UUU  ',
      '      ',
      '      ',
    );
    $font['V'] = array(
      'V     V ',
      'V     V ',
      ' V   V  ',
      '  V V   ',
      '   V    ',
      '        ',
      '        ',
    );
    $font['W'] = array(
      'W     W ',
      'W     W ',
      'W  W  W ',
      ' W W W  ',
      '  W W   ',
      '        ',
      '        ',
    );
    $font['X'] = array(
      'X   X ',
      ' X X  ',
      '  X   ',
      ' X X  ',
      'X   X ',
      '      ',
      '      ',
    );
    $font['Y'] = array(
      'Y   Y ',
      ' Y Y  ',
      '  Y   ',
      '  Y   ',
      '  Y   ',
      '      ',
      '      ',
    );
    $font['Z'] = array(
      'ZZZZZ ',
      '   Z  ',
      '  Z   ',
      ' Z    ',
      'ZZZZZ ',
      '      ',
      '      ',
    );
    $font['0'] = array(
      ' 000  ',
      '0  00 ',
      '0 0 0 ',
      '00  0 ',
      ' 000  ',
      '      ',
      '      ',
    );
    $font['1'] = array(
      ' 11  ',
      '111  ',
      ' 11  ',
      ' 11  ',
      '11l1 ',
      '     ',
      '     ',
    );
    $font['2'] = array(
      ' 22  ',
      '2  2 ',
      '  2  ',
      ' 2   ',
      '2222 ',
      '     ',
      '     ',
    );
    $font['3'] = array(
      '333  ',
      '   3 ',
      ' 33  ',
      '   3 ',
      '333  ',
      '     ',
      '     ',
    );
    $font['4'] = array(
      '4  4 ',
      '4  4 ',
      '4444 ',
      '   4 ',
      '   4 ',
      '     ',
      '     ',
    );
    $font['5'] = array(
      '5555 ',
      '5    ',
      '555  ',
      '   5 ',
      '555  ',
      '     ',
      '     ',
    );
    $font['6'] = array(
      '  6   ',
      ' 6    ',
      '6666  ',
      '6   6 ',
      ' 666  ',
      '      ',
      '      ',
    );
    $font['7'] = array(
      '77777 ',
      '   7  ',
      '  7   ',
      '  7   ',
      '  7   ',
      '      ',
      '      ',
    );
    $font['8'] = array(
      ' 888  ',
      '8   8 ',
      ' 888  ',
      '8   8 ',
      ' 888  ',
      '      ',
      '      ',
    );
    $font['9'] = array(
      ' 9999 ',
      '9   9 ',
      ' 9999 ',
      '   9  ',
      '  9   ',
      '      ',
      '      ',
    );
  
    break;
  case 'big':

    // Font definition based on figlet font "big" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 8;
    // $font['name'] = 'big';
    // $font['comment'] = 'Big by Glenn Chappell 4/93 -- based on StandardIncludes ISO Latin-1Greek characters by Bruce Jakeway <pbjakeway@neumann.uwaterloo.ca>figlet release 2.2 -- November 1996Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '| \'_ \\ ',
      '| |_) |',
      '|_.__/ ',
      '       ',
      '       ',
    );
    $font['c'] = array(
      '      ',
      '      ',
      '  ___ ',
      ' / __|',
      '| (__ ',
      ' \\___|',
      '      ',
      '      ',
    );
    $font['d'] = array(
      '     _ ',
      '    | |',
      '  __| |',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['e'] = array(
      '      ',
      '      ',
      '  ___ ',
      ' / _ \\',
      '|  __/',
      ' \\___|',
      '      ',
      '      ',
    );
    $font['f'] = array(
      '  __ ',
      ' / _|',
      '| |_ ',
      '|  _|',
      '| |  ',
      '|_|  ',
      '     ',
      '     ',
    );
    $font['g'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '  __/ |',
      ' |___/ ',
    );
    $font['h'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
      '       ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      ' _ ',
      '| |',
      '| |',
      '|_|',
      '   ',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '   _ ',
      '  | |',
      '  | |',
      '  | |',
      ' _/ |',
      '|__/ ',
    );
    $font['k'] = array(
      ' _    ',
      '| |   ',
      '| | __',
      '| |/ /',
      '|   < ',
      '|_|\\_\\',
      '      ',
      '      ',
    );
    $font['l'] = array(
      ' _ ',
      '| |',
      '| |',
      '| |',
      '| |',
      '|_|',
      '   ',
      '   ',
    );
    $font['m'] = array(
      '           ',
      '           ',
      ' _ __ ___  ',
      '| \'_ ` _ \\ ',
      '| | | | | |',
      '|_| |_| |_|',
      '           ',
      '           ',
    );
    $font['n'] = array(
      '       ',
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '       ',
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| |_) |',
      '| .__/ ',
      '| |    ',
      '|_|    ',
    );
    $font['q'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '    | |',
      '    |_|',
    );
    $font['r'] = array(
      '      ',
      '      ',
      ' _ __ ',
      '| \'__|',
      '| |   ',
      '|_|   ',
      '      ',
      '      ',
    );
    $font['s'] = array(
      '     ',
      '     ',
      ' ___ ',
      '/ __|',
      '\\__ \\',
      '|___/',
      '     ',
      '     ',
    );
    $font['t'] = array(
      ' _   ',
      '| |  ',
      '| |_ ',
      '| __|',
      '| |_ ',
      ' \\__|',
      '     ',
      '     ',
    );
    $font['u'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '       ',
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
      '       ',
    );
    $font['w'] = array(
      '          ',
      '          ',
      '__      __',
      '\\ \\ /\\ / /',
      ' \\ V  V / ',
      '  \\_/\\_/  ',
      '          ',
      '          ',
    );
    $font['x'] = array(
      '      ',
      '      ',
      '__  __',
      '\\ \\/ /',
      ' >  < ',
      '/_/\\_\\',
      '      ',
      '      ',
    );
    $font['y'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__, |',
      '  __/ |',
      ' |___/ ',
    );
    $font['z'] = array(
      '     ',
      '     ',
      ' ____',
      '|_  /',
      ' / / ',
      '/___|',
      '     ',
      '     ',
    );
    $font['A'] = array(
      '          ',
      '    /\\    ',
      '   /  \\   ',
      '  / /\\ \\  ',
      ' / ____ \\ ',
      '/_/    \\_\\',
      '          ',
      '          ',
    );
    $font['B'] = array(
      ' ____  ',
      '|  _ \\ ',
      '| |_) |',
      '|  _ < ',
      '| |_) |',
      '|____/ ',
      '       ',
      '       ',
    );
    $font['C'] = array(
      '  _____ ',
      ' / ____|',
      '| |     ',
      '| |     ',
      '| |____ ',
      ' \\_____|',
      '        ',
      '        ',
    );
    $font['D'] = array(
      ' _____  ',
      '|  __ \\ ',
      '| |  | |',
      '| |  | |',
      '| |__| |',
      '|_____/ ',
      '        ',
      '        ',
    );
    $font['E'] = array(
      ' ______ ',
      '|  ____|',
      '| |__   ',
      '|  __|  ',
      '| |____ ',
      '|______|',
      '        ',
      '        ',
    );
    $font['F'] = array(
      ' ______ ',
      '|  ____|',
      '| |__   ',
      '|  __|  ',
      '| |     ',
      '|_|     ',
      '        ',
      '        ',
    );
    $font['G'] = array(
      '  _____ ',
      ' / ____|',
      '| |  __ ',
      '| | |_ |',
      '| |__| |',
      ' \\_____|',
      '        ',
      '        ',
    );
    $font['H'] = array(
      ' _    _ ',
      '| |  | |',
      '| |__| |',
      '|  __  |',
      '| |  | |',
      '|_|  |_|',
      '        ',
      '        ',
    );
    $font['I'] = array(
      ' _____ ',
      '|_   _|',
      '  | |  ',
      '  | |  ',
      ' _| |_ ',
      '|_____|',
      '       ',
      '       ',
    );
    $font['J'] = array(
      '      _ ',
      '     | |',
      '     | |',
      ' _   | |',
      '| |__| |',
      ' \\____/ ',
      '        ',
      '        ',
    );
    $font['K'] = array(
      ' _  __',
      '| |/ /',
      '| \' / ',
      '|  <  ',
      '| . \\ ',
      '|_|\\_\\',
      '      ',
      '      ',
    );
    $font['L'] = array(
      ' _      ',
      '| |     ',
      '| |     ',
      '| |     ',
      '| |____ ',
      '|______|',
      '        ',
      '        ',
    );
    $font['M'] = array(
      ' __  __ ',
      '|  \\/  |',
      '| \\  / |',
      '| |\\/| |',
      '| |  | |',
      '|_|  |_|',
      '        ',
      '        ',
    );
    $font['N'] = array(
      ' _   _ ',
      '| \\ | |',
      '|  \\| |',
      '| . ` |',
      '| |\\  |',
      '|_| \\_|',
      '       ',
      '       ',
    );
    $font['O'] = array(
      '  ____  ',
      ' / __ \\ ',
      '| |  | |',
      '| |  | |',
      '| |__| |',
      ' \\____/ ',
      '        ',
      '        ',
    );
    $font['P'] = array(
      ' _____  ',
      '|  __ \\ ',
      '| |__) |',
      '|  ___/ ',
      '| |     ',
      '|_|     ',
      '        ',
      '        ',
    );
    $font['Q'] = array(
      '  ____  ',
      ' / __ \\ ',
      '| |  | |',
      '| |  | |',
      '| |__| |',
      ' \\___\\_\\',
      '        ',
      '        ',
    );
    $font['R'] = array(
      ' _____  ',
      '|  __ \\ ',
      '| |__) |',
      '|  _  / ',
      '| | \\ \\ ',
      '|_|  \\_\\',
      '        ',
      '        ',
    );
    $font['S'] = array(
      '  _____ ',
      ' / ____|',
      '| (___  ',
      ' \\___ \\ ',
      ' ____) |',
      '|_____/ ',
      '        ',
      '        ',
    );
    $font['T'] = array(
      ' _______ ',
      '|__   __|',
      '   | |   ',
      '   | |   ',
      '   | |   ',
      '   |_|   ',
      '         ',
      '         ',
    );
    $font['U'] = array(
      ' _    _ ',
      '| |  | |',
      '| |  | |',
      '| |  | |',
      '| |__| |',
      ' \\____/ ',
      '        ',
      '        ',
    );
    $font['V'] = array(
      '__      __',
      '\\ \\    / /',
      ' \\ \\  / / ',
      '  \\ \\/ /  ',
      '   \\  /   ',
      '    \\/    ',
      '          ',
      '          ',
    );
    $font['W'] = array(
      '__          __',
      '\\ \\        / /',
      ' \\ \\  /\\  / / ',
      '  \\ \\/  \\/ /  ',
      '   \\  /\\  /   ',
      '    \\/  \\/    ',
      '              ',
      '              ',
    );
    $font['X'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  > <  ',
      ' / . \\ ',
      '/_/ \\_\\',
      '       ',
      '       ',
    );
    $font['Y'] = array(
      '__     __',
      '\\ \\   / /',
      ' \\ \\_/ / ',
      '  \\   /  ',
      '   | |   ',
      '   |_|   ',
      '         ',
      '         ',
    );
    $font['Z'] = array(
      ' ______',
      '|___  /',
      '   / / ',
      '  / /  ',
      ' / /__ ',
      '/_____|',
      '       ',
      '       ',
    );
    $font['0'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| | | |',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['1'] = array(
      ' __ ',
      '/_ |',
      ' | |',
      ' | |',
      ' | |',
      ' |_|',
      '    ',
      '    ',
    );
    $font['2'] = array(
      ' ___  ',
      '|__ \\ ',
      '   ) |',
      '  / / ',
      ' / /_ ',
      '|____|',
      '      ',
      '      ',
    );
    $font['3'] = array(
      ' ____  ',
      '|___ \\ ',
      '  __) |',
      ' |__ < ',
      ' ___) |',
      '|____/ ',
      '       ',
      '       ',
    );
    $font['4'] = array(
      ' _  _   ',
      '| || |  ',
      '| || |_ ',
      '|__   _|',
      '   | |  ',
      '   |_|  ',
      '        ',
      '        ',
    );
    $font['5'] = array(
      ' _____ ',
      '| ____|',
      '| |__  ',
      '|___ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
      '       ',
    );
    $font['6'] = array(
      '   __  ',
      '  / /  ',
      ' / /_  ',
      '| \'_ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['7'] = array(
      ' ______ ',
      '|____  |',
      '    / / ',
      '   / /  ',
      '  / /   ',
      ' /_/    ',
      '        ',
      '        ',
    );
    $font['8'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' > _ < ',
      '| (_) |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['9'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\__, |',
      '   / / ',
      '  /_/  ',
      '       ',
      '       ',
    );
  
    break;
  case 'colossal':

    // Font definition based on figlet font "colossal" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 11;
    // $font['name'] = 'colossal';
    // $font['comment'] = 'Colossal.flf (Jonathon - jon@mq.edu.au)8 June 1994Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed11   - height of a character8    - height of a character, not including descenders20   - max line length (excluding comment lines) + a fudge factor32   - default smushmode for this font13   - number of comment lines';
    $font['a'] = array(
      '         ',
      '         ',
      '         ',
      ' 8888b.  ',
      '    "88b ',
      '.d888888 ',
      '888  888 ',
      '"Y888888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['b'] = array(
      '888      ',
      '888      ',
      '888      ',
      '88888b.  ',
      '888 "88b ',
      '888  888 ',
      '888 d88P ',
      '88888P"  ',
      '         ',
      '         ',
      '         ',
    );
    $font['c'] = array(
      '         ',
      '         ',
      '         ',
      ' .d8888b ',
      'd88P"    ',
      '888      ',
      'Y88b.    ',
      ' "Y8888P ',
      '         ',
      '         ',
      '         ',
    );
    $font['d'] = array(
      '     888 ',
      '     888 ',
      '     888 ',
      ' .d88888 ',
      'd88" 888 ',
      '888  888 ',
      'Y88b 888 ',
      ' "Y88888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['e'] = array(
      '         ',
      '         ',
      '         ',
      ' .d88b.  ',
      'd8P  Y8b ',
      '88888888 ',
      'Y8b.     ',
      ' "Y8888  ',
      '         ',
      '         ',
      '         ',
    );
    $font['f'] = array(
      ' .d888 ',
      'd88P"  ',
      '888    ',
      '888888 ',
      '888    ',
      '888    ',
      '888    ',
      '888    ',
      '       ',
      '       ',
      '       ',
    );
    $font['g'] = array(
      '         ',
      '         ',
      '         ',
      ' .d88b.  ',
      'd88P"88b ',
      '888  888 ',
      'Y88b 888 ',
      ' "Y88888 ',
      '     888 ',
      'Y8b d88P ',
      ' "Y88P"  ',
    );
    $font['h'] = array(
      '888      ',
      '888      ',
      '888      ',
      '88888b.  ',
      '888 "88b ',
      '888  888 ',
      '888  888 ',
      '888  888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['i'] = array(
      'd8b ',
      'Y8P ',
      '    ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '    ',
      '    ',
      '    ',
    );
    $font['j'] = array(
      '   d8b ',
      '   Y8P ',
      '       ',
      '  8888 ',
      '  "888 ',
      '   888 ',
      '   888 ',
      '   888 ',
      '   888 ',
      '  d88P ',
      '888P"  ',
    );
    $font['k'] = array(
      '888      ',
      '888      ',
      '888      ',
      '888  888 ',
      '888 .88P ',
      '888888K  ',
      '888 "88b ',
      '888  888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['l'] = array(
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '888 ',
      '    ',
      '    ',
      '    ',
    );
    $font['m'] = array(
      '              ',
      '              ',
      '              ',
      '88888b.d88b.  ',
      '888 "888 "88b ',
      '888  888  888 ',
      '888  888  888 ',
      '888  888  888 ',
      '              ',
      '              ',
      '              ',
    );
    $font['n'] = array(
      '         ',
      '         ',
      '         ',
      '88888b.  ',
      '888 "88b ',
      '888  888 ',
      '888  888 ',
      '888  888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['o'] = array(
      '         ',
      '         ',
      '         ',
      ' .d88b.  ',
      'd88""88b ',
      '888  888 ',
      'Y88..88P ',
      ' "Y88P"  ',
      '         ',
      '         ',
      '         ',
    );
    $font['p'] = array(
      '         ',
      '         ',
      '         ',
      '88888b.  ',
      '888 "88b ',
      '888  888 ',
      '888 d88P ',
      '88888P"  ',
      '888      ',
      '888      ',
      '888      ',
    );
    $font['q'] = array(
      '         ',
      '         ',
      '         ',
      ' .d88888 ',
      'd88" 888 ',
      '888  888 ',
      'Y88b 888 ',
      ' "Y88888 ',
      '     888 ',
      '     888 ',
      '     888 ',
    );
    $font['r'] = array(
      '        ',
      '        ',
      '        ',
      '888d888 ',
      '888P"   ',
      '888     ',
      '888     ',
      '888     ',
      '        ',
      '        ',
      '        ',
    );
    $font['s'] = array(
      '         ',
      '         ',
      '         ',
      '.d8888b  ',
      '88K      ',
      '"Y8888b. ',
      '     X88 ',
      ' 88888P\' ',
      '         ',
      '         ',
      '         ',
    );
    $font['t'] = array(
      '888    ',
      '888    ',
      '888    ',
      '888888 ',
      '888    ',
      '888    ',
      'Y88b.  ',
      ' "Y888 ',
      '       ',
      '       ',
      '       ',
    );
    $font['u'] = array(
      '         ',
      '         ',
      '         ',
      '888  888 ',
      '888  888 ',
      '888  888 ',
      'Y88b 888 ',
      ' "Y88888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['v'] = array(
      '         ',
      '         ',
      '         ',
      '888  888 ',
      '888  888 ',
      'Y88  88P ',
      ' Y8bd8P  ',
      '  Y88P   ',
      '         ',
      '         ',
      '         ',
    );
    $font['w'] = array(
      '              ',
      '              ',
      '              ',
      '888  888  888 ',
      '888  888  888 ',
      '888  888  888 ',
      'Y88b 888 d88P ',
      ' "Y8888888P"  ',
      '              ',
      '              ',
      '              ',
    );
    $font['x'] = array(
      '         ',
      '         ',
      '         ',
      '888  888 ',
      '`Y8bd8P\' ',
      '  X88K   ',
      '.d8""8b. ',
      '888  888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['y'] = array(
      '         ',
      '         ',
      '         ',
      '888  888 ',
      '888  888 ',
      '888  888 ',
      'Y88b 888 ',
      ' "Y88888 ',
      '     888 ',
      'Y8b d88P ',
      ' "Y88P"  ',
    );
    $font['z'] = array(
      '         ',
      '         ',
      '         ',
      '88888888 ',
      '   d88P  ',
      '  d88P   ',
      ' d88P    ',
      '88888888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['A'] = array(
      '       d8888 ',
      '      d88888 ',
      '     d88P888 ',
      '    d88P 888 ',
      '   d88P  888 ',
      '  d88P   888 ',
      ' d8888888888 ',
      'd88P     888 ',
      '             ',
      '             ',
      '             ',
    );
    $font['B'] = array(
      '888888b.   ',
      '888  "88b  ',
      '888  .88P  ',
      '8888888K.  ',
      '888  "Y88b ',
      '888    888 ',
      '888   d88P ',
      '8888888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['C'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '888    888 ',
      '888        ',
      '888        ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['D'] = array(
      '8888888b.  ',
      '888  "Y88b ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '888  .d88P ',
      '8888888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['E'] = array(
      '8888888888 ',
      '888        ',
      '888        ',
      '8888888    ',
      '888        ',
      '888        ',
      '888        ',
      '8888888888 ',
      '           ',
      '           ',
      '           ',
    );
    $font['F'] = array(
      '8888888888 ',
      '888        ',
      '888        ',
      '8888888    ',
      '888        ',
      '888        ',
      '888        ',
      '888        ',
      '           ',
      '           ',
      '           ',
    );
    $font['G'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '888    888 ',
      '888        ',
      '888  88888 ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P88 ',
      '           ',
      '           ',
      '           ',
    );
    $font['H'] = array(
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '8888888888 ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '           ',
      '           ',
      '           ',
    );
    $font['I'] = array(
      '8888888 ',
      '  888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '8888888 ',
      '        ',
      '        ',
      '        ',
    );
    $font['J'] = array(
      '  888888 ',
      '    "88b ',
      '     888 ',
      '     888 ',
      '     888 ',
      '     888 ',
      '     88P ',
      '     888 ',
      '   .d88P ',
      ' .d88P"  ',
      '888P"    ',
    );
    $font['K'] = array(
      '888    d8P  ',
      '888   d8P   ',
      '888  d8P    ',
      '888d88K     ',
      '8888888b    ',
      '888  Y88b   ',
      '888   Y88b  ',
      '888    Y88b ',
      '            ',
      '            ',
      '            ',
    );
    $font['L'] = array(
      '888      ',
      '888      ',
      '888      ',
      '888      ',
      '888      ',
      '888      ',
      '888      ',
      '88888888 ',
      '         ',
      '         ',
      '         ',
    );
    $font['M'] = array(
      '888b     d888 ',
      '8888b   d8888 ',
      '88888b.d88888 ',
      '888Y88888P888 ',
      '888 Y888P 888 ',
      '888  Y8P  888 ',
      '888   "   888 ',
      '888       888 ',
      '              ',
      '              ',
      '              ',
    );
    $font['N'] = array(
      '888b    888 ',
      '8888b   888 ',
      '88888b  888 ',
      '888Y88b 888 ',
      '888 Y88b888 ',
      '888  Y88888 ',
      '888   Y8888 ',
      '888    Y888 ',
      '            ',
      '            ',
      '            ',
    );
    $font['O'] = array(
      ' .d88888b.  ',
      'd88P" "Y88b ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      'Y88b. .d88P ',
      ' "Y88888P"  ',
      '            ',
      '            ',
      '            ',
    );
    $font['P'] = array(
      '8888888b.  ',
      '888   Y88b ',
      '888    888 ',
      '888   d88P ',
      '8888888P"  ',
      '888        ',
      '888        ',
      '888        ',
      '           ',
      '           ',
      '           ',
    );
    $font['Q'] = array(
      ' .d88888b.  ',
      'd88P" "Y88b ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      '888 Y8b 888 ',
      'Y88b.Y8b88P ',
      ' "Y888888"  ',
      '       Y8b  ',
      '            ',
      '            ',
    );
    $font['R'] = array(
      '8888888b.  ',
      '888   Y88b ',
      '888    888 ',
      '888   d88P ',
      '8888888P"  ',
      '888 T88b   ',
      '888  T88b  ',
      '888   T88b ',
      '           ',
      '           ',
      '           ',
    );
    $font['S'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      'Y88b.      ',
      ' "Y888b.   ',
      '    "Y88b. ',
      '      "888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['T'] = array(
      '88888888888 ',
      '    888     ',
      '    888     ',
      '    888     ',
      '    888     ',
      '    888     ',
      '    888     ',
      '    888     ',
      '            ',
      '            ',
      '            ',
    );
    $font['U'] = array(
      '888     888 ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      '888     888 ',
      'Y88b. .d88P ',
      ' "Y88888P"  ',
      '            ',
      '            ',
      '            ',
    );
    $font['V'] = array(
      '888     888 ',
      '888     888 ',
      '888     888 ',
      'Y88b   d88P ',
      ' Y88b d88P  ',
      '  Y88o88P   ',
      '   Y888P    ',
      '    Y8P     ',
      '            ',
      '            ',
      '            ',
    );
    $font['W'] = array(
      '888       888 ',
      '888   o   888 ',
      '888  d8b  888 ',
      '888 d888b 888 ',
      '888d88888b888 ',
      '88888P Y88888 ',
      '8888P   Y8888 ',
      '888P     Y888 ',
      '              ',
      '              ',
      '              ',
    );
    $font['X'] = array(
      'Y88b   d88P ',
      ' Y88b d88P  ',
      '  Y88o88P   ',
      '   Y888P    ',
      '   d888b    ',
      '  d88888b   ',
      ' d88P Y88b  ',
      'd88P   Y88b ',
      '            ',
      '            ',
      '            ',
    );
    $font['Y'] = array(
      'Y88b   d88P ',
      ' Y88b d88P  ',
      '  Y88o88P   ',
      '   Y888P    ',
      '    888     ',
      '    888     ',
      '    888     ',
      '    888     ',
      '            ',
      '            ',
      '            ',
    );
    $font['Z'] = array(
      '8888888888P ',
      '      d88P  ',
      '     d88P   ',
      '    d88P    ',
      '   d88P     ',
      '  d88P      ',
      ' d88P       ',
      'd8888888888 ',
      '            ',
      '            ',
      '            ',
    );
    $font['0'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['1'] = array(
      ' d888   ',
      'd8888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '  888   ',
      '8888888 ',
      '        ',
      '        ',
      '        ',
    );
    $font['2'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '       888 ',
      '     .d88P ',
      ' .od888P"  ',
      'd88P"      ',
      '888"       ',
      '888888888  ',
      '           ',
      '           ',
      '           ',
    );
    $font['3'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '     .d88P ',
      '    8888"  ',
      '     "Y8b. ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['4'] = array(
      '    d8888  ',
      '   d8P888  ',
      '  d8P 888  ',
      ' d8P  888  ',
      'd88   888  ',
      '8888888888 ',
      '      888  ',
      '      888  ',
      '           ',
      '           ',
      '           ',
    );
    $font['5'] = array(
      '888888888  ',
      '888        ',
      '888        ',
      '8888888b.  ',
      '     "Y88b ',
      '       888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['6'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '888        ',
      '888d888b.  ',
      '888P "Y88b ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['7'] = array(
      '8888888888 ',
      '      d88P ',
      '     d88P  ',
      '    d88P   ',
      ' 88888888  ',
      '  d88P     ',
      ' d88P      ',
      'd88P       ',
      '           ',
      '           ',
      '           ',
    );
    $font['8'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      'Y88b. d88P ',
      ' "Y88888"  ',
      '.d8P""Y8b. ',
      '888    888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
    $font['9'] = array(
      ' .d8888b.  ',
      'd88P  Y88b ',
      '888    888 ',
      'Y88b. d888 ',
      ' "Y888P888 ',
      '       888 ',
      'Y88b  d88P ',
      ' "Y8888P"  ',
      '           ',
      '           ',
      '           ',
    );
  
    break;
  case 'doh':

    // Font definition based on figlet font "doh" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 25;
    // $font['name'] = 'doh';
    // $font['comment'] = 'doh.flf by Curtis Wanner (cwanner@acs.bu.edu)latest revision - 4/95';
    $font['a'] = array(
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '  aaaaaaaaaaaaa   ',
      '  a::::::::::::a  ',
      '  aaaaaaaaa:::::a ',
      '           a::::a ',
      '    aaaaaaa:::::a ',
      '  aa::::::::::::a ',
      ' a::::aaaa::::::a ',
      'a::::a    a:::::a ',
      'a::::a    a:::::a ',
      'a:::::aaaa::::::a ',
      ' a::::::::::aa:::a',
      '  aaaaaaaaaa  aaaa',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
    );
    $font['b'] = array(
      '                    ',
      'bbbbbbbb            ',
      'b::::::b            ',
      'b::::::b            ',
      'b::::::b            ',
      ' b:::::b            ',
      ' b:::::bbbbbbbbb    ',
      ' b::::::::::::::bb  ',
      ' b::::::::::::::::b ',
      ' b:::::bbbbb:::::::b',
      ' b:::::b    b::::::b',
      ' b:::::b     b:::::b',
      ' b:::::b     b:::::b',
      ' b:::::b     b:::::b',
      ' b:::::bbbbbb::::::b',
      ' b::::::::::::::::b ',
      ' b:::::::::::::::b  ',
      ' bbbbbbbbbbbbbbbb   ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['c'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '    cccccccccccccccc',
      '  cc:::::::::::::::c',
      ' c:::::::::::::::::c',
      'c:::::::cccccc:::::c',
      'c::::::c     ccccccc',
      'c:::::c             ',
      'c:::::c             ',
      'c::::::c     ccccccc',
      'c:::::::cccccc:::::c',
      ' c:::::::::::::::::c',
      '  cc:::::::::::::::c',
      '    cccccccccccccccc',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['d'] = array(
      '                    ',
      '            dddddddd',
      '            d::::::d',
      '            d::::::d',
      '            d::::::d',
      '            d:::::d ',
      '    ddddddddd:::::d ',
      '  dd::::::::::::::d ',
      ' d::::::::::::::::d ',
      'd:::::::ddddd:::::d ',
      'd::::::d    d:::::d ',
      'd:::::d     d:::::d ',
      'd:::::d     d:::::d ',
      'd:::::d     d:::::d ',
      'd::::::ddddd::::::dd',
      ' d:::::::::::::::::d',
      '  d:::::::::ddd::::d',
      '   ddddddddd   ddddd',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['e'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '    eeeeeeeeeeee    ',
      '  ee::::::::::::ee  ',
      ' e::::::eeeee:::::ee',
      'e::::::e     e:::::e',
      'e:::::::eeeee::::::e',
      'e:::::::::::::::::e ',
      'e::::::eeeeeeeeeee  ',
      'e:::::::e           ',
      'e::::::::e          ',
      ' e::::::::eeeeeeee  ',
      '  ee:::::::::::::e  ',
      '    eeeeeeeeeeeeee  ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['f'] = array(
      '                     ',
      '                     ',
      '   ffffffffffffffff  ',
      '  f::::::::::::::::f ',
      ' f::::::::::::::::::f',
      ' f::::::fffffff:::::f',
      ' f:::::f       ffffff',
      ' f:::::f             ',
      'f:::::::ffffff       ',
      'f::::::::::::f       ',
      'f::::::::::::f       ',
      'f:::::::ffffff       ',
      ' f:::::f             ',
      ' f:::::f             ',
      'f:::::::f            ',
      'f:::::::f            ',
      'f:::::::f            ',
      'fffffffff            ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['g'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '   ggggggggg   ggggg',
      '  g:::::::::ggg::::g',
      ' g:::::::::::::::::g',
      'g::::::ggggg::::::gg',
      'g:::::g     g:::::g ',
      'g:::::g     g:::::g ',
      'g:::::g     g:::::g ',
      'g::::::g    g:::::g ',
      'g:::::::ggggg:::::g ',
      ' g::::::::::::::::g ',
      '  gg::::::::::::::g ',
      '    gggggggg::::::g ',
      '            g:::::g ',
      'gggggg      g:::::g ',
      'g:::::gg   gg:::::g ',
      ' g::::::ggg:::::::g ',
      '  gg:::::::::::::g  ',
      '    ggg::::::ggg    ',
      '       gggggg       ',
    );
    $font['h'] = array(
      '                    ',
      '                    ',
      'hhhhhhh             ',
      'h:::::h             ',
      'h:::::h             ',
      'h:::::h             ',
      ' h::::h hhhhh       ',
      ' h::::hh:::::hhh    ',
      ' h::::::::::::::hh  ',
      ' h:::::::hhh::::::h ',
      ' h::::::h   h::::::h',
      ' h:::::h     h:::::h',
      ' h:::::h     h:::::h',
      ' h:::::h     h:::::h',
      ' h:::::h     h:::::h',
      ' h:::::h     h:::::h',
      ' h:::::h     h:::::h',
      ' hhhhhhh     hhhhhhh',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['i'] = array(
      '        ',
      '        ',
      '  iiii  ',
      ' i::::i ',
      '  iiii  ',
      '        ',
      'iiiiiii ',
      'i:::::i ',
      ' i::::i ',
      ' i::::i ',
      ' i::::i ',
      ' i::::i ',
      ' i::::i ',
      ' i::::i ',
      'i::::::i',
      'i::::::i',
      'i::::::i',
      'iiiiiiii',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
    );
    $font['j'] = array(
      '                 ',
      '                 ',
      '            jjjj ',
      '           j::::j',
      '            jjjj ',
      '                 ',
      '          jjjjjjj',
      '          j:::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      '           j::::j',
      ' jjjj      j::::j',
      'j::::jj   j:::::j',
      'j::::::jjj::::::j',
      ' jj::::::::::::j ',
      '   jjj::::::jjj  ',
      '      jjjjjj     ',
    );
    $font['k'] = array(
      '                   ',
      '                   ',
      'kkkkkkkk           ',
      'k::::::k           ',
      'k::::::k           ',
      'k::::::k           ',
      ' k:::::k    kkkkkkk',
      ' k:::::k   k:::::k ',
      ' k:::::k  k:::::k  ',
      ' k:::::k k:::::k   ',
      ' k::::::k:::::k    ',
      ' k:::::::::::k     ',
      ' k:::::::::::k     ',
      ' k::::::k:::::k    ',
      'k::::::k k:::::k   ',
      'k::::::k  k:::::k  ',
      'k::::::k   k:::::k ',
      'kkkkkkkk    kkkkkkk',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['l'] = array(
      '        ',
      '        ',
      'lllllll ',
      'l:::::l ',
      'l:::::l ',
      'l:::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      ' l::::l ',
      'l::::::l',
      'l::::::l',
      'l::::::l',
      'llllllll',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
      '        ',
    );
    $font['m'] = array(
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '   mmmmmmm    mmmmmmm   ',
      ' mm:::::::m  m:::::::mm ',
      'm::::::::::mm::::::::::m',
      'm::::::::::::::::::::::m',
      'm:::::mmm::::::mmm:::::m',
      'm::::m   m::::m   m::::m',
      'm::::m   m::::m   m::::m',
      'm::::m   m::::m   m::::m',
      'm::::m   m::::m   m::::m',
      'm::::m   m::::m   m::::m',
      'm::::m   m::::m   m::::m',
      'mmmmmm   mmmmmm   mmmmmm',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
    );
    $font['n'] = array(
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      'nnnn  nnnnnnnn    ',
      'n:::nn::::::::nn  ',
      'n::::::::::::::nn ',
      'nn:::::::::::::::n',
      '  n:::::nnnn:::::n',
      '  n::::n    n::::n',
      '  n::::n    n::::n',
      '  n::::n    n::::n',
      '  n::::n    n::::n',
      '  n::::n    n::::n',
      '  n::::n    n::::n',
      '  nnnnnn    nnnnnn',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
    );
    $font['o'] = array(
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '   ooooooooooo   ',
      ' oo:::::::::::oo ',
      'o:::::::::::::::o',
      'o:::::ooooo:::::o',
      'o::::o     o::::o',
      'o::::o     o::::o',
      'o::::o     o::::o',
      'o::::o     o::::o',
      'o:::::ooooo:::::o',
      'o:::::::::::::::o',
      ' oo:::::::::::oo ',
      '   ooooooooooo   ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
    );
    $font['p'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      'ppppp   ppppppppp   ',
      'p::::ppp:::::::::p  ',
      'p:::::::::::::::::p ',
      'pp::::::ppppp::::::p',
      ' p:::::p     p:::::p',
      ' p:::::p     p:::::p',
      ' p:::::p     p:::::p',
      ' p:::::p    p::::::p',
      ' p:::::ppppp:::::::p',
      ' p::::::::::::::::p ',
      ' p::::::::::::::pp  ',
      ' p::::::pppppppp    ',
      ' p:::::p            ',
      ' p:::::p            ',
      'p:::::::p           ',
      'p:::::::p           ',
      'p:::::::p           ',
      'ppppppppp           ',
      '                    ',
    );
    $font['q'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '   qqqqqqqqq   qqqqq',
      '  q:::::::::qqq::::q',
      ' q:::::::::::::::::q',
      'q::::::qqqqq::::::qq',
      'q:::::q     q:::::q ',
      'q:::::q     q:::::q ',
      'q:::::q     q:::::q ',
      'q::::::q    q:::::q ',
      'q:::::::qqqqq:::::q ',
      ' q::::::::::::::::q ',
      '  qq::::::::::::::q ',
      '    qqqqqqqq::::::q ',
      '            q:::::q ',
      '            q:::::q ',
      '           q:::::::q',
      '           q:::::::q',
      '           q:::::::q',
      '           qqqqqqqqq',
      '                    ',
    );
    $font['r'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      'rrrrr   rrrrrrrrr   ',
      'r::::rrr:::::::::r  ',
      'r:::::::::::::::::r ',
      'rr::::::rrrrr::::::r',
      ' r:::::r     r:::::r',
      ' r:::::r     rrrrrrr',
      ' r:::::r            ',
      ' r:::::r            ',
      ' r:::::r            ',
      ' r:::::r            ',
      ' r:::::r            ',
      ' rrrrrrr            ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['s'] = array(
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '    ssssssssss   ',
      '  ss::::::::::s  ',
      'ss:::::::::::::s ',
      's::::::ssss:::::s',
      ' s:::::s  ssssss ',
      '   s::::::s      ',
      '      s::::::s   ',
      'ssssss   s:::::s ',
      's:::::ssss::::::s',
      's::::::::::::::s ',
      ' s:::::::::::ss  ',
      '  sssssssssss    ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
    );
    $font['t'] = array(
      '                       ',
      '                       ',
      '         tttt          ',
      '      ttt:::t          ',
      '      t:::::t          ',
      '      t:::::t          ',
      'ttttttt:::::ttttttt    ',
      't:::::::::::::::::t    ',
      't:::::::::::::::::t    ',
      'tttttt:::::::tttttt    ',
      '      t:::::t          ',
      '      t:::::t          ',
      '      t:::::t          ',
      '      t:::::t    tttttt',
      '      t::::::tttt:::::t',
      '      tt::::::::::::::t',
      '        tt:::::::::::tt',
      '          ttttttttttt  ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
    );
    $font['u'] = array(
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      'uuuuuu    uuuuuu  ',
      'u::::u    u::::u  ',
      'u::::u    u::::u  ',
      'u::::u    u::::u  ',
      'u::::u    u::::u  ',
      'u::::u    u::::u  ',
      'u::::u    u::::u  ',
      'u:::::uuuu:::::u  ',
      'u:::::::::::::::uu',
      ' u:::::::::::::::u',
      '  uu::::::::uu:::u',
      '    uuuuuuuu  uuuu',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
    );
    $font['v'] = array(
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      'vvvvvvv           vvvvvvv',
      ' v:::::v         v:::::v ',
      '  v:::::v       v:::::v  ',
      '   v:::::v     v:::::v   ',
      '    v:::::v   v:::::v    ',
      '     v:::::v v:::::v     ',
      '      v:::::v:::::v      ',
      '       v:::::::::v       ',
      '        v:::::::v        ',
      '         v:::::v         ',
      '          v:::v          ',
      '           vvv           ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
    );
    $font['w'] = array(
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      'wwwwwww           wwwww           wwwwwww',
      ' w:::::w         w:::::w         w:::::w ',
      '  w:::::w       w:::::::w       w:::::w  ',
      '   w:::::w     w:::::::::w     w:::::w   ',
      '    w:::::w   w:::::w:::::w   w:::::w    ',
      '     w:::::w w:::::w w:::::w w:::::w     ',
      '      w:::::w:::::w   w:::::w:::::w      ',
      '       w:::::::::w     w:::::::::w       ',
      '        w:::::::w       w:::::::w        ',
      '         w:::::w         w:::::w         ',
      '          w:::w           w:::w          ',
      '           www             www           ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
      '                                         ',
    );
    $font['x'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      'xxxxxxx      xxxxxxx',
      ' x:::::x    x:::::x ',
      '  x:::::x  x:::::x  ',
      '   x:::::xx:::::x   ',
      '    x::::::::::x    ',
      '     x::::::::x     ',
      '     x::::::::x     ',
      '    x::::::::::x    ',
      '   x:::::xx:::::x   ',
      '  x:::::x  x:::::x  ',
      ' x:::::x    x:::::x ',
      'xxxxxxx      xxxxxxx',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['y'] = array(
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      '                         ',
      'yyyyyyy           yyyyyyy',
      ' y:::::y         y:::::y ',
      '  y:::::y       y:::::y  ',
      '   y:::::y     y:::::y   ',
      '    y:::::y   y:::::y    ',
      '     y:::::y y:::::y     ',
      '      y:::::y:::::y      ',
      '       y:::::::::y       ',
      '        y:::::::y        ',
      '         y:::::y         ',
      '        y:::::y          ',
      '       y:::::y           ',
      '      y:::::y            ',
      '     y:::::y             ',
      '    y:::::y              ',
      '   y:::::y               ',
      '  yyyyyyy                ',
      '                         ',
      '                         ',
    );
    $font['z'] = array(
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      'zzzzzzzzzzzzzzzzz',
      'z:::::::::::::::z',
      'z::::::::::::::z ',
      'zzzzzzzz::::::z  ',
      '      z::::::z   ',
      '     z::::::z    ',
      '    z::::::z     ',
      '   z::::::z      ',
      '  z::::::zzzzzzzz',
      ' z::::::::::::::z',
      'z:::::::::::::::z',
      'zzzzzzzzzzzzzzzzz',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
      '                 ',
    );
    $font['A'] = array(
      '                                 ',
      '                                 ',
      '               AAA               ',
      '              A:::A              ',
      '             A:::::A             ',
      '            A:::::::A            ',
      '           A:::::::::A           ',
      '          A:::::A:::::A          ',
      '         A:::::A A:::::A         ',
      '        A:::::A   A:::::A        ',
      '       A:::::A     A:::::A       ',
      '      A:::::AAAAAAAAA:::::A      ',
      '     A:::::::::::::::::::::A     ',
      '    A:::::AAAAAAAAAAAAA:::::A    ',
      '   A:::::A             A:::::A   ',
      '  A:::::A               A:::::A  ',
      ' A:::::A                 A:::::A ',
      'AAAAAAA                   AAAAAAA',
      '                                 ',
      '                                 ',
      '                                 ',
      '                                 ',
      '                                 ',
      '                                 ',
      '                                 ',
    );
    $font['B'] = array(
      '                    ',
      '                    ',
      'BBBBBBBBBBBBBBBBB   ',
      'B::::::::::::::::B  ',
      'B::::::BBBBBB:::::B ',
      'BB:::::B     B:::::B',
      '  B::::B     B:::::B',
      '  B::::B     B:::::B',
      '  B::::BBBBBB:::::B ',
      '  B:::::::::::::BB  ',
      '  B::::BBBBBB:::::B ',
      '  B::::B     B:::::B',
      '  B::::B     B:::::B',
      '  B::::B     B:::::B',
      'BB:::::BBBBBB::::::B',
      'B:::::::::::::::::B ',
      'B::::::::::::::::B  ',
      'BBBBBBBBBBBBBBBBB   ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['C'] = array(
      '                     ',
      '                     ',
      '        CCCCCCCCCCCCC',
      '     CCC::::::::::::C',
      '   CC:::::::::::::::C',
      '  C:::::CCCCCCCC::::C',
      ' C:::::C       CCCCCC',
      'C:::::C              ',
      'C:::::C              ',
      'C:::::C              ',
      'C:::::C              ',
      'C:::::C              ',
      'C:::::C              ',
      ' C:::::C       CCCCCC',
      '  C:::::CCCCCCCC::::C',
      '   CC:::::::::::::::C',
      '     CCC::::::::::::C',
      '        CCCCCCCCCCCCC',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['D'] = array(
      '                     ',
      '                     ',
      'DDDDDDDDDDDDD        ',
      'D::::::::::::DDD     ',
      'D:::::::::::::::DD   ',
      'DDD:::::DDDDD:::::D  ',
      '  D:::::D    D:::::D ',
      '  D:::::D     D:::::D',
      '  D:::::D     D:::::D',
      '  D:::::D     D:::::D',
      '  D:::::D     D:::::D',
      '  D:::::D     D:::::D',
      '  D:::::D     D:::::D',
      '  D:::::D    D:::::D ',
      'DDD:::::DDDDD:::::D  ',
      'D:::::::::::::::DD   ',
      'D::::::::::::DDD     ',
      'DDDDDDDDDDDDD        ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['E'] = array(
      '                      ',
      '                      ',
      'EEEEEEEEEEEEEEEEEEEEEE',
      'E::::::::::::::::::::E',
      'E::::::::::::::::::::E',
      'EE::::::EEEEEEEEE::::E',
      '  E:::::E       EEEEEE',
      '  E:::::E             ',
      '  E::::::EEEEEEEEEE   ',
      '  E:::::::::::::::E   ',
      '  E:::::::::::::::E   ',
      '  E::::::EEEEEEEEEE   ',
      '  E:::::E             ',
      '  E:::::E       EEEEEE',
      'EE::::::EEEEEEEE:::::E',
      'E::::::::::::::::::::E',
      'E::::::::::::::::::::E',
      'EEEEEEEEEEEEEEEEEEEEEE',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
    );
    $font['F'] = array(
      '                      ',
      '                      ',
      'FFFFFFFFFFFFFFFFFFFFFF',
      'F::::::::::::::::::::F',
      'F::::::::::::::::::::F',
      'FF::::::FFFFFFFFF::::F',
      '  F:::::F       FFFFFF',
      '  F:::::F             ',
      '  F::::::FFFFFFFFFF   ',
      '  F:::::::::::::::F   ',
      '  F:::::::::::::::F   ',
      '  F::::::FFFFFFFFFF   ',
      '  F:::::F             ',
      '  F:::::F             ',
      'FF:::::::FF           ',
      'F::::::::FF           ',
      'F::::::::FF           ',
      'FFFFFFFFFFF           ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
      '                      ',
    );
    $font['G'] = array(
      '                     ',
      '                     ',
      '        GGGGGGGGGGGGG',
      '     GGG::::::::::::G',
      '   GG:::::::::::::::G',
      '  G:::::GGGGGGGG::::G',
      ' G:::::G       GGGGGG',
      'G:::::G              ',
      'G:::::G              ',
      'G:::::G    GGGGGGGGGG',
      'G:::::G    G::::::::G',
      'G:::::G    GGGGG::::G',
      'G:::::G        G::::G',
      ' G:::::G       G::::G',
      '  G:::::GGGGGGGG::::G',
      '   GG:::::::::::::::G',
      '     GGG::::::GGG:::G',
      '        GGGGGG   GGGG',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['H'] = array(
      '                       ',
      '                       ',
      'HHHHHHHHH     HHHHHHHHH',
      'H:::::::H     H:::::::H',
      'H:::::::H     H:::::::H',
      'HH::::::H     H::::::HH',
      '  H:::::H     H:::::H  ',
      '  H:::::H     H:::::H  ',
      '  H::::::HHHHH::::::H  ',
      '  H:::::::::::::::::H  ',
      '  H:::::::::::::::::H  ',
      '  H::::::HHHHH::::::H  ',
      '  H:::::H     H:::::H  ',
      '  H:::::H     H:::::H  ',
      'HH::::::H     H::::::HH',
      'H:::::::H     H:::::::H',
      'H:::::::H     H:::::::H',
      'HHHHHHHHH     HHHHHHHHH',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
    );
    $font['I'] = array(
      '          ',
      '          ',
      'IIIIIIIIII',
      'I::::::::I',
      'I::::::::I',
      'II::::::II',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      '  I::::I  ',
      'II::::::II',
      'I::::::::I',
      'I::::::::I',
      'IIIIIIIIII',
      '          ',
      '          ',
      '          ',
      '          ',
      '          ',
      '          ',
      '          ',
    );
    $font['J'] = array(
      '                     ',
      '                     ',
      '          JJJJJJJJJJJ',
      '          J:::::::::J',
      '          J:::::::::J',
      '          JJ:::::::JJ',
      '            J:::::J  ',
      '            J:::::J  ',
      '            J:::::J  ',
      '            J:::::j  ',
      '            J:::::J  ',
      'JJJJJJJ     J:::::J  ',
      'J:::::J     J:::::J  ',
      'J::::::J   J::::::J  ',
      'J:::::::JJJ:::::::J  ',
      ' JJ:::::::::::::JJ   ',
      '   JJ:::::::::JJ     ',
      '     JJJJJJJJJ       ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['K'] = array(
      '                    ',
      '                    ',
      'KKKKKKKKK    KKKKKKK',
      'K:::::::K    K:::::K',
      'K:::::::K    K:::::K',
      'K:::::::K   K::::::K',
      'KK::::::K  K:::::KKK',
      '  K:::::K K:::::K   ',
      '  K::::::K:::::K    ',
      '  K:::::::::::K     ',
      '  K:::::::::::K     ',
      '  K::::::K:::::K    ',
      '  K:::::K K:::::K   ',
      'KK::::::K  K:::::KKK',
      'K:::::::K   K::::::K',
      'K:::::::K    K:::::K',
      'K:::::::K    K:::::K',
      'KKKKKKKKK    KKKKKKK',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['L'] = array(
      '                        ',
      '                        ',
      'LLLLLLLLLLL             ',
      'L:::::::::L             ',
      'L:::::::::L             ',
      'LL:::::::LL             ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L               ',
      '  L:::::L         LLLLLL',
      'LL:::::::LLLLLLLLL:::::L',
      'L::::::::::::::::::::::L',
      'L::::::::::::::::::::::L',
      'LLLLLLLLLLLLLLLLLLLLLLLL',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
    );
    $font['M'] = array(
      '                               ',
      '                               ',
      'MMMMMMMM               MMMMMMMM',
      'M:::::::M             M:::::::M',
      'M::::::::M           M::::::::M',
      'M:::::::::M         M:::::::::M',
      'M::::::::::M       M::::::::::M',
      'M:::::::::::M     M:::::::::::M',
      'M:::::::M::::M   M::::M:::::::M',
      'M::::::M M::::M M::::M M::::::M',
      'M::::::M  M::::M::::M  M::::::M',
      'M::::::M   M:::::::M   M::::::M',
      'M::::::M    M:::::M    M::::::M',
      'M::::::M     MMMMM     M::::::M',
      'M::::::M               M::::::M',
      'M::::::M               M::::::M',
      'M::::::M               M::::::M',
      'MMMMMMMM               MMMMMMMM',
      '                               ',
      '                               ',
      '                               ',
      '                               ',
      '                               ',
      '                               ',
      '                               ',
    );
    $font['N'] = array(
      '                        ',
      '                        ',
      'NNNNNNNN        NNNNNNNN',
      'N:::::::N       N::::::N',
      'N::::::::N      N::::::N',
      'N:::::::::N     N::::::N',
      'N::::::::::N    N::::::N',
      'N:::::::::::N   N::::::N',
      'N:::::::N::::N  N::::::N',
      'N::::::N N::::N N::::::N',
      'N::::::N  N::::N:::::::N',
      'N::::::N   N:::::::::::N',
      'N::::::N    N::::::::::N',
      'N::::::N     N:::::::::N',
      'N::::::N      N::::::::N',
      'N::::::N       N:::::::N',
      'N::::::N        N::::::N',
      'NNNNNNNN         NNNNNNN',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
      '                        ',
    );
    $font['O'] = array(
      '                   ',
      '                   ',
      '     OOOOOOOOO     ',
      '   OO:::::::::OO   ',
      ' OO:::::::::::::OO ',
      'O:::::::OOO:::::::O',
      'O::::::O   O::::::O',
      'O:::::O     O:::::O',
      'O:::::O     O:::::O',
      'O:::::O     O:::::O',
      'O:::::O     O:::::O',
      'O:::::O     O:::::O',
      'O:::::O     O:::::O',
      'O::::::O   O::::::O',
      'O:::::::OOO:::::::O',
      ' OO:::::::::::::OO ',
      '   OO:::::::::OO   ',
      '     OOOOOOOOO     ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['P'] = array(
      '                    ',
      '                    ',
      'PPPPPPPPPPPPPPPPP   ',
      'P::::::::::::::::P  ',
      'P::::::PPPPPP:::::P ',
      'PP:::::P     P:::::P',
      '  P::::P     P:::::P',
      '  P::::P     P:::::P',
      '  P::::PPPPPP:::::P ',
      '  P:::::::::::::PP  ',
      '  P::::PPPPPPPPP    ',
      '  P::::P            ',
      '  P::::P            ',
      '  P::::P            ',
      'PP::::::PP          ',
      'P::::::::P          ',
      'P::::::::P          ',
      'PPPPPPPPPP          ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['Q'] = array(
      '                    ',
      '                    ',
      '     QQQQQQQQQ      ',
      '   QQ:::::::::QQ    ',
      ' QQ:::::::::::::QQ  ',
      'Q:::::::QQQ:::::::Q ',
      'Q::::::O   Q::::::Q ',
      'Q:::::O     Q:::::Q ',
      'Q:::::O     Q:::::Q ',
      'Q:::::O     Q:::::Q ',
      'Q:::::O     Q:::::Q ',
      'Q:::::O     Q:::::Q ',
      'Q:::::O  QQQQ:::::Q ',
      'Q::::::O Q::::::::Q ',
      'Q:::::::QQ::::::::Q ',
      ' QQ::::::::::::::Q  ',
      '   QQ:::::::::::Q   ',
      '     QQQQQQQQ::::QQ ',
      '             Q:::::Q',
      '              QQQQQQ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['R'] = array(
      '                    ',
      '                    ',
      'RRRRRRRRRRRRRRRRR   ',
      'R::::::::::::::::R  ',
      'R::::::RRRRRR:::::R ',
      'RR:::::R     R:::::R',
      '  R::::R     R:::::R',
      '  R::::R     R:::::R',
      '  R::::RRRRRR:::::R ',
      '  R:::::::::::::RR  ',
      '  R::::RRRRRR:::::R ',
      '  R::::R     R:::::R',
      '  R::::R     R:::::R',
      '  R::::R     R:::::R',
      'RR:::::R     R:::::R',
      'R::::::R     R:::::R',
      'R::::::R     R:::::R',
      'RRRRRRRR     RRRRRRR',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['S'] = array(
      '                   ',
      '                   ',
      '   SSSSSSSSSSSSSSS ',
      ' SS:::::::::::::::S',
      'S:::::SSSSSS::::::S',
      'S:::::S     SSSSSSS',
      'S:::::S            ',
      'S:::::S            ',
      ' S::::SSSS         ',
      '  SS::::::SSSSS    ',
      '    SSS::::::::SS  ',
      '       SSSSSS::::S ',
      '            S:::::S',
      '            S:::::S',
      'SSSSSSS     S:::::S',
      'S::::::SSSSSS:::::S',
      'S:::::::::::::::SS ',
      ' SSSSSSSSSSSSSSS   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['T'] = array(
      '                       ',
      '                       ',
      'TTTTTTTTTTTTTTTTTTTTTTT',
      'T:::::::::::::::::::::T',
      'T:::::::::::::::::::::T',
      'T:::::TT:::::::TT:::::T',
      'TTTTTT  T:::::T  TTTTTT',
      '        T:::::T        ',
      '        T:::::T        ',
      '        T:::::T        ',
      '        T:::::T        ',
      '        T:::::T        ',
      '        T:::::T        ',
      '        T:::::T        ',
      '      TT:::::::TT      ',
      '      T:::::::::T      ',
      '      T:::::::::T      ',
      '      TTTTTTTTTTT      ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
      '                       ',
    );
    $font['U'] = array(
      '                     ',
      '                     ',
      'UUUUUUUU     UUUUUUUU',
      'U::::::U     U::::::U',
      'U::::::U     U::::::U',
      'UU:::::U     U:::::UU',
      ' U:::::U     U:::::U ',
      ' U:::::D     D:::::U ',
      ' U:::::D     D:::::U ',
      ' U:::::D     D:::::U ',
      ' U:::::D     D:::::U ',
      ' U:::::D     D:::::U ',
      ' U:::::D     D:::::U ',
      ' U::::::U   U::::::U ',
      ' U:::::::UUU:::::::U ',
      '  UU:::::::::::::UU  ',
      '    UU:::::::::UU    ',
      '      UUUUUUUUU      ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['V'] = array(
      '                           ',
      '                           ',
      'VVVVVVVV           VVVVVVVV',
      'V::::::V           V::::::V',
      'V::::::V           V::::::V',
      'V::::::V           V::::::V',
      ' V:::::V           V:::::V ',
      '  V:::::V         V:::::V  ',
      '   V:::::V       V:::::V   ',
      '    V:::::V     V:::::V    ',
      '     V:::::V   V:::::V     ',
      '      V:::::V V:::::V      ',
      '       V:::::V:::::V       ',
      '        V:::::::::V        ',
      '         V:::::::V         ',
      '          V:::::V          ',
      '           V:::V           ',
      '            VVV            ',
      '                           ',
      '                           ',
      '                           ',
      '                           ',
      '                           ',
      '                           ',
      '                           ',
    );
    $font['W'] = array(
      '                                           ',
      '                                           ',
      'WWWWWWWW                           WWWWWWWW',
      'W::::::W                           W::::::W',
      'W::::::W                           W::::::W',
      'W::::::W                           W::::::W',
      ' W:::::W           WWWWW           W:::::W ',
      '  W:::::W         W:::::W         W:::::W  ',
      '   W:::::W       W:::::::W       W:::::W   ',
      '    W:::::W     W:::::::::W     W:::::W    ',
      '     W:::::W   W:::::W:::::W   W:::::W     ',
      '      W:::::W W:::::W W:::::W W:::::W      ',
      '       W:::::W:::::W   W:::::W:::::W       ',
      '        W:::::::::W     W:::::::::W        ',
      '         W:::::::W       W:::::::W         ',
      '          W:::::W         W:::::W          ',
      '           W:::W           W:::W           ',
      '            WWW             WWW            ',
      '                                           ',
      '                                           ',
      '                                           ',
      '                                           ',
      '                                           ',
      '                                           ',
      '                                           ',
    );
    $font['X'] = array(
      '                     ',
      '                     ',
      'XXXXXXX       XXXXXXX',
      'X:::::X       X:::::X',
      'X:::::X       X:::::X',
      'X::::::X     X::::::X',
      'XXX:::::X   X:::::XXX',
      '   X:::::X X:::::X   ',
      '    X:::::X:::::X    ',
      '     X:::::::::X     ',
      '     X:::::::::X     ',
      '    X:::::X:::::X    ',
      '   X:::::X X:::::X   ',
      'XXX:::::X   X:::::XXX',
      'X::::::X     X::::::X',
      'X:::::X       X:::::X',
      'X:::::X       X:::::X',
      'XXXXXXX       XXXXXXX',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['Y'] = array(
      '                     ',
      '                     ',
      'YYYYYYY       YYYYYYY',
      'Y:::::Y       Y:::::Y',
      'Y:::::Y       Y:::::Y',
      'Y::::::Y     Y::::::Y',
      'YYY:::::Y   Y:::::YYY',
      '   Y:::::Y Y:::::Y   ',
      '    Y:::::Y:::::Y    ',
      '     Y:::::::::Y     ',
      '      Y:::::::Y      ',
      '       Y:::::Y       ',
      '       Y:::::Y       ',
      '       Y:::::Y       ',
      '       Y:::::Y       ',
      '    YYYY:::::YYYY    ',
      '    Y:::::::::::Y    ',
      '    YYYYYYYYYYYYY    ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
      '                     ',
    );
    $font['Z'] = array(
      '                   ',
      '                   ',
      'ZZZZZZZZZZZZZZZZZZZ',
      'Z:::::::::::::::::Z',
      'Z:::::::::::::::::Z',
      'Z:::ZZZZZZZZ:::::Z ',
      'ZZZZZ     Z:::::Z  ',
      '        Z:::::Z    ',
      '       Z:::::Z     ',
      '      Z:::::Z      ',
      '     Z:::::Z       ',
      '    Z:::::Z        ',
      '   Z:::::Z         ',
      'ZZZ:::::Z     ZZZZZ',
      'Z::::::ZZZZZZZZ:::Z',
      'Z:::::::::::::::::Z',
      'Z:::::::::::::::::Z',
      'ZZZZZZZZZZZZZZZZZZZ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['0'] = array(
      '                   ',
      '                   ',
      '     000000000     ',
      '   00:::::::::00   ',
      ' 00:::::::::::::00 ',
      '0:::::::000:::::::0',
      '0::::::0   0::::::0',
      '0:::::0     0:::::0',
      '0:::::0     0:::::0',
      '0:::::0 000 0:::::0',
      '0:::::0 000 0:::::0',
      '0:::::0     0:::::0',
      '0:::::0     0:::::0',
      '0::::::0   0::::::0',
      '0:::::::000:::::::0',
      ' 00:::::::::::::00 ',
      '   00:::::::::00   ',
      '     000000000     ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['1'] = array(
      '            ',
      '            ',
      '  1111111   ',
      ' 1::::::1   ',
      '1:::::::1   ',
      '111:::::1   ',
      '   1::::1   ',
      '   1::::1   ',
      '   1::::1   ',
      '   1::::l   ',
      '   1::::l   ',
      '   1::::l   ',
      '   1::::l   ',
      '   1::::l   ',
      '111::::::111',
      '1::::::::::1',
      '1::::::::::1',
      '111111111111',
      '            ',
      '            ',
      '            ',
      '            ',
      '            ',
      '            ',
      '            ',
    );
    $font['2'] = array(
      '                    ',
      '                    ',
      ' 222222222222222    ',
      '2:::::::::::::::22  ',
      '2::::::222222:::::2 ',
      '2222222     2:::::2 ',
      '            2:::::2 ',
      '            2:::::2 ',
      '         2222::::2  ',
      '    22222::::::22   ',
      '  22::::::::222     ',
      ' 2:::::22222        ',
      '2:::::2             ',
      '2:::::2             ',
      '2:::::2       222222',
      '2::::::2222222:::::2',
      '2::::::::::::::::::2',
      '22222222222222222222',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['3'] = array(
      '                   ',
      '                   ',
      ' 333333333333333   ',
      '3:::::::::::::::33 ',
      '3::::::33333::::::3',
      '3333333     3:::::3',
      '            3:::::3',
      '            3:::::3',
      '    33333333:::::3 ',
      '    3:::::::::::3  ',
      '    33333333:::::3 ',
      '            3:::::3',
      '            3:::::3',
      '            3:::::3',
      '3333333     3:::::3',
      '3::::::33333::::::3',
      '3:::::::::::::::33 ',
      ' 333333333333333   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['4'] = array(
      '                  ',
      '                  ',
      '       444444444  ',
      '      4::::::::4  ',
      '     4:::::::::4  ',
      '    4::::44::::4  ',
      '   4::::4 4::::4  ',
      '  4::::4  4::::4  ',
      ' 4::::4   4::::4  ',
      '4::::444444::::444',
      '4::::::::::::::::4',
      '4444444444:::::444',
      '          4::::4  ',
      '          4::::4  ',
      '          4::::4  ',
      '        44::::::44',
      '        4::::::::4',
      '        4444444444',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
      '                  ',
    );
    $font['5'] = array(
      '                   ',
      '                   ',
      '555555555555555555 ',
      '5::::::::::::::::5 ',
      '5::::::::::::::::5 ',
      '5:::::555555555555 ',
      '5:::::5            ',
      '5:::::5            ',
      '5:::::5555555555   ',
      '5:::::::::::::::5  ',
      '555555555555:::::5 ',
      '            5:::::5',
      '            5:::::5',
      '5555555     5:::::5',
      '5::::::55555::::::5',
      ' 55:::::::::::::55 ',
      '   55:::::::::55   ',
      '     555555555     ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['6'] = array(
      '                   ',
      '                   ',
      '        66666666   ',
      '       6::::::6    ',
      '      6::::::6     ',
      '     6::::::6      ',
      '    6::::::6       ',
      '   6::::::6        ',
      '  6::::::6         ',
      ' 6::::::::66666    ',
      '6::::::::::::::66  ',
      '6::::::66666:::::6 ',
      '6:::::6     6:::::6',
      '6:::::6     6:::::6',
      '6::::::66666::::::6',
      ' 66:::::::::::::66 ',
      '   66:::::::::66   ',
      '     666666666     ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['7'] = array(
      '                    ',
      '                    ',
      '77777777777777777777',
      '7::::::::::::::::::7',
      '7::::::::::::::::::7',
      '777777777777:::::::7',
      '           7::::::7 ',
      '          7::::::7  ',
      '         7::::::7   ',
      '        7::::::7    ',
      '       7::::::7     ',
      '      7::::::7      ',
      '     7::::::7       ',
      '    7::::::7        ',
      '   7::::::7         ',
      '  7::::::7          ',
      ' 7::::::7           ',
      '77777777            ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '                    ',
    );
    $font['8'] = array(
      '                   ',
      '                   ',
      '     888888888     ',
      '   88:::::::::88   ',
      ' 88:::::::::::::88 ',
      '8::::::88888::::::8',
      '8:::::8     8:::::8',
      '8:::::8     8:::::8',
      ' 8:::::88888:::::8 ',
      '  8:::::::::::::8  ',
      ' 8:::::88888:::::8 ',
      '8:::::8     8:::::8',
      '8:::::8     8:::::8',
      '8:::::8     8:::::8',
      '8::::::88888::::::8',
      ' 88:::::::::::::88 ',
      '   88:::::::::88   ',
      '     888888888     ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
    $font['9'] = array(
      '                   ',
      '                   ',
      '     999999999     ',
      '   99:::::::::99   ',
      ' 99:::::::::::::99 ',
      '9::::::99999::::::9',
      '9:::::9     9:::::9',
      '9:::::9     9:::::9',
      ' 9:::::99999::::::9',
      '  99::::::::::::::9',
      '    99999::::::::9 ',
      '         9::::::9  ',
      '        9::::::9   ',
      '       9::::::9    ',
      '      9::::::9     ',
      '     9::::::9      ',
      '    9::::::9       ',
      '   99999999        ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
      '                   ',
    );
  
    break;
  case 'doom':

    // Font definition based on figlet font "doom" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 8;
    // $font['name'] = 'doom';
    // $font['comment'] = 'DOOM by Frans P. de Vries <fpv@xymph.iaf.nl>  18 Jun 1996based on Big by Glenn Chappell 4/93 -- based on Standardfiglet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed8    - height of a character6    - height of a character, not including descenders14   - max line length (excluding comment lines) + a fudge factor15   - default smushmode for this font16   - number of comment lines';
    $font['a'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '| \'_ \\ ',
      '| |_) |',
      '|_.__/ ',
      '       ',
      '       ',
    );
    $font['c'] = array(
      '      ',
      '      ',
      '  ___ ',
      ' / __|',
      '| (__ ',
      ' \\___|',
      '      ',
      '      ',
    );
    $font['d'] = array(
      '     _ ',
      '    | |',
      '  __| |',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['e'] = array(
      '      ',
      '      ',
      '  ___ ',
      ' / _ \\',
      '|  __/',
      ' \\___|',
      '      ',
      '      ',
    );
    $font['f'] = array(
      '  __ ',
      ' / _|',
      '| |_ ',
      '|  _|',
      '| |  ',
      '|_|  ',
      '     ',
      '     ',
    );
    $font['g'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '  __/ |',
      ' |___/ ',
    );
    $font['h'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
      '       ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      ' _ ',
      '| |',
      '| |',
      '|_|',
      '   ',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '   _ ',
      '  | |',
      '  | |',
      '  | |',
      ' _/ |',
      '|__/ ',
    );
    $font['k'] = array(
      ' _    ',
      '| |   ',
      '| | __',
      '| |/ /',
      '|   < ',
      '|_|\\_\\',
      '      ',
      '      ',
    );
    $font['l'] = array(
      ' _ ',
      '| |',
      '| |',
      '| |',
      '| |',
      '|_|',
      '   ',
      '   ',
    );
    $font['m'] = array(
      '           ',
      '           ',
      ' _ __ ___  ',
      '| \'_ ` _ \\ ',
      '| | | | | |',
      '|_| |_| |_|',
      '           ',
      '           ',
    );
    $font['n'] = array(
      '       ',
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '       ',
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| |_) |',
      '| .__/ ',
      '| |    ',
      '|_|    ',
    );
    $font['q'] = array(
      '       ',
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '    | |',
      '    |_|',
    );
    $font['r'] = array(
      '      ',
      '      ',
      ' _ __ ',
      '| \'__|',
      '| |   ',
      '|_|   ',
      '      ',
      '      ',
    );
    $font['s'] = array(
      '     ',
      '     ',
      ' ___ ',
      '/ __|',
      '\\__ \\',
      '|___/',
      '     ',
      '     ',
    );
    $font['t'] = array(
      ' _   ',
      '| |  ',
      '| |_ ',
      '| __|',
      '| |_ ',
      ' \\__|',
      '     ',
      '     ',
    );
    $font['u'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__,_|',
      '       ',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '       ',
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
      '       ',
    );
    $font['w'] = array(
      '          ',
      '          ',
      '__      __',
      '\\ \\ /\\ / /',
      ' \\ V  V / ',
      '  \\_/\\_/  ',
      '          ',
      '          ',
    );
    $font['x'] = array(
      '      ',
      '      ',
      '__  __',
      '\\ \\/ /',
      ' >  < ',
      '/_/\\_\\',
      '      ',
      '      ',
    );
    $font['y'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__, |',
      '  __/ |',
      ' |___/ ',
    );
    $font['z'] = array(
      '     ',
      '     ',
      ' ____',
      '|_  /',
      ' / / ',
      '/___|',
      '     ',
      '     ',
    );
    $font['A'] = array(
      '  ___  ',
      ' / _ \\ ',
      '/ /_\\ \\',
      '|  _  |',
      '| | | |',
      '\\_| |_/',
      '       ',
      '       ',
    );
    $font['B'] = array(
      '______ ',
      '| ___ \\',
      '| |_/ /',
      '| ___ \\',
      '| |_/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['C'] = array(
      ' _____ ',
      '/  __ \\',
      '| /  \\/',
      '| |    ',
      '| \\__/\\',
      ' \\____/',
      '       ',
      '       ',
    );
    $font['D'] = array(
      '______ ',
      '|  _  \\',
      '| | | |',
      '| | | |',
      '| |/ / ',
      '|___/  ',
      '       ',
      '       ',
    );
    $font['E'] = array(
      ' _____ ',
      '|  ___|',
      '| |__  ',
      '|  __| ',
      '| |___ ',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['F'] = array(
      '______ ',
      '|  ___|',
      '| |_   ',
      '|  _|  ',
      '| |    ',
      '\\_|    ',
      '       ',
      '       ',
    );
    $font['G'] = array(
      ' _____ ',
      '|  __ \\',
      '| |  \\/',
      '| | __ ',
      '| |_\\ \\',
      ' \\____/',
      '       ',
      '       ',
    );
    $font['H'] = array(
      ' _   _ ',
      '| | | |',
      '| |_| |',
      '|  _  |',
      '| | | |',
      '\\_| |_/',
      '       ',
      '       ',
    );
    $font['I'] = array(
      ' _____ ',
      '|_   _|',
      '  | |  ',
      '  | |  ',
      ' _| |_ ',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['J'] = array(
      '   ___ ',
      '  |_  |',
      '    | |',
      '    | |',
      '/\\__/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['K'] = array(
      ' _   __',
      '| | / /',
      '| |/ / ',
      '|    \\ ',
      '| |\\  \\',
      '\\_| \\_/',
      '       ',
      '       ',
    );
    $font['L'] = array(
      ' _     ',
      '| |    ',
      '| |    ',
      '| |    ',
      '| |____',
      '\\_____/',
      '       ',
      '       ',
    );
    $font['M'] = array(
      '___  ___',
      '|  \\/  |',
      '| .  . |',
      '| |\\/| |',
      '| |  | |',
      '\\_|  |_/',
      '        ',
      '        ',
    );
    $font['N'] = array(
      ' _   _ ',
      '| \\ | |',
      '|  \\| |',
      '| . ` |',
      '| |\\  |',
      '\\_| \\_/',
      '       ',
      '       ',
    );
    $font['O'] = array(
      ' _____ ',
      '|  _  |',
      '| | | |',
      '| | | |',
      '\\ \\_/ /',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['P'] = array(
      '______ ',
      '| ___ \\',
      '| |_/ /',
      '|  __/ ',
      '| |    ',
      '\\_|    ',
      '       ',
      '       ',
    );
    $font['Q'] = array(
      ' _____ ',
      '|  _  |',
      '| | | |',
      '| | | |',
      '\\ \\/\' /',
      ' \\_/\\_\\',
      '       ',
      '       ',
    );
    $font['R'] = array(
      '______ ',
      '| ___ \\',
      '| |_/ /',
      '|    / ',
      '| |\\ \\ ',
      '\\_| \\_|',
      '       ',
      '       ',
    );
    $font['S'] = array(
      ' _____ ',
      '/  ___|',
      '\\ `--. ',
      ' `--. \\',
      '/\\__/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['T'] = array(
      ' _____ ',
      '|_   _|',
      '  | |  ',
      '  | |  ',
      '  | |  ',
      '  \\_/  ',
      '       ',
      '       ',
    );
    $font['U'] = array(
      ' _   _ ',
      '| | | |',
      '| | | |',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['V'] = array(
      ' _   _ ',
      '| | | |',
      '| | | |',
      '| | | |',
      '\\ \\_/ /',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['W'] = array(
      ' _    _ ',
      '| |  | |',
      '| |  | |',
      '| |/\\| |',
      '\\  /\\  /',
      ' \\/  \\/ ',
      '        ',
      '        ',
    );
    $font['X'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      ' /   \\ ',
      '/ /^\\ \\',
      '\\/   \\/',
      '       ',
      '       ',
    );
    $font['Y'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\ /  ',
      '  | |  ',
      '  \\_/  ',
      '       ',
      '       ',
    );
    $font['Z'] = array(
      ' ______',
      '|___  /',
      '   / / ',
      '  / /  ',
      './ /___',
      '\\_____/',
      '       ',
      '       ',
    );
    $font['0'] = array(
      ' _____ ',
      '|  _  |',
      '| |/\' |',
      '|  /| |',
      '\\ |_/ /',
      ' \\___/ ',
      '       ',
      '       ',
    );
    $font['1'] = array(
      ' __  ',
      '/  | ',
      '`| | ',
      ' | | ',
      '_| |_',
      '\\___/',
      '     ',
      '     ',
    );
    $font['2'] = array(
      ' _____ ',
      '/ __  \\',
      '`\' / /\'',
      '  / /  ',
      './ /___',
      '\\_____/',
      '       ',
      '       ',
    );
    $font['3'] = array(
      ' _____ ',
      '|____ |',
      '    / /',
      '    \\ \\',
      '.___/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['4'] = array(
      '   ___ ',
      '  /   |',
      ' / /| |',
      '/ /_| |',
      '\\___  |',
      '    |_/',
      '       ',
      '       ',
    );
    $font['5'] = array(
      ' _____ ',
      '|  ___|',
      '|___ \\ ',
      '    \\ \\',
      '/\\__/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
    $font['6'] = array(
      '  ____ ',
      ' / ___|',
      '/ /___ ',
      '| ___ \\',
      '| \\_/ |',
      '\\_____/',
      '       ',
      '       ',
    );
    $font['7'] = array(
      ' ______',
      '|___  /',
      '   / / ',
      '  / /  ',
      './ /   ',
      '\\_/    ',
      '       ',
      '       ',
    );
    $font['8'] = array(
      ' _____ ',
      '|  _  |',
      ' \\ V / ',
      ' / _ \\ ',
      '| |_| |',
      '\\_____/',
      '       ',
      '       ',
    );
    $font['9'] = array(
      ' _____ ',
      '|  _  |',
      '| |_| |',
      '\\____ |',
      '.___/ /',
      '\\____/ ',
      '       ',
      '       ',
    );
  
    break;
  case 'dotmatrix':

    // Font definition based on figlet font "dotmatrix" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 10;
    // $font['name'] = 'dotmatrix';
    // $font['comment'] = 'dotmatrix.flf by Curtis Wanner (cwanner@acs.bu.edu)last revision - 8/21/95';
    $font['a'] = array(
      '                  ',
      '                  ',
      '   _  _  _        ',
      '  (_)(_)(_) _     ',
      '   _  _  _ (_)    ',
      ' _(_)(_)(_)(_)    ',
      '(_)_  _  _ (_)_   ',
      '  (_)(_)(_)  (_)  ',
      '                  ',
      '                  ',
    );
    $font['b'] = array(
      ' _               ',
      '(_)              ',
      '(_) _  _  _      ',
      '(_)(_)(_)(_)_    ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_) _  _  _(_)   ',
      '(_)(_)(_)(_)     ',
      '                 ',
      '                 ',
    );
    $font['c'] = array(
      '                 ',
      '                 ',
      '   _  _  _       ',
      ' _(_)(_)(_)      ',
      '(_)              ',
      '(_)              ',
      '(_)_  _  _       ',
      '  (_)(_)(_)      ',
      '                 ',
      '                 ',
    );
    $font['d'] = array(
      '            _    ',
      '           (_)   ',
      '   _  _  _ (_)   ',
      ' _(_)(_)(_)(_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)_  _  _ (_)   ',
      '  (_)(_)(_)(_)   ',
      '                 ',
      '                 ',
    );
    $font['e'] = array(
      '                  ',
      '                  ',
      '  _  _  _  _      ',
      ' (_)(_)(_)(_)_    ',
      '(_) _  _  _ (_)   ',
      '(_)(_)(_)(_)(_)   ',
      '(_)_  _  _  _     ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['f'] = array(
      '      _  _      ',
      '    _(_)(_)     ',
      ' _ (_) _        ',
      '(_)(_)(_)       ',
      '   (_)          ',
      '   (_)          ',
      '   (_)          ',
      '   (_)          ',
      '                ',
      '                ',
    );
    $font['g'] = array(
      '                 ',
      '                 ',
      '   _  _  _  _    ',
      ' _(_)(_)(_)(_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)_  _  _ (_)   ',
      '  (_)(_)(_)(_)   ',
      '   _  _  _ (_)   ',
      '  (_)(_)(_)      ',
    );
    $font['h'] = array(
      ' _               ',
      '(_)              ',
      '(_) _  _  _      ',
      '(_)(_)(_)(_)_    ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '                 ',
      '                 ',
    );
    $font['i'] = array(
      '    _          ',
      '   (_)         ',
      ' _  _          ',
      '(_)(_)         ',
      '   (_)         ',
      '   (_)         ',
      ' _ (_) _       ',
      '(_)(_)(_)      ',
      '               ',
      '               ',
    );
    $font['j'] = array(
      '          _      ',
      '         (_)     ',
      '       _  _      ',
      '      (_)(_)     ',
      '         (_)     ',
      '         (_)     ',
      '         (_)     ',
      ' _      _(_)     ',
      '(_)_  _(_)       ',
      '  (_)(_)         ',
    );
    $font['k'] = array(
      ' _               ',
      '(_)              ',
      '(_)     _        ',
      '(_)   _(_)       ',
      '(_) _(_)         ',
      '(_)(_)_          ',
      '(_)  (_)_        ',
      '(_)    (_)       ',
      '                 ',
      '                 ',
    );
    $font['l'] = array(
      ' _  _          ',
      '(_)(_)         ',
      '   (_)         ',
      '   (_)         ',
      '   (_)         ',
      '   (_)         ',
      ' _ (_) _       ',
      '(_)(_)(_)      ',
      '               ',
      '               ',
    );
    $font['m'] = array(
      '                  ',
      '                  ',
      '  _  _   _  _     ',
      ' (_)(_)_(_)(_)    ',
      '(_)   (_)   (_)   ',
      '(_)   (_)   (_)   ',
      '(_)   (_)   (_)   ',
      '(_)   (_)   (_)   ',
      '                  ',
      '                  ',
    );
    $font['n'] = array(
      '                 ',
      '                 ',
      ' _  _  _  _      ',
      '(_)(_)(_)(_)_    ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '                 ',
      '                 ',
    );
    $font['o'] = array(
      '                  ',
      '                  ',
      '    _  _  _       ',
      ' _ (_)(_)(_) _    ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '(_) _  _  _ (_)   ',
      '   (_)(_)(_)      ',
      '                  ',
      '                  ',
    );
    $font['p'] = array(
      '                  ',
      '                  ',
      ' _  _  _  _       ',
      '(_)(_)(_)(_)_     ',
      '(_)        (_)    ',
      '(_)        (_)    ',
      '(_) _  _  _(_)    ',
      '(_)(_)(_)(_)      ',
      '(_)               ',
      '(_)               ',
    );
    $font['q'] = array(
      '                  ',
      '                  ',
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)    ',
      '(_)        (_)    ',
      '(_)        (_)    ',
      '(_)_  _  _ (_)    ',
      '  (_)(_)(_)(_)    ',
      '           (_)    ',
      '           (_)    ',
    );
    $font['r'] = array(
      '                  ',
      '                  ',
      ' _       _  _     ',
      '(_)_  _ (_)(_)    ',
      '  (_)(_)          ',
      '  (_)             ',
      '  (_)             ',
      '  (_)             ',
      '                  ',
      '                  ',
    );
    $font['s'] = array(
      '                  ',
      '                  ',
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)    ',
      '(_)_  _  _  _     ',
      '  (_)(_)(_)(_)_   ',
      '   _  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['t'] = array(
      '    _            ',
      '   (_)           ',
      ' _ (_) _  _      ',
      '(_)(_)(_)(_)     ',
      '   (_)           ',
      '   (_)     _     ',
      '   (_)_  _(_)    ',
      '     (_)(_)      ',
      '                 ',
      '                 ',
    );
    $font['u'] = array(
      '                  ',
      '                  ',
      ' _         _      ',
      '(_)       (_)     ',
      '(_)       (_)     ',
      '(_)       (_)     ',
      '(_)_  _  _(_)_    ',
      '  (_)(_)(_) (_)   ',
      '                  ',
      '                  ',
    );
    $font['v'] = array(
      '                    ',
      '                    ',
      ' _               _  ',
      '(_)_           _(_) ',
      '  (_)_       _(_)   ',
      '    (_)_   _(_)     ',
      '      (_)_(_)       ',
      '        (_)         ',
      '                    ',
      '                    ',
    );
    $font['w'] = array(
      '                   ',
      '                   ',
      ' _             _   ',
      '(_)           (_)  ',
      '(_)     _     (_)  ',
      '(_)_  _(_)_  _(_)  ',
      '  (_)(_) (_)(_)    ',
      '    (_)   (_)      ',
      '                   ',
      '                   ',
    );
    $font['x'] = array(
      '                 ',
      '                 ',
      ' _         _     ',
      '(_) _   _ (_)    ',
      '   (_)_(_)       ',
      '    _(_)_        ',
      ' _ (_) (_) _     ',
      '(_)       (_)    ',
      '                 ',
      '                 ',
    );
    $font['y'] = array(
      '                    ',
      '                    ',
      ' _               _  ',
      '(_)_           _(_) ',
      '  (_)_       _(_)   ',
      '    (_)_   _(_)     ',
      '      (_)_(_)       ',
      '       _(_)         ',
      '  _  _(_)           ',
      ' (_)(_)             ',
    );
    $font['z'] = array(
      '                ',
      '                ',
      ' _  _  _  _     ',
      '(_)(_)(_)(_)    ',
      '      _ (_)     ',
      '   _ (_)        ',
      ' _(_)  _  _     ',
      '(_)(_)(_)(_)    ',
      '                ',
      '                ',
    );
    $font['A'] = array(
      '       _          ',
      '     _(_)_        ',
      '   _(_) (_)_      ',
      ' _(_)     (_)_    ',
      '(_) _  _  _ (_)   ',
      '(_)(_)(_)(_)(_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['B'] = array(
      ' _  _  _  _       ',
      '(_)(_)(_)(_) _    ',
      ' (_)        (_)   ',
      ' (_) _  _  _(_)   ',
      ' (_)(_)(_)(_)_    ',
      ' (_)        (_)   ',
      ' (_)_  _  _ (_)   ',
      '(_)(_)(_)(_)      ',
      '                  ',
      '                  ',
    );
    $font['C'] = array(
      '    _  _  _       ',
      ' _ (_)(_)(_) _    ',
      '(_)         (_)   ',
      '(_)               ',
      '(_)               ',
      '(_)          _    ',
      '(_) _  _  _ (_)   ',
      '   (_)(_)(_)      ',
      '                  ',
      '                  ',
    );
    $font['D'] = array(
      ' _  _  _  _       ',
      '(_)(_)(_)(_)      ',
      ' (_)      (_)_    ',
      ' (_)        (_)   ',
      ' (_)        (_)   ',
      ' (_)       _(_)   ',
      ' (_)_  _  (_)     ',
      '(_)(_)(_)(_)      ',
      '                  ',
      '                  ',
    );
    $font['E'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '(_)               ',
      '(_) _  _          ',
      '(_)(_)(_)         ',
      '(_)               ',
      '(_) _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '                  ',
      '                  ',
    );
    $font['F'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '(_)               ',
      '(_) _  _          ',
      '(_)(_)(_)         ',
      '(_)               ',
      '(_)               ',
      '(_)               ',
      '                  ',
      '                  ',
    );
    $font['G'] = array(
      '    _  _  _       ',
      ' _ (_)(_)(_) _    ',
      '(_)         (_)   ',
      '(_)    _  _  _    ',
      '(_)   (_)(_)(_)   ',
      '(_)         (_)   ',
      '(_) _  _  _ (_)   ',
      '   (_)(_)(_)(_)   ',
      '                  ',
      '                  ',
    );
    $font['H'] = array(
      ' _           _    ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '(_) _  _  _ (_)   ',
      '(_)(_)(_)(_)(_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['I'] = array(
      ' _  _  _       ',
      '(_)(_)(_)      ',
      '   (_)         ',
      '   (_)         ',
      '   (_)         ',
      '   (_)         ',
      ' _ (_) _       ',
      '(_)(_)(_)      ',
      '               ',
      '               ',
    );
    $font['J'] = array(
      '      _  _  _    ',
      '     (_)(_)(_)   ',
      '        (_)      ',
      '        (_)      ',
      '        (_)      ',
      ' _      (_)      ',
      '(_)  _  (_)      ',
      ' (_)(_)(_)       ',
      '                 ',
      '                 ',
    );
    $font['K'] = array(
      ' _           _    ',
      '(_)       _ (_)   ',
      '(_)    _ (_)      ',
      '(_) _ (_)         ',
      '(_)(_) _          ',
      '(_)   (_) _       ',
      '(_)      (_) _    ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['L'] = array(
      ' _                ',
      '(_)               ',
      '(_)               ',
      '(_)               ',
      '(_)               ',
      '(_)               ',
      '(_) _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '                  ',
      '                  ',
    );
    $font['M'] = array(
      ' _           _    ',
      '(_) _     _ (_)   ',
      '(_)(_)   (_)(_)   ',
      '(_) (_)_(_) (_)   ',
      '(_)   (_)   (_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['N'] = array(
      ' _           _    ',
      '(_) _       (_)   ',
      '(_)(_)_     (_)   ',
      '(_)  (_)_   (_)   ',
      '(_)    (_)_ (_)   ',
      '(_)      (_)(_)   ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['O'] = array(
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)_  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['P'] = array(
      ' _  _  _  _      ',
      '(_)(_)(_)(_)_    ',
      '(_)        (_)   ',
      '(_) _  _  _(_)   ',
      '(_)(_)(_)(_)     ',
      '(_)              ',
      '(_)              ',
      '(_)              ',
      '                 ',
      '                 ',
    );
    $font['Q'] = array(
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)     _    (_)  ',
      '(_)    (_) _ (_)  ',
      '(_)_  _  _(_) _   ',
      '  (_)(_)(_)  (_)  ',
      '                  ',
      '                  ',
    );
    $font['R'] = array(
      ' _  _  _  _       ',
      '(_)(_)(_)(_) _    ',
      '(_)         (_)   ',
      '(_) _  _  _ (_)   ',
      '(_)(_)(_)(_)      ',
      '(_)   (_) _       ',
      '(_)      (_) _    ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['S'] = array(
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '(_)_  _  _  _     ',
      '  (_)(_)(_)(_)_   ',
      ' _           (_)  ',
      '(_)_  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['T'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '                  ',
      '                  ',
    );
    $font['U'] = array(
      ' _            _   ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)          (_)  ',
      '(_)_  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['V'] = array(
      ' _           _    ',
      '(_)         (_)   ',
      '(_)         (_)   ',
      '(_)_       _(_)   ',
      '  (_)     (_)     ',
      '   (_)   (_)      ',
      '    (_)_(_)       ',
      '      (_)         ',
      '                  ',
      '                  ',
    );
    $font['W'] = array(
      ' _             _   ',
      '(_)           (_)  ',
      '(_)           (_)  ',
      '(_)     _     (_)  ',
      '(_)   _(_)_   (_)  ',
      '(_)  (_) (_)  (_)  ',
      '(_)_(_)   (_)_(_)  ',
      '  (_)       (_)    ',
      '                   ',
      '                   ',
    );
    $font['X'] = array(
      ' _           _    ',
      '(_)_       _(_)   ',
      '  (_)_   _(_)     ',
      '    (_)_(_)       ',
      '     _(_)_        ',
      '   _(_) (_)_      ',
      ' _(_)     (_)_    ',
      '(_)         (_)   ',
      '                  ',
      '                  ',
    );
    $font['Y'] = array(
      ' _           _    ',
      '(_)_       _(_)   ',
      '  (_)_   _(_)     ',
      '    (_)_(_)       ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '      (_)         ',
      '                  ',
      '                  ',
    );
    $font['Z'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '          _(_)    ',
      '        _(_)      ',
      '      _(_)        ',
      '    _(_)          ',
      ' _ (_) _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '                  ',
      '                  ',
    );
    $font['0'] = array(
      '     _  _        ',
      '  _ (_)(_) _     ',
      ' (_)      (_)    ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      '(_)        (_)   ',
      ' (_) _  _ (_)    ',
      '    (_)(_)       ',
      '                 ',
      '                 ',
    );
    $font['1'] = array(
      '    _          ',
      ' _ (_)         ',
      '(_)(_)         ',
      '   (_)         ',
      '   (_)         ',
      '   (_)         ',
      ' _ (_) _       ',
      '(_)(_)(_)      ',
      '               ',
      '               ',
    );
    $font['2'] = array(
      '    _  _  _       ',
      ' _ (_)(_)(_) _    ',
      '(_)         (_)   ',
      '          _ (_)   ',
      '       _ (_)      ',
      '    _ (_)         ',
      ' _ (_) _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '                  ',
      '                  ',
    );
    $font['3'] = array(
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '         _  _(_)  ',
      '        (_)(_)_   ',
      ' _           (_)  ',
      '(_)_  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['4'] = array(
      '          _       ',
      '       _ (_)      ',
      '    _ (_)(_)      ',
      ' _ (_)   (_)      ',
      '(_) _  _ (_) _    ',
      '(_)(_)(_)(_)(_)   ',
      '         (_)      ',
      '         (_)      ',
      '                  ',
      '                  ',
    );
    $font['5'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '(_) _  _  _       ',
      '(_)(_)(_)(_) _    ',
      '            (_)   ',
      ' _          (_)   ',
      '(_) _  _  _ (_)   ',
      '   (_)(_)(_)      ',
      '                  ',
      '                  ',
    );
    $font['6'] = array(
      '     _  _  _     ',
      '   _(_)(_)(_)    ',
      ' _(_)            ',
      '(_) _  _  _      ',
      '(_)(_)(_)(_)_    ',
      '(_)        (_)   ',
      '(_)_  _  _ (_)   ',
      '  (_)(_)(_)      ',
      '                 ',
      '                 ',
    );
    $font['7'] = array(
      ' _  _  _  _  _    ',
      '(_)(_)(_)(_)(_)   ',
      '          _(_)    ',
      '        _(_)      ',
      '      _(_)        ',
      '    _(_)          ',
      '  _(_)            ',
      ' (_)              ',
      '                  ',
      '                  ',
    );
    $font['8'] = array(
      '   _  _  _  _     ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '(_)_  _  _  _(_)  ',
      ' _(_)(_)(_)(_)_   ',
      '(_)          (_)  ',
      '(_)_  _  _  _(_)  ',
      '  (_)(_)(_)(_)    ',
      '                  ',
      '                  ',
    );
    $font['9'] = array(
      '    _  _  _       ',
      ' _ (_)(_)(_) _    ',
      '(_)         (_)   ',
      '(_) _  _  _ (_)   ',
      '   (_)(_)(_)(_)   ',
      '           _(_)   ',
      '   _  _  _(_)     ',
      '  (_)(_)(_)       ',
      '                  ',
      '                  ',
    );
  
    break;
  case 'larry3d':

    // Font definition based on figlet font "larry3d" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 9;
    // $font['name'] = 'larry3d';
    // $font['comment'] = 'larry3d.flf by Larry Gelberg (larryg@avs.com)(stolen liberally from Juan Car\'s puffy.flf)tweaked by Glenn Chappell <ggc@uiuc.edu>Version 1.2 2/24/94';
    $font['a'] = array(
      '          ',
      '          ',
      '   __     ',
      ' /\'__`\\   ',
      '/\\ \\L\\.\\_ ',
      '\\ \\__/.\\_\\',
      ' \\/__/\\/_/',
      '          ',
      '          ',
    );
    $font['b'] = array(
      ' __        ',
      '/\\ \\       ',
      '\\ \\ \\____  ',
      ' \\ \\ \'__`\\ ',
      '  \\ \\ \\L\\ \\',
      '   \\ \\_,__/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['c'] = array(
      '        ',
      '        ',
      '  ___   ',
      ' /\'___\\ ',
      '/\\ \\__/ ',
      '\\ \\____\\',
      ' \\/____/',
      '        ',
      '        ',
    );
    $font['d'] = array(
      '  __     ',
      ' /\\ \\    ',
      ' \\_\\ \\   ',
      ' /\'_` \\  ',
      '/\\ \\L\\ \\ ',
      '\\ \\___,_\\',
      ' \\/__,_ /',
      '         ',
      '         ',
    );
    $font['e'] = array(
      '        ',
      '        ',
      '   __   ',
      ' /\'__`\\ ',
      '/\\  __/ ',
      '\\ \\____\\',
      ' \\/____/',
      '        ',
      '        ',
    );
    $font['f'] = array(
      '   ___  ',
      ' /\'___\\ ',
      '/\\ \\__/ ',
      '\\ \\ ,__\\',
      ' \\ \\ \\_/',
      '  \\ \\_\\ ',
      '   \\/_/ ',
      '        ',
      '        ',
    );
    $font['g'] = array(
      '          ',
      '          ',
      '   __     ',
      ' /\'_ `\\   ',
      '/\\ \\L\\ \\  ',
      '\\ \\____ \\ ',
      ' \\/___L\\ \\',
      '   /\\____/',
      '   \\_/__/ ',
    );
    $font['h'] = array(
      ' __         ',
      '/\\ \\        ',
      '\\ \\ \\___    ',
      ' \\ \\  _ `\\  ',
      '  \\ \\ \\ \\ \\ ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['i'] = array(
      '       ',
      ' __    ',
      '/\\_\\   ',
      '\\/\\ \\  ',
      ' \\ \\ \\ ',
      '  \\ \\_\\',
      '   \\/_/',
      '       ',
      '       ',
    );
    $font['j'] = array(
      '        ',
      ' __     ',
      '/\\_\\    ',
      '\\/\\ \\   ',
      ' \\ \\ \\  ',
      ' _\\ \\ \\ ',
      '/\\ \\_\\ \\',
      '\\ \\____/',
      ' \\/___/ ',
    );
    $font['k'] = array(
      ' __         ',
      '/\\ \\        ',
      '\\ \\ \\/\'\\    ',
      ' \\ \\ , <    ',
      '  \\ \\ \\\\`\\  ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['l'] = array(
      ' ___      ',
      '/\\_ \\     ',
      '\\//\\ \\    ',
      '  \\ \\ \\   ',
      '   \\_\\ \\_ ',
      '   /\\____\\',
      '   \\/____/',
      '          ',
      '          ',
    );
    $font['m'] = array(
      '             ',
      '             ',
      '  ___ ___    ',
      '/\' __` __`\\  ',
      '/\\ \\/\\ \\/\\ \\ ',
      '\\ \\_\\ \\_\\ \\_\\',
      ' \\/_/\\/_/\\/_/',
      '             ',
      '             ',
    );
    $font['n'] = array(
      '         ',
      '         ',
      '  ___    ',
      '/\' _ `\\  ',
      '/\\ \\/\\ \\ ',
      '\\ \\_\\ \\_\\',
      ' \\/_/\\/_/',
      '         ',
      '         ',
    );
    $font['o'] = array(
      '        ',
      '        ',
      '  ___   ',
      ' / __`\\ ',
      '/\\ \\L\\ \\',
      '\\ \\____/',
      ' \\/___/ ',
      '        ',
      '        ',
    );
    $font['p'] = array(
      '         ',
      '         ',
      ' _____   ',
      '/\\ \'__`\\ ',
      '\\ \\ \\L\\ \\',
      ' \\ \\ ,__/',
      '  \\ \\ \\/ ',
      '   \\ \\_\\ ',
      '    \\/_/ ',
    );
    $font['q'] = array(
      '           ',
      '           ',
      '   __      ',
      ' /\'__`\\    ',
      '/\\ \\L\\ \\   ',
      '\\ \\___, \\  ',
      ' \\/___/\\ \\ ',
      '      \\ \\_\\',
      '       \\/_/',
    );
    $font['r'] = array(
      '       ',
      '       ',
      ' _ __  ',
      '/\\`\'__\\',
      '\\ \\ \\/ ',
      ' \\ \\_\\ ',
      '  \\/_/ ',
      '       ',
      '       ',
    );
    $font['s'] = array(
      '        ',
      '        ',
      '  ____  ',
      ' /\',__\\ ',
      '/\\__, `\\',
      '\\/\\____/',
      ' \\/___/ ',
      '        ',
      '        ',
    );
    $font['t'] = array(
      ' __      ',
      '/\\ \\__   ',
      '\\ \\ ,_\\  ',
      ' \\ \\ \\/  ',
      '  \\ \\ \\_ ',
      '   \\ \\__\\',
      '    \\/__/',
      '         ',
      '         ',
    );
    $font['u'] = array(
      '         ',
      '         ',
      ' __  __  ',
      '/\\ \\/\\ \\ ',
      '\\ \\ \\_\\ \\',
      ' \\ \\____/',
      '  \\/___/ ',
      '         ',
      '         ',
    );
    $font['v'] = array(
      '         ',
      '         ',
      ' __  __  ',
      '/\\ \\/\\ \\ ',
      '\\ \\ \\_/ |',
      ' \\ \\___/ ',
      '  \\/__/  ',
      '         ',
      '         ',
    );
    $font['w'] = array(
      '             ',
      '             ',
      ' __  __  __  ',
      '/\\ \\/\\ \\/\\ \\ ',
      '\\ \\ \\_/ \\_/ \\',
      ' \\ \\___x___/\'',
      '  \\/__//__/  ',
      '             ',
      '             ',
    );
    $font['x'] = array(
      '        ',
      '        ',
      ' __  _  ',
      '/\\ \\/\'\\ ',
      '\\/>  </ ',
      ' /\\_/\\_\\',
      ' \\//\\/_/',
      '        ',
      '        ',
    );
    $font['y'] = array(
      '           ',
      '           ',
      ' __  __    ',
      '/\\ \\/\\ \\   ',
      '\\ \\ \\_\\ \\  ',
      ' \\/`____ \\ ',
      '  `/___/> \\',
      '     /\\___/',
      '     \\/__/ ',
    );
    $font['z'] = array(
      '         ',
      '         ',
      ' ____    ',
      '/\\_ ,`\\  ',
      '\\/_/  /_ ',
      '  /\\____\\',
      '  \\/____/',
      '         ',
      '         ',
    );
    $font['A'] = array(
      ' ______     ',
      '/\\  _  \\    ',
      '\\ \\ \\L\\ \\   ',
      ' \\ \\  __ \\  ',
      '  \\ \\ \\/\\ \\ ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['B'] = array(
      ' ____      ',
      '/\\  _`\\    ',
      '\\ \\ \\L\\ \\  ',
      ' \\ \\  _ <\' ',
      '  \\ \\ \\L\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['C'] = array(
      ' ____      ',
      '/\\  _`\\    ',
      '\\ \\ \\/\\_\\  ',
      ' \\ \\ \\/_/_ ',
      '  \\ \\ \\L\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['D'] = array(
      ' ____      ',
      '/\\  _`\\    ',
      '\\ \\ \\/\\ \\  ',
      ' \\ \\ \\ \\ \\ ',
      '  \\ \\ \\_\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['E'] = array(
      ' ____      ',
      '/\\  _`\\    ',
      '\\ \\ \\L\\_\\  ',
      ' \\ \\  _\\L  ',
      '  \\ \\ \\L\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['F'] = array(
      ' ____    ',
      '/\\  _`\\  ',
      '\\ \\ \\L\\_\\',
      ' \\ \\  _\\/',
      '  \\ \\ \\/ ',
      '   \\ \\_\\ ',
      '    \\/_/ ',
      '         ',
      '         ',
    );
    $font['G'] = array(
      ' ____      ',
      '/\\  _`\\    ',
      '\\ \\ \\L\\_\\  ',
      ' \\ \\ \\L_L  ',
      '  \\ \\ \\/, \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['H'] = array(
      ' __  __     ',
      '/\\ \\/\\ \\    ',
      '\\ \\ \\_\\ \\   ',
      ' \\ \\  _  \\  ',
      '  \\ \\ \\ \\ \\ ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['I'] = array(
      ' ______     ',
      '/\\__  _\\    ',
      '\\/_/\\ \\/    ',
      '   \\ \\ \\    ',
      '    \\_\\ \\__ ',
      '    /\\_____\\',
      '    \\/_____/',
      '            ',
      '            ',
    );
    $font['J'] = array(
      ' _____    ',
      '/\\___ \\   ',
      '\\/__/\\ \\  ',
      '   _\\ \\ \\ ',
      '  /\\ \\_\\ \\',
      '  \\ \\____/',
      '   \\/___/ ',
      '          ',
      '          ',
    );
    $font['K'] = array(
      ' __  __     ',
      '/\\ \\/\\ \\    ',
      '\\ \\ \\/\'/\'   ',
      ' \\ \\ , <    ',
      '  \\ \\ \\\\`\\  ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['L'] = array(
      ' __        ',
      '/\\ \\       ',
      '\\ \\ \\      ',
      ' \\ \\ \\  __ ',
      '  \\ \\ \\L\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['M'] = array(
      '            ',
      ' /\'\\_/`\\    ',
      '/\\      \\   ',
      '\\ \\ \\__\\ \\  ',
      ' \\ \\ \\_/\\ \\ ',
      '  \\ \\_\\\\ \\_\\',
      '   \\/_/ \\/_/',
      '            ',
      '            ',
    );
    $font['N'] = array(
      ' __  __     ',
      '/\\ \\/\\ \\    ',
      '\\ \\ `\\\\ \\   ',
      ' \\ \\ , ` \\  ',
      '  \\ \\ \\`\\ \\ ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/_/',
      '            ',
      '            ',
    );
    $font['O'] = array(
      ' _____      ',
      '/\\  __`\\    ',
      '\\ \\ \\/\\ \\   ',
      ' \\ \\ \\ \\ \\  ',
      '  \\ \\ \\_\\ \\ ',
      '   \\ \\_____\\',
      '    \\/_____/',
      '            ',
      '            ',
    );
    $font['P'] = array(
      ' ____    ',
      '/\\  _`\\  ',
      '\\ \\ \\L\\ \\',
      ' \\ \\ ,__/',
      '  \\ \\ \\/ ',
      '   \\ \\_\\ ',
      '    \\/_/ ',
      '         ',
      '         ',
    );
    $font['Q'] = array(
      ' _____      ',
      '/\\  __`\\    ',
      '\\ \\ \\/\\ \\   ',
      ' \\ \\ \\ \\ \\  ',
      '  \\ \\ \\\\\'\\\\ ',
      '   \\ \\___\\_\\',
      '    \\/__//_/',
      '            ',
      '            ',
    );
    $font['R'] = array(
      ' ____       ',
      '/\\  _`\\     ',
      '\\ \\ \\L\\ \\   ',
      ' \\ \\ ,  /   ',
      '  \\ \\ \\\\ \\  ',
      '   \\ \\_\\ \\_\\',
      '    \\/_/\\/ /',
      '            ',
      '            ',
    );
    $font['S'] = array(
      ' ____       ',
      '/\\  _`\\     ',
      '\\ \\,\\L\\_\\   ',
      ' \\/_\\__ \\   ',
      '   /\\ \\L\\ \\ ',
      '   \\ `\\____\\',
      '    \\/_____/',
      '            ',
      '            ',
    );
    $font['T'] = array(
      ' ______   ',
      '/\\__  _\\  ',
      '\\/_/\\ \\/  ',
      '   \\ \\ \\  ',
      '    \\ \\ \\ ',
      '     \\ \\_\\',
      '      \\/_/',
      '          ',
      '          ',
    );
    $font['U'] = array(
      ' __  __     ',
      '/\\ \\/\\ \\    ',
      '\\ \\ \\ \\ \\   ',
      ' \\ \\ \\ \\ \\  ',
      '  \\ \\ \\_\\ \\ ',
      '   \\ \\_____\\',
      '    \\/_____/',
      '            ',
      '            ',
    );
    $font['V'] = array(
      ' __  __    ',
      '/\\ \\/\\ \\   ',
      '\\ \\ \\ \\ \\  ',
      ' \\ \\ \\ \\ \\ ',
      '  \\ \\ \\_/ \\',
      '   \\ `\\___/',
      '    `\\/__/ ',
      '           ',
      '           ',
    );
    $font['W'] = array(
      ' __      __    ',
      '/\\ \\  __/\\ \\   ',
      '\\ \\ \\/\\ \\ \\ \\  ',
      ' \\ \\ \\ \\ \\ \\ \\ ',
      '  \\ \\ \\_/ \\_\\ \\',
      '   \\ `\\___x___/',
      '    \'\\/__//__/ ',
      '               ',
      '               ',
    );
    $font['X'] = array(
      ' __   __     ',
      '/\\ \\ /\\ \\    ',
      '\\ `\\`\\/\'/\'   ',
      ' `\\/ > <     ',
      '    \\/\'/\\`\\  ',
      '    /\\_\\\\ \\_\\',
      '    \\/_/ \\/_/',
      '             ',
      '             ',
    );
    $font['Y'] = array(
      ' __    __ ',
      '/\\ \\  /\\ \\',
      '\\ `\\`\\\\/\'/',
      ' `\\ `\\ /\' ',
      '   `\\ \\ \\ ',
      '     \\ \\_\\',
      '      \\/_/',
      '          ',
      '          ',
    );
    $font['Z'] = array(
      ' ________     ',
      '/\\_____  \\    ',
      '\\/____//\'/\'   ',
      '     //\'/\'    ',
      '    //\'/\'___  ',
      '    /\\_______\\',
      '    \\/_______/',
      '              ',
      '              ',
    );
    $font['0'] = array(
      '   __     ',
      ' /\'__`\\   ',
      '/\\ \\/\\ \\  ',
      '\\ \\ \\ \\ \\ ',
      ' \\ \\ \\_\\ \\',
      '  \\ \\____/',
      '   \\/___/ ',
      '          ',
      '          ',
    );
    $font['1'] = array(
      '   _     ',
      ' /\' \\    ',
      '/\\_, \\   ',
      '\\/_/\\ \\  ',
      '   \\ \\ \\ ',
      '    \\ \\_\\',
      '     \\/_/',
      '         ',
      '         ',
    );
    $font['2'] = array(
      '   ___     ',
      ' /\'___`\\   ',
      '/\\_\\ /\\ \\  ',
      '\\/_/// /__ ',
      '   // /_\\ \\',
      '  /\\______/',
      '  \\/_____/ ',
      '           ',
      '           ',
    );
    $font['3'] = array(
      '   __     ',
      ' /\'__`\\   ',
      '/\\_\\L\\ \\  ',
      '\\/_/_\\_<_ ',
      '  /\\ \\L\\ \\',
      '  \\ \\____/',
      '   \\/___/ ',
      '          ',
      '          ',
    );
    $font['4'] = array(
      ' __ __      ',
      '/\\ \\\\ \\     ',
      '\\ \\ \\\\ \\    ',
      ' \\ \\ \\\\ \\_  ',
      '  \\ \\__ ,__\\',
      '   \\/_/\\_\\_/',
      '      \\/_/  ',
      '            ',
      '            ',
    );
    $font['5'] = array(
      ' ______    ',
      '/\\  ___\\   ',
      '\\ \\ \\__/   ',
      ' \\ \\___``\\ ',
      '  \\/\\ \\L\\ \\',
      '   \\ \\____/',
      '    \\/___/ ',
      '           ',
      '           ',
    );
    $font['6'] = array(
      '  ____    ',
      ' /\'___\\   ',
      '/\\ \\__/   ',
      '\\ \\  _``\\ ',
      ' \\ \\ \\L\\ \\',
      '  \\ \\____/',
      '   \\/___/ ',
      '          ',
      '          ',
    );
    $font['7'] = array(
      ' ________ ',
      '/\\_____  \\',
      '\\/___//\'/\'',
      '    /\' /\' ',
      '  /\' /\'   ',
      ' /\\_/     ',
      ' \\//      ',
      '          ',
      '          ',
    );
    $font['8'] = array(
      '   __     ',
      ' /\'_ `\\   ',
      '/\\ \\L\\ \\  ',
      '\\/_> _ <_ ',
      '  /\\ \\L\\ \\',
      '  \\ \\____/',
      '   \\/___/ ',
      '          ',
      '          ',
    );
    $font['9'] = array(
      '   __      ',
      ' /\'_ `\\    ',
      '/\\ \\L\\ \\   ',
      '\\ \\___, \\  ',
      ' \\/__,/\\ \\ ',
      '      \\ \\_\\',
      '       \\/_/',
      '           ',
      '           ',
    );
  
    break;
  case 'letters':

    // Font definition based on figlet font "letters" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 6;
    // $font['name'] = 'letters';
    // $font['comment'] = 'Letters by Sriram J. Gollapalli,  July 10, 1994  o__         +----------------------+          __o _.>/)_       | Sriram J. Gollapalli |        _(\\<._(_) \\(_)      +----------------------+       (_)/ (_)                 <sriram@capaccess.org>';
    $font['a'] = array(
      '        ',
      '  aa aa ',
      ' aa aaa ',
      'aa  aaa ',
      ' aaa aa ',
      '        ',
    );
    $font['b'] = array(
      'bb      ',
      'bb      ',
      'bbbbbb  ',
      'bb   bb ',
      'bbbbbb  ',
      '        ',
    );
    $font['c'] = array(
      '       ',
      '  cccc ',
      'cc     ',
      'cc     ',
      ' ccccc ',
      '       ',
    );
    $font['d'] = array(
      '     dd ',
      '     dd ',
      ' dddddd ',
      'dd   dd ',
      ' dddddd ',
      '        ',
    );
    $font['e'] = array(
      '       ',
      '  eee  ',
      'ee   e ',
      'eeeee  ',
      ' eeeee ',
      '       ',
    );
    $font['f'] = array(
      ' fff ',
      'ff   ',
      'ffff ',
      'ff   ',
      'ff   ',
      '     ',
    );
    $font['g'] = array(
      '        ',
      ' gggggg ',
      'gg   gg ',
      'ggggggg ',
      '     gg ',
      ' ggggg  ',
    );
    $font['h'] = array(
      'hh      ',
      'hh      ',
      'hhhhhh  ',
      'hh   hh ',
      'hh   hh ',
      '        ',
    );
    $font['i'] = array(
      'iii ',
      '    ',
      'iii ',
      'iii ',
      'iii ',
      '    ',
    );
    $font['j'] = array(
      '  jjj ',
      '      ',
      '  jjj ',
      '  jjj ',
      '  jjj ',
      'jjjj  ',
    );
    $font['k'] = array(
      'kk     ',
      'kk  kk ',
      'kkkkk  ',
      'kk kk  ',
      'kk  kk ',
      '       ',
    );
    $font['l'] = array(
      'lll ',
      'lll ',
      'lll ',
      'lll ',
      'lll ',
      '    ',
    );
    $font['m'] = array(
      '            ',
      'mm mm mmmm  ',
      'mmm  mm  mm ',
      'mmm  mm  mm ',
      'mmm  mm  mm ',
      '            ',
    );
    $font['n'] = array(
      '        ',
      'nn nnn  ',
      'nnn  nn ',
      'nn   nn ',
      'nn   nn ',
      '        ',
    );
    $font['o'] = array(
      '       ',
      ' oooo  ',
      'oo  oo ',
      'oo  oo ',
      ' oooo  ',
      '       ',
    );
    $font['p'] = array(
      '        ',
      'pp pp   ',
      'ppp  pp ',
      'pppppp  ',
      'pp      ',
      'pp      ',
    );
    $font['q'] = array(
      '        ',
      '  qqqqq ',
      'qq   qq ',
      ' qqqqqq ',
      '     qq ',
      '     qq ',
    );
    $font['r'] = array(
      '       ',
      'rr rr  ',
      'rrr  r ',
      'rr     ',
      'rr     ',
      '       ',
    );
    $font['s'] = array(
      '      ',
      ' sss  ',
      's     ',
      ' sss  ',
      '    s ',
      ' sss  ',
    );
    $font['t'] = array(
      'tt    ',
      'tt    ',
      'tttt  ',
      'tt    ',
      ' tttt ',
      '      ',
    );
    $font['u'] = array(
      '        ',
      'uu   uu ',
      'uu   uu ',
      'uu   uu ',
      ' uuuu u ',
      '        ',
    );
    $font['v'] = array(
      '        ',
      'vv   vv ',
      ' vv vv  ',
      '  vvv   ',
      '   v    ',
      '        ',
    );
    $font['w'] = array(
      '           ',
      'ww      ww ',
      'ww      ww ',
      ' ww ww ww  ',
      '  ww  ww   ',
      '           ',
    );
    $font['x'] = array(
      '       ',
      'xx  xx ',
      '  xx   ',
      '  xx   ',
      'xx  xx ',
      '       ',
    );
    $font['y'] = array(
      '        ',
      'yy   yy ',
      'yy   yy ',
      ' yyyyyy ',
      '     yy ',
      ' yyyyy  ',
    );
    $font['z'] = array(
      '      ',
      'zzzzz ',
      '  zz  ',
      ' zz   ',
      'zzzzz ',
      '      ',
    );
    $font['A'] = array(
      '  AAA   ',
      ' AAAAA  ',
      'AA   AA ',
      'AAAAAAA ',
      'AA   AA ',
      '        ',
    );
    $font['B'] = array(
      'BBBBB   ',
      'BB   B  ',
      'BBBBBB  ',
      'BB   BB ',
      'BBBBBB  ',
      '        ',
    );
    $font['C'] = array(
      ' CCCCC  ',
      'CC    C ',
      'CC      ',
      'CC    C ',
      ' CCCCC  ',
      '        ',
    );
    $font['D'] = array(
      'DDDDD   ',
      'DD  DD  ',
      'DD   DD ',
      'DD   DD ',
      'DDDDDD  ',
      '        ',
    );
    $font['E'] = array(
      'EEEEEEE ',
      'EE      ',
      'EEEEE   ',
      'EE      ',
      'EEEEEEE ',
      '        ',
    );
    $font['F'] = array(
      'FFFFFFF ',
      'FF      ',
      'FFFF    ',
      'FF      ',
      'FF      ',
      '        ',
    );
    $font['G'] = array(
      '  GGGG  ',
      ' GG  GG ',
      'GG      ',
      'GG   GG ',
      ' GGGGGG ',
      '        ',
    );
    $font['H'] = array(
      'HH   HH ',
      'HH   HH ',
      'HHHHHHH ',
      'HH   HH ',
      'HH   HH ',
      '        ',
    );
    $font['I'] = array(
      'IIIII ',
      ' III  ',
      ' III  ',
      ' III  ',
      'IIIII ',
      '      ',
    );
    $font['J'] = array(
      '    JJJ ',
      '    JJJ ',
      '    JJJ ',
      'JJ  JJJ ',
      ' JJJJJ  ',
      '        ',
    );
    $font['K'] = array(
      'KK  KK ',
      'KK KK  ',
      'KKKK   ',
      'KK KK  ',
      'KK  KK ',
      '       ',
    );
    $font['L'] = array(
      'LL      ',
      'LL      ',
      'LL      ',
      'LL      ',
      'LLLLLLL ',
      '        ',
    );
    $font['M'] = array(
      'MM    MM ',
      'MMM  MMM ',
      'MM MM MM ',
      'MM    MM ',
      'MM    MM ',
      '         ',
    );
    $font['N'] = array(
      'NN   NN ',
      'NNN  NN ',
      'NN N NN ',
      'NN  NNN ',
      'NN   NN ',
      '        ',
    );
    $font['O'] = array(
      ' OOOOO  ',
      'OO   OO ',
      'OO   OO ',
      'OO   OO ',
      ' OOOO0  ',
      '        ',
    );
    $font['P'] = array(
      'PPPPPP  ',
      'PP   PP ',
      'PPPPPP  ',
      'PP      ',
      'PP      ',
      '        ',
    );
    $font['Q'] = array(
      ' QQQQQ  ',
      'QQ   QQ ',
      'QQ   QQ ',
      'QQ  QQ  ',
      ' QQQQ Q ',
      '        ',
    );
    $font['R'] = array(
      'RRRRRR  ',
      'RR   RR ',
      'RRRRRR  ',
      'RR  RR  ',
      'RR   RR ',
      '        ',
    );
    $font['S'] = array(
      ' SSSSS  ',
      'SS      ',
      ' SSSSS  ',
      '     SS ',
      ' SSSSS  ',
      '        ',
    );
    $font['T'] = array(
      'TTTTTTT ',
      '  TTT   ',
      '  TTT   ',
      '  TTT   ',
      '  TTT   ',
      '        ',
    );
    $font['U'] = array(
      'UU   UU ',
      'UU   UU ',
      'UU   UU ',
      'UU   UU ',
      ' UUUUU  ',
      '        ',
    );
    $font['V'] = array(
      'VV     VV ',
      'VV     VV ',
      ' VV   VV  ',
      '  VV VV   ',
      '   VVV    ',
      '          ',
    );
    $font['W'] = array(
      'WW      WW ',
      'WW      WW ',
      'WW   W  WW ',
      ' WW WWW WW ',
      '  WW   WW  ',
      '           ',
    );
    $font['X'] = array(
      'XX    XX ',
      ' XX  XX  ',
      '  XXXX   ',
      ' XX  XX  ',
      'XX    XX ',
      '         ',
    );
    $font['Y'] = array(
      'YY   YY ',
      'YY   YY ',
      ' YYYYY  ',
      '  YYY   ',
      '  YYY   ',
      '        ',
    );
    $font['Z'] = array(
      'ZZZZZ ',
      '   ZZ ',
      '  ZZ  ',
      ' ZZ   ',
      'ZZZZZ ',
      '      ',
    );
    $font['0'] = array(
      ' 00000  ',
      '00   00 ',
      '00   00 ',
      '00   00 ',
      ' 00000  ',
      '        ',
    );
    $font['1'] = array(
      ' 1  ',
      '111 ',
      ' 11 ',
      ' 11 ',
      '111 ',
      '    ',
    );
    $font['2'] = array(
      ' 2222   ',
      '222222  ',
      '    222 ',
      ' 2222   ',
      '2222222 ',
      '        ',
    );
    $font['3'] = array(
      '333333  ',
      '   3333 ',
      '  3333  ',
      '    333 ',
      '333333  ',
      '        ',
    );
    $font['4'] = array(
      '    44   ',
      '   444   ',
      ' 44  4   ',
      '44444444 ',
      '   444   ',
      '         ',
    );
    $font['5'] = array(
      '555555  ',
      '55      ',
      '555555  ',
      '   5555 ',
      '555555  ',
      '        ',
    );
    $font['6'] = array(
      '  666   ',
      ' 66     ',
      '666666  ',
      '66   66 ',
      ' 66666  ',
      '        ',
    );
    $font['7'] = array(
      '7777777 ',
      '    777 ',
      '   777  ',
      '  777   ',
      ' 777    ',
      '        ',
    );
    $font['8'] = array(
      ' 88888  ',
      '88   88 ',
      ' 88888  ',
      '88   88 ',
      ' 88888  ',
      '        ',
    );
    $font['9'] = array(
      '        ',
      ' 99999  ',
      '99   99 ',
      ' 999999 ',
      '    99  ',
      '  999   ',
    );
  
    break;
  case 'mini':

    // Font definition based on figlet font "mini" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 4;
    // $font['name'] = 'mini';
    // $font['comment'] = 'Mini by Glenn Chappell 4/93Includes ISO Latin-1figlet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '    ',
      ' _. ',
      '(_| ',
      '    ',
    );
    $font['b'] = array(
      '    ',
      '|_  ',
      '|_) ',
      '    ',
    );
    $font['c'] = array(
      '   ',
      ' _ ',
      '(_ ',
      '   ',
    );
    $font['d'] = array(
      '    ',
      ' _| ',
      '(_| ',
      '    ',
    );
    $font['e'] = array(
      '    ',
      ' _  ',
      '(/_ ',
      '    ',
    );
    $font['f'] = array(
      '  _ ',
      '_|_ ',
      ' |  ',
      '    ',
    );
    $font['g'] = array(
      '    ',
      ' _  ',
      '(_| ',
      ' _| ',
    );
    $font['h'] = array(
      '    ',
      '|_  ',
      '| | ',
      '    ',
    );
    $font['i'] = array(
      '  ',
      'o ',
      '| ',
      '  ',
    );
    $font['j'] = array(
      '   ',
      ' o ',
      ' | ',
      '_| ',
    );
    $font['k'] = array(
      '   ',
      '|  ',
      '|< ',
      '   ',
    );
    $font['l'] = array(
      '  ',
      '| ',
      '| ',
      '  ',
    );
    $font['m'] = array(
      '      ',
      '._ _  ',
      '| | | ',
      '      ',
    );
    $font['n'] = array(
      '    ',
      '._  ',
      '| | ',
      '    ',
    );
    $font['o'] = array(
      '    ',
      ' _  ',
      '(_) ',
      '    ',
    );
    $font['p'] = array(
      '    ',
      '._  ',
      '|_) ',
      '|   ',
    );
    $font['q'] = array(
      '    ',
      ' _. ',
      '(_| ',
      '  | ',
    );
    $font['r'] = array(
      '   ',
      '._ ',
      '|  ',
      '   ',
    );
    $font['s'] = array(
      '   ',
      ' _ ',
      '_> ',
      '   ',
    );
    $font['t'] = array(
      '    ',
      '_|_ ',
      ' |_ ',
      '    ',
    );
    $font['u'] = array(
      '    ',
      '    ',
      '|_| ',
      '    ',
    );
    $font['v'] = array(
      '   ',
      '   ',
      '\\/ ',
      '   ',
    );
    $font['w'] = array(
      '     ',
      '     ',
      '\\/\\/ ',
      '     ',
    );
    $font['x'] = array(
      '   ',
      '   ',
      '>< ',
      '   ',
    );
    $font['y'] = array(
      '   ',
      '   ',
      '\\/ ',
      '/  ',
    );
    $font['z'] = array(
      '   ',
      '_  ',
      '/_ ',
      '   ',
    );
    $font['A'] = array(
      '     ',
      ' /\\  ',
      '/--\\ ',
      '     ',
    );
    $font['B'] = array(
      ' _  ',
      '|_) ',
      '|_) ',
      '    ',
    );
    $font['C'] = array(
      ' _ ',
      '/  ',
      '\\_ ',
      '   ',
    );
    $font['D'] = array(
      ' _  ',
      '| \\ ',
      '|_/ ',
      '    ',
    );
    $font['E'] = array(
      ' _ ',
      '|_ ',
      '|_ ',
      '   ',
    );
    $font['F'] = array(
      ' _ ',
      '|_ ',
      '|  ',
      '   ',
    );
    $font['G'] = array(
      ' __ ',
      '/__ ',
      '\\_| ',
      '    ',
    );
    $font['H'] = array(
      '    ',
      '|_| ',
      '| | ',
      '    ',
    );
    $font['I'] = array(
      '___ ',
      ' |  ',
      '_|_ ',
      '    ',
    );
    $font['J'] = array(
      '    ',
      '  | ',
      '\\_| ',
      '    ',
    );
    $font['K'] = array(
      '   ',
      '|/ ',
      '|\\ ',
      '   ',
    );
    $font['L'] = array(
      '   ',
      '|  ',
      '|_ ',
      '   ',
    );
    $font['M'] = array(
      '     ',
      '|\\/| ',
      '|  | ',
      '     ',
    );
    $font['N'] = array(
      '     ',
      '|\\ | ',
      '| \\| ',
      '     ',
    );
    $font['O'] = array(
      ' _  ',
      '/ \\ ',
      '\\_/ ',
      '    ',
    );
    $font['P'] = array(
      ' _  ',
      '|_) ',
      '|   ',
      '    ',
    );
    $font['Q'] = array(
      ' _  ',
      '/ \\ ',
      '\\_X ',
      '    ',
    );
    $font['R'] = array(
      ' _  ',
      '|_) ',
      '| \\ ',
      '    ',
    );
    $font['S'] = array(
      ' __ ',
      '(_  ',
      '__) ',
      '    ',
    );
    $font['T'] = array(
      '___ ',
      ' |  ',
      ' |  ',
      '    ',
    );
    $font['U'] = array(
      '    ',
      '| | ',
      '|_| ',
      '    ',
    );
    $font['V'] = array(
      '     ',
      '\\  / ',
      ' \\/  ',
      '     ',
    );
    $font['W'] = array(
      '       ',
      '\\    / ',
      ' \\/\\/  ',
      '       ',
    );
    $font['X'] = array(
      '   ',
      '\\/ ',
      '/\\ ',
      '   ',
    );
    $font['Y'] = array(
      '    ',
      '\\_/ ',
      ' |  ',
      '    ',
    );
    $font['Z'] = array(
      '__ ',
      ' / ',
      '/_ ',
      '   ',
    );
    $font['0'] = array(
      ' _  ',
      '/ \\ ',
      '\\_/ ',
      '    ',
    );
    $font['1'] = array(
      '   ',
      '/| ',
      ' | ',
      '   ',
    );
    $font['2'] = array(
      '_  ',
      ' ) ',
      '/_ ',
      '   ',
    );
    $font['3'] = array(
      '_  ',
      '_) ',
      '_) ',
      '   ',
    );
    $font['4'] = array(
      '     ',
      '|_|_ ',
      '  |  ',
      '     ',
    );
    $font['5'] = array(
      ' _  ',
      '|_  ',
      ' _) ',
      '    ',
    );
    $font['6'] = array(
      ' _  ',
      '|_  ',
      '|_) ',
      '    ',
    );
    $font['7'] = array(
      '__ ',
      ' / ',
      '/  ',
      '   ',
    );
    $font['8'] = array(
      ' _  ',
      '(_) ',
      '(_) ',
      '    ',
    );
    $font['9'] = array(
      ' _  ',
      '(_| ',
      '  | ',
      '    ',
    );
  
    break;
  case 'nancyj':

    // Font definition based on figlet font "nancyj" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 8;
    // $font['name'] = 'nancyj';
    // $font['comment'] = '\t\t\t\t   nancyj.flf\t  named after the login of a woman who  asked me to make her a\t  sig. this is the font that came out of it.  this is my first\t\t  attempt at a figlet font, so leave me alone.\t\t\t       vampyr@acs.bu.edu';
    $font['a'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '`88888P8 ',
      '         ',
      '         ',
    );
    $font['b'] = array(
      'dP       ',
      '88       ',
      '88d888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '88Y8888\' ',
      '         ',
      '         ',
    );
    $font['c'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88\'  `"" ',
      '88.  ... ',
      '`88888P\' ',
      '         ',
      '         ',
    );
    $font['d'] = array(
      '      dP ',
      '      88 ',
      '.d888b88 ',
      '88\'  `88 ',
      '88.  .88 ',
      '`88888P8 ',
      '         ',
      '         ',
    );
    $font['e'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88ooood8 ',
      '88.  ... ',
      '`88888P\' ',
      '         ',
      '         ',
    );
    $font['f'] = array(
      '.8888b ',
      '88   " ',
      '88aaa  ',
      '88     ',
      '88     ',
      'dP     ',
      '       ',
      '       ',
    );
    $font['g'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '`8888P88 ',
      '     .88 ',
      ' d8888P  ',
    );
    $font['h'] = array(
      'dP       ',
      '88       ',
      '88d888b. ',
      '88\'  `88 ',
      '88    88 ',
      'dP    dP ',
      '         ',
      '         ',
    );
    $font['i'] = array(
      'oo ',
      '   ',
      'dP ',
      '88 ',
      '88 ',
      'dP ',
      '   ',
      '   ',
    );
    $font['j'] = array(
      'oo ',
      '   ',
      'dP ',
      '88 ',
      '88 ',
      '88 ',
      '88 ',
      'dP ',
    );
    $font['k'] = array(
      'dP       ',
      '88       ',
      '88  .dP  ',
      '88888"   ',
      '88  `8b. ',
      'dP   `YP ',
      '         ',
      '         ',
    );
    $font['l'] = array(
      'dP ',
      '88 ',
      '88 ',
      '88 ',
      '88 ',
      'dP ',
      '   ',
      '   ',
    );
    $font['m'] = array(
      '           ',
      '           ',
      '88d8b.d8b. ',
      '88\'`88\'`88 ',
      '88  88  88 ',
      'dP  dP  dP ',
      '           ',
      '           ',
    );
    $font['n'] = array(
      '         ',
      '         ',
      '88d888b. ',
      '88\'  `88 ',
      '88    88 ',
      'dP    dP ',
      '         ',
      '         ',
    );
    $font['o'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '`88888P\' ',
      '         ',
      '         ',
    );
    $font['p'] = array(
      '         ',
      '         ',
      '88d888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '88Y888P\' ',
      '88       ',
      'dP       ',
    );
    $font['q'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      '88\'  `88 ',
      '88.  .88 ',
      '`8888P88 ',
      '      88 ',
      '      dP ',
    );
    $font['r'] = array(
      '         ',
      '         ',
      '88d888b. ',
      '88\'  `88 ',
      '88       ',
      'dP       ',
      '         ',
      '         ',
    );
    $font['s'] = array(
      '         ',
      '         ',
      '.d8888b. ',
      'Y8ooooo. ',
      '      88 ',
      '`88888P\' ',
      '         ',
      '         ',
    );
    $font['t'] = array(
      '  dP   ',
      '  88   ',
      'd8888P ',
      '  88   ',
      '  88   ',
      '  dP   ',
      '       ',
      '       ',
    );
    $font['u'] = array(
      '         ',
      '         ',
      'dP    dP ',
      '88    88 ',
      '88.  .88 ',
      '`88888P\' ',
      '         ',
      '         ',
    );
    $font['v'] = array(
      '         ',
      '         ',
      'dP   .dP ',
      '88   d8\' ',
      '88 .88\'  ',
      '8888P\'   ',
      '         ',
      '         ',
    );
    $font['w'] = array(
      '           ',
      '           ',
      'dP  dP  dP ',
      '88  88  88 ',
      '88.88b.88\' ',
      '8888P Y8P  ',
      '           ',
      '           ',
    );
    $font['x'] = array(
      '         ',
      '         ',
      'dP.  .dP ',
      ' `8bd8\'  ',
      ' .d88b.  ',
      'dP\'  `dP ',
      '         ',
      '         ',
    );
    $font['y'] = array(
      '         ',
      '         ',
      'dP    dP ',
      '88    88 ',
      '88.  .88 ',
      '`8888P88 ',
      '     .88 ',
      ' d8888P  ',
    );
    $font['z'] = array(
      '         ',
      '         ',
      'd888888b ',
      '   .d8P\' ',
      ' .Y8P    ',
      'd888888P ',
      '         ',
      '         ',
    );
    $font['A'] = array(
      ' .d888888  ',
      'd8\'    88  ',
      '88aaaaa88a ',
      '88     88  ',
      '88     88  ',
      '88     88  ',
      '           ',
      '           ',
    );
    $font['B'] = array(
      ' 888888ba  ',
      ' 88    `8b ',
      'a88aaaa8P\' ',
      ' 88   `8b. ',
      ' 88    .88 ',
      ' 88888888P ',
      '           ',
      '           ',
    );
    $font['C'] = array(
      ' a88888b. ',
      'd8\'   `88 ',
      '88        ',
      '88        ',
      'Y8.   .88 ',
      ' Y88888P\' ',
      '          ',
      '          ',
    );
    $font['D'] = array(
      '888888ba  ',
      '88    `8b ',
      '88     88 ',
      '88     88 ',
      '88    .8P ',
      '8888888P  ',
      '          ',
      '          ',
    );
    $font['E'] = array(
      ' 88888888b ',
      ' 88        ',
      'a88aaaa    ',
      ' 88        ',
      ' 88        ',
      ' 88888888P ',
      '           ',
      '           ',
    );
    $font['F'] = array(
      ' 88888888b ',
      ' 88        ',
      'a88aaaa    ',
      ' 88        ',
      ' 88        ',
      ' dP        ',
      '           ',
      '           ',
    );
    $font['G'] = array(
      ' .88888.  ',
      'd8\'   `88 ',
      '88        ',
      '88   YP88 ',
      'Y8.   .88 ',
      ' `88888\'  ',
      '          ',
      '          ',
    );
    $font['H'] = array(
      'dP     dP  ',
      '88     88  ',
      '88aaaaa88a ',
      '88     88  ',
      '88     88  ',
      'dP     dP  ',
      '           ',
      '           ',
    );
    $font['I'] = array(
      'dP ',
      '88 ',
      '88 ',
      '88 ',
      '88 ',
      'dP ',
      '   ',
      '   ',
    );
    $font['J'] = array(
      '       dP ',
      '       88 ',
      '       88 ',
      '       88 ',
      '88.  .d8P ',
      ' `Y8888\'  ',
      '          ',
      '          ',
    );
    $font['K'] = array(
      'dP     dP ',
      '88   .d8\' ',
      '88aaa8P\'  ',
      '88   `8b. ',
      '88     88 ',
      'dP     dP ',
      '          ',
      '          ',
    );
    $font['L'] = array(
      'dP        ',
      '88        ',
      '88        ',
      '88        ',
      '88        ',
      '88888888P ',
      '          ',
      '          ',
    );
    $font['M'] = array(
      '8888ba.88ba  ',
      '88  `8b  `8b ',
      '88   88   88 ',
      '88   88   88 ',
      '88   88   88 ',
      'dP   dP   dP ',
      '             ',
      '             ',
    );
    $font['N'] = array(
      '888888ba  ',
      '88    `8b ',
      '88     88 ',
      '88     88 ',
      '88     88 ',
      'dP     dP ',
      '          ',
      '          ',
    );
    $font['O'] = array(
      ' .88888.  ',
      'd8\'   `8b ',
      '88     88 ',
      '88     88 ',
      'Y8.   .8P ',
      ' `8888P\'  ',
      '          ',
      '          ',
    );
    $font['P'] = array(
      ' 888888ba  ',
      ' 88    `8b ',
      'a88aaaa8P\' ',
      ' 88        ',
      ' 88        ',
      ' dP        ',
      '           ',
      '           ',
    );
    $font['Q'] = array(
      ' .88888.   ',
      'd8\'   `8b  ',
      '88     88  ',
      '88  db 88  ',
      'Y8.  Y88P  ',
      ' `8888PY8b ',
      '           ',
      '           ',
    );
    $font['R'] = array(
      ' 888888ba  ',
      ' 88    `8b ',
      'a88aaaa8P\' ',
      ' 88   `8b. ',
      ' 88     88 ',
      ' dP     dP ',
      '           ',
      '           ',
    );
    $font['S'] = array(
      '.d88888b  ',
      '88.    "\' ',
      '`Y88888b. ',
      '      `8b ',
      'd8\'   .8P ',
      ' Y88888P  ',
      '          ',
      '          ',
    );
    $font['T'] = array(
      'd888888P ',
      '   88    ',
      '   88    ',
      '   88    ',
      '   88    ',
      '   dP    ',
      '         ',
      '         ',
    );
    $font['U'] = array(
      'dP     dP ',
      '88     88 ',
      '88     88 ',
      '88     88 ',
      'Y8.   .8P ',
      '`Y88888P\' ',
      '          ',
      '          ',
    );
    $font['V'] = array(
      'dP     dP ',
      '88     88 ',
      '88    .8P ',
      '88    d8\' ',
      '88  .d8P  ',
      '888888\'   ',
      '          ',
      '          ',
    );
    $font['W'] = array(
      'dP   dP   dP ',
      '88   88   88 ',
      '88  .8P  .8P ',
      '88  d8\'  d8\' ',
      '88.d8P8.d8P  ',
      '8888\' Y88\'   ',
      '             ',
      '             ',
    );
    $font['X'] = array(
      'dP    dP ',
      'Y8.  .8P ',
      ' Y8aa8P  ',
      'd8\'  `8b ',
      '88    88 ',
      'dP    dP ',
      '         ',
      '         ',
    );
    $font['Y'] = array(
      'dP    dP ',
      'Y8.  .8P ',
      ' Y8aa8P  ',
      '   88    ',
      '   88    ',
      '   dP    ',
      '         ',
      '         ',
    );
    $font['Z'] = array(
      'd8888888P ',
      '     .d8\' ',
      '   .d8\'   ',
      ' .d8\'     ',
      'd8\'       ',
      'Y8888888P ',
      '          ',
      '          ',
    );
    $font['0'] = array(
      ' a8888a  ',
      'd8\' ..8b ',
      '88 .P 88 ',
      '88 d\' 88 ',
      'Y8\'\' .8P ',
      ' Y8888P  ',
      '         ',
      '         ',
    );
    $font['1'] = array(
      'd88  ',
      ' 88  ',
      ' 88  ',
      ' 88  ',
      ' 88  ',
      'd88P ',
      '     ',
      '     ',
    );
    $font['2'] = array(
      'd8888b. ',
      '    `88 ',
      '.aaadP\' ',
      '88\'     ',
      '88.     ',
      'Y88888P ',
      '        ',
      '        ',
    );
    $font['3'] = array(
      'd8888b. ',
      '    `88 ',
      ' aaad8\' ',
      '    `88 ',
      '    .88 ',
      'd88888P ',
      '        ',
      '        ',
    );
    $font['4'] = array(
      'dP   dP ',
      '88   88 ',
      '88aaa88 ',
      '     88 ',
      '     88 ',
      '     dP ',
      '        ',
      '        ',
    );
    $font['5'] = array(
      '888888P ',
      '88\'     ',
      '88baaa. ',
      '    `88 ',
      '     88 ',
      'd88888P ',
      '        ',
      '        ',
    );
    $font['6'] = array(
      '.d8888P ',
      '88\'     ',
      '88baaa. ',
      '88` `88 ',
      '8b. .d8 ',
      '`Y888P\' ',
      '        ',
      '        ',
    );
    $font['7'] = array(
      'd88888P ',
      '    d8\' ',
      '   d8\'  ',
      '  d8\'   ',
      ' d8\'    ',
      'd8\'     ',
      '        ',
      '        ',
    );
    $font['8'] = array(
      '.d888b. ',
      'Y8\' `8P ',
      'd8bad8b ',
      '88` `88 ',
      '8b. .88 ',
      'Y88888P ',
      '        ',
      '        ',
    );
    $font['9'] = array(
      '.d888b. ',
      'Y8\' `88 ',
      '`8bad88 ',
      '    `88 ',
      'd.  .88 ',
      '`8888P  ',
      '        ',
      '        ',
    );
  
    break;
  case 'o8':

    // Font definition based on figlet font "o8" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 6;
    // $font['name'] = 'o8';
    // $font['comment'] = 'Original font by Gordon Lee <93cmgl@eng.cam.ac.uk>==================================================Original figletization by Tony Nugent (T.Nugent@sct.gu.edu.au)Version 1  - Needs refining with hardblanks and cleaning up of some ofthe characters.  The last 6 chars need to be done properly.==================================================Version 2 by Ian Chai <spectre@uiuc.edu> Added the hardblank fix andthe German characters.==================================================';
    $font['a'] = array(
      '            ',
      '  ooooooo   ',
      '  ooooo888  ',
      '888    888  ',
      ' 88ooo88 8o ',
      '            ',
    );
    $font['b'] = array(
      'oooo        ',
      ' 888ooooo   ',
      ' 888    888 ',
      ' 888    888 ',
      'o888ooo88   ',
      '            ',
    );
    $font['c'] = array(
      '            ',
      '  ooooooo   ',
      '888     888 ',
      '888         ',
      '  88ooo888  ',
      '            ',
    );
    $font['d'] = array(
      '       oooo ',
      '  ooooo888  ',
      '888    888  ',
      '888    888  ',
      '  88ooo888o ',
      '            ',
    );
    $font['e'] = array(
      '            ',
      ' ooooooooo8 ',
      '888oooooo8  ',
      '888         ',
      '  88oooo888 ',
      '            ',
    );
    $font['f'] = array(
      '  o888o ',
      'o888oo  ',
      ' 888    ',
      ' 888    ',
      'o888o   ',
      '        ',
    );
    $font['g'] = array(
      '            ',
      '  oooooooo8 ',
      '888    88o  ',
      ' 888oo888o  ',
      '888     888 ',
      ' 888ooo888  ',
    );
    $font['h'] = array(
      'oooo        ',
      ' 888ooooo   ',
      ' 888   888  ',
      ' 888   888  ',
      'o888o o888o ',
      '            ',
    );
    $font['i'] = array(
      'o88   ',
      'oooo  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
    );
    $font['j'] = array(
      ' o88 ',
      'oooo ',
      ' 888 ',
      ' 888 ',
      ' 888 ',
      'o88  ',
    );
    $font['k'] = array(
      'oooo        ',
      ' 888  ooooo ',
      ' 888o888    ',
      ' 8888 88o   ',
      'o888o o888o ',
      '            ',
    );
    $font['l'] = array(
      'o888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
    );
    $font['m'] = array(
      '              ',
      'oo ooo oooo   ',
      ' 888 888 888  ',
      ' 888 888 888  ',
      'o888o888o888o ',
      '              ',
    );
    $font['n'] = array(
      '            ',
      'oo oooooo   ',
      ' 888   888  ',
      ' 888   888  ',
      'o888o o888o ',
      '            ',
    );
    $font['o'] = array(
      '            ',
      '  ooooooo   ',
      '888     888 ',
      '888     888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['p'] = array(
      '            ',
      'ooooooooo   ',
      ' 888    888 ',
      ' 888    888 ',
      ' 888ooo88   ',
      'o888        ',
    );
    $font['q'] = array(
      '            ',
      '  ooooooooo ',
      '888    888  ',
      '888    888  ',
      '  88ooo888  ',
      '       888o ',
    );
    $font['r'] = array(
      '            ',
      'oo oooooo   ',
      ' 888    888 ',
      ' 888        ',
      'o888o       ',
      '            ',
    );
    $font['s'] = array(
      '            ',
      ' oooooooo8  ',
      '888ooooooo  ',
      '        888 ',
      '88oooooo88  ',
      '            ',
    );
    $font['t'] = array(
      '  o8   ',
      'o888oo ',
      ' 888   ',
      ' 888   ',
      '  888o ',
      '       ',
    );
    $font['u'] = array(
      '            ',
      'oooo  oooo  ',
      ' 888   888  ',
      ' 888   888  ',
      '  888o88 8o ',
      '            ',
    );
    $font['v'] = array(
      '            ',
      'oooo   oooo ',
      ' 888   888  ',
      '  888 888   ',
      '    888     ',
      '            ',
    );
    $font['w'] = array(
      '              ',
      'oooo  o  oooo ',
      ' 888 888 888  ',
      '  888888888   ',
      '   88   88    ',
      '              ',
    );
    $font['x'] = array(
      '            ',
      'oooo   oooo ',
      '  888o888   ',
      '  o88 88o   ',
      'o88o   o88o ',
      '            ',
    );
    $font['y'] = array(
      '            ',
      'oooo   oooo ',
      ' 888   888  ',
      '  888 888   ',
      '    8888    ',
      ' o8o888     ',
    );
    $font['z'] = array(
      '            ',
      'ooooooooooo ',
      '     8888   ',
      '  8888      ',
      'o888ooooooo ',
      '            ',
    );
    $font['A'] = array(
      '     o      ',
      '    888     ',
      '   8  88    ',
      '  8oooo88   ',
      'o88o  o888o ',
      '            ',
    );
    $font['B'] = array(
      'oooooooooo  ',
      ' 888    888 ',
      ' 888oooo88  ',
      ' 888    888 ',
      'o888ooo888  ',
      '            ',
    );
    $font['C'] = array(
      '  oooooooo8 ',
      'o888     88 ',
      '888         ',
      '888o     oo ',
      ' 888oooo88  ',
      '            ',
    );
    $font['D'] = array(
      'ooooooooo   ',
      ' 888    88o ',
      ' 888    888 ',
      ' 888    888 ',
      'o888ooo88   ',
      '            ',
    );
    $font['E'] = array(
      'ooooooooooo ',
      ' 888    88  ',
      ' 888ooo8    ',
      ' 888    oo  ',
      'o888ooo8888 ',
      '            ',
    );
    $font['F'] = array(
      'ooooooooooo ',
      ' 888    88  ',
      ' 888ooo8    ',
      ' 888        ',
      'o888o       ',
      '            ',
    );
    $font['G'] = array(
      '  ooooooo8  ',
      'o888    88  ',
      '888    oooo ',
      '888o    88  ',
      ' 888ooo888  ',
      '            ',
    );
    $font['H'] = array(
      'ooooo ooooo ',
      ' 888   888  ',
      ' 888ooo888  ',
      ' 888   888  ',
      'o888o o888o ',
      '            ',
    );
    $font['I'] = array(
      'ooooo ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
    );
    $font['J'] = array(
      '  ooooo ',
      '   888  ',
      '   888  ',
      '   888  ',
      '   888  ',
      '8o888   ',
    );
    $font['K'] = array(
      'oooo   oooo ',
      ' 888  o88   ',
      ' 888888     ',
      ' 888  88o   ',
      'o888o o888o ',
      '            ',
    );
    $font['L'] = array(
      'ooooo       ',
      ' 888        ',
      ' 888        ',
      ' 888      o ',
      'o888ooooo88 ',
      '            ',
    );
    $font['M'] = array(
      'oooo     oooo ',
      ' 8888o   888  ',
      ' 88 888o8 88  ',
      ' 88  888  88  ',
      'o88o  8  o88o ',
      '              ',
    );
    $font['N'] = array(
      'oooo   oooo ',
      ' 8888o  88  ',
      ' 88 888o88  ',
      ' 88   8888  ',
      'o88o    88  ',
      '            ',
    );
    $font['O'] = array(
      '  ooooooo   ',
      'o888   888o ',
      '888     888 ',
      '888o   o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['P'] = array(
      'oooooooooo  ',
      ' 888    888 ',
      ' 888oooo88  ',
      ' 888        ',
      'o888o       ',
      '            ',
    );
    $font['Q'] = array(
      '  ooooooo   ',
      'o888   888o ',
      '888     888 ',
      '888o  8o888 ',
      '  88ooo88   ',
      '       88o8 ',
    );
    $font['R'] = array(
      'oooooooooo  ',
      ' 888    888 ',
      ' 888oooo88  ',
      ' 888  88o   ',
      'o888o  88o8 ',
      '            ',
    );
    $font['S'] = array(
      ' oooooooo8  ',
      '888         ',
      ' 888oooooo  ',
      '        888 ',
      'o88oooo888  ',
      '            ',
    );
    $font['T'] = array(
      'ooooooooooo ',
      '88  888  88 ',
      '    888     ',
      '    888     ',
      '   o888o    ',
      '            ',
    );
    $font['U'] = array(
      'ooooo  oooo ',
      ' 888    88  ',
      ' 888    88  ',
      ' 888    88  ',
      '  888oo88   ',
      '            ',
    );
    $font['V'] = array(
      'ooooo  oooo ',
      ' 888    88  ',
      '  888  88   ',
      '   88888    ',
      '    888     ',
      '            ',
    );
    $font['W'] = array(
      'oooo     oooo ',
      ' 88   88  88  ',
      '  88 888 88   ',
      '   888 888    ',
      '    8   8     ',
      '              ',
    );
    $font['X'] = array(
      'ooooo  oooo ',
      '  888  88   ',
      '    888     ',
      '   88 888   ',
      'o88o  o888o ',
      '            ',
    );
    $font['Y'] = array(
      'ooooo  oooo ',
      '  888  88   ',
      '    888     ',
      '    888     ',
      '   o888o    ',
      '            ',
    );
    $font['Z'] = array(
      'ooooooooooo ',
      '88    888   ',
      '    888     ',
      '  888    oo ',
      'o888oooo888 ',
      '            ',
    );
    $font['0'] = array(
      '  ooooooo   ',
      'o888  o888o ',
      '888  8  888 ',
      '888o8  o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['1'] = array(
      '  oo  ',
      'o888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
    );
    $font['2'] = array(
      '  ooooooo   ',
      'o88     888 ',
      '      o888  ',
      '   o888   o ',
      'o8888oooo88 ',
      '            ',
    );
    $font['3'] = array(
      '  ooooooo   ',
      'o88    888o ',
      '    88888o  ',
      '88o    o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['4'] = array(
      '      o88   ',
      '    o8888   ',
      '  o88 888   ',
      'o888oo888oo ',
      '     o888o  ',
      '            ',
    );
    $font['5'] = array(
      'oooooooooo  ',
      '888         ',
      '888888888o  ',
      'ooo    o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['6'] = array(
      '  ooooooo   ',
      'o88         ',
      '888888888o  ',
      '88o    o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['7'] = array(
      'ooooooooooo ',
      '888    888  ',
      '      888   ',
      '     888    ',
      '    888     ',
      '            ',
    );
    $font['8'] = array(
      '  ooooooo   ',
      'o888   888o ',
      ' 888888888  ',
      '888o   o888 ',
      '  88ooo88   ',
      '            ',
    );
    $font['9'] = array(
      ' ooooooo   ',
      '888    88o ',
      ' 888oo8888 ',
      '      888  ',
      '   o888    ',
      '           ',
    );
  
    break;
  case 'ogre':

    // Font definition based on figlet font "ogre" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 6;
    // $font['name'] = 'ogre';
    // $font['comment'] = 'Standard by Glenn Chappell & Ian Chai 3/93 -- based on .sig of Frank SheeranFiglet release 2.0 -- August 5, 1993Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed6    - height of a character5    - height of a character, not including descenders20   - max line length (excluding comment lines) + a fudge factor15   - default smushmode for this font (like "-m 15" on command line)13   - number of comment lines';
    $font['a'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '| |__  ',
      '| \'_ \\ ',
      '| |_) |',
      '|_.__/ ',
      '       ',
    );
    $font['c'] = array(
      '      ',
      '  ___ ',
      ' / __|',
      '| (__ ',
      ' \\___|',
      '      ',
    );
    $font['d'] = array(
      '     _ ',
      '  __| |',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
    );
    $font['e'] = array(
      '      ',
      '  ___ ',
      ' / _ \\',
      '|  __/',
      ' \\___|',
      '      ',
    );
    $font['f'] = array(
      '  __ ',
      ' / _|',
      '| |_ ',
      '|  _|',
      '|_|  ',
      '     ',
    );
    $font['g'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      ' |___/ ',
    );
    $font['h'] = array(
      ' _     ',
      '| |__  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '  | |',
      '  | |',
      ' _/ |',
      '|__/ ',
    );
    $font['k'] = array(
      ' _    ',
      '| | __',
      '| |/ /',
      '|   < ',
      '|_|\\_\\',
      '      ',
    );
    $font['l'] = array(
      ' _ ',
      '| |',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['m'] = array(
      '           ',
      ' _ __ ___  ',
      '| \'_ ` _ \\ ',
      '| | | | | |',
      '|_| |_| |_|',
      '           ',
    );
    $font['n'] = array(
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| |_) |',
      '| .__/ ',
      '|_|    ',
    );
    $font['q'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '    |_|',
    );
    $font['r'] = array(
      '      ',
      ' _ __ ',
      '| \'__|',
      '| |   ',
      '|_|   ',
      '      ',
    );
    $font['s'] = array(
      '     ',
      ' ___ ',
      '/ __|',
      '\\__ \\',
      '|___/',
      '     ',
    );
    $font['t'] = array(
      ' _   ',
      '| |_ ',
      '| __|',
      '| |_ ',
      ' \\__|',
      '     ',
    );
    $font['u'] = array(
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__,_|',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
    );
    $font['w'] = array(
      '          ',
      '__      __',
      '\\ \\ /\\ / /',
      ' \\ V  V / ',
      '  \\_/\\_/  ',
      '          ',
    );
    $font['x'] = array(
      '      ',
      '__  __',
      '\\ \\/ /',
      ' >  < ',
      '/_/\\_\\',
      '      ',
    );
    $font['y'] = array(
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__, |',
      ' |___/ ',
    );
    $font['z'] = array(
      '     ',
      ' ____',
      '|_  /',
      ' / / ',
      '/___|',
      '     ',
    );
    $font['A'] = array(
      '   _   ',
      '  /_\\  ',
      ' //_\\\\ ',
      '/  _  \\',
      '\\_/ \\_/',
      '       ',
    );
    $font['B'] = array(
      '   ___ ',
      '  / __\\',
      ' /__\\//',
      '/ \\/  \\',
      '\\_____/',
      '       ',
    );
    $font['C'] = array(
      '   ___ ',
      '  / __\\',
      ' / /   ',
      '/ /___ ',
      '\\____/ ',
      '       ',
    );
    $font['D'] = array(
      '    ___ ',
      '   /   \\',
      '  / /\\ /',
      ' / /_// ',
      '/___,\'  ',
      '        ',
    );
    $font['E'] = array(
      '   __ ',
      '  /__\\',
      ' /_\\  ',
      '//__  ',
      '\\__/  ',
      '      ',
    );
    $font['F'] = array(
      '   ___ ',
      '  / __\\',
      ' / _\\  ',
      '/ /    ',
      '\\/     ',
      '       ',
    );
    $font['G'] = array(
      '   ___ ',
      '  / _ \\',
      ' / /_\\/',
      '/ /_\\\\ ',
      '\\____/ ',
      '       ',
    );
    $font['H'] = array(
      '        ',
      '  /\\  /\\',
      ' / /_/ /',
      '/ __  / ',
      '\\/ /_/  ',
      '        ',
    );
    $font['I'] = array(
      '  _____ ',
      '  \\_   \\',
      '   / /\\/',
      '/\\/ /_  ',
      '\\____/  ',
      '        ',
    );
    $font['J'] = array(
      '  __  ',
      '  \\ \\ ',
      '   \\ \\',
      '/\\_/ /',
      '\\___/ ',
      '      ',
    );
    $font['K'] = array(
      '       ',
      '  /\\ /\\',
      ' / //_/',
      '/ __ \\ ',
      '\\/  \\/ ',
      '       ',
    );
    $font['L'] = array(
      '   __  ',
      '  / /  ',
      ' / /   ',
      '/ /___ ',
      '\\____/ ',
      '       ',
    );
    $font['M'] = array(
      '        ',
      '  /\\/\\  ',
      ' /    \\ ',
      '/ /\\/\\ \\',
      '\\/    \\/',
      '        ',
    );
    $font['N'] = array(
      '     __ ',
      '  /\\ \\ \\',
      ' /  \\/ /',
      '/ /\\  / ',
      '\\_\\ \\/  ',
      '        ',
    );
    $font['O'] = array(
      '   ___ ',
      '  /___\\',
      ' //  //',
      '/ \\_// ',
      '\\___/  ',
      '       ',
    );
    $font['P'] = array(
      '   ___ ',
      '  / _ \\',
      ' / /_)/',
      '/ ___/ ',
      '\\/     ',
      '       ',
    );
    $font['Q'] = array(
      '   ____ ',
      '  /___ \\',
      ' //  / /',
      '/ \\_/ / ',
      '\\___,_\\ ',
      '        ',
    );
    $font['R'] = array(
      '   __  ',
      '  /__\\ ',
      ' / \\// ',
      '/ _  \\ ',
      '\\/ \\_/ ',
      '       ',
    );
    $font['S'] = array(
      ' __    ',
      '/ _\\   ',
      '\\ \\    ',
      '_\\ \\   ',
      '\\__/   ',
      '       ',
    );
    $font['T'] = array(
      ' _____ ',
      '/__   \\',
      '  / /\\/',
      ' / /   ',
      ' \\/    ',
      '       ',
    );
    $font['U'] = array(
      '       ',
      ' /\\ /\\ ',
      '/ / \\ \\',
      '\\ \\_/ /',
      ' \\___/ ',
      '       ',
    );
    $font['V'] = array(
      '        ',
      '/\\   /\\ ',
      '\\ \\ / / ',
      ' \\ V /  ',
      '  \\_/   ',
      '        ',
    );
    $font['W'] = array(
      ' __    __ ',
      '/ / /\\ \\ \\',
      '\\ \\/  \\/ /',
      ' \\  /\\  / ',
      '  \\/  \\/  ',
      '          ',
    );
    $font['X'] = array(
      '__  __',
      '\\ \\/ /',
      ' \\  / ',
      ' /  \\ ',
      '/_/\\_\\',
      '      ',
    );
    $font['Y'] = array(
      '     ',
      '/\\_/\\',
      '\\_ _/',
      ' / \\ ',
      ' \\_/ ',
      '     ',
    );
    $font['Z'] = array(
      ' _____',
      '/ _  /',
      '\\// / ',
      ' / //\\',
      '/____/',
      '      ',
    );
    $font['0'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['1'] = array(
      ' _ ',
      '/ |',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['2'] = array(
      ' ____  ',
      '|___ \\ ',
      '  __) |',
      ' / __/ ',
      '|_____|',
      '       ',
    );
    $font['3'] = array(
      ' _____ ',
      '|___ / ',
      '  |_ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
    );
    $font['4'] = array(
      ' _  _   ',
      '| || |  ',
      '| || |_ ',
      '|__   _|',
      '   |_|  ',
      '        ',
    );
    $font['5'] = array(
      ' ____  ',
      '| ___| ',
      '|___ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
    );
    $font['6'] = array(
      '  __   ',
      ' / /_  ',
      '| \'_ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['7'] = array(
      ' _____ ',
      '|___  |',
      '   / / ',
      '  / /  ',
      ' /_/   ',
      '       ',
    );
    $font['8'] = array(
      '  ___  ',
      ' ( _ ) ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['9'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\__, |',
      '   /_/ ',
      '       ',
    );
  
    break;
  case 'pebbles':

    // Font definition based on figlet font "pebbles" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 10;
    // $font['name'] = 'pebbles';
    // $font['comment'] = 'Pebbles, figletized by Empath <hades@u.washington.edu> 7/94completed by Ryan Youck (youck@cs.uregina.ca) 8/94~From: flee@cse.psu.edu (Felix Lee)Here\'s an ascii font I\'ve been working on.  I started with the idea ofusing bubbles (. o O) to build a font, using the motif .oOo. toexpress a curve.  When I sketched out the lowercase letters, it endedup looking more like pebbles than bubbles, so I renamed it.';
    $font['a'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      '.oOoO\' ',
      'O   o  ',
      'o   O  ',
      '`OoO\'o ',
      '       ',
      '       ',
    );
    $font['b'] = array(
      ' o    ',
      'O     ',
      'O     ',
      'o     ',
      'OoOo. ',
      'O   o ',
      'o   O ',
      '`OoO\' ',
      '      ',
      '      ',
    );
    $font['c'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOo  ',
      'O     ',
      'o     ',
      '`OoO\' ',
      '      ',
      '      ',
    );
    $font['d'] = array(
      '     o ',
      '    O  ',
      '    o  ',
      '    o  ',
      '.oOoO  ',
      'o   O  ',
      'O   o  ',
      '`OoO\'o ',
      '       ',
      '       ',
    );
    $font['e'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOo. ',
      'OooO\' ',
      'O     ',
      '`OoO\' ',
      '      ',
      '      ',
    );
    $font['f'] = array(
      '.oOo ',
      'O    ',
      'o    ',
      'OoO  ',
      'o    ',
      'O    ',
      'o    ',
      'O\'   ',
      '     ',
      '     ',
    );
    $font['g'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOoO ',
      'o   O ',
      'O   o ',
      '`OoOo ',
      '    O ',
      ' OoO\' ',
    );
    $font['h'] = array(
      ' o    ',
      'O     ',
      'o     ',
      'O     ',
      'OoOo. ',
      'o   o ',
      'o   O ',
      'O   o ',
      '      ',
      '      ',
    );
    $font['i'] = array(
      '   ',
      'o  ',
      '   ',
      '   ',
      'O  ',
      'o  ',
      'O  ',
      'o\' ',
      '   ',
      '   ',
    );
    $font['j'] = array(
      '    ',
      '  O ',
      '    ',
      '    ',
      ' \'o ',
      '  O ',
      '  o ',
      '  O ',
      '  o ',
      'oO\' ',
    );
    $font['k'] = array(
      'o     ',
      'O     ',
      'o     ',
      'o     ',
      'O  o  ',
      'OoO   ',
      'o  O  ',
      'O   o ',
      '      ',
      '      ',
    );
    $font['l'] = array(
      ' o ',
      'O  ',
      'o  ',
      'O  ',
      'o  ',
      'O  ',
      'o  ',
      'Oo ',
      '   ',
      '   ',
    );
    $font['m'] = array(
      '         ',
      '         ',
      '         ',
      '         ',
      '`oOOoOO. ',
      ' O  o  o ',
      ' o  O  O ',
      ' O  o  o ',
      '         ',
      '         ',
    );
    $font['n'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      '\'OoOo. ',
      ' o   O ',
      ' O   o ',
      ' o   O ',
      '       ',
      '       ',
    );
    $font['o'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOo. ',
      'O   o ',
      'o   O ',
      '`OoO\' ',
      '      ',
      '      ',
    );
    $font['p'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOo. ',
      'O   o ',
      'o   O ',
      'oOoO\' ',
      'O     ',
      'o\'    ',
    );
    $font['q'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      '.oOoO\' ',
      'O   o  ',
      'o   O  ',
      '`OoOo  ',
      '    O  ',
      '    `o ',
    );
    $font['r'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      '`OoOo. ',
      ' o     ',
      ' O     ',
      ' o     ',
      '       ',
      '       ',
    );
    $font['s'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      '.oOo  ',
      '`Ooo. ',
      '    O ',
      '`OoO\' ',
      '      ',
      '      ',
    );
    $font['t'] = array(
      '      ',
      '      ',
      '  O   ',
      ' oOo  ',
      '  o   ',
      '  O   ',
      '  o   ',
      '  `oO ',
      '      ',
      '      ',
    );
    $font['u'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      'O   o  ',
      'o   O  ',
      'O   o  ',
      '`OoO\'o ',
      '       ',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '       ',
      '       ',
      '       ',
      '`o   O ',
      ' O   o ',
      ' o  O  ',
      ' `o\'   ',
      '       ',
      '       ',
    );
    $font['w'] = array(
      '         ',
      '         ',
      '         ',
      '         ',
      '\'o     O ',
      ' O  o  o ',
      ' o  O  O ',
      ' `Oo\'oO\' ',
      '         ',
      '         ',
    );
    $font['x'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      'o   O ',
      ' OoO  ',
      ' o o  ',
      'O   O ',
      '      ',
      '      ',
    );
    $font['y'] = array(
      '      ',
      '      ',
      '      ',
      '      ',
      'O   o ',
      'o   O ',
      'O   o ',
      '`OoOO ',
      '    o ',
      ' OoO\' ',
    );
    $font['z'] = array(
      '     ',
      '     ',
      '     ',
      '     ',
      'ooOO ',
      '  o  ',
      ' O   ',
      'OooO ',
      '     ',
      '     ',
    );
    $font['A'] = array(
      '   Oo    ',
      '  o  O   ',
      ' O    o  ',
      'oOooOoOo ',
      'o      O ',
      'O      o ',
      'o      O ',
      'O.     O ',
      '         ',
      '         ',
    );
    $font['B'] = array(
      'o.oOOOo.  ',
      ' o     o  ',
      ' O     O  ',
      ' oOooOO.  ',
      ' o     `O ',
      ' O      o ',
      ' o     .O ',
      ' `OooOO\'  ',
      '          ',
      '          ',
    );
    $font['C'] = array(
      ' .oOOOo.  ',
      '.O     o  ',
      'o         ',
      'o         ',
      'o         ',
      'O         ',
      '`o     .o ',
      ' `OoooO\'  ',
      '          ',
      '          ',
    );
    $font['D'] = array(
      'o.OOOo.   ',
      ' O    `o  ',
      ' o      O ',
      ' O      o ',
      ' o      O ',
      ' O      o ',
      ' o    .O\' ',
      ' OooOO\'   ',
      '          ',
      '          ',
    );
    $font['E'] = array(
      'o.OOoOoo ',
      ' O       ',
      ' o       ',
      ' ooOO    ',
      ' O       ',
      ' o       ',
      ' O       ',
      'ooOooOoO ',
      '         ',
      '         ',
    );
    $font['F'] = array(
      'OOooOoO ',
      'o       ',
      'O       ',
      'oOooO   ',
      'O       ',
      'o       ',
      'o       ',
      'O\'      ',
      '        ',
      '        ',
    );
    $font['G'] = array(
      ' .oOOOo.  ',
      '.O     o  ',
      'o         ',
      'O         ',
      'O   .oOOo ',
      'o.      O ',
      ' O.    oO ',
      '  `OooO\'  ',
      '          ',
      '          ',
    );
    $font['H'] = array(
      'o      O ',
      'O      o ',
      'o      O ',
      'OoOooOOo ',
      'o      O ',
      'O      o ',
      'o      o ',
      'o      O ',
      '         ',
      '         ',
    );
    $font['I'] = array(
      'ooOoOOo ',
      '   O    ',
      '   o    ',
      '   O    ',
      '   o    ',
      '   O    ',
      '   O    ',
      'ooOOoOo ',
      '        ',
      '        ',
    );
    $font['J'] = array(
      '  OooOoo ',
      '      O  ',
      '      o  ',
      '      O  ',
      '      o  ',
      '      O  ',
      'O     o  ',
      '`OooOO\'  ',
      '         ',
      '         ',
    );
    $font['K'] = array(
      '`o    O  ',
      ' o   O   ',
      ' O  O    ',
      ' oOo     ',
      ' o  o    ',
      ' O   O   ',
      ' o    o  ',
      ' O     O ',
      '         ',
      '         ',
    );
    $font['L'] = array(
      ' o      ',
      'O       ',
      'o       ',
      'o       ',
      'O       ',
      'O       ',
      'o     . ',
      'OOoOooO ',
      '        ',
      '        ',
    );
    $font['M'] = array(
      'Oo      oO ',
      'O O    o o ',
      'o  o  O  O ',
      'O   Oo   O ',
      'O        o ',
      'o        O ',
      'o        O ',
      'O        o ',
      '           ',
      '           ',
    );
    $font['N'] = array(
      'o.     O ',
      'Oo     o ',
      'O O    O ',
      'O  o   o ',
      'O   o  O ',
      'o    O O ',
      'o     Oo ',
      'O     `o ',
      '         ',
      '         ',
    );
    $font['O'] = array(
      ' .oOOOo.  ',
      '.O     o. ',
      'O       o ',
      'o       O ',
      'O       o ',
      'o       O ',
      '`o     O\' ',
      ' `OoooO\'  ',
      '          ',
      '          ',
    );
    $font['P'] = array(
      'OooOOo.  ',
      'O     `O ',
      'o      O ',
      'O     .o ',
      'oOooOO\'  ',
      'o        ',
      'O        ',
      'o\'       ',
      '         ',
      '         ',
    );
    $font['Q'] = array(
      ' .oOOOo.   ',
      '.O     o.  ',
      'o       O  ',
      'O       o  ',
      'o       O  ',
      'O    Oo o  ',
      '`o     O\'  ',
      ' `OoooO Oo ',
      '           ',
      '           ',
    );
    $font['R'] = array(
      '`OooOOo.  ',
      ' o     `o ',
      ' O      O ',
      ' o     .O ',
      ' OOooOO\'  ',
      ' o    o   ',
      ' O     O  ',
      ' O      o ',
      '          ',
      '          ',
    );
    $font['S'] = array(
      '.oOOOo.  ',
      'o     o  ',
      'O.       ',
      ' `OOoo.  ',
      '      `O ',
      '       o ',
      'O.    .O ',
      ' `oooO\'  ',
      '         ',
      '         ',
    );
    $font['T'] = array(
      'oOoOOoOOo ',
      '    o     ',
      '    o     ',
      '    O     ',
      '    o     ',
      '    O     ',
      '    O     ',
      '    o\'    ',
      '          ',
      '          ',
    );
    $font['U'] = array(
      'O       o ',
      'o       O ',
      'O       o ',
      'o       o ',
      'o       O ',
      'O       O ',
      '`o     Oo ',
      ' `OoooO\'O ',
      '          ',
      '          ',
    );
    $font['V'] = array(
      'o      \'O ',
      'O       o ',
      'o       O ',
      'o       o ',
      'O      O\' ',
      '`o    o   ',
      ' `o  O    ',
      '  `o\'     ',
      '          ',
      '          ',
    );
    $font['W'] = array(
      'o          `O ',
      'O           o ',
      'o           O ',
      'O           O ',
      'o     o     o ',
      'O     O     O ',
      '`o   O o   O\' ',
      ' `OoO\' `OoO\'  ',
      '              ',
      '              ',
    );
    $font['X'] = array(
      'o      O ',
      ' O    o  ',
      '  o  O   ',
      '   oO    ',
      '   Oo    ',
      '  o  o   ',
      ' O    O  ',
      'O      o ',
      '         ',
      '         ',
    );
    $font['Y'] = array(
      'o       O ',
      'O       o ',
      '`o     O\' ',
      '  O   o   ',
      '   `O\'    ',
      '    o     ',
      '    O     ',
      '    O     ',
      '          ',
      '          ',
    );
    $font['Z'] = array(
      'OoooOOoO ',
      '      o  ',
      '     O   ',
      '    o    ',
      '   O     ',
      '  o      ',
      ' O       ',
      'OOooOooO ',
      '         ',
      '         ',
    );
    $font['0'] = array(
      '       ',
      '.oOOo. ',
      'O    o ',
      'o    O ',
      'o    o ',
      'O    O ',
      'o    O ',
      '`OooO\' ',
      '       ',
      '       ',
    );
    $font['1'] = array(
      '      ',
      ' oO   ',
      '  O   ',
      '  o   ',
      '  O   ',
      '  o   ',
      '  O   ',
      'OooOO ',
      '      ',
      '      ',
    );
    $font['2'] = array(
      '       ',
      '.oOOo. ',
      '     O ',
      '     o ',
      '    O\' ',
      '   O   ',
      ' .O    ',
      'oOoOoO ',
      '       ',
      '       ',
    );
    $font['3'] = array(
      '       ',
      '.oOOo. ',
      '     O ',
      '     o ',
      '  .oO  ',
      '     o ',
      '     O ',
      '`OooO\' ',
      '       ',
      '       ',
    );
    $font['4'] = array(
      '       ',
      'o   O  ',
      'O   o  ',
      'o   o  ',
      'OooOOo ',
      '    O  ',
      '    o  ',
      '    O  ',
      '       ',
      '       ',
    );
    $font['5'] = array(
      '       ',
      'OooOOo ',
      'o      ',
      'O      ',
      'ooOOo. ',
      '     O ',
      '     o ',
      '`OooO\' ',
      '       ',
      '       ',
    );
    $font['6'] = array(
      '       ',
      '.oOOo. ',
      'O      ',
      'o      ',
      'OoOOo. ',
      'O    O ',
      'O    o ',
      '`OooO\' ',
      '       ',
      '       ',
    );
    $font['7'] = array(
      '       ',
      'OooOoO ',
      '     o ',
      '     O ',
      '    O  ',
      '   O   ',
      '  o    ',
      ' O     ',
      '       ',
      '       ',
    );
    $font['8'] = array(
      '       ',
      '.oOOo. ',
      'O    o ',
      'o    O ',
      '`oOOo\' ',
      'O    o ',
      'o    O ',
      '`OooO\' ',
      '       ',
      '       ',
    );
    $font['9'] = array(
      '       ',
      '.oOOo. ',
      'O    o ',
      'o    O ',
      '`OooOo ',
      '     O ',
      '     o ',
      '`OooO\' ',
      '       ',
      '       ',
    );
  
    break;
  case 'puffy':

    // Font definition based on figlet font "puffy" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 8;
    // $font['name'] = 'puffy';
    // $font['comment'] = 'puffy.flf by Juan Car (jc@juguete.quim.ucm.es)Version 1.1 5/Mar/1994';
    $font['a'] = array(
      '       ',
      '       ',
      '   _ _ ',
      ' /\'_` )',
      '( (_| |',
      '`\\__,_)',
      '       ',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '( )    ',
      '| |_   ',
      '| \'_`\\ ',
      '| |_) )',
      '(_,__/\'',
      '       ',
      '       ',
    );
    $font['c'] = array(
      '       ',
      '       ',
      '   ___ ',
      ' /\'___)',
      '( (___ ',
      '`\\____)',
      '       ',
      '       ',
    );
    $font['d'] = array(
      '     _ ',
      '    ( )',
      '   _| |',
      ' /\'_` |',
      '( (_| |',
      '`\\__,_)',
      '       ',
      '       ',
    );
    $font['e'] = array(
      '       ',
      '       ',
      '   __  ',
      ' /\'__`\\',
      '(  ___/',
      '`\\____)',
      '       ',
      '       ',
    );
    $font['f'] = array(
      '   ___ ',
      ' /\'___)',
      '| (__  ',
      '| ,__) ',
      '| |    ',
      '(_)    ',
      '       ',
      '       ',
    );
    $font['g'] = array(
      '       ',
      '       ',
      '   __  ',
      ' /\'_ `\\',
      '( (_) |',
      '`\\__  |',
      '( )_) |',
      ' \\___/\'',
    );
    $font['h'] = array(
      ' _     ',
      '( )    ',
      '| |__  ',
      '|  _ `\\',
      '| | | |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['i'] = array(
      '   ',
      ' _ ',
      '(_)',
      '| |',
      '| |',
      '(_)',
      '   ',
      '   ',
    );
    $font['j'] = array(
      '       ',
      '     _ ',
      '    (_)',
      '    | |',
      '    | |',
      ' _  | |',
      '( )_| |',
      '`\\___/\'',
    );
    $font['k'] = array(
      ' _     ',
      '( )    ',
      '| |/\') ',
      '| , <  ',
      '| |\\`\\ ',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['l'] = array(
      ' _   ',
      '(_ ) ',
      ' | | ',
      ' | | ',
      ' | | ',
      '(___)',
      '     ',
      '     ',
    );
    $font['m'] = array(
      '           ',
      '           ',
      '  ___ ___  ',
      '/\' _ ` _ `\\',
      '| ( ) ( ) |',
      '(_) (_) (_)',
      '           ',
      '           ',
    );
    $font['n'] = array(
      '       ',
      '       ',
      '  ___  ',
      '/\' _ `\\',
      '| ( ) |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '       ',
      '   _   ',
      ' /\'_`\\ ',
      '( (_) )',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      '       ',
      ' _ _   ',
      '( \'_`\\ ',
      '| (_) )',
      '| ,__/\'',
      '| |    ',
      '(_)    ',
    );
    $font['q'] = array(
      '       ',
      '       ',
      '   _ _ ',
      ' /\'_` )',
      '( (_) |',
      '`\\__, |',
      '    | |',
      '    (_)',
    );
    $font['r'] = array(
      '      ',
      '      ',
      ' _ __ ',
      '( \'__)',
      '| |   ',
      '(_)   ',
      '      ',
      '      ',
    );
    $font['s'] = array(
      '      ',
      '      ',
      '  ___ ',
      '/\',__)',
      '\\__, \\',
      '(____/',
      '      ',
      '      ',
    );
    $font['t'] = array(
      ' _   ',
      '( )_ ',
      '| ,_)',
      '| |  ',
      '| |_ ',
      '`\\__)',
      '     ',
      '     ',
    );
    $font['u'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '( ) ( )',
      '| (_) |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '( ) ( )',
      '| \\_/ |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['w'] = array(
      '           ',
      '           ',
      ' _   _   _ ',
      '( ) ( ) ( )',
      '| \\_/ \\_/ |',
      '`\\___x___/\'',
      '           ',
      '           ',
    );
    $font['x'] = array(
      '      ',
      '      ',
      '      ',
      '(`\\/\')',
      ' >  < ',
      '(_/\\_)',
      '      ',
      '      ',
    );
    $font['y'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '( ) ( )',
      '| (_) |',
      '`\\__, |',
      '( )_| |',
      '`\\___/\'',
    );
    $font['z'] = array(
      '      ',
      '      ',
      ' ____ ',
      '(_  ,)',
      ' /\'/_ ',
      '(____)',
      '      ',
      '      ',
    );
    $font['A'] = array(
      ' _____ ',
      '(  _  )',
      '| (_) |',
      '|  _  |',
      '| | | |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['B'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| (_) )',
      '|  _ <\'',
      '| (_) )',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['C'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| ( (_)',
      '| |  _ ',
      '| (_( )',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['D'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| | ) |',
      '| | | )',
      '| |_) |',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['E'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| (_(_)',
      '|  _)_ ',
      '| (_( )',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['F'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| (_(_)',
      '|  _)  ',
      '| |    ',
      '(_)    ',
      '       ',
      '       ',
    );
    $font['G'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| ( (_)',
      '| |___ ',
      '| (_, )',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['H'] = array(
      ' _   _ ',
      '( ) ( )',
      '| |_| |',
      '|  _  |',
      '| | | |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['I'] = array(
      ' _ ',
      '(_)',
      '| |',
      '| |',
      '| |',
      '(_)',
      '   ',
      '   ',
    );
    $font['J'] = array(
      ' _____ ',
      '(___  )',
      '    | |',
      ' _  | |',
      '( )_| |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['K'] = array(
      ' _   _ ',
      '( ) ( )',
      '| |/\'/\'',
      '| , <  ',
      '| |\\`\\ ',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['L'] = array(
      ' _     ',
      '( )    ',
      '| |    ',
      '| |  _ ',
      '| |_( )',
      '(____/\'',
      '       ',
      '       ',
    );
    $font['M'] = array(
      '       ',
      '/\'\\_/`\\',
      '|     |',
      '| (_) |',
      '| | | |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['N'] = array(
      ' _   _ ',
      '( ) ( )',
      '| `\\| |',
      '| , ` |',
      '| |`\\ |',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['O'] = array(
      ' _____ ',
      '(  _  )',
      '| ( ) |',
      '| | | |',
      '| (_) |',
      '(_____)',
      '       ',
      '       ',
    );
    $font['P'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| |_) )',
      '| ,__/\'',
      '| |    ',
      '(_)    ',
      '       ',
      '       ',
    );
    $font['Q'] = array(
      ' _____ ',
      '(  _  )',
      '| ( ) |',
      '| | | |',
      '| ((\'\\|',
      '(___\\_)',
      '       ',
      '       ',
    );
    $font['R'] = array(
      ' ___   ',
      '|  _`\\ ',
      '| (_) )',
      '| ,  / ',
      '| |\\ \\ ',
      '(_) (_)',
      '       ',
      '       ',
    );
    $font['S'] = array(
      ' ___   ',
      '(  _`\\ ',
      '| (_(_)',
      '`\\__ \\ ',
      '( )_) |',
      '`\\____)',
      '       ',
      '       ',
    );
    $font['T'] = array(
      ' _____ ',
      '(_   _)',
      '  | |  ',
      '  | |  ',
      '  | |  ',
      '  (_)  ',
      '       ',
      '       ',
    );
    $font['U'] = array(
      ' _   _ ',
      '( ) ( )',
      '| | | |',
      '| | | |',
      '| (_) |',
      '(_____)',
      '       ',
      '       ',
    );
    $font['V'] = array(
      ' _   _ ',
      '( ) ( )',
      '| | | |',
      '| | | |',
      '| \\_/ |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['W'] = array(
      ' _       _ ',
      '( )  _  ( )',
      '| | ( ) | |',
      '| | | | | |',
      '| (_/ \\_) |',
      '`\\___x___/\'',
      '           ',
      '           ',
    );
    $font['X'] = array(
      ' _    _ ',
      '( )  ( )',
      '`\\`\\/\'/\'',
      '  >  <  ',
      ' /\'/\\`\\ ',
      '(_)  (_)',
      '        ',
      '        ',
    );
    $font['Y'] = array(
      ' _     _ ',
      '( )   ( )',
      '`\\`\\_/\'/\'',
      '  `\\ /\'  ',
      '   | |   ',
      '   (_)   ',
      '         ',
      '         ',
    );
    $font['Z'] = array(
      ' _______ ',
      '(_____  )',
      '     /\'/\'',
      '   /\'/\'  ',
      ' /\'/\'___ ',
      '(_______)',
      '         ',
      '         ',
    );
    $font['0'] = array(
      '  __   ',
      '/\' _`\\ ',
      '| ( ) |',
      '| | | |',
      '| (_) |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['1'] = array(
      '   _ ',
      ' /\' )',
      '(_, |',
      '  | |',
      '  | |',
      '  (_)',
      '     ',
      '     ',
    );
    $font['2'] = array(
      '   __   ',
      ' /\'__`\\ ',
      '(_)  ) )',
      '   /\' / ',
      ' /\' /( )',
      '(_____/\'',
      '        ',
      '        ',
    );
    $font['3'] = array(
      '   ___ ',
      ' /\'_  )',
      '(_)_) |',
      ' _(_ < ',
      '( )_) |',
      '`\\____)',
      '       ',
      '       ',
    );
    $font['4'] = array(
      ' _  _   ',
      '( )( )  ',
      '| || |  ',
      '| || |_ ',
      '(__ ,__)',
      '   (_)  ',
      '        ',
      '        ',
    );
    $font['5'] = array(
      ' _____ ',
      '(  ___)',
      '| (__  ',
      '|___ `\\',
      '( )_) |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['6'] = array(
      ' _____ ',
      '(  ___)',
      '| (__  ',
      '|  _ `\\',
      '| (_) |',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['7'] = array(
      ' _______ ',
      '(_____  )',
      '     /\'/\'',
      '   /\'/\'  ',
      ' /\'/\'    ',
      '(_/      ',
      '         ',
      '         ',
    );
    $font['8'] = array(
      '   _   ',
      ' /\'_`\\ ',
      '( (_) )',
      ' > _ <\'',
      '( (_) )',
      '`\\___/\'',
      '       ',
      '       ',
    );
    $font['9'] = array(
      '   __  ',
      ' /\'_ `\\',
      '( (_) |',
      ' \\__, |',
      '    | |',
      '    (_)',
      '       ',
      '       ',
    );
  
    break;
  case 'roman':

    // Font definition based on figlet font "roman" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 10;
    // $font['name'] = 'roman';
    // $font['comment'] = 'Roman by Nick Miners N.M.Miners@durham.ac.ukJune 1994';
    $font['a'] = array(
      '          ',
      '          ',
      ' .oooo.   ',
      '`P  )88b  ',
      ' .oP"888  ',
      'd8(  888  ',
      '`Y888""8o ',
      '          ',
      '          ',
      '          ',
    );
    $font['b'] = array(
      ' .o8       ',
      '"888       ',
      ' 888oooo.  ',
      ' d88\' `88b ',
      ' 888   888 ',
      ' 888   888 ',
      ' `Y8bod8P\' ',
      '           ',
      '           ',
      '           ',
    );
    $font['c'] = array(
      '          ',
      '          ',
      ' .ooooo.  ',
      'd88\' `"Y8 ',
      '888       ',
      '888   .o8 ',
      '`Y8bod8P\' ',
      '          ',
      '          ',
      '          ',
    );
    $font['d'] = array(
      '      .o8  ',
      '     "888  ',
      ' .oooo888  ',
      'd88\' `888  ',
      '888   888  ',
      '888   888  ',
      '`Y8bod88P" ',
      '           ',
      '           ',
      '           ',
    );
    $font['e'] = array(
      '          ',
      '          ',
      ' .ooooo.  ',
      'd88\' `88b ',
      '888ooo888 ',
      '888    .o ',
      '`Y8bod8P\' ',
      '          ',
      '          ',
      '          ',
    );
    $font['f'] = array(
      ' .o88o. ',
      ' 888 `" ',
      'o888oo  ',
      ' 888    ',
      ' 888    ',
      ' 888    ',
      'o888o   ',
      '        ',
      '        ',
      '        ',
    );
    $font['g'] = array(
      '           ',
      '           ',
      ' .oooooooo ',
      '888\' `88b  ',
      '888   888  ',
      '`88bod8P\'  ',
      '`8oooooo.  ',
      'd"     YD  ',
      '"Y88888P\'  ',
      '           ',
    );
    $font['h'] = array(
      'oooo        ',
      '`888        ',
      ' 888 .oo.   ',
      ' 888P"Y88b  ',
      ' 888   888  ',
      ' 888   888  ',
      'o888o o888o ',
      '            ',
      '            ',
      '            ',
    );
    $font['i'] = array(
      ' o8o  ',
      ' `"\'  ',
      'oooo  ',
      '`888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
      '      ',
      '      ',
    );
    $font['j'] = array(
      '    o8o ',
      '    `"\' ',
      '   oooo ',
      '   `888 ',
      '    888 ',
      '    888 ',
      '    888 ',
      '    888 ',
      '.o. 88P ',
      '`Y888P  ',
    );
    $font['k'] = array(
      'oooo        ',
      '`888        ',
      ' 888  oooo  ',
      ' 888 .8P\'   ',
      ' 888888.    ',
      ' 888 `88b.  ',
      'o888o o888o ',
      '            ',
      '            ',
      '            ',
    );
    $font['l'] = array(
      'oooo  ',
      '`888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
      '      ',
      '      ',
    );
    $font['m'] = array(
      '                  ',
      '                  ',
      'ooo. .oo.  .oo.   ',
      '`888P"Y88bP"Y88b  ',
      ' 888   888   888  ',
      ' 888   888   888  ',
      'o888o o888o o888o ',
      '                  ',
      '                  ',
      '                  ',
    );
    $font['n'] = array(
      '            ',
      '            ',
      'ooo. .oo.   ',
      '`888P"Y88b  ',
      ' 888   888  ',
      ' 888   888  ',
      'o888o o888o ',
      '            ',
      '            ',
      '            ',
    );
    $font['o'] = array(
      '          ',
      '          ',
      ' .ooooo.  ',
      'd88\' `88b ',
      '888   888 ',
      '888   888 ',
      '`Y8bod8P\' ',
      '          ',
      '          ',
      '          ',
    );
    $font['p'] = array(
      '           ',
      '           ',
      'oo.ooooo.  ',
      ' 888\' `88b ',
      ' 888   888 ',
      ' 888   888 ',
      ' 888bod8P\' ',
      ' 888       ',
      'o888o      ',
      '           ',
    );
    $font['q'] = array(
      '           ',
      '           ',
      ' .ooooo oo ',
      'd88\' `888  ',
      '888   888  ',
      '888   888  ',
      '`V8bod888  ',
      '      888. ',
      '      8P\'  ',
      '      "    ',
    );
    $font['r'] = array(
      '         ',
      '         ',
      'oooo d8b ',
      '`888""8P ',
      ' 888     ',
      ' 888     ',
      'd888b    ',
      '         ',
      '         ',
      '         ',
    );
    $font['s'] = array(
      '         ',
      '         ',
      ' .oooo.o ',
      'd88(  "8 ',
      '`"Y88b.  ',
      'o.  )88b ',
      '8""888P\' ',
      '         ',
      '         ',
      '         ',
    );
    $font['t'] = array(
      '    .   ',
      '  .o8   ',
      '.o888oo ',
      '  888   ',
      '  888   ',
      '  888 . ',
      '  "888" ',
      '        ',
      '        ',
      '        ',
    );
    $font['u'] = array(
      '            ',
      '            ',
      'oooo  oooo  ',
      '`888  `888  ',
      ' 888   888  ',
      ' 888   888  ',
      ' `V88V"V8P\' ',
      '            ',
      '            ',
      '            ',
    );
    $font['v'] = array(
      '            ',
      '            ',
      'oooo    ooo ',
      ' `88.  .8\'  ',
      '  `88..8\'   ',
      '   `888\'    ',
      '    `8\'     ',
      '            ',
      '            ',
      '            ',
    );
    $font['w'] = array(
      '                 ',
      '                 ',
      'oooo oooo    ooo ',
      ' `88. `88.  .8\'  ',
      '  `88..]88..8\'   ',
      '   `888\'`888\'    ',
      '    `8\'  `8\'     ',
      '                 ',
      '                 ',
      '                 ',
    );
    $font['x'] = array(
      '            ',
      '            ',
      'oooo    ooo ',
      ' `88b..8P\'  ',
      '   Y888\'    ',
      ' .o8"\'88b   ',
      'o88\'   888o ',
      '            ',
      '            ',
      '            ',
    );
    $font['y'] = array(
      '            ',
      '            ',
      'oooo    ooo ',
      ' `88.  .8\'  ',
      '  `88..8\'   ',
      '   `888\'    ',
      '    .8\'     ',
      '.o..P\'      ',
      '`Y8P\'       ',
      '            ',
    );
    $font['z'] = array(
      '           ',
      '           ',
      '  oooooooo ',
      ' d\'""7d8P  ',
      '   .d8P\'   ',
      ' .d8P\'  .P ',
      'd8888888P  ',
      '           ',
      '           ',
      '           ',
    );
    $font['A'] = array(
      '      .o.       ',
      '     .888.      ',
      '    .8"888.     ',
      '   .8\' `888.    ',
      '  .88ooo8888.   ',
      ' .8\'     `888.  ',
      'o88o     o8888o ',
      '                ',
      '                ',
      '                ',
    );
    $font['B'] = array(
      'oooooooooo.  ',
      '`888\'   `Y8b ',
      ' 888     888 ',
      ' 888oooo888\' ',
      ' 888    `88b ',
      ' 888    .88P ',
      'o888bood8P\'  ',
      '             ',
      '             ',
      '             ',
    );
    $font['C'] = array(
      '  .oooooo.   ',
      ' d8P\'  `Y8b  ',
      '888          ',
      '888          ',
      '888          ',
      '`88b    ooo  ',
      ' `Y8bood8P\'  ',
      '             ',
      '             ',
      '             ',
    );
    $font['D'] = array(
      'oooooooooo.   ',
      '`888\'   `Y8b  ',
      ' 888      888 ',
      ' 888      888 ',
      ' 888      888 ',
      ' 888     d88\' ',
      'o888bood8P\'   ',
      '              ',
      '              ',
      '              ',
    );
    $font['E'] = array(
      'oooooooooooo ',
      '`888\'     `8 ',
      ' 888         ',
      ' 888oooo8    ',
      ' 888    "    ',
      ' 888       o ',
      'o888ooooood8 ',
      '             ',
      '             ',
      '             ',
    );
    $font['F'] = array(
      'oooooooooooo ',
      '`888\'     `8 ',
      ' 888         ',
      ' 888oooo8    ',
      ' 888    "    ',
      ' 888         ',
      'o888o        ',
      '             ',
      '             ',
      '             ',
    );
    $font['G'] = array(
      '  .oooooo.    ',
      ' d8P\'  `Y8b   ',
      '888           ',
      '888           ',
      '888     ooooo ',
      '`88.    .88\'  ',
      ' `Y8bood8P\'   ',
      '              ',
      '              ',
      '              ',
    );
    $font['H'] = array(
      'ooooo   ooooo ',
      '`888\'   `888\' ',
      ' 888     888  ',
      ' 888ooooo888  ',
      ' 888     888  ',
      ' 888     888  ',
      'o888o   o888o ',
      '              ',
      '              ',
      '              ',
    );
    $font['I'] = array(
      'ooooo ',
      '`888\' ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
      '      ',
      '      ',
    );
    $font['J'] = array(
      '   oooo ',
      '   `888 ',
      '    888 ',
      '    888 ',
      '    888 ',
      '    888 ',
      '.o. 88P ',
      '`Y888P  ',
      '        ',
      '        ',
    );
    $font['K'] = array(
      'oooo    oooo ',
      '`888   .8P\'  ',
      ' 888  d8\'    ',
      ' 88888[      ',
      ' 888`88b.    ',
      ' 888  `88b.  ',
      'o888o  o888o ',
      '             ',
      '             ',
      '             ',
    );
    $font['L'] = array(
      'ooooo        ',
      '`888\'        ',
      ' 888         ',
      ' 888         ',
      ' 888         ',
      ' 888       o ',
      'o888ooooood8 ',
      '             ',
      '             ',
      '             ',
    );
    $font['M'] = array(
      'ooo        ooooo ',
      '`88.       .888\' ',
      ' 888b     d\'888  ',
      ' 8 Y88. .P  888  ',
      ' 8  `888\'   888  ',
      ' 8    Y     888  ',
      'o8o        o888o ',
      '                 ',
      '                 ',
      '                 ',
    );
    $font['N'] = array(
      'ooooo      ooo ',
      '`888b.     `8\' ',
      ' 8 `88b.    8  ',
      ' 8   `88b.  8  ',
      ' 8     `88b.8  ',
      ' 8       `888  ',
      'o8o        `8  ',
      '               ',
      '               ',
      '               ',
    );
    $font['O'] = array(
      '  .oooooo.   ',
      ' d8P\'  `Y8b  ',
      '888      888 ',
      '888      888 ',
      '888      888 ',
      '`88b    d88\' ',
      ' `Y8bood8P\'  ',
      '             ',
      '             ',
      '             ',
    );
    $font['P'] = array(
      'ooooooooo.   ',
      '`888   `Y88. ',
      ' 888   .d88\' ',
      ' 888ooo88P\'  ',
      ' 888         ',
      ' 888         ',
      'o888o        ',
      '             ',
      '             ',
      '             ',
    );
    $font['Q'] = array(
      '  .oooooo.      ',
      ' d8P\'  `Y8b     ',
      '888      888    ',
      '888      888    ',
      '888      888    ',
      '`88b    d88b    ',
      ' `Y8bood8P\'Ybd\' ',
      '                ',
      '                ',
      '                ',
    );
    $font['R'] = array(
      'ooooooooo.   ',
      '`888   `Y88. ',
      ' 888   .d88\' ',
      ' 888ooo88P\'  ',
      ' 888`88b.    ',
      ' 888  `88b.  ',
      'o888o  o888o ',
      '             ',
      '             ',
      '             ',
    );
    $font['S'] = array(
      ' .oooooo..o ',
      'd8P\'    `Y8 ',
      'Y88bo.      ',
      ' `"Y8888o.  ',
      '     `"Y88b ',
      'oo     .d8P ',
      '8""88888P\'  ',
      '            ',
      '            ',
      '            ',
    );
    $font['T'] = array(
      'ooooooooooooo ',
      '8\'   888   `8 ',
      '     888      ',
      '     888      ',
      '     888      ',
      '     888      ',
      '    o888o     ',
      '              ',
      '              ',
      '              ',
    );
    $font['U'] = array(
      'ooooo     ooo ',
      '`888\'     `8\' ',
      ' 888       8  ',
      ' 888       8  ',
      ' 888       8  ',
      ' `88.    .8\'  ',
      '   `YbodP\'    ',
      '              ',
      '              ',
      '              ',
    );
    $font['V'] = array(
      'oooooo     oooo ',
      ' `888.     .8\'  ',
      '  `888.   .8\'   ',
      '   `888. .8\'    ',
      '    `888.8\'     ',
      '     `888\'      ',
      '      `8\'       ',
      '                ',
      '                ',
      '                ',
    );
    $font['W'] = array(
      'oooooo   oooooo     oooo ',
      ' `888.    `888.     .8\'  ',
      '  `888.   .8888.   .8\'   ',
      '   `888  .8\'`888. .8\'    ',
      '    `888.8\'  `888.8\'     ',
      '     `888\'    `888\'      ',
      '      `8\'      `8\'       ',
      '                         ',
      '                         ',
      '                         ',
    );
    $font['X'] = array(
      'ooooooo  ooooo ',
      ' `8888    d8\'  ',
      '   Y888..8P    ',
      '    `8888\'     ',
      '   .8PY888.    ',
      '  d8\'  `888b   ',
      'o888o  o88888o ',
      '               ',
      '               ',
      '               ',
    );
    $font['Y'] = array(
      'oooooo   oooo ',
      ' `888.   .8\'  ',
      '  `888. .8\'   ',
      '   `888.8\'    ',
      '    `888\'     ',
      '     888      ',
      '    o888o     ',
      '              ',
      '              ',
      '              ',
    );
    $font['Z'] = array(
      ' oooooooooooo ',
      'd\'""""""d888\' ',
      '      .888P   ',
      '     d888\'    ',
      '   .888P      ',
      '  d888\'    .P ',
      '.8888888888P  ',
      '              ',
      '              ',
      '              ',
    );
    $font['0'] = array(
      '  .oooo.   ',
      ' d8P\'`Y8b  ',
      '888    888 ',
      '888    888 ',
      '888    888 ',
      '`88b  d88\' ',
      ' `Y8bd8P\'  ',
      '           ',
      '           ',
      '           ',
    );
    $font['1'] = array(
      '  .o  ',
      'o888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      ' 888  ',
      'o888o ',
      '      ',
      '      ',
      '      ',
    );
    $font['2'] = array(
      '  .oooo.   ',
      '.dP""Y88b  ',
      '      ]8P\' ',
      '    .d8P\'  ',
      '  .dP\'     ',
      '.oP     .o ',
      '8888888888 ',
      '           ',
      '           ',
      '           ',
    );
    $font['3'] = array(
      '  .oooo.   ',
      '.dP""Y88b  ',
      '      ]8P\' ',
      '    <88b.  ',
      '     `88b. ',
      'o.   .88P  ',
      '`8bd88P\'   ',
      '           ',
      '           ',
      '           ',
    );
    $font['4'] = array(
      '      .o   ',
      '    .d88   ',
      '  .d\'888   ',
      '.d\'  888   ',
      '88ooo888oo ',
      '     888   ',
      '    o888o  ',
      '           ',
      '           ',
      '           ',
    );
    $font['5'] = array(
      '  oooooooo ',
      ' dP""""""" ',
      'd88888b.   ',
      '    `Y88b  ',
      '      ]88  ',
      'o.   .88P  ',
      '`8bd88P\'   ',
      '           ',
      '           ',
      '           ',
    );
    $font['6'] = array(
      '    .ooo   ',
      '  .88\'     ',
      ' d88\'      ',
      'd888P"Ybo. ',
      'Y88[   ]88 ',
      '`Y88   88P ',
      ' `88bod8\'  ',
      '           ',
      '           ',
      '           ',
    );
    $font['7'] = array(
      ' ooooooooo ',
      'd"""""""8\' ',
      '      .8\'  ',
      '     .8\'   ',
      '    .8\'    ',
      '   .8\'     ',
      '  .8\'      ',
      '           ',
      '           ',
      '           ',
    );
    $font['8'] = array(
      ' .ooooo.   ',
      'd88\'   `8. ',
      'Y88..  .8\' ',
      ' `88888b.  ',
      '.8\'  ``88b ',
      '`8.   .88P ',
      ' `boood8\'  ',
      '           ',
      '           ',
      '           ',
    );
    $font['9'] = array(
      ' .ooooo.   ',
      '888\' `Y88. ',
      '888    888 ',
      ' `Vbood888 ',
      '      888\' ',
      '    .88P\'  ',
      '  .oP\'     ',
      '           ',
      '           ',
      '           ',
    );
  
    break;
  case 'rounded':

    // Font definition based on figlet font "rounded" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 7;
    // $font['name'] = 'rounded';
    // $font['comment'] = 'Rounded by Nick Miners N.M.Miners@durham.ac.ukMay 1994';
    $font['a'] = array(
      '       ',
      '       ',
      ' _____ ',
      '(____ |',
      '/ ___ |',
      '\\_____|',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '|  _ \\ ',
      '| |_) )',
      '|____/ ',
      '       ',
    );
    $font['c'] = array(
      '       ',
      '       ',
      '  ____ ',
      ' / ___)',
      '( (___ ',
      ' \\____)',
      '       ',
    );
    $font['d'] = array(
      '     _ ',
      '    | |',
      '  __| |',
      ' / _  |',
      '( (_| |',
      ' \\____|',
      '       ',
    );
    $font['e'] = array(
      '       ',
      '       ',
      ' _____ ',
      '| ___ |',
      '| ____|',
      '|_____)',
      '       ',
    );
    $font['f'] = array(
      '    ___ ',
      '   / __)',
      ' _| |__ ',
      '(_   __)',
      '  | |   ',
      '  |_|   ',
      '        ',
    );
    $font['g'] = array(
      '       ',
      '       ',
      '  ____ ',
      ' / _  |',
      '( (_| |',
      ' \\___ |',
      '(_____|',
    );
    $font['h'] = array(
      ' _     ',
      '| |    ',
      '| |__  ',
      '|  _ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      ' _ ',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '   _ ',
      '  | |',
      '  | |',
      ' _| |',
      '(__/ ',
    );
    $font['k'] = array(
      ' _     ',
      '| |    ',
      '| |  _ ',
      '| |_/ )',
      '|  _ ( ',
      '|_| \\_)',
      '       ',
    );
    $font['l'] = array(
      ' _  ',
      '| | ',
      '| | ',
      '| | ',
      '| | ',
      ' \\_)',
      '    ',
    );
    $font['m'] = array(
      '       ',
      '       ',
      ' ____  ',
      '|    \\ ',
      '| | | |',
      '|_|_|_|',
      '       ',
    );
    $font['n'] = array(
      '       ',
      '       ',
      ' ____  ',
      '|  _ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '       ',
      '  ___  ',
      ' / _ \\ ',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      '       ',
      ' ____  ',
      '|  _ \\ ',
      '| |_| |',
      '|  __/ ',
      '|_|    ',
    );
    $font['q'] = array(
      '       ',
      '       ',
      '  ____ ',
      ' / _  |',
      '| |_| |',
      ' \\__  |',
      '    |_|',
    );
    $font['r'] = array(
      '       ',
      '       ',
      '  ____ ',
      ' / ___)',
      '| |    ',
      '|_|    ',
      '       ',
    );
    $font['s'] = array(
      '      ',
      '      ',
      '  ___ ',
      ' /___)',
      '|___ |',
      '(___/ ',
      '      ',
    );
    $font['t'] = array(
      '       ',
      '   _   ',
      ' _| |_ ',
      '(_   _)',
      '  | |_ ',
      '   \\__)',
      '       ',
    );
    $font['u'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      '|____/ ',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
    );
    $font['w'] = array(
      '       ',
      '       ',
      ' _ _ _ ',
      '| | | |',
      '| | | |',
      ' \\___/ ',
      '       ',
    );
    $font['x'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '( \\ / )',
      ' ) X ( ',
      '(_/ \\_)',
      '       ',
    );
    $font['y'] = array(
      '       ',
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__  |',
      '(____/ ',
    );
    $font['z'] = array(
      '       ',
      '       ',
      ' _____ ',
      '(___  )',
      ' / __/ ',
      '(_____)',
      '       ',
    );
    $font['A'] = array(
      ' _______ ',
      '(_______)',
      ' _______ ',
      '|  ___  |',
      '| |   | |',
      '|_|   |_|',
      '         ',
    );
    $font['B'] = array(
      ' ______  ',
      '(____  \\ ',
      ' ____)  )',
      '|  __  ( ',
      '| |__)  )',
      '|______/ ',
      '         ',
    );
    $font['C'] = array(
      ' _______ ',
      '(_______)',
      ' _       ',
      '| |      ',
      '| |_____ ',
      ' \\______)',
      '         ',
    );
    $font['D'] = array(
      ' ______  ',
      '(______) ',
      ' _     _ ',
      '| |   | |',
      '| |__/ / ',
      '|_____/  ',
      '         ',
    );
    $font['E'] = array(
      ' _______ ',
      '(_______)',
      ' _____   ',
      '|  ___)  ',
      '| |_____ ',
      '|_______)',
      '         ',
    );
    $font['F'] = array(
      ' _______ ',
      '(_______)',
      ' _____   ',
      '|  ___)  ',
      '| |      ',
      '|_|      ',
      '         ',
    );
    $font['G'] = array(
      ' _______ ',
      '(_______)',
      ' _   ___ ',
      '| | (_  |',
      '| |___) |',
      ' \\_____/ ',
      '         ',
    );
    $font['H'] = array(
      ' _     _ ',
      '(_)   (_)',
      ' _______ ',
      '|  ___  |',
      '| |   | |',
      '|_|   |_|',
      '         ',
    );
    $font['I'] = array(
      ' _ ',
      '| |',
      '| |',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['J'] = array(
      ' _______ ',
      '(_______)',
      '     _   ',
      ' _  | |  ',
      '| |_| |  ',
      ' \\___/   ',
      '         ',
    );
    $font['K'] = array(
      ' _     _ ',
      '(_)   | |',
      ' _____| |',
      '|  _   _)',
      '| |  \\ \\ ',
      '|_|   \\_)',
      '         ',
    );
    $font['L'] = array(
      ' _       ',
      '(_)      ',
      ' _       ',
      '| |      ',
      '| |_____ ',
      '|_______)',
      '         ',
    );
    $font['M'] = array(
      ' _______ ',
      '(_______)',
      ' _  _  _ ',
      '| ||_|| |',
      '| |   | |',
      '|_|   |_|',
      '         ',
    );
    $font['N'] = array(
      ' _______ ',
      '(_______)',
      ' _     _ ',
      '| |   | |',
      '| |   | |',
      '|_|   |_|',
      '         ',
    );
    $font['O'] = array(
      ' _______ ',
      '(_______)',
      ' _     _ ',
      '| |   | |',
      '| |___| |',
      ' \\_____/ ',
      '         ',
    );
    $font['P'] = array(
      ' ______  ',
      '(_____ \\ ',
      ' _____) )',
      '|  ____/ ',
      '| |      ',
      '|_|      ',
      '         ',
    );
    $font['Q'] = array(
      ' _______ ',
      '(_______)',
      ' _    _  ',
      '| |  | | ',
      '| |__| | ',
      ' \\______)',
      '         ',
    );
    $font['R'] = array(
      ' ______  ',
      '(_____ \\ ',
      ' _____) )',
      '|  __  / ',
      '| |  \\ \\ ',
      '|_|   |_|',
      '         ',
    );
    $font['S'] = array(
      '  ______ ',
      ' / _____)',
      '( (____  ',
      ' \\____ \\ ',
      ' _____) )',
      '(______/ ',
      '         ',
    );
    $font['T'] = array(
      ' _______ ',
      '(_______)',
      '    _    ',
      '   | |   ',
      '   | |   ',
      '   |_|   ',
      '         ',
    );
    $font['U'] = array(
      ' _     _ ',
      '(_)   (_)',
      ' _     _ ',
      '| |   | |',
      '| |___| |',
      ' \\_____/ ',
      '         ',
    );
    $font['V'] = array(
      ' _     _ ',
      '(_)   (_)',
      ' _     _ ',
      '| |   | |',
      ' \\ \\ / / ',
      '  \\___/  ',
      '         ',
    );
    $font['W'] = array(
      ' _  _  _ ',
      '(_)(_)(_)',
      ' _  _  _ ',
      '| || || |',
      '| || || |',
      ' \\_____/ ',
      '         ',
    );
    $font['X'] = array(
      ' _     _ ',
      '(_)   (_)',
      '   ___   ',
      '  |   |  ',
      ' / / \\ \\ ',
      '|_|   |_|',
      '         ',
    );
    $font['Y'] = array(
      ' _     _ ',
      '| |   | |',
      '| |___| |',
      '|_____  |',
      ' _____| |',
      '(_______|',
      '         ',
    );
    $font['Z'] = array(
      ' _______ ',
      '(_______)',
      '   __    ',
      '  / /    ',
      ' / /____ ',
      '(_______)',
      '         ',
    );
    $font['0'] = array(
      '  _____  ',
      ' (_____) ',
      ' _  __ _ ',
      '| |/ /| |',
      '|   /_| |',
      ' \\_____/ ',
      '         ',
    );
    $font['1'] = array(
      ' ___   ',
      '(___)  ',
      '   _   ',
      '  | |  ',
      ' _| |_ ',
      '(_____)',
      '       ',
    );
    $font['2'] = array(
      ' ______  ',
      '(_____ \\ ',
      '  ____) )',
      ' / ____/ ',
      '| (_____ ',
      '|_______)',
      '         ',
    );
    $font['3'] = array(
      ' ______  ',
      '(_____ \\ ',
      ' _____) )',
      '(_____ ( ',
      ' _____) )',
      '(______/ ',
      '         ',
    );
    $font['4'] = array(
      ' _     _ ',
      '| |   (_)',
      '| |_____ ',
      '|_____  |',
      '      | |',
      '      |_|',
      '         ',
    );
    $font['5'] = array(
      ' _______ ',
      '(_______)',
      ' ______  ',
      '(_____ \\ ',
      ' _____) )',
      '(______/ ',
      '         ',
    );
    $font['6'] = array(
      ' _______ ',
      '(_______)',
      ' ______  ',
      '|  ___ \\ ',
      '| |___) )',
      '|______/ ',
      '         ',
    );
    $font['7'] = array(
      ' _______ ',
      '(_______)',
      '      _  ',
      '     / ) ',
      '    / /  ',
      '   (_/   ',
      '         ',
    );
    $font['8'] = array(
      '  _____  ',
      ' (_____) ',
      '  _____  ',
      ' / ___ \\ ',
      '( (___) )',
      ' \\_____/ ',
      '         ',
    );
    $font['9'] = array(
      ' _______ ',
      '(_______)',
      ' _______ ',
      '(_____  |',
      '      | |',
      '      |_|',
      '         ',
    );
  
    break;
  case 'slant':

    // Font definition based on figlet font "slant" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 6;
    // $font['name'] = 'slant';
    // $font['comment'] = 'Slant by Glenn Chappell 3/93 -- based on StandardIncludes ISO Latin-1figlet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '        ',
      '  ____ _',
      ' / __ `/',
      '/ /_/ / ',
      '\\__,_/  ',
      '        ',
    );
    $font['b'] = array(
      '    __  ',
      '   / /_ ',
      '  / __ \\',
      ' / /_/ /',
      '/_.___/ ',
      '        ',
    );
    $font['c'] = array(
      '       ',
      '  _____',
      ' / ___/',
      '/ /__  ',
      '\\___/  ',
      '       ',
    );
    $font['d'] = array(
      '       __',
      '  ____/ /',
      ' / __  / ',
      '/ /_/ /  ',
      '\\__,_/   ',
      '         ',
    );
    $font['e'] = array(
      '      ',
      '  ___ ',
      ' / _ \\',
      '/  __/',
      '\\___/ ',
      '      ',
    );
    $font['f'] = array(
      '    ____',
      '   / __/',
      '  / /_  ',
      ' / __/  ',
      '/_/     ',
      '        ',
    );
    $font['g'] = array(
      '         ',
      '   ____ _',
      '  / __ `/',
      ' / /_/ / ',
      ' \\__, /  ',
      '/____/   ',
    );
    $font['h'] = array(
      '    __  ',
      '   / /_ ',
      '  / __ \\',
      ' / / / /',
      '/_/ /_/ ',
      '        ',
    );
    $font['i'] = array(
      '    _ ',
      '   (_)',
      '  / / ',
      ' / /  ',
      '/_/   ',
      '      ',
    );
    $font['j'] = array(
      '       _ ',
      '      (_)',
      '     / / ',
      '    / /  ',
      ' __/ /   ',
      '/___/    ',
    );
    $font['k'] = array(
      '    __  ',
      '   / /__',
      '  / //_/',
      ' / ,<   ',
      '/_/|_|  ',
      '        ',
    );
    $font['l'] = array(
      '    __',
      '   / /',
      '  / / ',
      ' / /  ',
      '/_/   ',
      '      ',
    );
    $font['m'] = array(
      '            ',
      '   ____ ___ ',
      '  / __ `__ \\',
      ' / / / / / /',
      '/_/ /_/ /_/ ',
      '            ',
    );
    $font['n'] = array(
      '        ',
      '   ____ ',
      '  / __ \\',
      ' / / / /',
      '/_/ /_/ ',
      '        ',
    );
    $font['o'] = array(
      '       ',
      '  ____ ',
      ' / __ \\',
      '/ /_/ /',
      '\\____/ ',
      '       ',
    );
    $font['p'] = array(
      '         ',
      '    ____ ',
      '   / __ \\',
      '  / /_/ /',
      ' / .___/ ',
      '/_/      ',
    );
    $font['q'] = array(
      '        ',
      '  ____ _',
      ' / __ `/',
      '/ /_/ / ',
      '\\__, /  ',
      '  /_/   ',
    );
    $font['r'] = array(
      '        ',
      '   _____',
      '  / ___/',
      ' / /    ',
      '/_/     ',
      '        ',
    );
    $font['s'] = array(
      '        ',
      '   _____',
      '  / ___/',
      ' (__  ) ',
      '/____/  ',
      '        ',
    );
    $font['t'] = array(
      '   __ ',
      '  / /_',
      ' / __/',
      '/ /_  ',
      '\\__/  ',
      '      ',
    );
    $font['u'] = array(
      '        ',
      '  __  __',
      ' / / / /',
      '/ /_/ / ',
      '\\__,_/  ',
      '        ',
    );
    $font['v'] = array(
      '       ',
      ' _   __',
      '| | / /',
      '| |/ / ',
      '|___/  ',
      '       ',
    );
    $font['w'] = array(
      '          ',
      ' _      __',
      '| | /| / /',
      '| |/ |/ / ',
      '|__/|__/  ',
      '          ',
    );
    $font['x'] = array(
      '        ',
      '   _  __',
      '  | |/_/',
      ' _>  <  ',
      '/_/|_|  ',
      '        ',
    );
    $font['y'] = array(
      '         ',
      '   __  __',
      '  / / / /',
      ' / /_/ / ',
      ' \\__, /  ',
      '/____/   ',
    );
    $font['z'] = array(
      '     ',
      ' ____',
      '/_  /',
      ' / /_',
      '/___/',
      '     ',
    );
    $font['A'] = array(
      '    ___ ',
      '   /   |',
      '  / /| |',
      ' / ___ |',
      '/_/  |_|',
      '        ',
    );
    $font['B'] = array(
      '    ____ ',
      '   / __ )',
      '  / __  |',
      ' / /_/ / ',
      '/_____/  ',
      '         ',
    );
    $font['C'] = array(
      '   ______',
      '  / ____/',
      ' / /     ',
      '/ /___   ',
      '\\____/   ',
      '         ',
    );
    $font['D'] = array(
      '    ____ ',
      '   / __ \\',
      '  / / / /',
      ' / /_/ / ',
      '/_____/  ',
      '         ',
    );
    $font['E'] = array(
      '    ______',
      '   / ____/',
      '  / __/   ',
      ' / /___   ',
      '/_____/   ',
      '          ',
    );
    $font['F'] = array(
      '    ______',
      '   / ____/',
      '  / /_    ',
      ' / __/    ',
      '/_/       ',
      '          ',
    );
    $font['G'] = array(
      '   ______',
      '  / ____/',
      ' / / __  ',
      '/ /_/ /  ',
      '\\____/   ',
      '         ',
    );
    $font['H'] = array(
      '    __  __',
      '   / / / /',
      '  / /_/ / ',
      ' / __  /  ',
      '/_/ /_/   ',
      '          ',
    );
    $font['I'] = array(
      '    ____',
      '   /  _/',
      '   / /  ',
      ' _/ /   ',
      '/___/   ',
      '        ',
    );
    $font['J'] = array(
      '       __',
      '      / /',
      ' __  / / ',
      '/ /_/ /  ',
      '\\____/   ',
      '         ',
    );
    $font['K'] = array(
      '    __ __',
      '   / //_/',
      '  / ,<   ',
      ' / /| |  ',
      '/_/ |_|  ',
      '         ',
    );
    $font['L'] = array(
      '    __ ',
      '   / / ',
      '  / /  ',
      ' / /___',
      '/_____/',
      '       ',
    );
    $font['M'] = array(
      '    __  ___',
      '   /  |/  /',
      '  / /|_/ / ',
      ' / /  / /  ',
      '/_/  /_/   ',
      '           ',
    );
    $font['N'] = array(
      '    _   __',
      '   / | / /',
      '  /  |/ / ',
      ' / /|  /  ',
      '/_/ |_/   ',
      '          ',
    );
    $font['O'] = array(
      '   ____ ',
      '  / __ \\',
      ' / / / /',
      '/ /_/ / ',
      '\\____/  ',
      '        ',
    );
    $font['P'] = array(
      '    ____ ',
      '   / __ \\',
      '  / /_/ /',
      ' / ____/ ',
      '/_/      ',
      '         ',
    );
    $font['Q'] = array(
      '   ____ ',
      '  / __ \\',
      ' / / / /',
      '/ /_/ / ',
      '\\___\\_\\ ',
      '        ',
    );
    $font['R'] = array(
      '    ____ ',
      '   / __ \\',
      '  / /_/ /',
      ' / _, _/ ',
      '/_/ |_|  ',
      '         ',
    );
    $font['S'] = array(
      '   _____',
      '  / ___/',
      '  \\__ \\ ',
      ' ___/ / ',
      '/____/  ',
      '        ',
    );
    $font['T'] = array(
      '  ______',
      ' /_  __/',
      '  / /   ',
      ' / /    ',
      '/_/     ',
      '        ',
    );
    $font['U'] = array(
      '   __  __',
      '  / / / /',
      ' / / / / ',
      '/ /_/ /  ',
      '\\____/   ',
      '         ',
    );
    $font['V'] = array(
      ' _    __',
      '| |  / /',
      '| | / / ',
      '| |/ /  ',
      '|___/   ',
      '        ',
    );
    $font['W'] = array(
      ' _       __',
      '| |     / /',
      '| | /| / / ',
      '| |/ |/ /  ',
      '|__/|__/   ',
      '           ',
    );
    $font['X'] = array(
      '   _  __',
      '  | |/ /',
      '  |   / ',
      ' /   |  ',
      '/_/|_|  ',
      '        ',
    );
    $font['Y'] = array(
      '__  __',
      '\\ \\/ /',
      ' \\  / ',
      ' / /  ',
      '/_/   ',
      '      ',
    );
    $font['Z'] = array(
      ' _____',
      '/__  /',
      '  / / ',
      ' / /__',
      '/____/',
      '      ',
    );
    $font['0'] = array(
      '   ____ ',
      '  / __ \\',
      ' / / / /',
      '/ /_/ / ',
      '\\____/  ',
      '        ',
    );
    $font['1'] = array(
      '   ___',
      '  <  /',
      '  / / ',
      ' / /  ',
      '/_/   ',
      '      ',
    );
    $font['2'] = array(
      '   ___ ',
      '  |__ \\',
      '  __/ /',
      ' / __/ ',
      '/____/ ',
      '       ',
    );
    $font['3'] = array(
      '   _____',
      '  |__  /',
      '   /_ < ',
      ' ___/ / ',
      '/____/  ',
      '        ',
    );
    $font['4'] = array(
      '   __ __',
      '  / // /',
      ' / // /_',
      '/__  __/',
      '  /_/   ',
      '        ',
    );
    $font['5'] = array(
      '    ______',
      '   / ____/',
      '  /___ \\  ',
      ' ____/ /  ',
      '/_____/   ',
      '          ',
    );
    $font['6'] = array(
      '   _____',
      '  / ___/',
      ' / __ \\ ',
      '/ /_/ / ',
      '\\____/  ',
      '        ',
    );
    $font['7'] = array(
      ' _____',
      '/__  /',
      '  / / ',
      ' / /  ',
      '/_/   ',
      '      ',
    );
    $font['8'] = array(
      '   ____ ',
      '  ( __ )',
      ' / __  |',
      '/ /_/ / ',
      '\\____/  ',
      '        ',
    );
    $font['9'] = array(
      '   ____ ',
      '  / __ \\',
      ' / /_/ /',
      ' \\__, / ',
      '/____/  ',
      '        ',
    );
  
    break;
  case 'small':

    // Font definition based on figlet font "small" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 5;
    // $font['name'] = 'small';
    // $font['comment'] = 'Small by Glenn Chappell 4/93 -- based on StandardIncludes ISO Latin-1figlet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '      ',
      ' __ _ ',
      '/ _` |',
      '\\__,_|',
      '      ',
    );
    $font['b'] = array(
      ' _    ',
      '| |__ ',
      '| \'_ \\',
      '|_.__/',
      '      ',
    );
    $font['c'] = array(
      '    ',
      ' __ ',
      '/ _|',
      '\\__|',
      '    ',
    );
    $font['d'] = array(
      '    _ ',
      ' __| |',
      '/ _` |',
      '\\__,_|',
      '      ',
    );
    $font['e'] = array(
      '     ',
      ' ___ ',
      '/ -_)',
      '\\___|',
      '     ',
    );
    $font['f'] = array(
      '  __ ',
      ' / _|',
      '|  _|',
      '|_|  ',
      '     ',
    );
    $font['g'] = array(
      '      ',
      ' __ _ ',
      '/ _` |',
      '\\__, |',
      '|___/ ',
    );
    $font['h'] = array(
      ' _    ',
      '| |_  ',
      '| \' \\ ',
      '|_||_|',
      '      ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      '| |',
      '|_|',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '  | |',
      ' _/ |',
      '|__/ ',
    );
    $font['k'] = array(
      ' _   ',
      '| |__',
      '| / /',
      '|_\\_\\',
      '     ',
    );
    $font['l'] = array(
      ' _ ',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['m'] = array(
      '       ',
      ' _ __  ',
      '| \'  \\ ',
      '|_|_|_|',
      '       ',
    );
    $font['n'] = array(
      '      ',
      ' _ _  ',
      '| \' \\ ',
      '|_||_|',
      '      ',
    );
    $font['o'] = array(
      '     ',
      ' ___ ',
      '/ _ \\',
      '\\___/',
      '     ',
    );
    $font['p'] = array(
      '      ',
      ' _ __ ',
      '| \'_ \\',
      '| .__/',
      '|_|   ',
    );
    $font['q'] = array(
      '      ',
      ' __ _ ',
      '/ _` |',
      '\\__, |',
      '   |_|',
    );
    $font['r'] = array(
      '     ',
      ' _ _ ',
      '| \'_|',
      '|_|  ',
      '     ',
    );
    $font['s'] = array(
      '    ',
      ' ___',
      '(_-<',
      '/__/',
      '    ',
    );
    $font['t'] = array(
      ' _   ',
      '| |_ ',
      '|  _|',
      ' \\__|',
      '     ',
    );
    $font['u'] = array(
      '      ',
      ' _  _ ',
      '| || |',
      ' \\_,_|',
      '      ',
    );
    $font['v'] = array(
      '     ',
      '__ __',
      '\\ V /',
      ' \\_/ ',
      '     ',
    );
    $font['w'] = array(
      '        ',
      '__ __ __',
      '\\ V  V /',
      ' \\_/\\_/ ',
      '        ',
    );
    $font['x'] = array(
      '     ',
      '__ __',
      '\\ \\ /',
      '/_\\_\\',
      '     ',
    );
    $font['y'] = array(
      '      ',
      ' _  _ ',
      '| || |',
      ' \\_, |',
      ' |__/ ',
    );
    $font['z'] = array(
      '    ',
      ' ___',
      '|_ /',
      '/__|',
      '    ',
    );
    $font['A'] = array(
      '   _   ',
      '  /_\\  ',
      ' / _ \\ ',
      '/_/ \\_\\',
      '       ',
    );
    $font['B'] = array(
      ' ___ ',
      '| _ )',
      '| _ \\',
      '|___/',
      '     ',
    );
    $font['C'] = array(
      '  ___ ',
      ' / __|',
      '| (__ ',
      ' \\___|',
      '      ',
    );
    $font['D'] = array(
      ' ___  ',
      '|   \\ ',
      '| |) |',
      '|___/ ',
      '      ',
    );
    $font['E'] = array(
      ' ___ ',
      '| __|',
      '| _| ',
      '|___|',
      '     ',
    );
    $font['F'] = array(
      ' ___ ',
      '| __|',
      '| _| ',
      '|_|  ',
      '     ',
    );
    $font['G'] = array(
      '  ___ ',
      ' / __|',
      '| (_ |',
      ' \\___|',
      '      ',
    );
    $font['H'] = array(
      ' _  _ ',
      '| || |',
      '| __ |',
      '|_||_|',
      '      ',
    );
    $font['I'] = array(
      ' ___ ',
      '|_ _|',
      ' | | ',
      '|___|',
      '     ',
    );
    $font['J'] = array(
      '    _ ',
      ' _ | |',
      '| || |',
      ' \\__/ ',
      '      ',
    );
    $font['K'] = array(
      ' _  __',
      '| |/ /',
      '| \' < ',
      '|_|\\_\\',
      '      ',
    );
    $font['L'] = array(
      ' _    ',
      '| |   ',
      '| |__ ',
      '|____|',
      '      ',
    );
    $font['M'] = array(
      ' __  __ ',
      '|  \\/  |',
      '| |\\/| |',
      '|_|  |_|',
      '        ',
    );
    $font['N'] = array(
      ' _  _ ',
      '| \\| |',
      '| .` |',
      '|_|\\_|',
      '      ',
    );
    $font['O'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['P'] = array(
      ' ___ ',
      '| _ \\',
      '|  _/',
      '|_|  ',
      '     ',
    );
    $font['Q'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\__\\_\\',
      '       ',
    );
    $font['R'] = array(
      ' ___ ',
      '| _ \\',
      '|   /',
      '|_|_\\',
      '     ',
    );
    $font['S'] = array(
      ' ___ ',
      '/ __|',
      '\\__ \\',
      '|___/',
      '     ',
    );
    $font['T'] = array(
      ' _____ ',
      '|_   _|',
      '  | |  ',
      '  |_|  ',
      '       ',
    );
    $font['U'] = array(
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['V'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
    );
    $font['W'] = array(
      '__      __',
      '\\ \\    / /',
      ' \\ \\/\\/ / ',
      '  \\_/\\_/  ',
      '          ',
    );
    $font['X'] = array(
      '__  __',
      '\\ \\/ /',
      ' >  < ',
      '/_/\\_\\',
      '      ',
    );
    $font['Y'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  |_|  ',
      '       ',
    );
    $font['Z'] = array(
      ' ____',
      '|_  /',
      ' / / ',
      '/___|',
      '     ',
    );
    $font['0'] = array(
      '  __  ',
      ' /  \\ ',
      '| () |',
      ' \\__/ ',
      '      ',
    );
    $font['1'] = array(
      ' _ ',
      '/ |',
      '| |',
      '|_|',
      '   ',
    );
    $font['2'] = array(
      ' ___ ',
      '|_  )',
      ' / / ',
      '/___|',
      '     ',
    );
    $font['3'] = array(
      ' ____',
      '|__ /',
      ' |_ \\',
      '|___/',
      '     ',
    );
    $font['4'] = array(
      ' _ _  ',
      '| | | ',
      '|_  _|',
      '  |_| ',
      '      ',
    );
    $font['5'] = array(
      ' ___ ',
      '| __|',
      '|__ \\',
      '|___/',
      '     ',
    );
    $font['6'] = array(
      '  __ ',
      ' / / ',
      '/ _ \\',
      '\\___/',
      '     ',
    );
    $font['7'] = array(
      ' ____ ',
      '|__  |',
      '  / / ',
      ' /_/  ',
      '      ',
    );
    $font['8'] = array(
      ' ___ ',
      '( _ )',
      '/ _ \\',
      '\\___/',
      '     ',
    );
    $font['9'] = array(
      ' ___ ',
      '/ _ \\',
      '\\_, /',
      ' /_/ ',
      '     ',
    );
  
    break;
  case 'smslant':

    // Font definition based on figlet font "smslant" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 5;
    // $font['name'] = 'smslant';
    // $font['comment'] = 'SmSlant by Glenn Chappell 6/93 - based on Small & SlantIncludes ISO Latin-1figlet release 2.1 -- 12 Aug 1994Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '      ',
      ' ___ _',
      '/ _ `/',
      '\\_,_/ ',
      '      ',
    );
    $font['b'] = array(
      '   __ ',
      '  / / ',
      ' / _ \\',
      '/_.__/',
      '      ',
    );
    $font['c'] = array(
      '     ',
      ' ____',
      '/ __/',
      '\\__/ ',
      '     ',
    );
    $font['d'] = array(
      '     __',
      ' ___/ /',
      '/ _  / ',
      '\\_,_/  ',
      '       ',
    );
    $font['e'] = array(
      '     ',
      ' ___ ',
      '/ -_)',
      '\\__/ ',
      '     ',
    );
    $font['f'] = array(
      '   ___',
      '  / _/',
      ' / _/ ',
      '/_/   ',
      '      ',
    );
    $font['g'] = array(
      '       ',
      '  ___ _',
      ' / _ `/',
      ' \\_, / ',
      '/___/  ',
    );
    $font['h'] = array(
      '   __ ',
      '  / / ',
      ' / _ \\',
      '/_//_/',
      '      ',
    );
    $font['i'] = array(
      '   _ ',
      '  (_)',
      ' / / ',
      '/_/  ',
      '     ',
    );
    $font['j'] = array(
      '      _ ',
      '     (_)',
      '    / / ',
      ' __/ /  ',
      '|___/   ',
    );
    $font['k'] = array(
      '   __  ',
      '  / /__',
      ' /  \'_/',
      '/_/\\_\\ ',
      '       ',
    );
    $font['l'] = array(
      '   __',
      '  / /',
      ' / / ',
      '/_/  ',
      '     ',
    );
    $font['m'] = array(
      '       ',
      '  __ _ ',
      ' /  \' \\',
      '/_/_/_/',
      '       ',
    );
    $font['n'] = array(
      '      ',
      '  ___ ',
      ' / _ \\',
      '/_//_/',
      '      ',
    );
    $font['o'] = array(
      '     ',
      ' ___ ',
      '/ _ \\',
      '\\___/',
      '     ',
    );
    $font['p'] = array(
      '       ',
      '   ___ ',
      '  / _ \\',
      ' / .__/',
      '/_/    ',
    );
    $font['q'] = array(
      '      ',
      ' ___ _',
      '/ _ `/',
      '\\_, / ',
      ' /_/  ',
    );
    $font['r'] = array(
      '      ',
      '  ____',
      ' / __/',
      '/_/   ',
      '      ',
    );
    $font['s'] = array(
      '     ',
      '  ___',
      ' (_-<',
      '/___/',
      '     ',
    );
    $font['t'] = array(
      '  __ ',
      ' / /_',
      '/ __/',
      '\\__/ ',
      '     ',
    );
    $font['u'] = array(
      '      ',
      ' __ __',
      '/ // /',
      '\\_,_/ ',
      '      ',
    );
    $font['v'] = array(
      '      ',
      ' _  __',
      '| |/ /',
      '|___/ ',
      '      ',
    );
    $font['w'] = array(
      '        ',
      ' _    __',
      '| |/|/ /',
      '|__,__/ ',
      '        ',
    );
    $font['x'] = array(
      '      ',
      ' __ __',
      ' \\ \\ /',
      '/_\\_\\ ',
      '      ',
    );
    $font['y'] = array(
      '       ',
      '  __ __',
      ' / // /',
      ' \\_, / ',
      '/___/  ',
    );
    $font['z'] = array(
      '    ',
      ' ___',
      '/_ /',
      '/__/',
      '    ',
    );
    $font['A'] = array(
      '   ___ ',
      '  / _ |',
      ' / __ |',
      '/_/ |_|',
      '       ',
    );
    $font['B'] = array(
      '   ___ ',
      '  / _ )',
      ' / _  |',
      '/____/ ',
      '       ',
    );
    $font['C'] = array(
      '  _____',
      ' / ___/',
      '/ /__  ',
      '\\___/  ',
      '       ',
    );
    $font['D'] = array(
      '   ___ ',
      '  / _ \\',
      ' / // /',
      '/____/ ',
      '       ',
    );
    $font['E'] = array(
      '   ____',
      '  / __/',
      ' / _/  ',
      '/___/  ',
      '       ',
    );
    $font['F'] = array(
      '   ____',
      '  / __/',
      ' / _/  ',
      '/_/    ',
      '       ',
    );
    $font['G'] = array(
      '  _____',
      ' / ___/',
      '/ (_ / ',
      '\\___/  ',
      '       ',
    );
    $font['H'] = array(
      '   __ __',
      '  / // /',
      ' / _  / ',
      '/_//_/  ',
      '        ',
    );
    $font['I'] = array(
      '   ____',
      '  /  _/',
      ' _/ /  ',
      '/___/  ',
      '       ',
    );
    $font['J'] = array(
      '     __',
      ' __ / /',
      '/ // / ',
      '\\___/  ',
      '       ',
    );
    $font['K'] = array(
      '   __ __',
      '  / //_/',
      ' / ,<   ',
      '/_/|_|  ',
      '        ',
    );
    $font['L'] = array(
      '   __ ',
      '  / / ',
      ' / /__',
      '/____/',
      '      ',
    );
    $font['M'] = array(
      '   __  ___',
      '  /  |/  /',
      ' / /|_/ / ',
      '/_/  /_/  ',
      '          ',
    );
    $font['N'] = array(
      '   _  __',
      '  / |/ /',
      ' /    / ',
      '/_/|_/  ',
      '        ',
    );
    $font['O'] = array(
      '  ____ ',
      ' / __ \\',
      '/ /_/ /',
      '\\____/ ',
      '       ',
    );
    $font['P'] = array(
      '   ___ ',
      '  / _ \\',
      ' / ___/',
      '/_/    ',
      '       ',
    );
    $font['Q'] = array(
      '  ____ ',
      ' / __ \\',
      '/ /_/ /',
      '\\___\\_\\',
      '       ',
    );
    $font['R'] = array(
      '   ___ ',
      '  / _ \\',
      ' / , _/',
      '/_/|_| ',
      '       ',
    );
    $font['S'] = array(
      '   ____',
      '  / __/',
      ' _\\ \\  ',
      '/___/  ',
      '       ',
    );
    $font['T'] = array(
      ' ______',
      '/_  __/',
      ' / /   ',
      '/_/    ',
      '       ',
    );
    $font['U'] = array(
      '  __  __',
      ' / / / /',
      '/ /_/ / ',
      '\\____/  ',
      '        ',
    );
    $font['V'] = array(
      ' _   __',
      '| | / /',
      '| |/ / ',
      '|___/  ',
      '       ',
    );
    $font['W'] = array(
      ' _      __',
      '| | /| / /',
      '| |/ |/ / ',
      '|__/|__/  ',
      '          ',
    );
    $font['X'] = array(
      '   _  __',
      '  | |/_/',
      ' _>  <  ',
      '/_/|_|  ',
      '        ',
    );
    $font['Y'] = array(
      '__  __',
      '\\ \\/ /',
      ' \\  / ',
      ' /_/  ',
      '      ',
    );
    $font['Z'] = array(
      ' ____',
      '/_  /',
      ' / /_',
      '/___/',
      '     ',
    );
    $font['0'] = array(
      '  ___ ',
      ' / _ \\',
      '/ // /',
      '\\___/ ',
      '      ',
    );
    $font['1'] = array(
      '  ___',
      ' <  /',
      ' / / ',
      '/_/  ',
      '     ',
    );
    $font['2'] = array(
      '   ___ ',
      '  |_  |',
      ' / __/ ',
      '/____/ ',
      '       ',
    );
    $font['3'] = array(
      '   ____',
      '  |_  /',
      ' _/_ < ',
      '/____/ ',
      '       ',
    );
    $font['4'] = array(
      '  ____',
      ' / / /',
      '/_  _/',
      ' /_/  ',
      '      ',
    );
    $font['5'] = array(
      '   ____',
      '  / __/',
      ' /__ \\ ',
      '/____/ ',
      '       ',
    );
    $font['6'] = array(
      '  ____',
      ' / __/',
      '/ _ \\ ',
      '\\___/ ',
      '      ',
    );
    $font['7'] = array(
      ' ____',
      '/_  /',
      ' / / ',
      '/_/  ',
      '     ',
    );
    $font['8'] = array(
      '  ___ ',
      ' ( _ )',
      '/ _  |',
      '\\___/ ',
      '      ',
    );
    $font['9'] = array(
      '  ___ ',
      ' / _ \\',
      ' \\_, /',
      '/___/ ',
      '      ',
    );
  
    break;
  case 'standard':

    // Font definition based on figlet font "standard" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 6;
    // $font['name'] = 'standard';
    // $font['comment'] = 'Standard by Glenn Chappell & Ian Chai 3/93 -- based on Frank\'s .sigIncludes ISO Latin-1figlet release 2.1 -- 12 Aug 1994Modified for figlet 2.2 by John Cowan <cowan@ccil.org>  to add Latin-{2,3,4,5} support (Unicode U+0100-017F).Permission is hereby given to modify this font, as long as themodifier\'s name is placed on a comment line.Modified by Paul Burton <solution@earthlink.net> 12/96 to include new parametersupported by FIGlet and FIGWin.  May also be slightly modified for better useof new full-width/kern/smush alternatives, but default output is NOT changed.';
    $font['a'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
    );
    $font['b'] = array(
      ' _     ',
      '| |__  ',
      '| \'_ \\ ',
      '| |_) |',
      '|_.__/ ',
      '       ',
    );
    $font['c'] = array(
      '      ',
      '  ___ ',
      ' / __|',
      '| (__ ',
      ' \\___|',
      '      ',
    );
    $font['d'] = array(
      '     _ ',
      '  __| |',
      ' / _` |',
      '| (_| |',
      ' \\__,_|',
      '       ',
    );
    $font['e'] = array(
      '      ',
      '  ___ ',
      ' / _ \\',
      '|  __/',
      ' \\___|',
      '      ',
    );
    $font['f'] = array(
      '  __ ',
      ' / _|',
      '| |_ ',
      '|  _|',
      '|_|  ',
      '     ',
    );
    $font['g'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      ' |___/ ',
    );
    $font['h'] = array(
      ' _     ',
      '| |__  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['i'] = array(
      ' _ ',
      '(_)',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['j'] = array(
      '   _ ',
      '  (_)',
      '  | |',
      '  | |',
      ' _/ |',
      '|__/ ',
    );
    $font['k'] = array(
      ' _    ',
      '| | __',
      '| |/ /',
      '|   < ',
      '|_|\\_\\',
      '      ',
    );
    $font['l'] = array(
      ' _ ',
      '| |',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['m'] = array(
      '           ',
      ' _ __ ___  ',
      '| \'_ ` _ \\ ',
      '| | | | | |',
      '|_| |_| |_|',
      '           ',
    );
    $font['n'] = array(
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| | | |',
      '|_| |_|',
      '       ',
    );
    $font['o'] = array(
      '       ',
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['p'] = array(
      '       ',
      ' _ __  ',
      '| \'_ \\ ',
      '| |_) |',
      '| .__/ ',
      '|_|    ',
    );
    $font['q'] = array(
      '       ',
      '  __ _ ',
      ' / _` |',
      '| (_| |',
      ' \\__, |',
      '    |_|',
    );
    $font['r'] = array(
      '      ',
      ' _ __ ',
      '| \'__|',
      '| |   ',
      '|_|   ',
      '      ',
    );
    $font['s'] = array(
      '     ',
      ' ___ ',
      '/ __|',
      '\\__ \\',
      '|___/',
      '     ',
    );
    $font['t'] = array(
      ' _   ',
      '| |_ ',
      '| __|',
      '| |_ ',
      ' \\__|',
      '     ',
    );
    $font['u'] = array(
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__,_|',
      '       ',
    );
    $font['v'] = array(
      '       ',
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  \\_/  ',
      '       ',
    );
    $font['w'] = array(
      '          ',
      '__      __',
      '\\ \\ /\\ / /',
      ' \\ V  V / ',
      '  \\_/\\_/  ',
      '          ',
    );
    $font['x'] = array(
      '      ',
      '__  __',
      '\\ \\/ /',
      ' >  < ',
      '/_/\\_\\',
      '      ',
    );
    $font['y'] = array(
      '       ',
      ' _   _ ',
      '| | | |',
      '| |_| |',
      ' \\__, |',
      ' |___/ ',
    );
    $font['z'] = array(
      '     ',
      ' ____',
      '|_  /',
      ' / / ',
      '/___|',
      '     ',
    );
    $font['A'] = array(
      '    _    ',
      '   / \\   ',
      '  / _ \\  ',
      ' / ___ \\ ',
      '/_/   \\_\\',
      '         ',
    );
    $font['B'] = array(
      ' ____  ',
      '| __ ) ',
      '|  _ \\ ',
      '| |_) |',
      '|____/ ',
      '       ',
    );
    $font['C'] = array(
      '  ____ ',
      ' / ___|',
      '| |    ',
      '| |___ ',
      ' \\____|',
      '       ',
    );
    $font['D'] = array(
      ' ____  ',
      '|  _ \\ ',
      '| | | |',
      '| |_| |',
      '|____/ ',
      '       ',
    );
    $font['E'] = array(
      ' _____ ',
      '| ____|',
      '|  _|  ',
      '| |___ ',
      '|_____|',
      '       ',
    );
    $font['F'] = array(
      ' _____ ',
      '|  ___|',
      '| |_   ',
      '|  _|  ',
      '|_|    ',
      '       ',
    );
    $font['G'] = array(
      '  ____ ',
      ' / ___|',
      '| |  _ ',
      '| |_| |',
      ' \\____|',
      '       ',
    );
    $font['H'] = array(
      ' _   _ ',
      '| | | |',
      '| |_| |',
      '|  _  |',
      '|_| |_|',
      '       ',
    );
    $font['I'] = array(
      ' ___ ',
      '|_ _|',
      ' | | ',
      ' | | ',
      '|___|',
      '     ',
    );
    $font['J'] = array(
      '     _ ',
      '    | |',
      ' _  | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['K'] = array(
      ' _  __',
      '| |/ /',
      '| \' / ',
      '| . \\ ',
      '|_|\\_\\',
      '      ',
    );
    $font['L'] = array(
      ' _     ',
      '| |    ',
      '| |    ',
      '| |___ ',
      '|_____|',
      '       ',
    );
    $font['M'] = array(
      ' __  __ ',
      '|  \\/  |',
      '| |\\/| |',
      '| |  | |',
      '|_|  |_|',
      '        ',
    );
    $font['N'] = array(
      ' _   _ ',
      '| \\ | |',
      '|  \\| |',
      '| |\\  |',
      '|_| \\_|',
      '       ',
    );
    $font['O'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['P'] = array(
      ' ____  ',
      '|  _ \\ ',
      '| |_) |',
      '|  __/ ',
      '|_|    ',
      '       ',
    );
    $font['Q'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| | | |',
      '| |_| |',
      ' \\__\\_\\',
      '       ',
    );
    $font['R'] = array(
      ' ____  ',
      '|  _ \\ ',
      '| |_) |',
      '|  _ < ',
      '|_| \\_\\',
      '       ',
    );
    $font['S'] = array(
      ' ____  ',
      '/ ___| ',
      '\\___ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
    );
    $font['T'] = array(
      ' _____ ',
      '|_   _|',
      '  | |  ',
      '  | |  ',
      '  |_|  ',
      '       ',
    );
    $font['U'] = array(
      ' _   _ ',
      '| | | |',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['V'] = array(
      '__     __',
      '\\ \\   / /',
      ' \\ \\ / / ',
      '  \\ V /  ',
      '   \\_/   ',
      '         ',
    );
    $font['W'] = array(
      '__        __',
      '\\ \\      / /',
      ' \\ \\ /\\ / / ',
      '  \\ V  V /  ',
      '   \\_/\\_/   ',
      '            ',
    );
    $font['X'] = array(
      '__  __',
      '\\ \\/ /',
      ' \\  / ',
      ' /  \\ ',
      '/_/\\_\\',
      '      ',
    );
    $font['Y'] = array(
      '__   __',
      '\\ \\ / /',
      ' \\ V / ',
      '  | |  ',
      '  |_|  ',
      '       ',
    );
    $font['Z'] = array(
      ' _____',
      '|__  /',
      '  / / ',
      ' / /_ ',
      '/____|',
      '      ',
    );
    $font['0'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| | | |',
      '| |_| |',
      ' \\___/ ',
      '       ',
    );
    $font['1'] = array(
      ' _ ',
      '/ |',
      '| |',
      '| |',
      '|_|',
      '   ',
    );
    $font['2'] = array(
      ' ____  ',
      '|___ \\ ',
      '  __) |',
      ' / __/ ',
      '|_____|',
      '       ',
    );
    $font['3'] = array(
      ' _____ ',
      '|___ / ',
      '  |_ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
    );
    $font['4'] = array(
      ' _  _   ',
      '| || |  ',
      '| || |_ ',
      '|__   _|',
      '   |_|  ',
      '        ',
    );
    $font['5'] = array(
      ' ____  ',
      '| ___| ',
      '|___ \\ ',
      ' ___) |',
      '|____/ ',
      '       ',
    );
    $font['6'] = array(
      '  __   ',
      ' / /_  ',
      '| \'_ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['7'] = array(
      ' _____ ',
      '|___  |',
      '   / / ',
      '  / /  ',
      ' /_/   ',
      '       ',
    );
    $font['8'] = array(
      '  ___  ',
      ' ( _ ) ',
      ' / _ \\ ',
      '| (_) |',
      ' \\___/ ',
      '       ',
    );
    $font['9'] = array(
      '  ___  ',
      ' / _ \\ ',
      '| (_) |',
      ' \\__, |',
      '   /_/ ',
      '       ',
    );
  
    break;
  case 'straight':

    // Font definition based on figlet font "straight" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 4;
    // $font['name'] = 'straight';
    // $font['comment'] = 'straight.flf\t\tVersion 2by:  Bas Meijer   meijer@info.win.tue.nl   bas@damek.kth.sefixed by: Ryan Youck  youck@cs.uregina.caDisclaimer: most capitals have been designed by someone else';
    $font['a'] = array(
      '    ',
      ' _  ',
      '(_| ',
      '    ',
    );
    $font['b'] = array(
      '    ',
      '|_  ',
      '|_) ',
      '    ',
    );
    $font['c'] = array(
      '   ',
      ' _ ',
      '(_ ',
      '   ',
    );
    $font['d'] = array(
      '    ',
      ' _| ',
      '(_| ',
      '    ',
    );
    $font['e'] = array(
      '   ',
      ' _ ',
      '(- ',
      '   ',
    );
    $font['f'] = array(
      ' _ ',
      '(_ ',
      '|  ',
      '   ',
    );
    $font['g'] = array(
      '    ',
      ' _  ',
      '(_) ',
      '_/  ',
    );
    $font['h'] = array(
      '    ',
      '|_  ',
      '| ) ',
      '    ',
    );
    $font['i'] = array(
      '  ',
      '. ',
      '| ',
      '  ',
    );
    $font['j'] = array(
      '  ',
      '. ',
      '| ',
      '/ ',
    );
    $font['k'] = array(
      '   ',
      '|  ',
      '|( ',
      '   ',
    );
    $font['l'] = array(
      '  ',
      '| ',
      '| ',
      '  ',
    );
    $font['m'] = array(
      '    ',
      ' _  ',
      '||| ',
      '    ',
    );
    $font['n'] = array(
      '    ',
      ' _  ',
      '| ) ',
      '    ',
    );
    $font['o'] = array(
      '    ',
      ' _  ',
      '(_) ',
      '    ',
    );
    $font['p'] = array(
      '    ',
      ' _  ',
      '|_) ',
      '|   ',
    );
    $font['q'] = array(
      '    ',
      ' _  ',
      '(_| ',
      '  | ',
    );
    $font['r'] = array(
      '   ',
      ' _ ',
      '|  ',
      '   ',
    );
    $font['s'] = array(
      '   ',
      ' _ ',
      '_) ',
      '   ',
    );
    $font['t'] = array(
      '   ',
      '|_ ',
      '|_ ',
      '   ',
    );
    $font['u'] = array(
      '    ',
      '    ',
      '|_| ',
      '    ',
    );
    $font['v'] = array(
      '   ',
      '   ',
      '\\/ ',
      '   ',
    );
    $font['w'] = array(
      '    ',
      '    ',
      '\\)/ ',
      '    ',
    );
    $font['x'] = array(
      '   ',
      '   ',
      ')( ',
      '   ',
    );
    $font['y'] = array(
      '   ',
      '   ',
      '\\/ ',
      '/  ',
    );
    $font['z'] = array(
      '   ',
      '_  ',
      '/_ ',
      '   ',
    );
    $font['A'] = array(
      '     ',
      ' /\\  ',
      '/--\\ ',
      '     ',
    );
    $font['B'] = array(
      ' __  ',
      '|__) ',
      '|__) ',
      '     ',
    );
    $font['C'] = array(
      ' __ ',
      '/   ',
      '\\__ ',
      '    ',
    );
    $font['D'] = array(
      ' __  ',
      '|  \\ ',
      '|__/ ',
      '     ',
    );
    $font['E'] = array(
      ' __ ',
      '|_  ',
      '|__ ',
      '    ',
    );
    $font['F'] = array(
      ' __ ',
      '|_  ',
      '|   ',
      '    ',
    );
    $font['G'] = array(
      ' __  ',
      '/ _  ',
      '\\__) ',
      '     ',
    );
    $font['H'] = array(
      '     ',
      '|__| ',
      '|  | ',
      '     ',
    );
    $font['I'] = array(
      '  ',
      '| ',
      '| ',
      '  ',
    );
    $font['J'] = array(
      '    ',
      '  | ',
      '__) ',
      '    ',
    );
    $font['K'] = array(
      '    ',
      '|_/ ',
      '| \\ ',
      '    ',
    );
    $font['L'] = array(
      '    ',
      '|   ',
      '|__ ',
      '    ',
    );
    $font['M'] = array(
      '     ',
      '|\\/| ',
      '|  | ',
      '     ',
    );
    $font['N'] = array(
      '     ',
      '|\\ | ',
      '| \\| ',
      '     ',
    );
    $font['O'] = array(
      ' __  ',
      '/  \\ ',
      '\\__/ ',
      '     ',
    );
    $font['P'] = array(
      ' __  ',
      '|__) ',
      '|    ',
      '     ',
    );
    $font['Q'] = array(
      ' __  ',
      '/  \\ ',
      '\\_\\/ ',
      '     ',
    );
    $font['R'] = array(
      ' __  ',
      '|__) ',
      '| \\  ',
      '     ',
    );
    $font['S'] = array(
      ' __ ',
      '(_  ',
      '__) ',
      '    ',
    );
    $font['T'] = array(
      '___ ',
      ' |  ',
      ' |  ',
      '    ',
    );
    $font['U'] = array(
      '     ',
      '/  \\ ',
      '\\__/ ',
      '     ',
    );
    $font['V'] = array(
      '     ',
      '\\  / ',
      ' \\/  ',
      '     ',
    );
    $font['W'] = array(
      '     ',
      '|  | ',
      '|/\\| ',
      '     ',
    );
    $font['X'] = array(
      '    ',
      '\\_/ ',
      '/ \\ ',
      '    ',
    );
    $font['Y'] = array(
      '    ',
      '\\_/ ',
      ' |  ',
      '    ',
    );
    $font['Z'] = array(
      '___ ',
      ' _/ ',
      '/__ ',
      '    ',
    );
    $font['0'] = array(
      '  __  ',
      ' /  \\ ',
      ' \\__/ ',
      '      ',
    );
    $font['1'] = array(
      '    ',
      ' /| ',
      '  | ',
      '    ',
    );
    $font['2'] = array(
      ' __  ',
      '  _) ',
      ' /__ ',
      '     ',
    );
    $font['3'] = array(
      ' __  ',
      '  _) ',
      ' __) ',
      '     ',
    );
    $font['4'] = array(
      '      ',
      ' |__| ',
      '    | ',
      '      ',
    );
    $font['5'] = array(
      '  __ ',
      ' |_  ',
      ' __) ',
      '     ',
    );
    $font['6'] = array(
      '  __  ',
      ' /__  ',
      ' \\__) ',
      '      ',
    );
    $font['7'] = array(
      ' ___ ',
      '   / ',
      '  /  ',
      '     ',
    );
    $font['8'] = array(
      '  __  ',
      ' (__) ',
      ' (__) ',
      '      ',
    );
    $font['9'] = array(
      '  __  ',
      ' (__\\ ',
      '  __/ ',
      '      ',
    );
  
    break;
  case 'thick':

    // Font definition based on figlet font "thick" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 5;
    // $font['name'] = 'thick';
    // $font['comment'] = 'Thick by Randall Ransom 2/94Figlet release 2.0 -- August 5, 1993Date: 5 Mar 1994Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed5    - height of a character4    - height of a character, not including descenders15   - max line length (excluding comment lines) + a fudge factor0    - default smushmode for this font (like "-m 0" on command line)14   - number of comment lines';
    $font['a'] = array(
      '     ',
      '.d88 ',
      '8  8 ',
      '`Y88 ',
      '     ',
    );
    $font['b'] = array(
      '8    ',
      '88b. ',
      '8  8 ',
      '88P\' ',
      '     ',
    );
    $font['c'] = array(
      '     ',
      '.d8b ',
      '8    ',
      '`Y8P ',
      '     ',
    );
    $font['d'] = array(
      '   8 ',
      '.d88 ',
      '8  8 ',
      '`Y88 ',
      '     ',
    );
    $font['e'] = array(
      '      ',
      '.d88b ',
      '8.dP\' ',
      '`Y88P ',
      '      ',
    );
    $font['f'] = array(
      ' d8b ',
      ' 8\'  ',
      'w8ww ',
      ' 8   ',
      '     ',
    );
    $font['g'] = array(
      '     ',
      '.d88 ',
      '8  8 ',
      '`Y88 ',
      'wwdP ',
    );
    $font['h'] = array(
      '8     ',
      '8d8b. ',
      '8P Y8 ',
      '8   8 ',
      '      ',
    );
    $font['i'] = array(
      'w ',
      'w ',
      '8 ',
      '8 ',
      '  ',
    );
    $font['j'] = array(
      '  w ',
      '  w ',
      '  8 ',
      '  8 ',
      'wdP ',
    );
    $font['k'] = array(
      '8    ',
      '8.dP ',
      '88b  ',
      '8 Yb ',
      '     ',
    );
    $font['l'] = array(
      '8 ',
      '8 ',
      '8 ',
      '8 ',
      '  ',
    );
    $font['m'] = array(
      '          ',
      '8d8b.d8b. ',
      '8P Y8P Y8 ',
      '8   8   8 ',
      '          ',
    );
    $font['n'] = array(
      '      ',
      '8d8b. ',
      '8P Y8 ',
      '8   8 ',
      '      ',
    );
    $font['o'] = array(
      '      ',
      '.d8b. ',
      '8\' .8 ',
      '`Y8P\' ',
      '      ',
    );
    $font['p'] = array(
      '     ',
      '88b. ',
      '8  8 ',
      '88P\' ',
      '8    ',
    );
    $font['q'] = array(
      '      ',
      '.d88  ',
      '8  8  ',
      '`Y88  ',
      '   8P ',
    );
    $font['r'] = array(
      '     ',
      '8d8b ',
      '8P   ',
      '8    ',
      '     ',
    );
    $font['s'] = array(
      '     ',
      'd88b ',
      '`Yb. ',
      'Y88P ',
      '     ',
    );
    $font['t'] = array(
      ' w   ',
      'w8ww ',
      ' 8   ',
      ' Y8P ',
      '     ',
    );
    $font['u'] = array(
      '      ',
      '8   8 ',
      '8b d8 ',
      '`Y8P8 ',
      '      ',
    );
    $font['v'] = array(
      '       ',
      'Yb  dP ',
      ' YbdP  ',
      '  YP   ',
      '       ',
    );
    $font['w'] = array(
      '           ',
      'Yb  db  dP ',
      ' YbdPYbdP  ',
      '  YP  YP   ',
      '           ',
    );
    $font['x'] = array(
      '      ',
      'Yb dP ',
      ' `8.  ',
      'dP Yb ',
      '      ',
    );
    $font['y'] = array(
      '       ',
      'Yb  dP ',
      ' YbdP  ',
      '  dP   ',
      ' dP    ',
    );
    $font['z'] = array(
      '     ',
      '888P ',
      ' dP  ',
      'd888 ',
      '     ',
    );
    $font['A'] = array(
      '   db    ',
      '  dPYb   ',
      ' dPwwYb  ',
      'dP    Yb ',
      '         ',
    );
    $font['B'] = array(
      '888b. ',
      '8wwwP ',
      '8   b ',
      '888P\' ',
      '      ',
    );
    $font['C'] = array(
      '.d88b ',
      '8P    ',
      '8b    ',
      '`Y88P ',
      '      ',
    );
    $font['D'] = array(
      '888b. ',
      '8   8 ',
      '8   8 ',
      '888P\' ',
      '      ',
    );
    $font['E'] = array(
      '8888 ',
      '8www ',
      '8    ',
      '8888 ',
      '     ',
    );
    $font['F'] = array(
      '8888 ',
      '8www ',
      '8    ',
      '8    ',
      '     ',
    );
    $font['G'] = array(
      '.d88b  ',
      '8P www ',
      '8b  d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['H'] = array(
      '8   8 ',
      '8www8 ',
      '8   8 ',
      '8   8 ',
      '      ',
    );
    $font['I'] = array(
      '888 ',
      ' 8  ',
      ' 8  ',
      '888 ',
      '    ',
    );
    $font['J'] = array(
      ' 8888 ',
      '   8  ',
      'w  8  ',
      '`Yw"  ',
      '      ',
    );
    $font['K'] = array(
      '8  dP ',
      '8wdP  ',
      '88Yb  ',
      '8  Yb ',
      '      ',
    );
    $font['L'] = array(
      '8    ',
      '8    ',
      '8    ',
      '8888 ',
      '     ',
    );
    $font['M'] = array(
      '8b   d8 ',
      '8YbmdP8 ',
      '8  "  8 ',
      '8     8 ',
      '        ',
    );
    $font['N'] = array(
      '8b  8 ',
      '8Ybm8 ',
      '8  "8 ',
      '8   8 ',
      '      ',
    );
    $font['O'] = array(
      '.d88b. ',
      '8P  Y8 ',
      '8b  d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['P'] = array(
      '888b. ',
      '8  .8 ',
      '8wwP\' ',
      '8     ',
      '      ',
    );
    $font['Q'] = array(
      '.d88b. ',
      '8P  Y8 ',
      '8b wd8 ',
      '`Y88Pw ',
      '       ',
    );
    $font['R'] = array(
      '888b. ',
      '8  .8 ',
      '8wwK\' ',
      '8  Yb ',
      '      ',
    );
    $font['S'] = array(
      '.d88b. ',
      'YPwww. ',
      '    d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['T'] = array(
      '88888 ',
      '  8   ',
      '  8   ',
      '  8   ',
      '      ',
    );
    $font['U'] = array(
      '8    8 ',
      '8    8 ',
      '8b..d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['V'] = array(
      'Yb    dP ',
      ' Yb  dP  ',
      '  YbdP   ',
      '   YP    ',
      '         ',
    );
    $font['W'] = array(
      'Yb        dP ',
      ' Yb  db  dP  ',
      '  YbdPYbdP   ',
      '   YP  YP    ',
      '             ',
    );
    $font['X'] = array(
      'Yb  dP ',
      ' YbdP  ',
      ' dPYb  ',
      'dP  Yb ',
      '       ',
    );
    $font['Y'] = array(
      'Yb  dP ',
      ' YbdP  ',
      '  YP   ',
      '  88   ',
      '       ',
    );
    $font['Z'] = array(
      '8888P ',
      '  dP  ',
      ' dP   ',
      'd8888 ',
      '      ',
    );
    $font['0'] = array(
      '.d88b. ',
      '8P  Y8 ',
      '8b  d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['1'] = array(
      'd8 ',
      ' 8 ',
      ' 8 ',
      ' 8 ',
      '   ',
    );
    $font['2'] = array(
      'd88b ',
      '" dP ',
      ' dP  ',
      'd888 ',
      '     ',
    );
    $font['3'] = array(
      'd88b ',
      ' wwP ',
      '   8 ',
      'Y88P ',
      '     ',
    );
    $font['4'] = array(
      '  d8 ',
      ' dP8 ',
      'dPw8 ',
      '   8 ',
      '     ',
    );
    $font['5'] = array(
      '8888 ',
      '8ww. ',
      '  `8 ',
      'Y88P ',
      '     ',
    );
    $font['6'] = array(
      ' d88b  ',
      '8Pwww. ',
      '8b  d8 ',
      '`Y88P\' ',
      '       ',
    );
    $font['7'] = array(
      '8888P ',
      '  dP  ',
      ' dP   ',
      'dP    ',
      '      ',
    );
    $font['8'] = array(
      '.dPYb. ',
      'YbwwdP ',
      'dP""Yb ',
      '`YbdP\' ',
      '       ',
    );
    $font['9'] = array(
      '.d88b ',
      '8   8 ',
      '`8w88 ',
      '    8 ',
      '      ',
    );
  
    break;
  case 'tinkertoy':

    // Font definition based on figlet font "tinker-toy" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 7;
    // $font['name'] = 'tinker-toy';
    // $font['comment'] = 'Tinker-toy by Wendell Hicken 11/93 (whicken@parasoft.com)Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed7    - height of a character5    - height of a character, not including descenders5    - max line length (excluding comment lines) + a fudge factor15   - default smushmode for this font (like "-m 15" on command line)12   - number of comment lines';
    $font['a'] = array(
      '    ',
      '    ',
      ' oo ',
      '| | ',
      'o-o-',
      '    ',
      '    ',
    );
    $font['b'] = array(
      'o    ',
      '|    ',
      'O-o  ',
      '|  | ',
      'o-o  ',
      '     ',
      '     ',
    );
    $font['c'] = array(
      '     ',
      '     ',
      ' o-o ',
      '|    ',
      ' o-o ',
      '     ',
      '     ',
    );
    $font['d'] = array(
      '   o ',
      '   | ',
      ' o-O ',
      '|  | ',
      ' o-o ',
      '     ',
      '     ',
    );
    $font['e'] = array(
      '    ',
      '    ',
      'o-o ',
      '|-\' ',
      'o-o ',
      '    ',
      '    ',
    );
    $font['f'] = array(
      ' o-o',
      ' |  ',
      '-O- ',
      ' |  ',
      ' o  ',
      '    ',
      '    ',
    );
    $font['g'] = array(
      '     ',
      '     ',
      'o--o ',
      '|  | ',
      'o--O ',
      '   | ',
      'o--o ',
    );
    $font['h'] = array(
      'o    ',
      '|    ',
      'O--o ',
      '|  | ',
      'o  o ',
      '     ',
      '     ',
    );
    $font['i'] = array(
      '  ',
      'o ',
      '  ',
      '| ',
      '| ',
      '  ',
      '  ',
    );
    $font['j'] = array(
      '      ',
      '    o ',
      '      ',
      '    o ',
      '    | ',
      'o   o ',
      ' o-o  ',
    );
    $font['k'] = array(
      'o    ',
      '| /  ',
      'OO   ',
      '| \\  ',
      'o  o ',
      '     ',
      '     ',
    );
    $font['l'] = array(
      'o ',
      '| ',
      '| ',
      '| ',
      'o ',
      '  ',
      '  ',
    );
    $font['m'] = array(
      '      ',
      '      ',
      'o-O-o ',
      '| | | ',
      'o o o ',
      '      ',
      '      ',
    );
    $font['n'] = array(
      '     ',
      '     ',
      'o-o  ',
      '|  | ',
      'o  o ',
      '     ',
      '     ',
    );
    $font['o'] = array(
      '    ',
      '    ',
      'o-o ',
      '| | ',
      'o-o ',
      '    ',
      '    ',
    );
    $font['p'] = array(
      '     ',
      '     ',
      'o-o  ',
      '|  | ',
      'O-o  ',
      '|    ',
      'o    ',
    );
    $font['q'] = array(
      '     ',
      '     ',
      ' o-o ',
      '|  | ',
      ' o-O ',
      '   | ',
      '   o ',
    );
    $font['r'] = array(
      '    ',
      '    ',
      'o-o ',
      '|   ',
      'o   ',
      '    ',
      '    ',
    );
    $font['s'] = array(
      '    ',
      '    ',
      'o-o ',
      ' \\  ',
      'o-o ',
      '    ',
      '    ',
    );
    $font['t'] = array(
      ' o  ',
      ' |  ',
      '-o- ',
      ' |  ',
      ' o  ',
      '    ',
      '    ',
    );
    $font['u'] = array(
      '     ',
      '     ',
      'o  o ',
      '|  | ',
      'o--o ',
      '     ',
      '     ',
    );
    $font['v'] = array(
      '      ',
      '      ',
      'o   o ',
      ' \\ /  ',
      '  o   ',
      '      ',
      '      ',
    );
    $font['w'] = array(
      '         ',
      '         ',
      'o   o   o',
      ' \\ / \\ / ',
      '  o   o  ',
      '         ',
      '         ',
    );
    $font['x'] = array(
      '    ',
      '    ',
      '\\ / ',
      ' o  ',
      '/ \\ ',
      '    ',
      '    ',
    );
    $font['y'] = array(
      '     ',
      '     ',
      'o  o ',
      '|  | ',
      'o--O ',
      '   | ',
      'o--o ',
    );
    $font['z'] = array(
      '    ',
      '    ',
      'o-o ',
      ' /  ',
      'o-o ',
      '    ',
      '    ',
    );
    $font['A'] = array(
      '  O  ',
      ' / \\ ',
      'o---o',
      '|   |',
      'o   o',
      '     ',
      '     ',
    );
    $font['B'] = array(
      'o--o  ',
      '|   | ',
      'O--o  ',
      '|   | ',
      'o--o  ',
      '      ',
      '      ',
    );
    $font['C'] = array(
      '  o-o ',
      ' /    ',
      'O     ',
      ' \\    ',
      '  o-o ',
      '      ',
      '      ',
    );
    $font['D'] = array(
      'o-o   ',
      '|  \\  ',
      '|   O ',
      '|  /  ',
      'o-o   ',
      '      ',
      '      ',
    );
    $font['E'] = array(
      'o--o ',
      '|    ',
      'O-o  ',
      '|    ',
      'o--o ',
      '     ',
      '     ',
    );
    $font['F'] = array(
      'o--o ',
      '|    ',
      'O-o  ',
      '|    ',
      'o    ',
      '     ',
      '     ',
    );
    $font['G'] = array(
      ' o-o  ',
      'o     ',
      '|  -o ',
      'o   | ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['H'] = array(
      'o  o ',
      '|  | ',
      'O--O ',
      '|  | ',
      'o  o ',
      '     ',
      '     ',
    );
    $font['I'] = array(
      'o-O-o ',
      '  |   ',
      '  |   ',
      '  |   ',
      'o-O-o ',
      '      ',
      '      ',
    );
    $font['J'] = array(
      '    o ',
      '    | ',
      '    | ',
      '\\   o ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['K'] = array(
      'o  o ',
      '| /  ',
      'OO   ',
      '| \\  ',
      'o  o ',
      '     ',
      '     ',
    );
    $font['L'] = array(
      'o    ',
      '|    ',
      '|    ',
      '|    ',
      'O---o',
      '     ',
      '     ',
    );
    $font['M'] = array(
      'o   o ',
      '|\\ /| ',
      '| O | ',
      '|   | ',
      'o   o ',
      '      ',
      '      ',
    );
    $font['N'] = array(
      'o   o ',
      '|\\  | ',
      '| \\ | ',
      '|  \\| ',
      'o   o ',
      '      ',
      '      ',
    );
    $font['O'] = array(
      ' o-o  ',
      'o   o ',
      '|   | ',
      'o   o ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['P'] = array(
      'o--o  ',
      '|   | ',
      'O--o  ',
      '|     ',
      'o     ',
      '      ',
      '      ',
    );
    $font['Q'] = array(
      ' o-o  ',
      'o   o ',
      '|   | ',
      'o   O ',
      ' o-O\\ ',
      '      ',
      '      ',
    );
    $font['R'] = array(
      'o--o  ',
      '|   | ',
      'O-Oo  ',
      '|  \\  ',
      'o   o ',
      '      ',
      '      ',
    );
    $font['S'] = array(
      ' o-o  ',
      '|     ',
      ' o-o  ',
      '    | ',
      'o--o  ',
      '      ',
      '      ',
    );
    $font['T'] = array(
      'o-O-o ',
      '  |   ',
      '  |   ',
      '  |   ',
      '  o   ',
      '      ',
      '      ',
    );
    $font['U'] = array(
      'o   o ',
      '|   | ',
      '|   | ',
      '|   | ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['V'] = array(
      'o   o ',
      '|   | ',
      'o   o ',
      ' \\ /  ',
      '  o   ',
      '      ',
      '      ',
    );
    $font['W'] = array(
      'o       o ',
      '|       | ',
      'o   o   o ',
      ' \\ / \\ /  ',
      '  o   o   ',
      '          ',
      '          ',
    );
    $font['X'] = array(
      'o   o ',
      ' \\ /  ',
      '  O   ',
      ' / \\  ',
      'o   o ',
      '      ',
      '      ',
    );
    $font['Y'] = array(
      'o   o ',
      ' \\ /  ',
      '  O   ',
      '  |   ',
      '  o   ',
      '      ',
      '      ',
    );
    $font['Z'] = array(
      'o---o ',
      '   /  ',
      ' -O-  ',
      ' /    ',
      'o---o ',
      '      ',
      '      ',
    );
    $font['0'] = array(
      ' o-o  ',
      'o  /o ',
      '| / | ',
      'o/  o ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['1'] = array(
      '  0   ',
      ' /|   ',
      'o |   ',
      '  |   ',
      'o-o-o ',
      '      ',
      '      ',
    );
    $font['2'] = array(
      ' --  ',
      'o  o ',
      '  /  ',
      ' /   ',
      'o--o ',
      '     ',
      '     ',
    );
    $font['3'] = array(
      'o-o  ',
      '   | ',
      ' oo  ',
      '   | ',
      'o-o  ',
      '     ',
      '     ',
    );
    $font['4'] = array(
      'o  o ',
      '|  | ',
      'o--O ',
      '   | ',
      '   o ',
      '     ',
      '     ',
    );
    $font['5'] = array(
      'o--o ',
      '|    ',
      'o-o  ',
      '   | ',
      'o-o  ',
      '     ',
      '     ',
    );
    $font['6'] = array(
      '  o   ',
      ' /    ',
      'O--o  ',
      'o   | ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['7'] = array(
      'o---o ',
      '   /  ',
      '  o   ',
      '  |   ',
      '  o   ',
      '      ',
      '      ',
    );
    $font['8'] = array(
      ' o-o  ',
      '|   | ',
      ' o-o  ',
      '|   | ',
      ' o-o  ',
      '      ',
      '      ',
    );
    $font['9'] = array(
      ' o-o  ',
      '|   o ',
      ' o--O ',
      '   /  ',
      '  o   ',
      '      ',
      '      ',
    );
  
    break;
  case 'univers':

    // Font definition based on figlet font "univers" (http://www.figlet.org/)
    // as distributed by pyfiglet (http://sourceforge.net/projects/pyfiglet/)
  
    // $font['height'] = 11;
    // $font['name'] = 'univers';
    // $font['comment'] = 'Univers by Normand Veilleux <nveilleu@emr.ca>figletized by Glenn Chappell <ggc@uiuc.edu> January 12, 1994Date: 5 Mar 1994Explanation of first line:flf2 - "magic number" for file identificationa    - should always be `a\', for now$    - the "hardblank" -- prints as a blank, but can\'t be smushed11   - height of a character9    - height of a character, not including descenders40   - max line length (excluding comment lines) + a fudge factor32   - default smushmode for this font14   - number of comment lines';
    $font['a'] = array(
      '            ',
      '            ',
      '            ',
      '            ',
      ',adPPYYba,  ',
      '""     `Y8  ',
      ',adPPPPP88  ',
      '88,    ,88  ',
      '`"8bbdP"Y8  ',
      '            ',
      '            ',
    );
    $font['b'] = array(
      '             ',
      '88           ',
      '88           ',
      '88           ',
      '88,dPPYba,   ',
      '88P\'    "8a  ',
      '88       d8  ',
      '88b,   ,a8"  ',
      '8Y"Ybbd8"\'   ',
      '             ',
      '             ',
    );
    $font['c'] = array(
      '            ',
      '            ',
      '            ',
      '            ',
      ' ,adPPYba,  ',
      'a8"     ""  ',
      '8b          ',
      '"8a,   ,aa  ',
      ' `"Ybbd8"\'  ',
      '            ',
      '            ',
    );
    $font['d'] = array(
      '             ',
      '         88  ',
      '         88  ',
      '         88  ',
      ' ,adPPYb,88  ',
      'a8"    `Y88  ',
      '8b       88  ',
      '"8a,   ,d88  ',
      ' `"8bbdP"Y8  ',
      '             ',
      '             ',
    );
    $font['e'] = array(
      '            ',
      '            ',
      '            ',
      '            ',
      ' ,adPPYba,  ',
      'a8P_____88  ',
      '8PP"""""""  ',
      '"8b,   ,aa  ',
      ' `"Ybbd8"\'  ',
      '            ',
      '            ',
    );
    $font['f'] = array(
      '         ',
      '   ad88  ',
      '  d8"    ',
      '  88     ',
      'MM88MMM  ',
      '  88     ',
      '  88     ',
      '  88     ',
      '  88     ',
      '         ',
      '         ',
    );
    $font['g'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      ' ,adPPYb,d8  ',
      'a8"    `Y88  ',
      '8b       88  ',
      '"8a,   ,d88  ',
      ' `"YbbdP"Y8  ',
      ' aa,    ,88  ',
      '  "Y8bbdP"   ',
    );
    $font['h'] = array(
      '             ',
      '88           ',
      '88           ',
      '88           ',
      '88,dPPYba,   ',
      '88P\'    "8a  ',
      '88       88  ',
      '88       88  ',
      '88       88  ',
      '             ',
      '             ',
    );
    $font['i'] = array(
      '    ',
      '88  ',
      '""  ',
      '    ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '    ',
      '    ',
    );
    $font['j'] = array(
      '       ',
      '   88  ',
      '   ""  ',
      '       ',
      '   88  ',
      '   88  ',
      '   88  ',
      '   88  ',
      '   88  ',
      '  ,88  ',
      '888P"  ',
    );
    $font['k'] = array(
      '           ',
      '88         ',
      '88         ',
      '88         ',
      '88   ,d8   ',
      '88 ,a8"    ',
      '8888[      ',
      '88`"Yba,   ',
      '88   `Y8a  ',
      '           ',
      '           ',
    );
    $font['l'] = array(
      '    ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '    ',
      '    ',
    );
    $font['m'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '88,dPYba,,adPYba,   ',
      '88P\'   "88"    "8a  ',
      '88      88      88  ',
      '88      88      88  ',
      '88      88      88  ',
      '                    ',
      '                    ',
    );
    $font['n'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '8b,dPPYba,   ',
      '88P\'   `"8a  ',
      '88       88  ',
      '88       88  ',
      '88       88  ',
      '             ',
      '             ',
    );
    $font['o'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      ' ,adPPYba,   ',
      'a8"     "8a  ',
      '8b       d8  ',
      '"8a,   ,a8"  ',
      ' `"YbbdP"\'   ',
      '             ',
      '             ',
    );
    $font['p'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '8b,dPPYba,   ',
      '88P\'    "8a  ',
      '88       d8  ',
      '88b,   ,a8"  ',
      '88`YbbdP"\'   ',
      '88           ',
      '88           ',
    );
    $font['q'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      ' ,adPPYb,d8  ',
      'a8"    `Y88  ',
      '8b       88  ',
      '"8a    ,d88  ',
      ' `"YbbdP\'88  ',
      '         88  ',
      '         88  ',
    );
    $font['r'] = array(
      '            ',
      '            ',
      '            ',
      '            ',
      '8b,dPPYba,  ',
      '88P\'   "Y8  ',
      '88          ',
      '88          ',
      '88          ',
      '            ',
      '            ',
    );
    $font['s'] = array(
      '           ',
      '           ',
      '           ',
      '           ',
      ',adPPYba,  ',
      'I8[    ""  ',
      ' `"Y8ba,   ',
      'aa    ]8I  ',
      '`"YbbdP"\'  ',
      '           ',
      '           ',
    );
    $font['t'] = array(
      '         ',
      '         ',
      '  ,d     ',
      '  88     ',
      'MM88MMM  ',
      '  88     ',
      '  88     ',
      '  88,    ',
      '  "Y888  ',
      '         ',
      '         ',
    );
    $font['u'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '88       88  ',
      '88       88  ',
      '88       88  ',
      '"8a,   ,a88  ',
      ' `"YbbdP\'Y8  ',
      '             ',
      '             ',
    );
    $font['v'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '8b       d8  ',
      '`8b     d8\'  ',
      ' `8b   d8\'   ',
      '  `8b,d8\'    ',
      '    "8"      ',
      '             ',
      '             ',
    );
    $font['w'] = array(
      '                    ',
      '                    ',
      '                    ',
      '                    ',
      '8b      db      d8  ',
      '`8b    d88b    d8\'  ',
      ' `8b  d8\'`8b  d8\'   ',
      '  `8bd8\'  `8bd8\'    ',
      '    YP      YP      ',
      '                    ',
      '                    ',
    );
    $font['x'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '8b,     ,d8  ',
      ' `Y8, ,8P\'   ',
      '   )888(     ',
      ' ,d8" "8b,   ',
      '8P\'     `Y8  ',
      '             ',
      '             ',
    );
    $font['y'] = array(
      '             ',
      '             ',
      '             ',
      '             ',
      '8b       d8  ',
      '`8b     d8\'  ',
      ' `8b   d8\'   ',
      '  `8b,d8\'    ',
      '    Y88\'     ',
      '    d8\'      ',
      '   d8\'       ',
    );
    $font['z'] = array(
      '           ',
      '           ',
      '           ',
      '           ',
      '888888888  ',
      '     a8P"  ',
      '  ,d8P\'    ',
      ',d8"       ',
      '888888888  ',
      '           ',
      '           ',
    );
    $font['A'] = array(
      '                  ',
      '       db         ',
      '      d88b        ',
      '     d8\'`8b       ',
      '    d8\'  `8b      ',
      '   d8YaaaaY8b     ',
      '  d8""""""""8b    ',
      ' d8\'        `8b   ',
      'd8\'          `8b  ',
      '                  ',
      '                  ',
    );
    $font['B'] = array(
      '             ',
      '88888888ba   ',
      '88      "8b  ',
      '88      ,8P  ',
      '88aaaaaa8P\'  ',
      '88""""""8b,  ',
      '88      `8b  ',
      '88      a8P  ',
      '88888888P"   ',
      '             ',
      '             ',
    );
    $font['C'] = array(
      '               ',
      '  ,ad8888ba,   ',
      ' d8"\'    `"8b  ',
      'd8\'            ',
      '88             ',
      '88             ',
      'Y8,            ',
      ' Y8a.    .a8P  ',
      '  `"Y8888Y"\'   ',
      '               ',
      '               ',
    );
    $font['D'] = array(
      '               ',
      '88888888ba,    ',
      '88      `"8b   ',
      '88        `8b  ',
      '88         88  ',
      '88         88  ',
      '88         8P  ',
      '88      .a8P   ',
      '88888888Y"\'    ',
      '               ',
      '               ',
    );
    $font['E'] = array(
      '             ',
      '88888888888  ',
      '88           ',
      '88           ',
      '88aaaaa      ',
      '88"""""      ',
      '88           ',
      '88           ',
      '88888888888  ',
      '             ',
      '             ',
    );
    $font['F'] = array(
      '             ',
      '88888888888  ',
      '88           ',
      '88           ',
      '88aaaaa      ',
      '88"""""      ',
      '88           ',
      '88           ',
      '88           ',
      '             ',
      '             ',
    );
    $font['G'] = array(
      '               ',
      '  ,ad8888ba,   ',
      ' d8"\'    `"8b  ',
      'd8\'            ',
      '88             ',
      '88      88888  ',
      'Y8,        88  ',
      ' Y8a.    .a88  ',
      '  `"Y88888P"   ',
      '               ',
      '               ',
    );
    $font['H'] = array(
      '              ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      '88aaaaaaaa88  ',
      '88""""""""88  ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      '              ',
      '              ',
    );
    $font['I'] = array(
      '    ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '88  ',
      '    ',
      '    ',
    );
    $font['J'] = array(
      '            ',
      '        88  ',
      '        88  ',
      '        88  ',
      '        88  ',
      '        88  ',
      '        88  ',
      '88,   ,d88  ',
      ' "Y8888P"   ',
      '            ',
      '            ',
    );
    $font['K'] = array(
      '              ',
      '88      a8P   ',
      '88    ,88\'    ',
      '88  ,88"      ',
      '88,d88\'       ',
      '8888"88,      ',
      '88P   Y8b     ',
      '88     "88,   ',
      '88       Y8b  ',
      '              ',
      '              ',
    );
    $font['L'] = array(
      '             ',
      '88           ',
      '88           ',
      '88           ',
      '88           ',
      '88           ',
      '88           ',
      '88           ',
      '88888888888  ',
      '             ',
      '             ',
    );
    $font['M'] = array(
      '                   ',
      '88b           d88  ',
      '888b         d888  ',
      '88`8b       d8\'88  ',
      '88 `8b     d8\' 88  ',
      '88  `8b   d8\'  88  ',
      '88   `8b d8\'   88  ',
      '88    `888\'    88  ',
      '88     `8\'     88  ',
      '                   ',
      '                   ',
    );
    $font['N'] = array(
      '              ',
      '888b      88  ',
      '8888b     88  ',
      '88 `8b    88  ',
      '88  `8b   88  ',
      '88   `8b  88  ',
      '88    `8b 88  ',
      '88     `8888  ',
      '88      `888  ',
      '              ',
      '              ',
    );
    $font['O'] = array(
      '                ',
      '  ,ad8888ba,    ',
      ' d8"\'    `"8b   ',
      'd8\'        `8b  ',
      '88          88  ',
      '88          88  ',
      'Y8,        ,8P  ',
      ' Y8a.    .a8P   ',
      '  `"Y8888Y"\'    ',
      '                ',
      '                ',
    );
    $font['P'] = array(
      '             ',
      '88888888ba   ',
      '88      "8b  ',
      '88      ,8P  ',
      '88aaaaaa8P\'  ',
      '88""""""\'    ',
      '88           ',
      '88           ',
      '88           ',
      '             ',
      '             ',
    );
    $font['Q'] = array(
      '                ',
      '  ,ad8888ba,    ',
      ' d8"\'    `"8b   ',
      'd8\'        `8b  ',
      '88          88  ',
      '88          88  ',
      'Y8,    "88,,8P  ',
      ' Y8a.    Y88P   ',
      '  `"Y8888Y"Y8a  ',
      '                ',
      '                ',
    );
    $font['R'] = array(
      '             ',
      '88888888ba   ',
      '88      "8b  ',
      '88      ,8P  ',
      '88aaaaaa8P\'  ',
      '88""""88\'    ',
      '88    `8b    ',
      '88     `8b   ',
      '88      `8b  ',
      '             ',
      '             ',
    );
    $font['S'] = array(
      '             ',
      ' ad88888ba   ',
      'd8"     "8b  ',
      'Y8,          ',
      '`Y8aaaaa,    ',
      '  `"""""8b,  ',
      '        `8b  ',
      'Y8a     a8P  ',
      ' "Y88888P"   ',
      '             ',
      '             ',
    );
    $font['T'] = array(
      '              ',
      '888888888888  ',
      '     88       ',
      '     88       ',
      '     88       ',
      '     88       ',
      '     88       ',
      '     88       ',
      '     88       ',
      '              ',
      '              ',
    );
    $font['U'] = array(
      '              ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      '88        88  ',
      'Y8a.    .a8P  ',
      ' `"Y8888Y"\'   ',
      '              ',
      '              ',
    );
    $font['V'] = array(
      '                 ',
      '8b           d8  ',
      '`8b         d8\'  ',
      ' `8b       d8\'   ',
      '  `8b     d8\'    ',
      '   `8b   d8\'     ',
      '    `8b d8\'      ',
      '     `888\'       ',
      '      `8\'        ',
      '                 ',
      '                 ',
    );
    $font['W'] = array(
      '                         ',
      'I8,        8        ,8I  ',
      '`8b       d8b       d8\'  ',
      ' "8,     ,8"8,     ,8"   ',
      '  Y8     8P Y8     8P    ',
      '  `8b   d8\' `8b   d8\'    ',
      '   `8a a8\'   `8a a8\'     ',
      '    `8a8\'     `8a8\'      ',
      '     `8\'       `8\'       ',
      '                         ',
      '                         ',
    );
    $font['X'] = array(
      '              ',
      '8b        d8  ',
      ' Y8,    ,8P   ',
      '  `8b  d8\'    ',
      '    Y88P      ',
      '    d88b      ',
      '  ,8P  Y8,    ',
      ' d8\'    `8b   ',
      '8P        Y8  ',
      '              ',
      '              ',
    );
    $font['Y'] = array(
      '              ',
      '8b        d8  ',
      ' Y8,    ,8P   ',
      '  Y8,  ,8P    ',
      '   "8aa8"     ',
      '    `88\'      ',
      '     88       ',
      '     88       ',
      '     88       ',
      '              ',
      '              ',
    );
    $font['Z'] = array(
      '              ',
      '888888888888  ',
      '         ,88  ',
      '       ,88"   ',
      '     ,88"     ',
      '   ,88"       ',
      ' ,88"         ',
      '88"           ',
      '888888888888  ',
      '              ',
      '              ',
    );
    $font['0'] = array(
      '                ',
      '   ,a8888a,     ',
      ' ,8P"\'  `"Y8,   ',
      ',8P        Y8,  ',
      '88          88  ',
      '88          88  ',
      '`8b        d8\'  ',
      ' `8ba,  ,ad8\'   ',
      '   "Y8888P"     ',
      '                ',
      '                ',
    );
    $font['1'] = array(
      '        ',
      '    88  ',
      '  ,d88  ',
      '888888  ',
      '    88  ',
      '    88  ',
      '    88  ',
      '    88  ',
      '    88  ',
      '        ',
      '        ',
    );
    $font['2'] = array(
      '             ',
      ' ad888888b,  ',
      'd8"     "88  ',
      '        a8P  ',
      '     ,d8P"   ',
      '   a8P"      ',
      ' a8P\'        ',
      'd8"          ',
      '88888888888  ',
      '             ',
      '             ',
    );
    $font['3'] = array(
      '             ',
      ' ad888888b,  ',
      'd8"     "88  ',
      '        a8P  ',
      '     aad8"   ',
      '     ""Y8,   ',
      '        "8b  ',
      'Y8,     a88  ',
      ' "Y888888P\'  ',
      '             ',
      '             ',
    );
    $font['4'] = array(
      '               ',
      '        ,d8    ',
      '      ,d888    ',
      '    ,d8" 88    ',
      '  ,d8"   88    ',
      ',d8"     88    ',
      '8888888888888  ',
      '         88    ',
      '         88    ',
      '               ',
      '               ',
    );
    $font['5'] = array(
      '             ',
      '8888888888   ',
      '88           ',
      '88  ____     ',
      '88a8PPPP8b,  ',
      'PP"     `8b  ',
      '         d8  ',
      'Y8a     a8P  ',
      ' "Y88888P"   ',
      '             ',
      '             ',
    );
    $font['6'] = array(
      '             ',
      '  ad8888ba,  ',
      ' 8P\'    "Y8  ',
      'd8           ',
      '88,dd888bb,  ',
      '88P\'    `8b  ',
      '88       d8  ',
      '88a     a8P  ',
      ' "Y88888P"   ',
      '             ',
      '             ',
    );
    $font['7'] = array(
      '              ',
      '888888888888  ',
      '        ,8P\'  ',
      '       d8"    ',
      '     ,8P\'     ',
      '    d8"       ',
      '  ,8P\'        ',
      ' d8"          ',
      '8P\'           ',
      '              ',
      '              ',
    );
    $font['8'] = array(
      '             ',
      ' ad88888ba   ',
      'd8"     "8b  ',
      'Y8a     a8P  ',
      ' "Y8aaa8P"   ',
      ' ,d8"""8b,   ',
      'd8"     "8b  ',
      'Y8a     a8P  ',
      ' "Y88888P"   ',
      '             ',
      '             ',
    );
    $font['9'] = array(
      '             ',
      ' ad88888ba   ',
      'd8"     "88  ',
      '8P       88  ',
      'Y8,    ,d88  ',
      ' "PPPPPP"88  ',
      '         8P  ',
      '8b,    a8P   ',
      '`"Y8888P\'    ',
      '             ',
      '             ',
    );
  
    break;
  }

  return $font;
}

/**
 * Return data for unrelated word CAPTCHA.
 */
function captchapack_gen_unrelatedword_data() {
  return array(
    explode(' ', 'green red blue yellow black white magenta cyan orange violet purple gold brown pink'),
    explode(' ', 'bird elephant dog cat crocodile lion fish cow horse sheep frog beetle worm spider bat giraffe lizard goat monkey rabbit chimpanzee'),
    explode(' ', 'head foot shoulder arm leg chest waist neck'),
  );
}

