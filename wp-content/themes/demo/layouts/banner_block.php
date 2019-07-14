<?php
/**
 * Banner Layout
 */

 
?>
<!-- Home page Banner starts here  -->

<section class="banner" style="background-image: url(<?php echo get_sub_field('banner_image');?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 banner_content align-self-center">
                <strong class="large-text d-block text-center text-md-left wow fadeInLeft"><?php echo get_sub_field('banner_heading')?></strong>
                <?php echo do_shortcode('[cash-offer]')?>
            </div>
        </div>
    </div>
</section>
