<?php 
/**
 * DokuWiki Hacker Template: CSS Asset
 *
 * @link     https://www.dokuwiki.org/template:hacker.css
 * @author   Lionel PLAIS <lionel.plais@ilp-web.net>
 * @license  MIT License (https://opensource.org/license/MIT)
 */
 
# Load doku_inc.php file
#
if (file_exists(dirname(__FILE__) . '/doku_inc.php')) {
	require_once dirname(__FILE__) . '/doku_inc.php';
}

if (! defined('DOKU_INC')) {
	foreach ($doku_inc_dirs as $dir) {
		if (! defined('DOKU_INC') && @file_exists("$dir/inc/init.php")) {
			define('DOKU_INC', "$dir/");
		}
	}
}

$font = tpl_getConf('font');

?>