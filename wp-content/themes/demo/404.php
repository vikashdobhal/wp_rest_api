<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package demo
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-12">
		<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found text-center pt-4 mb-5">
				<header class="page-header p-0 m-0">
					<h1 class="page-title m-0 wow fadeInLeft"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'demo'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h3 class="wow fadeInRight"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'demo'); ?></h3>

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
		</div>
	</div>
</div>
	

<?php
get_footer();
