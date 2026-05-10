<?php
/**
 * DokuWiki Hacker Template: Media Manager Popup
 *
 * @link     https://dokuwiki.org/template:hacker.css
 * @author   Lionel PLAIS <lionel.plais@ilp-web.net>
 * @license  MIT License (https://opensource.org/license/MIT)
 */

// Must be run within DokuWiki
if (!defined('DOKU_INC')) die();

// Include hook for template functions
@require_once(dirname(__FILE__) . '/tpl_functions.php');

?>
<!DOCTYPE html>
<html
	xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="<?php echo $conf['lang']?>"
	lang="<?php echo $conf['lang']?>"
	dir="<?php echo $lang['direction'] ?>"
	class="popup no-js">
<head>
	<meta charset="UTF-8" />
	<title>
		<?php
			echo hsc($lang['mediaselect']);
		?>
		[<?php
			echo strip_tags($conf['title']);
		?>]
		</title>
		<script>
			(function(H) {
				H.className = H.className.replace(/\bno-js\b/,'js')
			})(
				document.documentElement
			)
		</script>
		<?php
			tpl_metaheaders();
			_tpl_font_headers();
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<?php
			echo tpl_favicon(array('favicon', 'mobile'));
		?>
    <?php
			tpl_includeFile('meta.html');
		?>
</head>

<body>
	<!-- MEDIA MANAGER -->
	<div id="media__manager" class="<?php 
		echo tpl_classes(); 
	?>">
		<?php 
			html_msgarea();
		?>
		<!-- ASIDE -->
		<nav id="mediamgr__aside">
			<div class="pad">
				<h1>
					<?php 
						echo hsc($lang['mediaselect']);
					?>
				</h1>

				<div id="media__opts"></div>

				<?php 
					tpl_mediaTree();
				?>
			</div>
		</nav>
		<!-- /ASIDE -->
		
		<!-- CONTENT -->
		<main id="mediamgr__content">
			<div class="pad">
				<?php
					tpl_mediaContent();
				?>
			</div>
		</main>
		<!-- /CONTENT -->
	</div>
	<!-- /MEDIA MANAGER -->
</body>
</html>
