<?php
/**
 * Process component Layout
 */
$args = array(
    'post_type' => 'process',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
$process=new WP_Query($args);
?>

<section class="process-block">
	<div class="container">
		<div class="row">

        <?php if ($process->have_posts()) : ?>
           

        <div class="col-md-6">
       

                        <div class=" slider-for">

                        <?php
                while ($process->have_posts()) :
                $process->the_post();
                ?>   
                            <div>
                                <figure><?php the_post_thumbnail() ?></figure>
                            </div>
                            <?php endwhile;?>

                        </div>
                    </div>

                    <div class="col-md-6 align-self-md-center">
                        <div class=" slider-nav">

                        <?php $i=0;
                while ($process->have_posts()) : $i++;
                $process->the_post();
                ?>   


                            <div>
                                <span class="count float-left"><?php echo $i; ?></span>
                                <div class="float-left"><h3><?php the_title(); ?></h3><?php the_content() ?></div>
                            </div>
                            
                            <?php endwhile;?>

                        </div>
                    </div>

    <script>
                count=<?php echo $i; ?>;
                processToShow = count+(count-1);

            </script>	
             <?php wp_reset_postdata(); ?>
            <?php endif;?>
            </div>
	</div>

</section>