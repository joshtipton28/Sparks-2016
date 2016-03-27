<?php //Setting up Custom Category Page Data

    $post_slug=$post->post_name;
    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
	'post_type' => 'journal-article',
	'paged' => $page,
	'tax_query' => array(
		array(
			'taxonomy' => 'journal-category',
			'field'    => 'slug',
			'terms'    => $post_slug,
			),
		),
	);

	$wp_query = new WP_Query( $args );

?>

<div class="row">
    <div class="journal-category large-12 columns">

    	<div class="journal-cat-title">
    		<h2>Articles on <?php the_title();?></h2>
    	</div>

		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>

			<div class="large-4 columns">

				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail( '', array('class' => 'cat-thumb') ); ?>
				</a>

			    <h6>
			    	<a href="<?php the_permalink();?>" title="<?php the_title();?>">
			    		<?php the_title();?>
			    	</a>
			    </h6>

			    <p><?php the_excerpt();?></p>

		    </div>

	   	<?php endwhile;?>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php wp_reset_postdata();?>

	</div>
</div>