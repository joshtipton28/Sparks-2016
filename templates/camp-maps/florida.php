<?php
/**
 * Template part for Camp Map - Florida Camps
 **/
?>

<?php if( have_rows('fl_details') ):?>

	<div class="map-camp <?php  the_field('fl_season');?>-camp fl-camp clearfix">

	 	<?php while ( have_rows('fl_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>
	
<?php endif;?>