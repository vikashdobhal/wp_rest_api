<?php
/**
 * Two Column Layout
 */
$width_larger=get_sub_field('width_larger');
$col_first=$col_second='col-md-6';
if ($width_larger=='first') {
    $col_first='col-md-7';
    $col_second='col-md-5';
} elseif ($width_larger=='second') {
    $col_first='col-md-5';
    $col_second='col-md-7';
}

?>
<section class="two_column_content">
    <div class="container">
        <div class="row <?php echo get_sub_field('custom_class');?>" >
            <div class="<?php echo $col_first ?> content-left wow fadeInLeft">
            <?php echo get_sub_field('first_content'); ?>
            </div>
            <div class="<?php echo $col_second ?> content-right wow fadeInRight">
                <?php echo get_sub_field('second_content'); ?>
            </div>
        </div>
    </div>
</section>