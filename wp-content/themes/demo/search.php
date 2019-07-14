<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package demo
 */

get_header();
?>

			<section id="primary" class="content-area">
				<main id="main" class="site-main search-page">
				<div class="container">
					<div class="row">
						
							<?php if (have_posts()) : ?>
								<div class="col-12">
								<header class="page-header p-0">
									<h1 class="page-title m-0 p-0">
										<?php
                                        /* translators: %s: search query. */
                                        printf(esc_html__('Search Results for: %s', 'demo'), '<span>' . get_search_query() . '</span>');
                                        ?>
									</h1>
								</header><!-- .page-header -->
								</div>
								
								<div class="col-md-8 blog_content">
								<div class="row">
								<?php
                                /* Start the Loop */
                                while (have_posts()) :
                                    the_post();

                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part('template-parts/content', 'search');

                                endwhile;

                                the_posts_navigation();

                            else :

                                get_template_part('template-parts/content', 'none');

                            endif;
                            ?>

						</div>
					</div>
					<div class="col-md-4 sidebar">
							<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
	</main><!-- #main -->
</section><!-- #primary -->`


<?php

get_footer();
