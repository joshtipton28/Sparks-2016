<?php
/**
 * Template part for Camp Blog - Advanced Physiology
 **/
?>
            <div class="tabs-panel" id="advanced-physiology-camp">
                <h2>Advanced Physiology Camp</h2>
                <?php $tax = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'camp-blog-category',
							'field' => 'slug',
							'terms' => 'advanced-physiology'
						)
					)
				);?>

				<?php $physioCampBlog = new WP_Query( $tax );?>

				<?php while ( $physioCampBlog->have_posts() ) : $physioCampBlog->the_post();?>

				<?php 

					$post_month = get_the_date('F');
				  	$post_year = get_the_date('Y');

				      if($cur_month != $post_month || $cur_year != $post_year) {
				         echo $cur_year != 0 ? '</ul><hr>' : '';
				         echo '<h3>' . $post_month . ' ' . $post_year . '</h3><ul>';
				         $cur_month = $post_month;
				         $cur_year = $post_year;
			  	}?>

			    <li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></li>
			    
			   	<?php endwhile;?>
				<?php wp_reset_postdata();?>
               
            </div><!--tab panels-->
        </div><!--nano-content-->
    </div><!--nano-->
</div><!--row-->