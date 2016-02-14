<?php
/*
Template Name: Home Page
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
				<div class="jumbotron">
					<h1><?php the_field('page_heading'); ?></h1>
				</div>
				<div class="home-blurb large-3 columns end">
					<?php the_content(); ?>
				</div>
			</div>
	</div>			
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
