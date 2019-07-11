<?php
// ==========================================================================
//  Process CPT
// ==========================================================================
add_action( 'init', 'cptui_register_my_cpts_process' );
function cptui_register_my_cpts_process() {
	$labels = array(
		"name"          => __( 'Process', '' ),
		"singular_name" => __( 'Process', '' ),
	);
	$args   = array(
		"label"               => __( 'Process', '' ),
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
		"rewrite"             => array( "slug" => "process", "with_front" => true ),
		"query_var"           => true,
		"menu_position"       => 5,
		"menu_icon"           => "dashicons-chart-line",
		"supports"            => array( "title", "editor", "thumbnail"),
	);
	register_post_type( "process", $args );

// End of cptui_register_my_cpts_process()
}

//end of file
