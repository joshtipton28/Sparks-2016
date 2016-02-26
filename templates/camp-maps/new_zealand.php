<?php
/**
 * Template part for Camp Map - New Zealand Camps
 **/
?>

<?php if( have_rows('nz_details') ):?>

	<div class="map-camp <?php  the_field('nz_season');?>-camp nz-camp clearfix">

	 	<?php while ( have_rows('nz_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>
	
<?php endif;?>