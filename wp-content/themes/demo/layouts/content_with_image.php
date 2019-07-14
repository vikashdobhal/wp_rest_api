<?php
/**
 * Content With Image Layout
 */

?>

<section class="content_with_image" >
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="2s">
            <div class="col-md-5 image-block  <?php echo get_sub_field('image_position');?>" >
                <figure class="d-none d-md-block text-center">
                    <img src="<?php echo get_sub_field('images'); ?>" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-md-7 content-block  <?php echo get_sub_field('class');?>" >
                <h1><?php echo get_sub_field('title');?></h1>
                <h2><?php echo get_sub_field('sub_title');?></h2>
                <figure class="d-block d-md-none text-center">
                    <img src="<?php echo get_sub_field('images'); ?>" alt="" class="img-fluid">
                </figure>
                <?php echo get_sub_field('content');?>
            </div>
        </div>
    </div>
</section>