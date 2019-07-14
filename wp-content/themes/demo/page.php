<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

    if ( have_rows( 'modules' ) ) :

        $block_count = 1;

        while ( have_rows( 'modules' ) ) : the_row();

            ACF_Layout::render( get_row_layout(), $block_count );
            $block_count ++;

        endwhile;

    endif;

endwhile; endif;

get_footer();

?>
