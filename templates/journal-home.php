<?php
/*
Template Name: Journal Home
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="journal-hero">
		<div class="journal-hero-img">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array('class' => 'full-bg-img'));
			} ?>
		</div>

		<div class="journal-hero-content">
			<div class="row">
				<h1><?php the_field("blurb_title");?></h1>
					<div class="journal-blurb large-4 small-12 columns end">
						<?php the_content();?>
					</div>
			</div>
	</div>

	<div class="large-8 small-12 columns">
		<?php 
		   	$args = array( 'post_type' => 'journal', 'posts_per_page' => 5 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>

			<div class="journal-most-recent">

				<?php if ( has_post_thumbnail() ) 
						the_post_thumbnail('large');?>

				<a class="feat-journal-img" href="<?php the_permalink();?>"><?php the_title();?></a>  

				<p><?php the_excerpt();?></p>

				<a class="read-more" href="<?php the_permalink();?>">Read More</a>
					
			</div>

		<?php endwhile;
		wp_reset_postdata(); // reset to the original page data
		?>
	</div>

<?php endwhile;?>

<?php include(locate_template('templates/journal/sidebar.php' )); ?>	

<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
