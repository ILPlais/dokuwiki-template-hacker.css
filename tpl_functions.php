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
			'sheet' => 'assets/nerd-fonts/0xproto.css',
			'stack' => '"0xProto Nerd Font Mono", "0xProto Nerd Font", "Courier New", Courier, monospace',
		),
		'3270' => array(
			'sheet' => 'assets/nerd-fonts/3270.css',
			'stack' => '"3270 Nerd Font Mono", "3270 Nerd Font", "Courier New", Courier, monospace',
		),
		'agave' => array(
			'sheet' => 'assets/nerd-fonts/agave.css',
			'stack' => '"Agave Nerd Font Mono", "Agave Nerd Font", "Courier New", Courier, monospace',
		),
		'anonymouspro' => array(
			'sheet' => 'assets/nerd-fonts/anonymouspro.css',
			'stack' => '"AnonymousPro Nerd Font Mono", "AnonymousPro Nerd Font", "Courier New", Courier, monospace',
		),
		'arimo' => array(
			'sheet' => 'assets/nerd-fonts/arimo.css',
			'stack' => '"Arimo Nerd Font Mono", "Arimo Nerd Font", "Courier New", Courier, monospace',
		),
		'aurulentsansmono' => array(
			'sheet' => 'assets/nerd-fonts/aurulentsansmono.css',
			'stack' => '"AurulentSansMono Nerd Font Mono", "AurulentSansMono Nerd Font", "Courier New", Courier, monospace',
		),
		'bigblueterminal' => array(
			'sheet' => 'assets/nerd-fonts/bigblueterminal.css',
			'stack' => '"BigBlueTerminal Nerd Font Mono", "BigBlueTerminal Nerd Font", "Courier New", Courier, monospace',
		),
		'bitstreamverasansmono' => array(
			'sheet' => 'assets/nerd-fonts/bitstreamverasansmono.css',
			'stack' => '"BitstreamVeraSansMono Nerd Font Mono", "BitstreamVeraSansMono Nerd Font", "Courier New", Courier, monospace',
		),
		'cascadiacode' => array(
			'sheet' => 'assets/nerd-fonts/cascadiacode.css',
			'stack' => '"CascadiaCode Nerd Font Mono", "CascadiaCode Nerd Font", "Courier New", Courier, monospace',
		),
		'cascadiamono' => array(
			'sheet' => 'assets/nerd-fonts/cascadiamono.css',
			'stack' => '"CascadiaMono Nerd Font Mono", "CascadiaMono Nerd Font", "Courier New", Courier, monospace',
		),
		'codenewroman' => array(
			'sheet' => 'assets/nerd-fonts/codenewroman.css',
			'stack' => '"CodeNewRoman Nerd Font Mono", "CodeNewRoman Nerd Font", "Courier New", Courier, monospace',
		),
		'comicshannsmono' => array(
			'sheet' => 'assets/nerd-fonts/comicshannsmono.css',
			'stack' => '"ComicShannsMono Nerd Font Mono", "ComicShannsMono Nerd Font", "Courier New", Courier, monospace',
		),
		'commitmono' => array(
			'sheet' => 'assets/nerd-fonts/commitmono.css',
			'stack' => '"CommitMono Nerd Font Mono", "CommitMono Nerd Font", "Courier New", Courier, monospace',
		),
		'cousine' => array(
			'sheet' => 'assets/nerd-fonts/cousine.css',
			'stack' => '"Cousine Nerd Font Mono", "Cousine Nerd Font", "Courier New", Courier, monospace',
		),
		'd2coding' => array(
			'sheet' => 'assets/nerd-fonts/d2coding.css',
			'stack' => '"D2Coding Nerd Font Mono", "D2Coding Nerd Font", "Courier New", Courier, monospace',
		),
		'daddytimemono' => array(
			'sheet' => 'assets/nerd-fonts/daddytimemono.css',
			'stack' => '"DaddyTimeMono Nerd Font Mono", "DaddyTimeMono Nerd Font", "Courier New", Courier, monospace',
		),
		'dejavusansmono' => array(
			'sheet' => 'assets/nerd-fonts/dejavusansmono.css',
			'stack' => '"DejaVuSansMono Nerd Font Mono", "DejaVuSansMono Nerd Font", "Courier New", Courier, monospace',
		),
		'departuremono' => array(
			'sheet' => 'assets/nerd-fonts/departuremono.css',
			'stack' => '"DepartureMono Nerd Font Mono", "DepartureMono Nerd Font", "Courier New", Courier, monospace',
		),
		'droidsansmono' => array(
			'sheet' => 'assets/nerd-fonts/droidsansmono.css',
			'stack' => '"DroidSansMono Nerd Font Mono", "DroidSansMono Nerd Font", "Courier New", Courier, monospace',
		),
		'envycoder' => array(
			'sheet' => 'assets/nerd-fonts/envycoder.css',
			'stack' => '"EnvyCodeR Nerd Font Mono", "EnvyCodeR Nerd Font", "Courier New", Courier, monospace',
		),
		'fantasquesansmono' => array(
			'sheet' => 'assets/nerd-fonts/fantasquesansmono.css',
			'stack' => '"FantasqueSansMono Nerd Font Mono", "FantasqueSansMono Nerd Font", "Courier New", Courier, monospace',
		),
		'firacode' => array(
			'sheet' => 'assets/nerd-fonts/firacode.css',
			'stack' => '"FiraCode Nerd Font Mono", "FiraCode Nerd Font", "Courier New", Courier, monospace',
		),
		'firamono' => array(
			'sheet' => 'assets/nerd-fonts/firamono.css',
			'stack' => '"FiraMono Nerd Font Mono", "FiraMono Nerd Font", "Courier New", Courier, monospace',
		),
		'geistmono' => array(
			'sheet' => 'assets/nerd-fonts/geistmono.css',
			'stack' => '"GeistMono Nerd Font Mono", "GeistMono Nerd Font", "Courier New", Courier, monospace',
		),
		'go-mono' => array(
			'sheet' => 'assets/nerd-fonts/go-mono.css',
			'stack' => '"Go-Mono Nerd Font Mono", "Go-Mono Nerd Font", "Courier New", Courier, monospace',
		),
		'gohu' => array(
			'sheet' => 'assets/nerd-fonts/gohu.css',
			'stack' => '"Gohu Nerd Font Mono", "Gohu Nerd Font", "Courier New", Courier, monospace',
		),
		'hack' => array(
			'sheet' => 'assets/nerd-fonts/hack.css',
			'stack' => '"Hack Nerd Font Mono", "Hack Nerd Font", "Courier New", Courier, monospace',
		),
		'hasklig' => array(
			'sheet' => 'assets/nerd-fonts/hasklig.css',
			'stack' => '"Hasklig Nerd Font Mono", "Hasklig Nerd Font", "Courier New", Courier, monospace',
		),
		'heavydata' => array(
			'sheet' => 'assets/nerd-fonts/heavydata.css',
			'stack' => '"HeavyData Nerd Font Mono", "HeavyData Nerd Font", "Courier New", Courier, monospace',
		),
		'hermit' => array(
			'sheet' => 'assets/nerd-fonts/hermit.css',
			'stack' => '"Hermit Nerd Font Mono", "Hermit Nerd Font", "Courier New", Courier, monospace',
		),
		'ibmplexmono' => array(
			'sheet' => 'assets/nerd-fonts/ibmplexmono.css',
			'stack' => '"IBMPlexMono Nerd Font Mono", "IBMPlexMono Nerd Font", "Courier New", Courier, monospace',
		),
		'inconsolata' => array(
			'sheet' => 'assets/nerd-fonts/inconsolata.css',
			'stack' => '"Inconsolata Nerd Font Mono", "Inconsolata Nerd Font", "Courier New", Courier, monospace',
		),
		'inconsolatago' => array(
			'sheet' => 'assets/nerd-fonts/inconsolatago.css',
			'stack' => '"InconsolataGo Nerd Font Mono", "InconsolataGo Nerd Font", "Courier New", Courier, monospace',
		),
		'inconsolatalgc' => array(
			'sheet' => 'assets/nerd-fonts/inconsolatalgc.css',
			'stack' => '"InconsolataLGC Nerd Font Mono", "InconsolataLGC Nerd Font", "Courier New", Courier, monospace',
		),
		'intelonemono' => array(
			'sheet' => 'assets/nerd-fonts/intelonemono.css',
			'stack' => '"IntelOneMono Nerd Font Mono", "IntelOneMono Nerd Font", "Courier New", Courier, monospace',
		),
		'iosevka' => array(
			'sheet' => 'assets/nerd-fonts/iosevka.css',
			'stack' => '"Iosevka Nerd Font Mono", "Iosevka Nerd Font", "Courier New", Courier, monospace',
		),
		'iosevkaterm' => array(
			'sheet' => 'assets/nerd-fonts/iosevkaterm.css',
			'stack' => '"IosevkaTerm Nerd Font Mono", "IosevkaTerm Nerd Font", "Courier New", Courier, monospace',
		),
		'iosevkatermslab' => array(
			'sheet' => 'assets/nerd-fonts/iosevkatermslab.css',
			'stack' => '"IosevkaTermSlab Nerd Font Mono", "IosevkaTermSlab Nerd Font", "Courier New", Courier, monospace',
		),
		'jetbrainsmono' => array(
			'sheet' => 'assets/nerd-fonts/jetbrainsmono.css',
			'stack' => '"JetBrainsMono Nerd Font Mono", "JetBrainsMono Nerd Font", "Courier New", Courier, monospace',
		),
		'lekton' => array(
			'sheet' => 'assets/nerd-fonts/lekton.css',
			'stack' => '"Lekton Nerd Font Mono", "Lekton Nerd Font", "Courier New", Courier, monospace',
		),
		'liberationmono' => array(
			'sheet' => 'assets/nerd-fonts/liberationmono.css',
			'stack' => '"LiberationMono Nerd Font Mono", "LiberationMono Nerd Font", "Courier New", Courier, monospace',
		),
		'lilex' => array(
			'sheet' => 'assets/nerd-fonts/lilex.css',
			'stack' => '"Lilex Nerd Font Mono", "Lilex Nerd Font", "Courier New", Courier, monospace',
		),
		'mplus' => array(
			'sheet' => 'assets/nerd-fonts/mplus.css',
			'stack' => '"MPlus Nerd Font Mono", "MPlus Nerd Font", "Courier New", Courier, monospace',
		),
		'martianmono' => array(
			'sheet' => 'assets/nerd-fonts/martianmono.css',
			'stack' => '"MartianMono Nerd Font Mono", "MartianMono Nerd Font", "Courier New", Courier, monospace',
		),
		'meslo' => array(
			'sheet' => 'assets/nerd-fonts/meslo.css',
			'stack' => '"Meslo Nerd Font Mono", "Meslo Nerd Font", "Courier New", Courier, monospace',
		),
		'monaspace' => array(
			'sheet' => 'assets/nerd-fonts/monaspace.css',
			'stack' => '"Monaspace Nerd Font Mono", "Monaspace Nerd Font", "Courier New", Courier, monospace',
		),
		'monofur' => array(
			'sheet' => 'assets/nerd-fonts/monofur.css',
			'stack' => '"Monofur Nerd Font Mono", "Monofur Nerd Font", "Courier New", Courier, monospace',
		),
		'monoid' => array(
			'sheet' => 'assets/nerd-fonts/monoid.css',
			'stack' => '"Monoid Nerd Font Mono", "Monoid Nerd Font", "Courier New", Courier, monospace',
		),
		'mononoki' => array(
			'sheet' => 'assets/nerd-fonts/mononoki.css',
			'stack' => '"Mononoki Nerd Font Mono", "Mononoki Nerd Font", "Courier New", Courier, monospace',
		),
		'nerdfontssymbolsonly' => array(
			'sheet' => 'assets/nerd-fonts/nerdfontssymbolsonly.css',
			'stack' => '"NerdFontsSymbolsOnly Nerd Font Mono", "NerdFontsSymbolsOnly Nerd Font", "Courier New", Courier, monospace',
		),
		'noto' => array(
			'sheet' => 'assets/nerd-fonts/noto.css',
			'stack' => '"Noto Nerd Font Mono", "Noto Nerd Font", "Courier New", Courier, monospace',
		),
		'opendyslexic' => array(
			'sheet' => 'assets/nerd-fonts/opendyslexic.css',
			'stack' => '"OpenDyslexic Nerd Font Mono", "OpenDyslexic Nerd Font", "Courier New", Courier, monospace',
		),
		'overpass' => array(
			'sheet' => 'assets/nerd-fonts/overpass.css',
			'stack' => '"Overpass Nerd Font Mono", "Overpass Nerd Font", "Courier New", Courier, monospace',
		),
		'profont' => array(
			'sheet' => 'assets/nerd-fonts/profont.css',
			'stack' => '"ProFont Nerd Font Mono", "ProFont Nerd Font", "Courier New", Courier, monospace',
		),
		'proggyclean' => array(
			'sheet' => 'assets/nerd-fonts/proggyclean.css',
			'stack' => '"ProggyClean Nerd Font Mono", "ProggyClean Nerd Font", "Courier New", Courier, monospace',
		),
		'recursive' => array(
			'sheet' => 'assets/nerd-fonts/recursive.css',
			'stack' => '"Recursive Nerd Font Mono", "Recursive Nerd Font", "Courier New", Courier, monospace',
		),
		'robotomono' => array(
			'sheet' => 'assets/nerd-fonts/robotomono.css',
			'stack' => '"RobotoMono Nerd Font Mono", "RobotoMono Nerd Font", "Courier New", Courier, monospace',
		),
		'sharetechmono' => array(
			'sheet' => 'assets/nerd-fonts/sharetechmono.css',
			'stack' => '"ShareTechMono Nerd Font Mono", "ShareTechMono Nerd Font", "Courier New", Courier, monospace',
		),
		'sourcecodepro' => array(
			'sheet' => 'assets/nerd-fonts/sourcecodepro.css',
			'stack' => '"SourceCodePro Nerd Font Mono", "SourceCodePro Nerd Font", "Courier New", Courier, monospace',
		),
		'spacemono' => array(
			'sheet' => 'assets/nerd-fonts/spacemono.css',
			'stack' => '"SpaceMono Nerd Font Mono", "SpaceMono Nerd Font", "Courier New", Courier, monospace',
		),
		'terminus' => array(
			'sheet' => 'assets/nerd-fonts/terminus.css',
			'stack' => '"Terminus Nerd Font Mono", "Terminus Nerd Font", "Courier New", Courier, monospace',
		),
		'tinos' => array(
			'sheet' => 'assets/nerd-fonts/tinos.css',
			'stack' => '"Tinos Nerd Font Mono", "Tinos Nerd Font", "Courier New", Courier, monospace',
		),
		'ubuntu' => array(
			'sheet' => 'assets/nerd-fonts/ubuntu.css',
			'stack' => '"Ubuntu Nerd Font Mono", "Ubuntu Nerd Font", "Courier New", Courier, monospace',
		),
		'ubuntumono' => array(
			'sheet' => 'assets/nerd-fonts/ubuntumono.css',
			'stack' => '"UbuntuMono Nerd Font Mono", "UbuntuMono Nerd Font", "Courier New", Courier, monospace',
		),
		'ubuntusans' => array(
			'sheet' => 'assets/nerd-fonts/ubuntusans.css',
			'stack' => '"UbuntuSans Nerd Font Mono", "UbuntuSans Nerd Font", "Courier New", Courier, monospace',
		),
		'victormono' => array(
			'sheet' => 'assets/nerd-fonts/victormono.css',
			'stack' => '"VictorMono Nerd Font Mono", "VictorMono Nerd Font", "Courier New", Courier, monospace',
		),
		'zedmono' => array(
			'sheet' => 'assets/nerd-fonts/zedmono.css',
			'stack' => '"ZedMono Nerd Font Mono", "ZedMono Nerd Font", "Courier New", Courier, monospace',
		),
		'ia-writer' => array(
			'sheet' => 'assets/nerd-fonts/ia-writer.css',
			'stack' => '"iA-Writer Nerd Font Mono", "iA-Writer Nerd Font", "Courier New", Courier, monospace',
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
