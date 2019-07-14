<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 page-title">
                        <h1 class="large-font">Blog</h1>
                    </div>
                    <div class="col-md-8 blog_content">
                        <div class="row">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content','index' );
								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
                        </div>
                    </div>
                    <div class="col-md-4 sidebar">
                        <aside>
							<?php get_sidebar(); ?>
                        </aside>
                    </div>
                </div>
                <div>


        </main><!-- #main -->
    </div><!-- #primary -->


<?php

get_footer();
