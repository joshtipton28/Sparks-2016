<?php
/**
 * Template part for Camp Map - Oklahoma Camps
 **/
?>

<?php if( have_rows('ok_details') ):?>

	<div class="map-camp <?php  the_field('ok_season');?>-camp ok-camp clearfix">

	 	<?php while ( have_rows('ok_details') ) : the_row();?>

	 		<a href="<?php the_sub_field('camp_url');?>">
		        
		        <strong><?php the_sub_field('camp_title');?></strong>
		        <strong><?php the_sub_field('camp_date');?></strong>

	        </a>

		<?php endwhile;?>

	</div>
	
<?php endif;?>