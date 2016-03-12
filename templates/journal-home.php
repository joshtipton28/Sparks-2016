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
				<h1><?php the_field("blurb_title"); ?></h1>
					<div class="journal-blurb large-4 small-12 columns end">
						<?php the_content(); ?>
						<a class="hero-more scroll" href="#journal-recent">
							<i class="fa fa-chevron-down"></i>
						</a>
					</div>
			</div>
		</div>
	</div>

	<div id="journal-recent" class="journal-recent row">
		<div class="large-8 small-12 columns">
			<?php 
			   	$args = array( 'post_type' => 'journal-article', 'posts_per_page' => 5 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

				$journalCat = get_the_terms(0, 'journal-category'); //Get custom taxonomy
				$author = get_the_author(); ?>

				<div class="journal-home-article">

					<?php if ( has_post_thumbnail() ):?>
						<a class="feat-journal-img" href="<?php the_permalink();?>">
							<?php the_post_thumbnail('large'); ?>
						</a>

						<?php if ($journalCat): 
							foreach ($journalCat as $custom_tax): ?>
								<div class="journal-category">
									<strong>	
	    								<?php echo $custom_tax->name; ?>
	    							</strong>
	    						</div>
    						<?php endforeach; ?>
    					<?php endif; // End Custom Taxonomy?>
					<?php endif; // End Post Thumbnail?>

					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>

					<h6><?php foundationpress_entry_meta(); ?></h6>

					<p><?php the_excerpt();?></p>

					<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
						
				</div>

			<?php endwhile;
			wp_reset_postdata(); // reset to the original page data
			?>
		</div>
	
<?php endwhile;?>

		<div class="small-12 large-4 columns">
			<?php include(locate_template('templates/journal/sidebar.php' )); ?>
		</div>
	</div>

<?php do_action( 'foundationpress_after_content' ); ?>


<?php include(locate_template('parts/journal-footer.php' )); ?>
