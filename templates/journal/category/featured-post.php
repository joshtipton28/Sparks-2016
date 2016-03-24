<?php //Setting up Featured Post

$featuredPost = get_field('featured_article'); ?>

<?php //Display Featured Post
	if ($featuredPost):

    	$post = $featuredPost;
    	setup_postdata($post);

    	$featuredImg = get_field('featured_article_image');
	?>
 	
 		<div class="featured-journal-post">		
			<a href="<?php the_permalink(); ?>">
				<?php 
					if (!empty($featuredImg) ): ?>

						<img src="<?php echo $featuredImg['url']; ?>" alt="<?php echo $featuredImg['alt'];?>" >
						
				<?php endif; ?>
			</a>
		</div>

	   	<?php wp_reset_postdata(); ?>
	<?php endif; ?>