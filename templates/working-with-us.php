<?php
/*
Template Name: Working With Us
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    
    <?php include(locate_template('templates/working-with-us/tab-menu.php' )); ?>
    <?php include(locate_template('templates/working-with-us/college-counseling.php' )); ?>
    <?php include(locate_template('templates/working-with-us/coxswain-program.php' )); ?>  
    <?php include(locate_template('templates/working-with-us/intl-applicants.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/gap-year-advising.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/reports-from-front.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/our-approach.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/counseling-testimonials.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/camp-testimonials.php' )); ?> 
    <?php include(locate_template('templates/working-with-us/coxswain-testimonials.php' )); ?>    
    
  <?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>