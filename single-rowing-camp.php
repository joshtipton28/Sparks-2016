<?php
/**
 * The template for displaying all single posts and attachments
 * Individual templates are located in templates/rowing-camps
 */

get_header(); ?>

<div class="row">

<?php include(locate_template('parts/rowing-camps-menu.php' )); ?>

<div id="single-post" class="large-8 columns" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

			<?php include(locate_template('templates/rowing-camps/tab-menu.php' )); ?>
			<?php include(locate_template('templates/rowing-camps/overview.php' )); ?>
			<?php include(locate_template('templates/rowing-camps/coaching-staff.php' )); ?>
			<?php include(locate_template('templates/rowing-camps/details.php' )); ?>
			<?php include(locate_template('templates/rowing-camps/registration.php' )); ?>
			<?php 
				if ($showSchedule == true)
				include(locate_template('templates/rowing-camps/schedule.php' )); 
			?>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
</div>
<?php get_footer(); ?>
