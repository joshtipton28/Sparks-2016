<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campStaff">
	<h2><?php echo $campTitle . '<em> ' . $campLocation . ' ';?>Coaching Staff</em></h2>
	<?php if( have_rows('coaching_staff') ): ?>

    <?php while( have_rows('coaching_staff') ): the_row(); ?>
        
        <?php 
        
	        $coachName = get_sub_field('coach_name'); 
	        $coachCreds = get_sub_field('coach_credentials');
	        $coachBio = get_sub_field('coach_bio');
	        $coachPic = get_sub_field('coach_picture');
        
        ?>

        <div class="coaching-staff">
	        <h4><?php echo $coachName;?></h4>
	        <h5><?php echo $coachCreds;?></h5>
	        <p><?php echo $coachBio;?></p>
	        
	        <?php if( !empty($coachPic) ): ?>

				<img src="<?php echo $coachPic['url']; ?>" alt="<?php echo $coachPic['alt']; ?>" />

			<?php endif; ?>

        </div>
        
    <?php endwhile; ?>

  
 
 
	<?php endif; ?>
</div>