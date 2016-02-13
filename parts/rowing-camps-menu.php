<div class="large-3 columns">
    <ul class="accordion" data-accordion data-allow-all-closed="true">
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">Summer Camps</a>

            <?php dynamic_sidebar('summer-menu'); ?>

      </li>
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">Winter Camps</a>
          
            <?php dynamic_sidebar('winter-menu'); ?>
          
      </li>
      <li class="accordion-item" data-accordion-item>
        <a class="accordion-title">Summer Development Programs</a>
          
            <?php dynamic_sidebar('development-programs-menu'); ?>
      </li>

         

    </ul>
    <a class="accordion-title" href="<?php echo get_home_url(); ?>/map-of-camp-locations">Camp Map &amp; Dates</a>
  </div>