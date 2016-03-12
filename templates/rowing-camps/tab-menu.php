<?php
/**
 * Template part for Rowing Camps Custom Post Type
 * Navigation for Tab Menus and opening HTML
 **/
?>

<?php 
	$showSchedule = get_field('show_schedule'); 
	$campTitle = get_field('camp_title');
	$campName = get_field('camp_name');
	$campLocation = get_field('camp_location');
?>


	<div class="tabs-content nano has-scrollbar" data-tabs-content="rowing-camp-tabs">
        <div class="nano-content">
            <ul class="tabs" data-tabs id="rowing-camp-tabs">
                <li class="horizontal tabs-title is-active"><a href="#camp-overview" aria-selected="true">Camp Overview</a></li>
                <li class="horizontal tabs-title">
                    <a href="#camp-staff">
                    <?php if ($programType == 'program') echo 'Program Staff';
                            else echo 'Coaching Staff'; ?>
                    </a>
                </li>
                <li class="horizontal tabs-title"><a href="#camp-details">Details</a></li>
                <li class="horizontal tabs-title">
                    <a href="#camp-registration">
                        <?php if ($programType == 'program') echo 'Apply';
                            else echo 'Registration'; ?>
                    </a>
                </li>
                
                <?php /**Conditional for Camp Type**/
                if ($programType == 'camp') 
                    echo '<li class="horizontal tabs-title"><a href="#camp-schedule">Schedule</a></li>';
                ?>
            </ul>