<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campDetails">
<?php if( have_rows('camp_details') ): ?>
 
 
    <?php while( have_rows('camp_details') ): the_row(); ?>
        
        <?php 
        
	        $detailType = get_sub_field('detail_type'); 
	        $detailContent = get_sub_field('detail_content');
        
        ?>


        
    <?php endwhile; ?>

  
 
 
<?php endif; ?>
</div>