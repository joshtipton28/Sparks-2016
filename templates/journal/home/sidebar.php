<?php $tax = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'journal-category',
			'field' => 'slug',
			'terms' => 'featured'
		)
	)
);

$featuredJournal = new WP_Query( $tax );?>

<div class="small-12 large-4 columns">

    <?php if ($featuredJournal->have_posts() ):?>

    	<div class="featured-title">
			<h4>Featured Articles</h4>
		</div>

		<?php while ( $featuredJournal->have_posts() ) : $featuredJournal->the_post();?>

			<div class="featured-article">
				<?php if ( has_post_thumbnail() ):?>
			  		<a class="journal-feat-img" href="<?php the_permalink(); ?>">
	              		<?php the_post_thumbnail('thumbnail');?>
	          		</a>
	          	<?php endif;?>

			  <a class="title-more" href="<?php the_permalink();?>">
			  	<h4><?php the_title(); ?></h4>
			  </a>

	      	</div>
	    <?php endwhile;?>
	<?php endif;?>

    <?php wp_reset_postdata();?>
    
</div>