<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campStaff">
	<?php if( have_rows('coaching_staff') ): ?>
 
 	
 
    <?php while( have_rows('coaching_staff') ): the_row(); ?>
        
        <?php 
        
	        $coachName = get_sub_field('coach_name'); 
	        $coachCreds = get_sub_field('coach_credentials');
	        $coachBio = get_sub_field('coach_bio');
	        $coachPic = get_sub_field('coach_picture');
        
        ?>
        
    <?php endwhile; ?>

  
 
 
	<?php endif; ?>
</div>