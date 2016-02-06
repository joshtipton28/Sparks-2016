<?php
/**
 * Template part for Rowing Camps Custom Post Type
 * Navigation for Tab Menus and opening HTML
 **/
?>

<?php 
		$showSchedule = get_field('show_schedule'); 
		$campTitle = get_field('camp_title')
	?>

	<ul class="tabs" data-tabs id="rowing-camp-tabs">
        <li class="tabs-title is-active"><a href="#campOverview" aria-selected="true">Camp Overview</a></li>
        <li class="tabs-title"><a href="#campStaff">Coaching Staff</a></li>
        <li class="tabs-title"><a href="#campDetails">Details</a></li>
        <li class="tabs-title"><a href="#campRegistration"><?php the_field('registration_button_label');?></a></li>
        
        <?php /**Conditional for Camp Type**/
        if ($showSchedule == true) echo 
        '<li class="tabs-title"><a href="#campSchedule">Schedule</a></li>'
        ?>
    </ul>

	<div class="tabs-content" data-tabs-content="rowing-camp-tabs">

	<h1><?php echo $campTitle;?></h1>