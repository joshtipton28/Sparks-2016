<?php $tax = array(
		'tax_query' => array(
			array(
				'taxonomy' => 'journal-category',
				'field' => 'slug',
				'terms' => 'featured'
			)
		)
	);

    $featuredJournal = new WP_Query( $tax );

	while ( $featuredJournal->have_posts() ) : $featuredJournal->the_post(); ?>

			<div class="small-12 large-4 columns">
			  <a class="journal-feat-img" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumbnail'); ?>
              </a>
  			  <a class="title-more" href="<?php the_permalink();?>">
  			  	<h4><?php the_title(); ?></h4>
  			  </a>
  			  <p><?php the_excerpt();?></p>
  			  <a class="journal-more" href="<?php the_permalink();?>">Read More</a>
      	</div>
    <?php endwhile; ?>