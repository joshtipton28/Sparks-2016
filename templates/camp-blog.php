<?php
/*
Template Name: Camp Blog
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
  <?php 
	   	$args = array( 'post_type' => 'camp-blogs', 'posts_per_page' => 100 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();?>
			<ul>
				<li>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>  
				</li>
			</ul>	

	<?php endwhile;
	wp_reset_postdata(); // reset to the original page data
	?>

<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>