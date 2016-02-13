<?php
/**
 * Template part for Working With Us - Reports From the Front
 **/
?>

<?php $reportsImg = get_field('reports_featured_image');?>

<div class="tabs-panel" id="reports-from-the-front">
	<h2>Reports From the Front</h2>

   <?php if( !empty($reportsImg) ): ?>

		<img src="<?php echo $reportsImg['url']; ?>" alt="<?php echo $reportsImg['alt']; ?>" />

	<?php endif; ?>
   <?php the_field('reports_body');?>

   	<?php 
	   	$args = array( 'post_type' => 'rff', 'posts_per_page' => 100 );
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
</div>