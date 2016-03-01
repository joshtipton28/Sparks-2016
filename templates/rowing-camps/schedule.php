<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>

<div class="tabs-panel" id="camp-schedule">
	<h2><?php echo $campTitle . '<em> ' . $campLocation . ' ';?>Schedule</em></h2>
<?php the_field('camp_schedule');?>

</div>

