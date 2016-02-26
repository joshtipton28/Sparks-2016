<?php
/**
 * Template part for Camp Map - Seattle Camps
 **/
?>

<?php if( have_rows('seattle_details') ):  /** Seattle Camp Details**/?>

	<div class="map-camp <?php  the_field('seattle_season');?>-camp seattle-camp clearfix">

		<div class="map-pin"></div>

	 	<?php while ( have_rows('seattle_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>

<?php endif;?>