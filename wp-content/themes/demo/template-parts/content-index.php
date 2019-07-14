<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo
 */

?>

<div class="col-md-6 post_block">

    <a class="d-block post-thumbnail"
       href="<?php echo get_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
    <span class="date text-uppercase"><?php echo get_the_date(); ?></span>
    <h3 class="post-title text-capitalize"><a class="text-capitalize"
                                              href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

</div>
