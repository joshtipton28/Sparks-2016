<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campRegistration">
<?php the_field('camp_dates'); ?>


<?php /*Registration headings*/
	
	if( have_rows('registration_headings') ): ?>
 
    <?php while( have_rows('registration_headings') ): the_row(); ?>
        
        <?php 
        
	        $registrationGroup = get_sub_field('registration_group'); 
	       
        ?>
 
    <?php endwhile; ?>

<?php endif; ?>

<br>

<?php /*Week One Registration Links*/
	
	if( have_rows('week_one_registration_links') ): ?>
 
    <?php while( have_rows('week_one_registration_links') ): the_row(); ?>
        
        <?php 
        
	        $registrationID = get_sub_field('regatta_registration_id');
	        $registrationStatus = get_sub_field('registration_status'); 
	       
	       echo $registrationID;
        ?>
 
    <?php endwhile; ?>

<?php endif; ?>

<br>

<?php /*Week Two Registration Links*/
	
	if( have_rows('week_two_registration_links') ): ?>
 
    <?php while( have_rows('week_two_registration_links') ): the_row(); ?>
        
        <?php 
        
	        $registrationID = get_sub_field('regatta_registration_id');
	        $registrationStatus = get_sub_field('registration_status'); 
	       
	       echo $registrationID;
        ?>
 
    <?php endwhile; ?>

<?php endif; ?>

<?php /*Week Three Registration Links*/
	
	if( have_rows('week_three_registration_links') ): ?>
 
    <?php while( have_rows('week_three_registration_links') ): the_row(); ?>
        
        <?php 
        
	        $registrationID = get_sub_field('regatta_registration_id');
	        $registrationStatus = get_sub_field('registration_status'); 
	       
	       echo $registrationID;
        ?>
 
    <?php endwhile; ?>

<?php endif; ?>

<?php /*Week Four Registration Links*/
	
	if( have_rows('week_four_registration_links') ): ?>
 
    <?php while( have_rows('week_four_registration_links') ): the_row(); ?>
        
        <?php 
        
	        $registrationID = get_sub_field('regatta_registration_id');
	        $registrationStatus = get_sub_field('registration_status'); 
	       
	       echo $registrationID;
        ?>
 
    <?php endwhile; ?>

<?php endif; ?>


<?php the_field('registration_promo');?>
</div><!--end panel-->