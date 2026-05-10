<?php
/**
 * Template Functions
 *
 * This file provides template specific custom functions that are
 * not provided by the DokuWiki core.
 * It is common practice to start each function with an underscore
 * to make sure it won't interfere with future core functions.
 */

// Must be run within DokuWiki
if (!defined('DOKU_INC')) die();

/**
 * Font-family stack and @font-face stylesheet for the template font setting (conf/metadata.php).
 *
 * @return array{sheet:string,stack:string}
 */
function _tpl_font_config() {
	$key = tpl_getConf('font');
	$configs = array(
		'firacode' => array(
			'sheet' => 'assets/nerd-fonts/firacode.css',
			'stack' => '"FiraCode Nerd Font Mono", "FiraCode Nerd Font", "Courier New", Courier, monospace',
		),
		'bigblueterminal' => array(
			'sheet' => 'assets/nerd-fonts/bigblueterminal.css',
			'stack' => '"BigBlueTerm437 Nerd Font Mono", "BigBlueTermPlus Nerd Font Mono", "Courier New", Courier, monospace',
		),
	);
	return isset($configs[$key]) ? $configs[$key] : $configs['firacode'];
}

/**
 * Loads the glyph @font-face sheet and outputs font-family rules (after tpl_metaheaders()).
 */
function _tpl_font_headers() {
	$cfg = _tpl_font_config();
	echo '<link rel="stylesheet" href="' . hsc(tpl_basedir() . $cfg['sheet']) . '" />' . "\n\t\t";
	echo '<style type="text/css">' . "\n\t\t\t" . '/* theme font from template conf */' . "\n\t\t\t"
		. 'body, input, textarea, select, button, .hacker-button, pre, code, kbd, samp,' . "\n\t\t\t"
		. '#mediamanager__page h2, #mediamanager__page h3 { font-family: ' . $cfg['stack'] . '; }'
		. "\n\t\t</style>";
}

function _tpl_usertools() {
	/* The optional second parameter of tpl_action() switches between a link and a button,
	 e.g. a button inside a <li> would be: tpl_action('edit', 0, 'li') */
	tpl_toolsevent('usertools', array(
		'admin'     => tpl_action('admin', 1, 'li', 1),
		'profile'   => tpl_action('profile', 1, 'li', 1),
		'register'  => tpl_action('register', 1, 'li', 1),
		'login'     => tpl_action('login', 1, 'li', 1),
	));
}

function _tpl_sitetools() {
	tpl_toolsevent('sitetools', array(
		'recent'    => tpl_action('recent', 1, 'li', 1),
		'media'     => tpl_action('media', 1, 'li', 1),
		'index'     => tpl_action('index', 1, 'li', 1),
	));
}

function _tpl_pagetools() {
	tpl_toolsevent('pagetools', array(
		'edit'      => tpl_action('edit', 1, 'li', 1),
		'revisions' => tpl_action('revisions', 1, 'li', 1),
		'backlink'  => tpl_action('backlink', 1, 'li', 1),
		'subscribe' => tpl_action('subscribe', 1, 'li', 1),
		'revert'    => tpl_action('revert', 1, 'li', 1),
		'top'       => tpl_action('top', 1, 'li', 1),
	));
}

function _tpl_detailtools() {
	echo tpl_action('mediaManager', 1, 'li', 1);
	echo tpl_action('img_backto', 1, 'li', 1);
}
