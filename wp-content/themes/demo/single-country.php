<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package demo
 */

get_header();
?>
<div class="container">
<a href="javascript:history.go(-1)">Back</a>
	<div class="row">
		<div class="col-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<?php
                    while (have_posts()) :
                        the_post();
                        
                        
                        get_template_part('template-parts/country');
                        
                        ?>
						<h4>Country Name: <?php echo get_field('country_name');?></h4>
                        <h4>Top level Domain: <?php echo get_field('top_level_domain');?></h4>
                        <h4>Alpha2 Code: <?php echo get_field('alpha_2_code');?></h4>
                        <h4>Alpha3 Code: <?php echo get_field('alpha_3_code');?></h4>
                        <h4>calling Codes: <?php echo get_field('calling_codes');?></h4>
                        <h4>Time Zones: <?php echo get_field('time_zones');?></h4>
                        <h4>Currency: <?php echo get_field('currencies');?></h4>
                        <h4>Country Flag: <img src=<?php echo get_field("country_flag");?> height="100" width="100"></h4>
						<h4 class="d-inline-block">Post Publish Time : <?php $my_date = the_date('', '<h4  class="d-inline-block">', '</h4>', false); echo $my_date; ?></h4>
					<?php
                    endwhile; // End of the loop.
                    ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div><!-- Sidebar here -->
				<?php //get_sidebar();?>
		</div>
	</div>
</div>
	

<?php

get_footer();
