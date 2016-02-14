<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

	<div id="page-full-width" role="main">

	<div class="full-bg">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full', array('class' => 'full-bg-img'));
		} ?>
	</div>
	<div class="page-wrap">

		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>

	</div>
  
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
