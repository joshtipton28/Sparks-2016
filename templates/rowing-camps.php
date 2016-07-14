<?php
/*
Template Name: Rowing Camps
*/
get_header(); ?>
	<div class="full-bg">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('full', array('class' => 'full-bg-img'));
		} ?>
	</div>
	<div class="page-wrap">

	  <div class="row">
	    <?php include(locate_template('parts/rowing-camps-menu.php' )); ?>

	        	<div class="camps-tab tabs-content nano has-scrollbar large-8 columns end" data-tabs-content="rowing-camp-tabs">
			        <div class="nano-content">
			        	<h2><?php the_title(); ?></h2>
			        	<hr>
			        		<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
							<?php endif; ?>
			        </div>
		        </div>


	</div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer(); ?>
