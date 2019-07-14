<?php

/*
 Template Name: CountrySingle

*/
?>
<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'country',
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
<?php

function output_country_list()
{
    global $wpdb;

    $custom_post_type = 'country'; // define your custom post type slug here

    // A sql query to return all post titles
    $results = $wpdb->get_results($wpdb->prepare("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = %s and post_status = 'publish'", $custom_post_type), ARRAY_A);

    // Return null if we found no results
    if (! $results) {
        return;
    }

    // HTML for our select printing post titles as loop
    $output = '<select name="country" id="country">';
    $output .= '<option value="">Select </option>';
    foreach ($results as $index => $post) {
        $output .= '<option value="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</option>';
    }

    $output .= '</select>'; // end of select element

    // get the html
    return $output;
}

// Then in your project just call the function
// Where you want the select form to appear

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4 class="text-center">Country Data</h4>
            <form action="" method="get">
                <div class="form-group">
                    <label for="sell">Select Country:</label>
                    <br>
                    <?php echo output_country_list();?>
                </div>
               <script>
                   $(document).ready(function(){
                    $('#country').change(function(){
                        var url = $(this).val();
                        window.location.href= url;
                    })
                   });
               </script>
            </form>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>