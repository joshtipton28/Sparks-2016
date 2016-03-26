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

		<div class="bg-caption">
			<?php $bgCaption =  get_post(get_post_thumbnail_id())->post_excerpt; ?>
			<?php if (!empty($bgCaption) ): ?>
				<p><?php echo $bgCaption; ?></p>
			<?php endif; ?>
		</div>
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
					<?php include(locate_template('templates/camp-maps/map-legend.php' )); ?>
				</div>
			</div>
			<div class="row">
				
					<a href="javascript:history.back();" class="sparks-back"><i class="fa fa-chevron-left"></i> Back</a>
				
			</div>
	</div>			
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
