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
		'0xproto' => array(
			'sheet' => '0xproto.css',
			'stack' => '"0xProto Nerd Font Mono", "0xProto Nerd Font", monospace',
		),
		'3270' => array(
			'sheet' => '3270.css',
			'stack' => '"3270 Nerd Font Mono", "3270 Nerd Font", monospace',
		),
		'agave' => array(
			'sheet' => 'agave.css',
			'stack' => '"Agave Nerd Font Mono", "Agave Nerd Font", monospace',
		),
		'anonymouspro' => array(
			'sheet' => 'anonymouspro.css',
			'stack' => '"AnonymousPro Nerd Font Mono", "AnonymousPro Nerd Font", monospace',
		),
		'arimo' => array(
			'sheet' => 'arimo.css',
			'stack' => '"Arimo Nerd Font Mono", "Arimo Nerd Font", monospace',
		),
		'aurulentsansmono' => array(
			'sheet' => 'aurulentsansmono.css',
			'stack' => '"AurulentSansMono Nerd Font Mono", "AurulentSansMono Nerd Font", monospace',
		),
		'bigblueterminal' => array(
			'sheet' => 'bigblueterminal.css',
			'stack' => '"BigBlueTermPlus Nerd Font Mono", "BigBlueTermPlus Nerd Font", monospace',
		),
		'bigblueterminal437' => array(
			'sheet' => 'bigblueterm437-nerd-font.css',
			'stack' => '"BigBlueTerm437 Nerd Font Mono", "BigBlueTerm437 Nerd Font", monospace',
		),
		'bitstreamverasansmono' => array(
			'sheet' => 'bitstreamverasansmono.css',
			'stack' => '"BitstromWera Nerd Font Mono", "BitstromWera Nerd Font", monospace',
		),
		'blexmono' => array(
			'sheet' => 'blexmono-nerd-font-mono.css',
			'stack' => '"BlexMono Nerd Font", "BlexMono Nerd Font", monospace',
		),
		'cascadiacode' => array(
			'sheet' => 'cascadiacode.css',
			'stack' => '"CaskaydiaCove NF", monospace',
		),
		'cascadiamono' => array(
			'sheet' => 'cascadiamono.css',
			'stack' => '"CaskaydiaMono NF", monospace',
		),
		'codenewroman' => array(
			'sheet' => 'codenewroman.css',
			'stack' => '"CodeNewRoman Nerd Font Mono", "CodeNewRoman Nerd Font", monospace',
		),
		'comicshannsmono' => array(
			'sheet' => 'comicshannsmono.css',
			'stack' => '"ComicShannsMono Nerd Font Mono", "ComicShannsMono Nerd Font", monospace',
		),
		'commitmono' => array(
			'sheet' => 'commitmono.css',
			'stack' => '"CommitMono Nerd Font Mono", "CommitMono Nerd Font", monospace',
		),
		'cousine' => array(
			'sheet' => 'cousine.css',
			'stack' => '"Cousine Nerd Font Mono", "Cousine Nerd Font", monospace',
		),
		'd2coding' => array(
			'sheet' => 'd2coding.css',
			'stack' => '"D2CodingLigature Nerd Font Mono", "D2CodingLigature Nerd Font", monospace',
		),
		'daddytimemono' => array(
			'sheet' => 'daddytimemono.css',
			'stack' => '"DaddyTimeMono Nerd Font Mono", "DaddyTimeMono Nerd Font", monospace',
		),
		'dejavusansmono' => array(
			'sheet' => 'dejavusansmono.css',
			'stack' => '"DejaVuSansM Nerd Font Mono", "DejaVuSansM Nerd Font", monospace',
		),
		'departuremono' => array(
			'sheet' => 'departuremono.css',
			'stack' => '"DepartureMono Nerd Font Mono", "DepartureMono Nerd Font", monospace',
		),
		'droidsansmono' => array(
			'sheet' => 'droidsansmono.css',
			'stack' => '"DroidSansM Nerd Font Mono", "DroidSansM Nerd Font", monospace',
		),
		'envycoder' => array(
			'sheet' => 'envycoder.css',
			'stack' => '"EnvyCodeR Nerd Font Mono", "EnvyCodeR Nerd Font", monospace',
		),
		'fantasquesansmono' => array(
			'sheet' => 'fantasquesansmono.css',
			'stack' => '"FantasqueSansM Nerd Font Mono", "FantasqueSansM Nerd Font", monospace',
		),
		'firacode' => array(
			'sheet' => 'firacode.css',
			'stack' => '"FiraCode Nerd Font Mono", "FiraCode Nerd Font", monospace',
		),
		'firamono' => array(
			'sheet' => 'firamono.css',
			'stack' => '"FiraMono Nerd Font Mono", "FiraMono Nerd Font", monospace',
		),
		'geistmono' => array(
			'sheet' => 'geistmono.css',
			'stack' => '"GeistMono Nerd Font Mono", "GeistMono Nerd Font", monospace',
		),
		'gohu' => array(
			'sheet' => 'gohu.css',
			'stack' => '"GohuFont 11 Nerd Font Mono", "GohuFont 11 Nerd Font", monospace',
		),
		'go-mono' => array(
			'sheet' => 'go-mono.css',
			'stack' => '"Go-Mono Nerd Font Mono", "Go-Mono Nerd Font", monospace',
		),
		'hack' => array(
			'sheet' => 'hack.css',
			'stack' => '"Hack Nerd Font Mono", "Hack Nerd Font", monospace',
		),
		'hasklig' => array(
			'sheet' => 'hasklig.css',
			'stack' => '"Hasklug Nerd Font Mono", "Hasklug Nerd Font", monospace',
		),
		'heavydata' => array(
			'sheet' => 'heavydata.css',
			'stack' => '"HeavyData Nerd Font", fantasy',
		),
		'hermit' => array(
			'sheet' => 'hermit.css',
			'stack' => '"Hurmit Nerd Font Mono", "Hurmit Nerd Font", monospace',
		),
		'ia-writer' => array(
			'sheet' => 'ia-writer.css',
			'stack' => '"iMWritingDuo Nerd Font Mono", "iMWritingDuo Nerd Font", monospace',
		),
		'ibmplexmono' => array(
			'sheet' => 'ibmplexmono.css',
			'stack' => '"BlexMono Nerd Font Mono", "BlexMono Nerd Font", monospace',
		),
		'inconsolata' => array(
			'sheet' => 'inconsolata.css',
			'stack' => '"Inconsolata Nerd Font Mono", "Inconsolata Nerd Font", monospace',
		),
		'inconsolatago' => array(
			'sheet' => 'inconsolatago.css',
			'stack' => '"InconsolataGo Nerd Font Mono", "InconsolataGo Nerd Font", monospace',
		),
		'inconsolatalgc' => array(
			'sheet' => 'inconsolatalgc.css',
			'stack' => '"Inconsolata LGC Nerd Font Mono", "Inconsolata LGC Nerd Font", monospace',
		),
		'intelonemono' => array(
			'sheet' => 'intelonemono.css',
			'stack' => '"IntoneMono NF", monospace',
		),
		'iosevka' => array(
			'sheet' => 'iosevka.css',
			'stack' => '"Iosevka NFM", "Iosevka NF", monospace',
		),
		'iosevkaterm' => array(
			'sheet' => 'iosevkaterm.css',
			'stack' => '"IosevkaTerm NFM", "IosevkaTerm NF", monospace',
		),
		'iosevkatermslab' => array(
			'sheet' => 'iosevkatermslab.css',
			'stack' => '"IosevkaTermSlab NFM", "IosevkaTermSlab NF", monospace',
		),
		'jetbrainsmono' => array(
			'sheet' => 'jetbrainsmono.css',
			'stack' => '"JetBrainsMonoNL NFM", "JetBrainsMonoNL NF", monospace',
		),
		'lekton' => array(
			'sheet' => 'lekton.css',
			'stack' => '"Lekton Nerd Font Mono", "Lekton Nerd Font", monospace',
		),
		'liberationmono' => array(
			'sheet' => 'liberationmono.css',
			'stack' => '"LiberationMono Nerd Font Mono", "LiberationMono Nerd Font", monospace',
		),
		'lilex' => array(
			'sheet' => 'lilex.css',
			'stack' => '"Lilex Nerd Font Mono", "Lilex Nerd Font", monospace',
		),
		'mplus' => array(
			'sheet' => 'mplus.css',
			'stack' => '"M+1Code Nerd Font Mono", "M+1Code Nerd Font", monospace',
		),
		'martianmono' => array(
			'sheet' => 'martianmono.css',
			'stack' => '"MartianMono NFM", "MartianMono NF", monospace',
		),
		'meslo' => array(
			'sheet' => 'meslo.css',
			'stack' => '"MesloLGLDZ Nerd Font Mono", "MesloLGLDZ Nerd Font Font", monospace',
		),
		'monaspace' => array(
			'sheet' => 'monaspace.css',
			'stack' => '"MonaspiceAr Nerd Font Mono", "MonaspiceAr Nerd Font", monospace',
		),
		'monofur' => array(
			'sheet' => 'monofur.css',
			'stack' => '"Monofur Nerd Font Mono", "Monofur Nerd Font", monospace',
		),
		'monoid' => array(
			'sheet' => 'monoid.css',
			'stack' => '"Monoid Nerd Font Mono", "Monoid Nerd Font", monospace',
		),
		'mononoki' => array(
			'sheet' => 'mononoki.css',
			'stack' => '"Mononoki Nerd Font Mono", "Mononoki Nerd Font", monospace',
		),
		'nerdfontssymbolsonly' => array(
			'sheet' => 'nerdfontssymbolsonly.css',
			'stack' => '"Symbols Nerd Font Mono", "Symbols Nerd Font", monospace',
		),
		'noto' => array(
			'sheet' => 'noto.css',
			'stack' => '"NotoMono NFM", "NotoMono NF", monospace',
		),
		'opendyslexic' => array(
			'sheet' => 'opendyslexic.css',
			'stack' => '"OpenDyslexicM Nerd Font Mono", "OpenDyslexicM Nerd Font", monospace',
		),
		'overpass' => array(
			'sheet' => 'overpass.css',
			'stack' => '"OverpassM Nerd Font Mono", "OverpassM Nerd Font", monospace',
		),
		'profont' => array(
			'sheet' => 'profont.css',
			'stack' => '"ProFont IIx Nerd Font Mono", "ProFont IIx Nerd Font", monospace',
		),
		'proggyclean' => array(
			'sheet' => 'proggyclean.css',
			'stack' => '"ProggyClean Nerd Font Mono", "ProggyClean Nerd Font", monospace',
		),
		'recursive' => array(
			'sheet' => 'recursive.css',
			'stack' => '"RecMonoCasual Nerd Font Mono", "RecMonoCasual Nerd Font", monospace',
		),
		'robotomono' => array(
			'sheet' => 'robotomono.css',
			'stack' => '"RobotoMono Nerd Font Mono", "RobotoMono Nerd Font", monospace',
		),
		'sharetechmono' => array(
			'sheet' => 'sharetechmono.css',
			'stack' => '"ShureTechMono Nerd Font Mono", "ShureTechMono Nerd Font", monospace',
		),
		'sourcecodepro' => array(
			'sheet' => 'sourcecodepro.css',
			'stack' => '"SauceCodePro NFM", "SauceCodePro NF", monospace',
		),
		'spacemono' => array(
			'sheet' => 'spacemono.css',
			'stack' => '"SpaceMono Nerd Font Mono", "SpaceMono Nerd Font", monospace',
		),
		'terminus' => array(
			'sheet' => 'terminus.css',
			'stack' => '"Terminess Nerd Font Mono", "Terminess Nerd Font", monospace',
		),
		'tinos' => array(
			'sheet' => 'tinos.css',
			'stack' => '"Tinos Nerd Font", serif',
		),
		'ubuntu' => array(
			'sheet' => 'ubuntu.css',
			'stack' => '"Ubuntu Nerd Font", sans-serif',
		),
		'ubuntumono' => array(
			'sheet' => 'ubuntumono.css',
			'stack' => '"UbuntuMono Nerd Font Mono", "UbuntuMono Nerd Font", monospace',
		),
		'ubuntusans' => array(
			'sheet' => 'ubuntusans.css',
			'stack' => '"UbuntuSansMono NFM", "UbuntuSansMono NF", monospace',
		),
		'victormono' => array(
			'sheet' => 'victormono.css',
			'stack' => '"VictorMono NFM", "VictorMono NF", monospace',
		),
		'zedmono' => array(
			'sheet' => 'zedmono.css',
			'stack' => '"ZedMono NFM", "ZedMono NF", monospace',
		),
	);
	return isset($configs[$key]) ? $configs[$key] : $configs['firacode'];
}

/**
 * Filesystem path to this template directory (trailing slash).
 *
 * @return string
 */
function _tpl_fsdir() {
	return dirname(__FILE__) . '/';
}

/**
 * Return a DokuWiki HTTP client when available (compatible with old and new cores).
 *
 * @return \dokuwiki\HTTP\DokuHTTPClient|DokuHTTPClient|null
 */
function _tpl_http_client() {
	if (class_exists('\\dokuwiki\\HTTP\\DokuHTTPClient')) {
		return new \dokuwiki\HTTP\DokuHTTPClient();
	}
	if (class_exists('DokuHTTPClient')) {
		return new DokuHTTPClient();
	}
	$legacy = DOKU_INC . 'inc/HTTPClient.php';
	if (is_readable($legacy)) {
		require_once $legacy;
		return new DokuHTTPClient();
	}
	return null;
}

/**
 * Download missing .woff2 files for the selected font (local CDN mode only).
 *
 * Only fetches the files referenced by the active @font-face sheet (~few MB),
 * not the full Nerd Fonts bundle.
 */
function _tpl_ensure_local_fonts($sheet) {
	$css_path = _tpl_fsdir() . 'assets/nerd-fonts/' . $sheet;
	if (!is_readable($css_path)) return;

	$css = file_get_contents($css_path);
	if ($css === false || !preg_match_all('/url\("fonts\/([^"]+\.woff2)"\)/', $css, $matches)) return;

	$fonts_dir = _tpl_fsdir() . 'assets/nerd-fonts/fonts/';
	if (!function_exists('io_mkdir_p') || !function_exists('io_saveFile')) return;
	io_mkdir_p($fonts_dir);

	$http = _tpl_http_client();
	if (!$http) return;
	$http->timeout = 60;
	$http->max_bodysize = 0;

	$base_url = 'https://cdn.jsdelivr.net/gh/mshaugh/nerdfont-webfonts/build/fonts/';
	foreach (array_unique($matches[1]) as $file) {
		$dest = $fonts_dir . $file;
		if (is_file($dest) && filesize($dest) > 0) continue;

		$data = $http->get($base_url . rawurlencode($file));
		if ($data !== false && strlen($data) > 128) {
			io_saveFile($dest, $data);
		}
	}
}

/**
 * Loads the glyph @font-face sheet and outputs font-family rules (after tpl_metaheaders()).
 */
function _tpl_font_headers() {
	$cfg = _tpl_font_config();
	$cdn = tpl_getConf('cdn');

	switch ($cdn) {
		case 'github':
			$stylesheet_url = 'https://mshaugh.github.io/nerdfont-webfonts/build/' . $cfg['sheet'];
			break;
		case 'jsdelivr':
			$stylesheet_url = 'https://cdn.jsdelivr.net/gh/mshaugh/nerdfont-webfonts/build/' . $cfg['sheet'];
			break;
		case 'local':
			_tpl_ensure_local_fonts($cfg['sheet']);
			$stylesheet_url = tpl_basedir() . 'assets/nerd-fonts/' . $cfg['sheet'];
			break;
		default:
			$stylesheet_url = tpl_basedir() . 'assets/nerd-fonts/' . $cfg['sheet'];
			break;
	}

	echo '<link rel="stylesheet" href="' . hsc($stylesheet_url) . '" />' . PHP_EOL;
	echo '<style type="text/css">' . PHP_EOL
		. 'body,' . PHP_EOL
		. 'input,' . PHP_EOL
		. 'textarea,' . PHP_EOL
		. 'select,' . PHP_EOL 
		. 'button,' . PHP_EOL
		. '.hacker-button,' . PHP_EOL
		. 'pre,' . PHP_EOL
		. 'code,' . PHP_EOL
		. 'kbd, samp,' . PHP_EOL
		. '#mediamanager__page h2,' . PHP_EOL
		. '#mediamanager__page h3' . PHP_EOL
		. '{ font-family: ' . $cfg['stack'] . '; }' . PHP_EOL
		. "</style>";
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
