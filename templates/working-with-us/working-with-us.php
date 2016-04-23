<?php
/**
 * Template part for Working With Us - Working With Us
 **/
?>

<div class="tabs-panel is-active" id="working">


	<?php if( have_rows('working_body_copy') ): ?>

	    <?php while( have_rows('working_body_copy') ): the_row(); ?>

	        <?php

		        $workingInfoHeading = get_sub_field('working_info_heading');
		        $workingInfoBlurb = get_sub_field('working_info_blurb');
		        $workingInfoImg = get_sub_field('working_info_img');

	        ?>

	        <div class="ww-ccounsel tab-block">

	        	<h3><?php echo $workingInfoHeading;?></h3>

	        	<?php if( !empty($workingInfoImg) ): ?>

					<img src="<?php echo $workingInfoImg['url']; ?>" alt="<?php echo $workingInfoImg['alt']; ?>"/>

				<?php endif; ?>

		        <?php echo $workingInfoBlurb;?>

	        </div>

	    <?php endwhile; ?>

	<?php endif; ?>

</div>