<?php
/**
 * Template part for Working With Us - Reports From the Front
 **/
?>

<?php $reportsImg = get_field('reports_featured_image');?>

<div class="tabs-panel" id="panel5">
	<h2>Reports From the Front</h2>

   <?php if( !empty($reportsImg) ): ?>

		<img src="<?php echo $reportsImg['url']; ?>" alt="<?php echo $reportsImg['alt']; ?>" />

	<?php endif; ?>
   <?php the_field('reports_body');?>
</div>