<?php
// ==========================================================================
//  Countries CPT
// ==========================================================================
add_action('init', 'cptui_register_my_cpts_countries');
function cptui_register_my_cpts_countries()
{
    $labels = array(
        "name"          => __('Countries', ''),
        "singular_name" => __('Country', ''),
    );
    $args   = array(
        "label"               => __('Countries', ''),
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
        "rewrite"             => array( "slug" => "country", "with_front" => true ),
        "query_var"           => true,
        "menu_position"       => 5,
        "menu_icon"           => "dashicons-flag",
        "supports"            => array( "title", "editor", "thumbnail"),
    );
    register_post_type("country", $args);

    // End of cptui_register_my_cpts_countries()
}

//end of file
