<?php //Setting up Featured Post

$featuredPost = get_field('featured_article'); ?>

<?php //Display Featured Post
	if ($featuredPost):

    	$post = $featuredPost;
    	setup_postdata($post);
	?>
 			
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(''); ?>
		</a>

	   	<?php wp_reset_postdata(); ?>
	<?php endif; ?>