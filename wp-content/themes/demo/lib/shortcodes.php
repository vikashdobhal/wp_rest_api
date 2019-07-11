<?php

/*
 * shortcode to create a sitemap
 * optional attributes -- exclude: comma separated list of page ids to exclude
 * example: [sitemap exclude="3,10,12"]
 */
function sitemap_shortcode($atts)
{
    $all_pages = wp_list_pages('title_li=&echo=0&exclude=' . $atts['exclude']);

    return '<ul class="sitemap">' . $all_pages . '</ul>';
}

add_shortcode('sitemap', 'sitemap_shortcode');


function location_map()
{
    wp_enqueue_script("gmap", 'https://maps.googleapis.com/maps/api/js?key='.GMAP_KEY.'&#038;libraries=geometry&#038', false, true);
    wp_enqueue_script("location-map", get_template_directory_uri() . "/js/map.js", array( "jquery" ), false, true);
    $title          = get_field('title', 'options');
    $street_address = get_field('street_address', 'options');
    $city           =  get_field('city', 'options');
    $state          = get_field('state', 'options');
    $zip            = get_field('zip', 'options');
    $phone_numbers  = get_field('phone', 'options');
    $address        = $street_address . ' ' . $city . ',' . $state . $zip;
    $marker_icon    = get_template_directory_uri() . '/images/marker.png';
    $info_content   = '
    <div class="location__popup-info">' .
                      '<address><h3 class="text-green text-uppercase">' . $title .'</h3>' .
                      '<p class="location__address" >
        <span>' . $street_address . '</span><br>
        <span>' . $city . '</span>,  <span>' . $state . '</span>
        <span>' . $zip . '</span>
      </p>
      <p class="location_phone">
      <a href="tel:'.$phone_numbers.'">'.$phone_numbers.'</a>
      </p></address>
      </div>';

    $locations_data[] = array(
        'address'      => $address,
        'title'        => $title,
        'marker_icon'  => $marker_icon,
        'info_content' => $info_content,
        'lat'          => '32.5994744',
        'lng'          => '-97.1735962'
    );

    $output = '<div class="location__map ">
      <div id="contact-map" style="height: 500px;width: 100%">

      </div>
    </div><!--map-->';

    wp_localize_script('location-map', 'locations', $locations_data);
    wp_enqueue_script('location-map');

    return $output;
}

add_shortcode('location-map', 'location_map');


function contact_info()
{
    $title          = get_field('title', 'options');
    $street_address = get_field('street_address', 'options');
    $city           =  get_field('city', 'options');
    $state          = get_field('state', 'options');
    $zip            = get_field('zip', 'options');
    $phone_numbers  = get_field('phone', 'options');

    $output='
    <address>
<h3>'.$title.'</h3>
<h4>'.$street_address.'</h4>
<h4>'.$city.','.$state.' '.$zip.'</h4>
<p><a href="tel:'.$phone_numbers.'">'.$phone_numbers.'</a><br>
</p></address>
';
    return $output;
}

add_shortcode('contact-info', 'contact_info');

function cash_offer()
{
    //wp_enqueue_script("places-gmap", 'https://maps.googleapis.com/maps/api/js?key=' . GMAP_KEY . '&libraries=places', false, true);
    $html = '';
    $html .= '
	<div class="cash-offer d-flex flex-wrap flex-md-nowrap">
        <input type="text" id="autocomplete" name="address" class="cash-offer__address" placeholder="Enter your address" />
        <button type="submit" value="" class="cash-offer__submit">' . __('Get my cash offer') . '</button >
    </div> ';

    return $html;
}

add_shortcode('cash-offer', 'cash_offer');
