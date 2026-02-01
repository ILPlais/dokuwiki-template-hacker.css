<?php

/**
 * DokuWiki Hacker Template: Image Detail Page
 *
 * @link     https://dokuwiki.org/template:hacker
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
	xml:lang="<?php echo $conf['lang'] ?>"
	lang="<?php echo $conf['lang'] ?>"
	dir="<?php echo $lang['direction'] ?>"
	class="no-js">
<head>
	<meta charset="UTF-8" />
	<title>
		<?php
			echo hsc(tpl_img_getTag('IPTC.Headline', $IMG));
		?>
		[<?php 
			echo strip_tags($conf['title']); 
			?>]
	</title>
	<script>
		(function(H) {
			H.className = H.className.replace(/\bno-js\b/, 'js')
		})(
			document.documentElement
		);
	</script>
	<?php tpl_metaheaders() ?>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php
		$favicon = tpl_favicon(array(
			'favicon',
			'mobile'
		));
		echo $favicon;
	?>
	<?php tpl_includeFile('meta.html') ?>
</head>

<body>
	<!-- DETAIL -->
	<div id="dokuwiki__detail" class="<?php echo tpl_classes(); ?>">
		<?php
			html_msgarea();
		?>

		<?php
			if ($ERROR):
				print $ERROR;
			else:
		?>

			<!-- CONTENT -->
			<main class="content group">
				<?php
					if ($REV) echo p_locale_xhtml('showrev');
				?>
				<h1>
					<?php
						echo hsc(tpl_img_getTag('IPTC.Headline', $IMG));
					?>
				</h1>

				<?php
					/* the image; parameters: maximum width, maximum height (and more) */
					tpl_img(900, 700);
				?>

				<div class="img_detail">
					<h2>
						<?php
							print nl2br(hsc(tpl_img_getTag('simple.title')));
						?>
					</h2>

					<?php
						if (function_exists('tpl_img_meta')):
							tpl_img_meta();
						else:
					?>
						<dl>
							<?php
								$config_files = getConfigFiles('mediameta');

								foreach ($config_files as $config_file) {
									if (@file_exists($config_file)) {
										include($config_file);
									}
								}

								foreach ($fields as $key   => $tag) {
									$t = array();

									if (!empty($tag[0])) {
										$t     = array(
											$tag[0]
										);
									}

									if (is_array($tag[3])) {
										$t     = array_merge($t, $tag[3]);
									}

									$value = tpl_img_getTag($t);
									if ($value) {
										echo '<dt>' . $lang[$tag[1]] . ':</dt><dd>';

										if ($tag[2] == 'date') {
											echo dformat($value);
										} else {
											echo hsc($value);
										}

										echo '</dd>';
									}
								}
							?>
						</dl>
					<?php
						endif;
					?>
				</div>
			</main>
			<!-- /CONTENT -->

			<nav>
				<ul>
					<?php
						if (file_exists(DOKU_INC . 'inc/Menu/DetailMenu.php')) {
							echo (new \dokuwiki\Menu\DetailMenu())->getListItems('action ', false);
						}
						else {
							_tpl_detailtools();
						}
					?>
				</ul>
			</nav>

		<?php
			// End Error
			endif;
		?>
	</div>
	<!-- /DETAIL -->
</body>

</html>