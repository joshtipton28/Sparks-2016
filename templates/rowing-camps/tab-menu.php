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
                    <li class="tabs-title is-active"><a href="#campOverview" aria-selected="true">Camp Overview</a></li>
                    <li class="tabs-title">
                        <a href="#campStaff">
                        <?php if ($programType == 'program') echo 'Program Staff';
                                else echo 'Coaching Staff'; ?>
                        </a>
                    </li>
                    <li class="tabs-title"><a href="#campDetails">Details</a></li>
                    <li class="tabs-title">
                        <a href="#campRegistration">
                            <?php if ($programType == 'program') echo 'Apply';
                                else echo 'Registration'; ?>
                        </a>
                    </li>
                    
                    <?php /**Conditional for Camp Type**/
                    if ($programType == 'camp') 
                        echo '<li class="tabs-title"><a href="#campSchedule">Schedule</a></li>';
                    ?>
                </ul>