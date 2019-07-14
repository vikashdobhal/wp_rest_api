<?php
/**
 * Plugin Name: Custom Api plugin
 * Description: This is custom api plugin
 * Version: 1.0
 * Author: Vikash Dobhal
 */


define('CUSTAPI_PLUGIN_NAME', 'CUS_API');
global $wpdb;
// Create a admin menu
add_action('admin_menu', 'api_menu');

// define for admin Menus
function api_menu()
{
    add_menu_page('Fetch Country Data', 'Fetch Country Data', 'publish_pages', CUSTAPI_PLUGIN_NAME, 'api_fetch_data');
}

function api_fetch_data()
{
    $request = wp_remote_get('https://restcountries.eu/rest/v2/all');

    if (is_wp_error($request)) {
        return false;
    }
    $body = wp_remote_retrieve_body($request);
    $data = json_decode($body);
    if (!empty($data)) {
        $output = ' <table class="wp-list-table widefat fixed posts">
               <thead>
               <tr>
               <th>Name</th>
               <th>topLevelDomain</th>
               <th>alpha2Code</th>
               <th>alpha3Code</th>
               <th>callingCodes</th>
               <th>timezones</th>
               <th>currencies</th>
                </tr> 
                </thead>

            ';
        foreach ($data as $country) {
            $currency = [];

            foreach ($country->currencies as $curr) {
                $currency[] = $curr->code . '(' . $curr->symbol . ')';
                $my_post = array(
                    'post_title'	=> $country->name,
                    'post_type'		=> 'country',
                    'post_status'	=> 'publish'
                );
                // insert the post into the database
                $post_id = wp_insert_post($my_post);
                // save data
                $field_name_key = "field_5d2983fd6a8e8";
                $field_domain_key = "field_5d29843e6a8e9";
                $field_alfha2_key = "field_5d2984546a8ea";
                $field_alfha3_key = "field_5d29846e6a8eb";
                $field_calling_key = "field_5d2984836a8ec";
                $field_timezone_key = "field_5d2984b54d5f4";
                $field_currencies_key = "field_5d2985114d5f5";
                $field_flag_key = "field_5d2985254d5f6";

                $country_name = $country->name;
                $top_level_domain = $country->topLevelDomain[0];
                $alpha2_code = $country->alpha2Code;
                $alpha3_code = $country->alpha3Code;
                $calling_codes = $country->callingCodes[0];
                $time_zones = $country->timezones[0];
                $currencies = implode(',', $currency);
                $country_flag = $country->flag;

                update_field($field_name_key, $country_name, $post_id);
                update_field($field_domain_key, $top_level_domain, $post_id);
                update_field($field_alfha2_key, $alpha2_code, $post_id);
                update_field($field_alfha3_key, $alpha3_code, $post_id);
                update_field($field_calling_key, $calling_codes, $post_id);
                update_field($field_timezone_key, $time_zones, $post_id);
                update_field($field_currencies_key, $currencies, $post_id);
                update_field($field_flag_key, $country_flag, $post_id);
            }
            $output .= '<tr>
                <td>' . $country->name . '</td>
                <td>' . $country->topLevelDomain[0] . '</td>
                <td>' . $country->alpha2Code . '</td>
                <td>' . $country->alpha3Code . '</td>
                <td>' . $country->callingCodes[0] . '</td>
                <td>' . $country->timezones[0] . '</td>
                <td>' . implode(',', $currency) . '</td>
                <td><img src="' . $country->flag . '" height="40" width="40"/></td>
                              
                </tr>';
        }
        $output .= '</table>';
        echo $output;
    }
}
