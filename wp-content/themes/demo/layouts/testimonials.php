<?php
/**
 * Testimonial Layout
 */
$args = array(
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query'=>array(
        array(
            'key'     => 'type',
            'value'   => 'text',
            'compare' => '='
        )
    ),
);
?>
<section class="chad_testimonial">
	<div class="container">
		<div class="row">
				<?php $testimonials = new WP_Query($args);
                if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) :
                $testimonials->the_post();
                ?>
					<div class="col-md-6 testimonial-block padding_medium wow fadeInUp" data-wow-duration="2s">
						<blockquote>
							
								<strong class="d-block"><?php echo get_field('testimonial'); ?></strong>
								<footer><span><?php the_title() ?></span></footer>
						</blockquote>
					</div>
               <?php endwhile;?>
				<?php endif;?>
                <?php wp_reset_postdata(); ?>
		</div>
	</div>			
</section>
<?php
//video testimonials
$args = array(
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query'=>array(
        array(
            'key'     => 'type',
            'value'   => 'video',
            'compare' => '='
        )
    ),
);
?>
<section class="video_testimonial">
	<div class="container">
		<div class="row">
				<?php $testimonials = new WP_Query($args);?>
                <?php if ($testimonials->have_posts()) : ?>
					<div class="col-lg-7 mx-auto video_slider text-md-center wow fadeInUp" data-wow-duration="2s">
					<h2 class="text-md-center">Video Testimonials</h2>
					<?php
                        //if ($testimonials->have_posts()) :
                        while ($testimonials->have_posts()) :
                        $testimonials->the_post();
                    ?>
					<div class="items">
						<?php echo get_field('video'); ?>
					</div>
				<?php endwhile;?>
					
				</div>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
		</div>
	</div>			
</section>


