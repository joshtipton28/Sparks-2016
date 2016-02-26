<?php
/**
 * Template part for Camp Map - Middletown Camps
 **/
?>

<?php if( have_rows('middletown_details') ):?>

	<div class="map-camp <?php  the_field('middletown_season');?>-camp middletown-camp clearfix">

	 	<?php while ( have_rows('middletown_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>
	
<?php endif;?>