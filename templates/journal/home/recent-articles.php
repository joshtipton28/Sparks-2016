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

				<h4 class="recent-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h4>

				<h6><?php foundationpress_entry_meta(); ?></h6>

				<p><?php the_excerpt();?></p>

				<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
					
			</div>

		<?php endwhile;
		wp_reset_postdata(); // reset to the original page data
		?>
	</div>

	<?php include(locate_template('templates/journal/home/sidebar.php' )); //Journal Home Sidebar?>

</div>