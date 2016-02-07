<?php
/**
 * Template part for About Us - Administrative Associates
 * Includes closing tags for Tab Panels
 **/
?>

			<div class="tabs-panel" id="panel6">
			<h2>Administrative Associates</h2>
				<?php if( have_rows('administrative_associates') ): ?>

				    <?php while( have_rows('administrative_associates') ): the_row(); ?>
				        
				        <?php 
				        
					        $adminAssocName = get_sub_field('administrative_associates_name'); 
					        $adminAssocLocation = get_sub_field('administrative_associates_location');
					        $adminAssocBio = get_sub_field('administrative_associates_bio'); 
					        $adminAssocImg = get_sub_field('administrative_associates_photo'); 
				        
				        ?>
				        <hr>
				        <div class="about-admin-assoc">
					    	<h5>
					    		<?php 
					    			echo $adminAssocName; 
					    			if (!empty($adminAssocLocation) )
					    				echo $adminAssocLocation;
					    		?>
					    	</h5>
					    	<?php echo $adminAssocBio;?>
					    	 <?php if( !empty($adminAssocImg) ): ?>

								<img src="<?php echo $adminAssocImg['url']; ?>" alt="<?php echo $adminAssocImg['alt']; ?>" />

							<?php endif; ?>

				        </div>
				        
				    <?php endwhile; ?>

				<?php endif; ?>
			</div>

		</div><!--closing tags for tab panels-->
	</div><!--closing tags for tab panels-->
</div><!--closing tags for tab panels-->