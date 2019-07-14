<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo
 */

?>

<div class="col-md-6 post_block">
		<a class="d-block post-thumbnail"
       href="<?php echo get_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
    	<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    	<h3 class="post-title text-capitalize"><a class="text-capitalize"
                                              href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    	</h3>

</div>
