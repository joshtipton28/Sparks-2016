<?php
/*
Template Name: Camps Map Page
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="full-bg">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full', array('class' => 'full-bg-img'));
		} ?>
	</div>
	<div class="page-wrap">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="row">
				
				<div class="camp-map large-12 columns">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/map-of-rowing-camps.png" alt="Map of Rowing Camp Locations and Dates">
				
					<?php include(locate_template('templates/camp-maps/seattle.php' )); ?>
					<?php include(locate_template('templates/camp-maps/middletown.php' )); ?>
					<?php include(locate_template('templates/camp-maps/pennsylvania.php' )); ?>
					<?php include(locate_template('templates/camp-maps/oklahoma.php' )); ?>
					<?php include(locate_template('templates/camp-maps/florida.php' )); ?>
					<?php include(locate_template('templates/camp-maps/new_zealand.php' )); ?>
					<?php include(locate_template('templates/camp-maps/holland.php' )); ?>
				</div>

			</div>
	</div>			
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
