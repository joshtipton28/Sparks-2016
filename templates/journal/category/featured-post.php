<?php //Setting up Featured Post

$featuredPost = get_field('featured_article'); ?>

<?php //Display Featured Post
	if ($featuredPost):

    	$post = $featuredPost;
    	setup_postdata($post);
	?>
 	
 		<div class="featured-journal-post">		
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('featured-journal'); ?>
			</a>
		</div>

	   	<?php wp_reset_postdata(); ?>
	<?php endif; ?>