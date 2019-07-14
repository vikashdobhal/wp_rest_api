<?php
/**
 * Sevice Cards Layout
 */

?>
<section class="service-cards">
    <div class="container">
        <div class="row">
            <?php $rows = get_sub_field('services');
            foreach ($rows as $row):?>
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="2s">
                <figure>
                    <img src="<?php echo $row['image']; ?>" alt="" class="img-fluid">
                </figure>
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['content']; ?></p>
            </div>
<?php endforeach; ?>
        </div>
    </div>
</section>