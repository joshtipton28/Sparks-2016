<?php
/*
Template Name: Journal Home
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
		<h1><?php the_title();?></h1>
	<div class="journal-blurb">
		<?php the_content();?>
	</div>

<?php endwhile;?>

	<?php
		$tax = array(
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

    			<div class="small-12 large-8 columns">
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
<?php do_action( 'foundationpress_after_content' ); ?>


<?php get_footer(); ?>
