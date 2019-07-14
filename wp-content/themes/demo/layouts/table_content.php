<?php
/**
 * Table Content
 */
?>
<section class="full_width_content">
    <div class="container">
        <div class="row">
        <div class="col-lg-10 mx-auto table-responsive d-none d-sm-block wow fadeInUp">

        <?php $data= get_sub_field('table_content');
            if (!empty($data)):
        ?>
        <table class="table list-table">
            <?php $i=0; foreach ($data as $row): ?>
                 
                   <?php if ($i==0):?>
                    <thead>
                        <tr>
                            <th><?php echo $row['first_col'] ?></th> 
                            <th><strong><?php echo $row['second_col'] ?></strong></th>  
                            <th><strong><?php echo $row['third_col'] ?></strong></th>   
                        </tr> 
                    </thead>
                        <?php else: ?>
                        <?php if ($i==1):?>
                            <tbody>
                        <?php endif; ?>
                        <tr>
                            <td><h4><?php echo $row['first_col'] ?></h4></td> 
                            <td><strong><?php echo $row['second_col'] ?></strong></td>  
                            <td><strong><?php echo $row['third_col'] ?></strong></td>   
                        </tr> 
                        <?php if ($i==count($data)-1):?>
                        </tbody>
                        <?php endif; ?>
                   <?php endif; ?>
                  

            <?php $i++; endforeach; ?>        
            </table>
            <?php endif; ?>
        </div>
        <!-- Mobile view for table -->
        <div class="col-12 d-block d-sm-none mobile-table">
        <?php $data= get_sub_field('table_content');
            if (!empty($data)):
        ?>
        <table class="table list-table ">
            <?php $i=0; foreach ($data as $row): ?>
                 
                   <?php if ($i==0):?>
                    <thead>
                        <tr>
                            <th><strong><?php echo $row['second_col'] ?></strong></th>  
                            <th><strong><?php echo $row['third_col'] ?></strong></th>   
                        </tr> 
                    </thead>
                        <?php else: ?>
                        <?php if ($i==1):?>
                            <tbody>
                        <?php endif; ?>
                        <tr>
                            <td><h4><?php echo $row['first_col'] ?></h4><strong><?php echo $row['second_col'] ?></strong></td>  
                            <td><strong><?php echo $row['third_col'] ?></strong></td>   
                        </tr> 
                        <?php if ($i==count($data)-1):?>
                        </tbody>
                        <?php endif; ?>
                   <?php endif; ?>
                  

            <?php $i++; endforeach; ?>        
            </table>
            <?php endif; ?>
        </div>
        </div>
    </div>
</section>