<?php
/**
 * Template part for Camp Map - Pennsylvania Camps
 **/
?>

<?php if( have_rows('pa_details') ):?>

	<div class="map-camp <?php  the_field('pa_season');?>-camp pa-camp clearfix">

	 	<?php while ( have_rows('pa_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>
	
<?php endif;?>