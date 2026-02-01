<?php
/**
 * DokuWiki Hacker Template: Main Page
 *
 * @link     https://dokuwiki.org/template:hacker
 * @author   Lionel PLAIS <lionel.plais@ilp-web.net>
 * @license  MIT License (https://opensource.org/license/MIT)
 */

// Must be run within DokuWiki
if (!defined('DOKU_INC')) die();

// Include hook for template functions
@require_once(dirname(__FILE__) . '/tpl_functions.php');

$showTools = !tpl_getConf('hideTools') || ( tpl_getConf('hideTools') && !empty($_SERVER['REMOTE_USER']) );
$showSidebar = page_findnearest($conf['sidebar']) && ($ACT=='show');
$sidebarElement = tpl_getConf('sidebarIsNav') ? 'nav' : 'aside';
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
				tpl_pagetitle();
			?>
			[<?php
				echo strip_tags($conf['title'])
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
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<?php
			echo tpl_favicon(array('favicon', 'mobile'));
		?>
		<?php
			tpl_includeFile('meta.html')
		?>
</head>
<body>
	<!-- SITE -->
	<div id="dokuwiki__site">
		<!-- TOP -->
		<div
				id="dokuwiki__top"
				class="site <?php
					echo tpl_classes();
					echo ($showSidebar) ? 'hasSidebar' : '';
			?>">
			<?php
				// Occasional error and info messages on top of the page
				html_msgarea();
			?>
			<!-- HEADER -->
			<header id="dokuwiki__header">
				<!-- PAD -->
				<div class="pad">
					<?php
						tpl_includeFile('header.html');
					?>

					<!-- HEADING -->
					<div class="headings group">
						<h1 class="logo">
							<?php
								$logoSize = [];
								$logo = tpl_getMediaFile([
										':wiki:logo.svg',
										':logo.svg',
										':wiki:logo.png',
										':logo.png',
										'images/logo.svg',
										'images/logo.png'
									], false, $logoSize);

								tpl_link(
									wl(),
									'<img src="' . $logo . '" ' . ($logoSize ? $logoSize[3] : '') . ' alt="" />' .
									'<span>' . $conf['title'] . '</span>',
									'accesskey="h" title="' . tpl_getLang('home') . '[H]"');
							?>
						</h1>
						<?php if ($conf['tagline']): ?>
							<p class="claim"><?php echo $conf['tagline'] ?></p>
						<?php endif ?>

						<ul class="a11y skip">
							<li>
								<a href="#dokuwiki__content">
									<?php
										echo $lang['skip_to_content'];
									?>
								</a>
							</li>
						</ul>
						<div class="clearer"></div>
					</div>
					<!-- /HEADING -->

					<!-- TOOLS -->
					<div class="tools">
						<?php
							if ($conf['useacl'] && $showTools):
						?>
						<!-- USER TOOLS -->
						<nav id="dokuwiki__usertools" aria-labelledby="dokuwiki__usertools_heading">
							<h3 class="a11y" id="dokuwiki__usertools_heading">
								<?php
									echo $lang['user_tools'];
								?>
							</h3>
							<ul>
								<?php
									if (!empty($_SERVER['REMOTE_USER'])) {
										echo '<li class="user">';
										tpl_userinfo(); /* 'Logged in as ...' */
										echo '</li>';
									}
									if (file_exists(DOKU_INC . 'inc/Menu/UserMenu.php')) {
										echo (new \dokuwiki\Menu\UserMenu())->getListItems('action ', false);
									} else {
										_tpl_usertools();
									}
								?>
							</ul>
						</nav>
						<?php endif ?>
						<!-- /USER TOOLS -->

						<!-- SITE TOOLS -->
						<nav id="dokuwiki__sitetools" aria-labelledby="dokuwiki__sitetools_heading">
							<h3 class="a11y" id="dokuwiki__sitetools_heading">
								<?php
									echo $lang['site_tools'];
								?>
							</h3>
							<?php
								tpl_searchform();
							?>
							<ul>
								<?php
									if (file_exists(DOKU_INC . 'inc/Menu/SiteMenu.php')) {
										echo (new \dokuwiki\Menu\SiteMenu())->getListItems('action ', false);
									} else {
										_tpl_sitetools();
									}
								?>
							</ul>
						</nav>
						<!-- /SITE TOOLS -->

					</div>
					<!-- /TOOLS -->

					<div class="clearer"></div>

					<!-- BREADCRUMBS -->
					<?php
						if($conf['breadcrumbs']){
					?>
							<div class="breadcrumbs">
								<?php
									tpl_breadcrumbs();
								?>
							</div>
					<?php
						}
					?>

					<?php
						if($conf['youarehere']){
					?>
							<div class="breadcrumbs">
								<?php
									tpl_youarehere();
								?>
							</div>
					<?php
						}
					?>

					<div class="clearer"></div>
					<hr class="a11y" />
				</div>
				<!-- /PAD -->
			</header>
			<!-- /HEADER -->

			<!-- WRAPPER -->
			<div class="wrapper">
				<!-- ASIDE -->
				<?php
					if ($showSidebar):
				?>
				<<?php
					echo $sidebarElement;
				?>
					id="dokuwiki__aside"
					aria-label="<?php
						echo $lang['sidebar'];
					?>">

						<div class="pad aside include group">
							<?php
								tpl_includeFile('sidebarheader.html');
							?>
							<?php
								// includes the nearest sidebar page
								tpl_include_page($conf['sidebar'], 1, 1);
							?>
							<?php
								tpl_includeFile('sidebarfooter.html');
							?>
							<div class="clearer"></div>
						</div>

						</<?php
							echo $sidebarElement;
						?>>
						<!-- /ASIDE -->
						<?php endif; ?>

						<!-- CONTENT -->
						<main id="dokuwiki__content">
							<div class="pad">
								<?php
									// Flush the output buffer
									tpl_flush();
								?>
								<?php
									tpl_includeFile('pageheader.html')
								?>

								<div class="page">
									<!-- Wikipage start -->
									<?php
										// the main content
										tpl_content();
									?>
									<!-- Wikipage stop -->

									<div class="clearer"></div>
								</div>

								<?php
									tpl_flush();
								?>
								<?php
									tpl_includeFile('pagefooter.html');
								?>
							</div>
						</main>
						<!-- /CONTENT -->

						<div class="clearer"></div>
						<hr class="a11y" />

						<!-- PAGE TOOLS -->
						<?php
							if ($showTools):
						?>
								<nav id="dokuwiki__pagetools" aria-labelledby="dokuwiki__pagetools_heading">
									<h3 class="a11y" id="dokuwiki__pagetools_heading">
										<?php
											echo $lang['page_tools'];
										?>
									</h3>
									<ul>
										<?php
											if (file_exists(DOKU_INC . 'inc/Menu/PageMenu.php')) {
												echo (new \dokuwiki\Menu\PageMenu())->getListItems('action ', false);
											} else {
												_tpl_pagetools();
											}
										?>
									</ul>
								</nav>
								<!-- /PAGE TOOLS -->
							<?php
							endif; ?>
			</div>
			<!-- /WRAPPER -->

			<!-- FOOTER -->
			<footer id="dokuwiki__footer">
				<div class="pad">
					<div class="doc">
						<?php
							/* 'Last modified' etc */
							tpl_pageinfo();
						?>
					</div>

					<?php
						tpl_license('button');
					?>

					<?php
						tpl_includeFile('footer.html');
					?>
				</div>
			</footer>
			<!-- /FOOTER -->
		</div>
		<!-- /TOP -->
	</div>
	<!-- /SITE -->

	<div class="no">
		<?php
			// Provide DokuWiki housekeeping, required in all templates
			tpl_indexerWebBug();
		?>
	</div>
</body>
</html>
