<?php
/**
 * Template part for off canvas menu
 **/
?>
	<div class="tabs-panel is-active" id="campOverview">
		<h1><?php echo $campTitle;?> <em><?php the_field('camp_name');?> Overview</em></h1>
		
		<?php

			if(get_field('featured_image'))
			{
				echo '<p>' . get_field('featured_image') . '</p>';
			}

		?>

		<?php

			if(get_field('featured_video'))
			{
				echo '<p>' . get_field('featured_video') . '</p>';
			}
			
		?>

		<?php the_field('overview_content'); ?>
	</div>