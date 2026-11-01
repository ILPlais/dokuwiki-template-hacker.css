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

// GitHub repository whose latest release provides the web fonts
if (!defined('TPL_HACKER_FONT_REPO')) define('TPL_HACKER_FONT_REPO', 'ILPlais/NerdFontsToWebFonts');

/**
 * Release archive, @font-face stylesheet and font-family stack for the template font setting
 * (conf/metadata.php).
 *
 * @return array{archive:string,sheet:string,stack:string}
 */
function _tpl_font_config() {
	$key = tpl_getConf('font');
	$configs = array(
		'0xproto' => array(
			'archive' => '0xProto',
			'sheet' => '0xproto.css',
			'stack' => '"0xProto Nerd Font Mono", "0xProto Nerd Font", monospace',
		),
		'3270' => array(
			'archive' => '3270',
			'sheet' => '3270.css',
			'stack' => '"3270 Nerd Font Mono", "3270 Nerd Font", monospace',
		),
		'agave' => array(
			'archive' => 'Agave',
			'sheet' => 'agave.css',
			'stack' => '"Agave Nerd Font Mono", "Agave Nerd Font", monospace',
		),
		'anonymouspro' => array(
			'archive' => 'AnonymousPro',
			'sheet' => 'anonymouspro.css',
			'stack' => '"AnonymicePro Nerd Font Mono", "AnonymicePro Nerd Font", monospace',
		),
		'arimo' => array(
			'archive' => 'Arimo',
			'sheet' => 'arimo.css',
			'stack' => '"Arimo Nerd Font Mono", "Arimo Nerd Font", monospace',
		),
		'aurulentsansmono' => array(
			'archive' => 'AurulentSansMono',
			'sheet' => 'aurulentsansmono.css',
			'stack' => '"AurulentSansM Nerd Font Mono", "AurulentSansM Nerd Font", monospace',
		),
		'bigblueterminal' => array(
			'archive' => 'BigBlueTerminal',
			'sheet' => 'bigblueterminal.css',
			'stack' => '"BigBlueTermPlus Nerd Font Mono", "BigBlueTermPlus Nerd Font", monospace',
		),
		'bigblueterminal437' => array(
			'archive' => 'BigBlueTerminal',
			'sheet' => 'bigblueterm437-nerd-font.css',
			'stack' => '"BigBlueTerm437 Nerd Font Mono", "BigBlueTerm437 Nerd Font", monospace',
		),
		'bitstreamverasansmono' => array(
			'archive' => 'BitstreamVeraSansMono',
			'sheet' => 'bitstreamverasansmono.css',
			'stack' => '"BitstromWera Nerd Font Mono", "BitstromWera Nerd Font", monospace',
		),
		'blexmono' => array(
			'archive' => 'IBMPlexMono',
			'sheet' => 'blexmono-nerd-font-mono.css',
			'stack' => '"BlexMono Nerd Font Mono", monospace',
		),
		'cascadiacode' => array(
			'archive' => 'CascadiaCode',
			'sheet' => 'cascadiacode.css',
			'stack' => '"CaskaydiaCove NF", monospace',
		),
		'cascadiamono' => array(
			'archive' => 'CascadiaMono',
			'sheet' => 'cascadiamono.css',
			'stack' => '"CaskaydiaMono NF", monospace',
		),
		'codenewroman' => array(
			'archive' => 'CodeNewRoman',
			'sheet' => 'codenewroman.css',
			'stack' => '"CodeNewRoman Nerd Font Mono", "CodeNewRoman Nerd Font", monospace',
		),
		'comicshannsmono' => array(
			'archive' => 'ComicShannsMono',
			'sheet' => 'comicshannsmono.css',
			'stack' => '"ComicShannsMono Nerd Font Mono", "ComicShannsMono Nerd Font", monospace',
		),
		'commitmono' => array(
			'archive' => 'CommitMono',
			'sheet' => 'commitmono.css',
			'stack' => '"CommitMono Nerd Font Mono", "CommitMono Nerd Font", monospace',
		),
		'cousine' => array(
			'archive' => 'Cousine',
			'sheet' => 'cousine.css',
			'stack' => '"Cousine Nerd Font Mono", "Cousine Nerd Font", monospace',
		),
		'd2coding' => array(
			'archive' => 'D2Coding',
			'sheet' => 'd2coding.css',
			'stack' => '"D2CodingLigature Nerd Font Mono", "D2CodingLigature Nerd Font", monospace',
		),
		'daddytimemono' => array(
			'archive' => 'DaddyTimeMono',
			'sheet' => 'daddytimemono.css',
			'stack' => '"DaddyTimeMono Nerd Font Mono", "DaddyTimeMono Nerd Font", monospace',
		),
		'dejavusansmono' => array(
			'archive' => 'DejaVuSansMono',
			'sheet' => 'dejavusansmono.css',
			'stack' => '"DejaVuSansM Nerd Font Mono", "DejaVuSansM Nerd Font", monospace',
		),
		'departuremono' => array(
			'archive' => 'DepartureMono',
			'sheet' => 'departuremono.css',
			'stack' => '"DepartureMono Nerd Font Mono", "DepartureMono Nerd Font", monospace',
		),
		'droidsansmono' => array(
			'archive' => 'DroidSansMono',
			'sheet' => 'droidsansmono.css',
			'stack' => '"DroidSansM Nerd Font Mono", "DroidSansM Nerd Font", monospace',
		),
		'envycoder' => array(
			'archive' => 'EnvyCodeR',
			'sheet' => 'envycoder.css',
			'stack' => '"EnvyCodeR Nerd Font Mono", "EnvyCodeR Nerd Font", monospace',
		),
		'fantasquesansmono' => array(
			'archive' => 'FantasqueSansMono',
			'sheet' => 'fantasquesansmono.css',
			'stack' => '"FantasqueSansM Nerd Font Mono", "FantasqueSansM Nerd Font", monospace',
		),
		'firacode' => array(
			'archive' => 'FiraCode',
			'sheet' => 'firacode.css',
			'stack' => '"FiraCode Nerd Font Mono", "FiraCode Nerd Font", monospace',
		),
		'firamono' => array(
			'archive' => 'FiraMono',
			'sheet' => 'firamono.css',
			'stack' => '"FiraMono Nerd Font Mono", "FiraMono Nerd Font", monospace',
		),
		'geistmono' => array(
			'archive' => 'GeistMono',
			'sheet' => 'geistmono.css',
			'stack' => '"GeistMono Nerd Font Mono", "GeistMono Nerd Font", monospace',
		),
		'gohu' => array(
			'archive' => 'Gohu',
			'sheet' => 'gohu.css',
			'stack' => '"GohuFont 11 Nerd Font Mono", "GohuFont 11 Nerd Font", monospace',
		),
		'go-mono' => array(
			'archive' => 'Go-Mono',
			'sheet' => 'go-mono.css',
			'stack' => '"GoMono Nerd Font Mono", "GoMono Nerd Font", monospace',
		),
		'hack' => array(
			'archive' => 'Hack',
			'sheet' => 'hack.css',
			'stack' => '"Hack Nerd Font Mono", "Hack Nerd Font", monospace',
		),
		'hasklig' => array(
			'archive' => 'Hasklig',
			'sheet' => 'hasklig.css',
			'stack' => '"Hasklug Nerd Font Mono", "Hasklug Nerd Font", monospace',
		),
		'heavydata' => array(
			'archive' => 'HeavyData',
			'sheet' => 'heavydata.css',
			'stack' => '"HeavyData Nerd Font", fantasy',
		),
		'hermit' => array(
			'archive' => 'Hermit',
			'sheet' => 'hermit.css',
			'stack' => '"Hurmit Nerd Font Mono", "Hurmit Nerd Font", monospace',
		),
		'ia-writer' => array(
			'archive' => 'iA-Writer',
			'sheet' => 'ia-writer.css',
			'stack' => '"iMWritingDuo Nerd Font Mono", "iMWritingDuo Nerd Font", monospace',
		),
		'ibmplexmono' => array(
			'archive' => 'IBMPlexMono',
			'sheet' => 'ibmplexmono.css',
			'stack' => '"BlexMono Nerd Font Mono", "BlexMono Nerd Font", monospace',
		),
		'inconsolata' => array(
			'archive' => 'Inconsolata',
			'sheet' => 'inconsolata.css',
			'stack' => '"Inconsolata Nerd Font Mono", "Inconsolata Nerd Font", monospace',
		),
		'inconsolatago' => array(
			'archive' => 'InconsolataGo',
			'sheet' => 'inconsolatago.css',
			'stack' => '"InconsolataGo Nerd Font Mono", "InconsolataGo Nerd Font", monospace',
		),
		'inconsolatalgc' => array(
			'archive' => 'InconsolataLGC',
			'sheet' => 'inconsolatalgc.css',
			'stack' => '"Inconsolata LGC Nerd Font Mono", "Inconsolata LGC Nerd Font", monospace',
		),
		'intelonemono' => array(
			'archive' => 'IntelOneMono',
			'sheet' => 'intelonemono.css',
			'stack' => '"IntoneMono NF", monospace',
		),
		'iosevka' => array(
			'archive' => 'Iosevka',
			'sheet' => 'iosevka.css',
			'stack' => '"Iosevka NFM", "Iosevka NF", monospace',
		),
		'iosevkaterm' => array(
			'archive' => 'IosevkaTerm',
			'sheet' => 'iosevkaterm.css',
			'stack' => '"IosevkaTerm NFM", "IosevkaTerm NF", monospace',
		),
		'iosevkatermslab' => array(
			'archive' => 'IosevkaTermSlab',
			'sheet' => 'iosevkatermslab.css',
			'stack' => '"IosevkaTermSlab NFM", "IosevkaTermSlab NF", monospace',
		),
		'jetbrainsmono' => array(
			'archive' => 'JetBrainsMono',
			'sheet' => 'jetbrainsmono.css',
			'stack' => '"JetBrainsMonoNL NFM", "JetBrainsMonoNL NF", monospace',
		),
		'lekton' => array(
			'archive' => 'Lekton',
			'sheet' => 'lekton.css',
			'stack' => '"Lekton Nerd Font Mono", "Lekton Nerd Font", monospace',
		),
		'liberationmono' => array(
			'archive' => 'LiberationMono',
			'sheet' => 'liberationmono.css',
			'stack' => '"LiterationMono Nerd Font Mono", "LiterationMono Nerd Font", monospace',
		),
		'lilex' => array(
			'archive' => 'Lilex',
			'sheet' => 'lilex.css',
			'stack' => '"Lilex Nerd Font Mono", "Lilex Nerd Font", monospace',
		),
		'mplus' => array(
			'archive' => 'MPlus',
			'sheet' => 'mplus.css',
			'stack' => '"M+1Code Nerd Font Mono", "M+1Code Nerd Font", monospace',
		),
		'martianmono' => array(
			'archive' => 'MartianMono',
			'sheet' => 'martianmono.css',
			'stack' => '"MartianMono NFM", "MartianMono NF", monospace',
		),
		'meslo' => array(
			'archive' => 'Meslo',
			'sheet' => 'meslo.css',
			'stack' => '"MesloLGLDZ Nerd Font Mono", "MesloLGLDZ Nerd Font Font", monospace',
		),
		'monaspace' => array(
			'archive' => 'Monaspace',
			'sheet' => 'monaspace.css',
			'stack' => '"MonaspiceAr Nerd Font Mono", "MonaspiceAr Nerd Font", monospace',
		),
		'monofur' => array(
			'archive' => 'Monofur',
			'sheet' => 'monofur.css',
			'stack' => '"Monofur Nerd Font Mono", "Monofur Nerd Font", monospace',
		),
		'monoid' => array(
			'archive' => 'Monoid',
			'sheet' => 'monoid.css',
			'stack' => '"Monoid Nerd Font Mono", "Monoid Nerd Font", monospace',
		),
		'mononoki' => array(
			'archive' => 'Mononoki',
			'sheet' => 'mononoki.css',
			'stack' => '"Mononoki Nerd Font Mono", "Mononoki Nerd Font", monospace',
		),
		'nerdfontssymbolsonly' => array(
			'archive' => 'NerdFontsSymbolsOnly',
			'sheet' => 'nerdfontssymbolsonly.css',
			'stack' => '"Symbols Nerd Font Mono", "Symbols Nerd Font", monospace',
		),
		'noto' => array(
			'archive' => 'Noto',
			'sheet' => 'noto.css',
			'stack' => '"NotoMono NFM", "NotoMono NF", monospace',
		),
		'opendyslexic' => array(
			'archive' => 'OpenDyslexic',
			'sheet' => 'opendyslexic.css',
			'stack' => '"OpenDyslexicM Nerd Font Mono", "OpenDyslexicM Nerd Font", monospace',
		),
		'overpass' => array(
			'archive' => 'Overpass',
			'sheet' => 'overpass.css',
			'stack' => '"OverpassM Nerd Font Mono", "OverpassM Nerd Font", monospace',
		),
		'profont' => array(
			'archive' => 'ProFont',
			'sheet' => 'profont.css',
			'stack' => '"ProFont IIx Nerd Font Mono", "ProFont IIx Nerd Font", monospace',
		),
		'proggyclean' => array(
			'archive' => 'ProggyClean',
			'sheet' => 'proggyclean.css',
			'stack' => '"ProggyClean Nerd Font Mono", "ProggyClean Nerd Font", monospace',
		),
		'recursive' => array(
			'archive' => 'Recursive',
			'sheet' => 'recursive.css',
			'stack' => '"RecMonoCasual Nerd Font Mono", "RecMonoCasual Nerd Font", monospace',
		),
		'robotomono' => array(
			'archive' => 'RobotoMono',
			'sheet' => 'robotomono.css',
			'stack' => '"RobotoMono Nerd Font Mono", "RobotoMono Nerd Font", monospace',
		),
		'sharetechmono' => array(
			'archive' => 'ShareTechMono',
			'sheet' => 'sharetechmono.css',
			'stack' => '"ShureTechMono Nerd Font Mono", "ShureTechMono Nerd Font", monospace',
		),
		'sourcecodepro' => array(
			'archive' => 'SourceCodePro',
			'sheet' => 'sourcecodepro.css',
			'stack' => '"SauceCodePro NFM", "SauceCodePro NF", monospace',
		),
		'spacemono' => array(
			'archive' => 'SpaceMono',
			'sheet' => 'spacemono.css',
			'stack' => '"SpaceMono Nerd Font Mono", "SpaceMono Nerd Font", monospace',
		),
		'terminus' => array(
			'archive' => 'Terminus',
			'sheet' => 'terminus.css',
			'stack' => '"Terminess Nerd Font Mono", "Terminess Nerd Font", monospace',
		),
		'tinos' => array(
			'archive' => 'Tinos',
			'sheet' => 'tinos.css',
			'stack' => '"Tinos Nerd Font", serif',
		),
		'ubuntu' => array(
			'archive' => 'Ubuntu',
			'sheet' => 'ubuntu.css',
			'stack' => '"Ubuntu Nerd Font", sans-serif',
		),
		'ubuntumono' => array(
			'archive' => 'UbuntuMono',
			'sheet' => 'ubuntumono.css',
			'stack' => '"UbuntuMono Nerd Font Mono", "UbuntuMono Nerd Font", monospace',
		),
		'ubuntusans' => array(
			'archive' => 'UbuntuSans',
			'sheet' => 'ubuntusans.css',
			'stack' => '"UbuntuSansMono NFM", "UbuntuSansMono NF", monospace',
		),
		'victormono' => array(
			'archive' => 'VictorMono',
			'sheet' => 'victormono.css',
			'stack' => '"VictorMono NFM", "VictorMono NF", monospace',
		),
		'zedmono' => array(
			'archive' => 'ZedMono',
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
 * Fetch a byte range from a URL.
 *
 * @param object $http HTTP client
 * @param string $url  URL of the remote file
 * @param int    $from First byte
 * @param int    $to   Last byte (inclusive)
 * @return string|false
 */
function _tpl_http_range($http, $url, $from, $to) {
	$http->headers['Range'] = 'bytes=' . $from . '-' . $to;
	$data = $http->get($url);
	unset($http->headers['Range']);
	return ($data !== false && $http->status == 206) ? $data : false;
}

/**
 * Read the central directory of a remote .zip file.
 *
 * Release archives reach hundreds of MB while a font only needs a few files,
 * so they are read with HTTP range requests instead of being downloaded whole.
 * ZIP64 archives are not supported.
 *
 * @param object $http HTTP client
 * @param string $url  URL of the .zip file
 * @return array|false Entries indexed by file name (without directory)
 */
function _tpl_zip_index($http, $url) {
	// The storage behind GitHub releases rejects suffix ranges: the size comes first
	if (_tpl_http_range($http, $url, 0, 0) === false) return false;
	$range = isset($http->resp_headers['content-range']) ? $http->resp_headers['content-range'] : '';
	if (!preg_match('/\/(\d+)$/', $range, $match)) return false;
	$size = (int) $match[1];

	// End of central directory record: 22 bytes plus a comment of up to 65535 bytes
	$tail = _tpl_http_range($http, $url, max(0, $size - 65557), $size - 1);
	if ($tail === false) return false;
	$pos = strrpos($tail, "PK\x05\x06");
	if ($pos === false || strlen($tail) < $pos + 22) return false;
	$end = unpack('Vsize/Voffset', substr($tail, $pos + 12, 8));
	if ($end['size'] === 0) return false;

	$directory = _tpl_http_range($http, $url, $end['offset'], $end['offset'] + $end['size'] - 1);
	if ($directory === false) return false;

	$index = array();
	$pos = 0;
	$length = strlen($directory);
	while ($pos + 46 <= $length && substr($directory, $pos, 4) === "PK\x01\x02") {
		$entry = unpack(
			'vmethod/vtime/vdate/Vcrc/Vcompressed/Vsize/vname/vextra/vcomment/vdisk/vinternal/Vexternal/Voffset',
			substr($directory, $pos + 10, 36)
		);
		$name = substr($directory, $pos + 46, $entry['name']);
		$index[basename($name)] = $entry;
		$pos += 46 + $entry['name'] + $entry['extra'] + $entry['comment'];
	}
	return $index;
}

/**
 * Extract one entry of a remote .zip file.
 *
 * @param object $http  HTTP client
 * @param string $url   URL of the .zip file
 * @param array  $entry Entry from _tpl_zip_index()
 * @return string|false Uncompressed and checksum-verified content
 */
function _tpl_zip_extract($http, $url, $entry) {
	// The local header may have a different extra field: read a little past the data
	$last = $entry['offset'] + 30 + $entry['name'] + $entry['extra'] + $entry['compressed'] + 1024;
	$raw = _tpl_http_range($http, $url, $entry['offset'], $last);
	if ($raw === false || substr($raw, 0, 4) !== "PK\x03\x04") return false;

	$header = unpack('vname/vextra', substr($raw, 26, 4));
	$data = substr($raw, 30 + $header['name'] + $header['extra'], $entry['compressed']);
	if (strlen($data) !== $entry['compressed']) return false;

	if ($entry['method'] === 8) {
		$data = @gzinflate($data);
	} elseif ($entry['method'] !== 0) {
		return false;
	}
	return ($data !== false && crc32($data) === $entry['crc']) ? $data : false;
}

/**
 * Tag of the latest font release.
 *
 * @param object $http HTTP client
 * @return string|false
 */
function _tpl_font_latest_tag($http) {
	$json = $http->get('https://api.github.com/repos/' . TPL_HACKER_FONT_REPO . '/releases/latest');
	if ($json === false) return false;
	$release = json_decode($json, true);
	if (!is_array($release) || !isset($release['tag_name'])) return false;
	// The tag becomes a directory name
	return preg_match('/^\w[\w.+-]*$/', $release['tag_name']) ? $release['tag_name'] : false;
}

/**
 * Install a font from a release into fonts/<tag>/.
 *
 * Only the faces used by the font stack are fetched, not the whole family.
 * The stylesheet is written last: its presence marks the font as complete.
 *
 * @param object $http HTTP client
 * @param array  $cfg  Entry from _tpl_font_config()
 * @param string $tag  Release tag
 * @param string $dir  Fonts cache directory
 * @return bool|null True when complete, false on failure, null when out of time
 */
function _tpl_font_install($http, $cfg, $tag, $dir) {
	$css = @file_get_contents(_tpl_fsdir() . 'assets/nerd-fonts/' . $cfg['sheet']);
	if ($css === false || !function_exists('gzinflate')) return false;
	preg_match_all('/"([^"]+)"/', $cfg['stack'], $families);
	preg_match_all('/@font-face\s*\{.*?\}/s', $css, $declarations);

	$faces = array();
	foreach ($declarations[0] as $face) {
		if (!preg_match('/font-family:\s*"([^"]+)"/', $face, $family)) continue;
		if (!in_array($family[1], $families[1], true)) continue;
		if (!preg_match('/url\("fonts\/([^"]+\.woff2)"\)/', $face, $file)) continue;
		$faces[$file[1]] = str_replace('url("fonts/', 'url("', $face);
	}

	$target = $dir . $tag . '/';
	io_mkdir_p($target);
	$missing = array();
	foreach (array_keys($faces) as $file) {
		if (!is_file($target . $file)) $missing[] = $file;
	}

	if ($missing) {
		$url = 'https://github.com/' . TPL_HACKER_FONT_REPO . '/releases/download/'
			. rawurlencode($tag) . '/' . rawurlencode($cfg['archive']) . '.zip';
		$index = _tpl_zip_index($http, $url);
		if ($index === false) return false;

		// This runs while a page is being rendered: the next page view resumes the work
		$deadline = microtime(true) + 10;
		foreach ($missing as $file) {
			if (microtime(true) > $deadline) return null;
			if (!isset($index[$file])) {
				// A face dropped by the release must not block the others
				unset($faces[$file]);
				continue;
			}
			$data = _tpl_zip_extract($http, $url, $index[$file]);
			if ($data === false) return false;
			io_saveFile($target . $file, $data);
		}
	}

	if (!$faces) return false;
	io_saveFile($target . $cfg['sheet'], implode(PHP_EOL, $faces) . PHP_EOL);
	return true;
}

/**
 * URL of the @font-face stylesheet of the selected font.
 *
 * Browsers cannot load fonts from the release archives, so the server extracts
 * them into its cache. The installed version stays in use until a newer release
 * is completely installed. Network failures are retried once an hour at most, so
 * they cannot slow down every page view.
 *
 * @param array $cfg Entry from _tpl_font_config()
 * @return string|null Null until the font has been installed
 */
function _tpl_font_stylesheet($cfg) {
	$dir = _tpl_fsdir() . 'assets/nerd-fonts/fonts/';
	$state_file = $dir . '.release.json';
	$sheet = $cfg['sheet'];

	$state = is_file($state_file) ? json_decode((string) file_get_contents($state_file), true) : null;
	if (!is_array($state)) $state = array();
	$state += array('tag' => '', 'checked' => 0, 'retry' => 0, 'ready' => array());

	$ready = isset($state['ready'][$sheet]) ? $state['ready'][$sheet] : '';
	if ($ready !== '' && !is_file($dir . $ready . '/' . $sheet)) $ready = '';

	$check = time() - $state['checked'] >= 86400;
	if (($check || $ready === '' || $ready !== $state['tag']) && time() >= $state['retry']) {
		io_mkdir_p($dir);
		$http = is_writable($dir) ? _tpl_http_client() : null;
		if ($http) {
			$http->timeout = 15;
			$http->max_bodysize = 0;

			$state['retry'] = time() + 3600;
			$tag = $check || $state['tag'] === '' ? _tpl_font_latest_tag($http) : $state['tag'];
			if ($tag !== false) {
				$state['tag'] = $tag;
				$state['checked'] = $check ? time() : $state['checked'];
				$result = $ready === $tag ? true : _tpl_font_install($http, $cfg, $tag, $dir);
				if ($result !== false) $state['retry'] = 0;
				if ($result === true && $ready !== $tag) {
					if ($ready !== '') io_rmdir($dir . $ready, true);
					$state['ready'][$sheet] = $ready = $tag;
				}
			}
			io_saveFile($state_file, json_encode($state));
		}
	}

	return $ready === '' ? null : tpl_basedir() . 'assets/nerd-fonts/fonts/' . rawurlencode($ready) . '/' . $sheet;
}

/**
 * Loads the glyph @font-face sheet and outputs font-family rules (after tpl_metaheaders()).
 */
function _tpl_font_headers() {
	$cfg = _tpl_font_config();
	$stylesheet_url = _tpl_font_stylesheet($cfg);

	if ($stylesheet_url !== null) {
		echo '<link rel="stylesheet" href="' . hsc($stylesheet_url) . '" />' . PHP_EOL;
	}
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
