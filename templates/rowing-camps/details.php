<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campDetails">
	<h2><?php echo $campTitle . '<em> ' . $campLocation . ' ';?>Details</em></h2>
<?php if( have_rows('camp_details') ): ?>
 
 
    <?php while( have_rows('camp_details') ): the_row(); ?>
        
        <?php 
        
	        $detailType = get_sub_field('detail_type'); 
	        $detailContent = get_sub_field('detail_content');
        
        ?>

    <ul>
    	<li><?php echo $detailType . ': ' . $detailContent;?></li>
    </ul>

        
    <?php endwhile; ?>

  
 
 
<?php endif; ?>
</div>