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
<section class="testimonial-block">
	<div class="container">
		<div class="row">
            <div class="col-md-4 custom_heading wow fadeInLeft" data-wow-duration="2s">
                <h2>See why our solution works.</h2>
            </div>
				<?php $testimonials = new WP_Query($args);?>

                <div class="col-md-8 slider wow fadeInRight" data-wow-duration="2s">
                 
               
				<?php if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) :
                $testimonials->the_post();
                ?>
					<div class="item">
                    
                            <blockquote>
                                <strong class="d-block"><?php echo get_field('testimonial'); ?></strong>
                                <footer><span><?php the_title() ?></span></footer>
                            </blockquote>
                    </div>
						
                    <?php endwhile;?>
                <?php endif;?>
                
                </div>
                <?php wp_reset_postdata(); ?>
		</div>
	</div>			
</section>