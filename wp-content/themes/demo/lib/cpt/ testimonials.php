<?php
// ==========================================================================
//  Testimonials CPT
// ==========================================================================
add_action( 'init', 'cptui_register_my_cpts_testimonials' );
function cptui_register_my_cpts_testimonials() {
	$labels = array(
		"name"          => __( 'Testimonials', '' ),
		"singular_name" => __( 'Testimonial', '' ),
	);
	$args   = array(
		"label"               => __( 'Testimonials', '' ),
		"labels"              => $labels,
		"description"         => "",
		"public"              => false,
		"publicly_queryable"  => true,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => false,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "testimonial", "with_front" => true ),
		"query_var"           => true,
		"menu_position"       => 5,
		"menu_icon"           => "dashicons-format-quote",
		"supports"            => array( "title", "editor", "thumbnail"),
	);
	register_post_type( "testimonial", $args );

// End of cptui_register_my_cpts_testimonials()
}

//end of file
