<?php
/**
 * Process Layout
 */
$args = array(
    'post_type' => 'process',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
?>
<section class="process-section">
	<div class="container">
		
            
				<?php $process = new WP_Query($args);?>

              
				<?php if ($process->have_posts()) : $i++;
                while ($process->have_posts()) :
                $process->the_post();

                  $col_first=  get_the_post_thumbnail();
                  $col_second='<h4>'.get_the_title().'</h4>
                                <p>'.get_the_content().'</p>
                              ';

                ?>
                    
					<div class="row">
                    <?php if ($i%2!=0): ?>    
                    <div class="col-md-7 process_image"><?php echo $col_first; ?></div>
                    <div class="col-md-5 process_content"><span class="text-center float-left"><?php echo $i; ?></span><div class="float-left"><?php echo $col_second; ?></div></div>
                <?php else: ?>
                    <div class="col-md-5 process_content"><span class="text-center float-left"><?php echo $i; ?></span><div class="float-left"><?php echo $col_second; ?></div></div>
                    <div class="col-md-7 process_image"><?php echo $col_first; ?></div>      
                <?php endif; ?>
                   
                    </div>
					
               <?php  $i++; endwhile;?>
                <?php endif;?>
                
               
                <?php wp_reset_postdata(); ?>
		
	</div>			
</section>