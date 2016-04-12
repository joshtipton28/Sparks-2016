<div class="camp-accordion large-3 columns">

  <?php /*Mobile Accordion Menu */ ?>
  <div class="tab-accordion hide-for-large">
    <ul class="accordion" data-accordion-menu>
        <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title"><h3>Select Camp Type<i class="fa fa-chevron-down"></i></h3></a>

                <ul class="menu vertical nested accordion" data-accordion data-allow-all-closed="true">
                  <li class="accordion-item" data-accordion-item>
                    <a class="accordion-title">Summer Camps<i class="fa fa-chevron-right"></i></a>

                        <?php dynamic_sidebar('summer-menu'); ?>

                  </li>
                  <li class="accordion-item" data-accordion-item>
                    <a class="accordion-title">Winter Camps<i class="fa fa-chevron-right"></i></a>

                        <?php dynamic_sidebar('winter-menu'); ?>

                  </li>
                  <li class="accordion-item" data-accordion-item>
                    <a class="accordion-title">International Programs<i class="fa fa-chevron-right"></i></a>

                        <?php dynamic_sidebar('development-programs-menu'); ?>
                  </li>

                </ul>
                <ul class="menu vertical nested accordion">
                  <li class="accordion-item">
                    <a class="accordion-title map-button" href="<?php echo get_home_url(); ?>/map-of-camp-locations">
                      Camp Dates and Locations<i class="fa fa-chevron-right"></i>
                    </a>
                  </li>
                </ul>
        </li>
    </ul>
  </div>


  <?php /*Desktop Menu*/ ?>
  <div class="show-for-large">
    <h3><?php the_title();?></h3>
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a class="accordion-title">Summer Camps<i class="fa fa-chevron-right"></i></a>

              <?php dynamic_sidebar('summer-menu'); ?>

        </li>
        <li class="accordion-item" data-accordion-item>
          <a class="accordion-title">Winter Camps<i class="fa fa-chevron-right"></i></a>

              <?php dynamic_sidebar('winter-menu'); ?>

        </li>
        <li class="accordion-item" data-accordion-item>
          <a class="accordion-title">International Programs<i class="fa fa-chevron-right"></i></a>

              <?php dynamic_sidebar('development-programs-menu'); ?>
        </li>

      </ul>
      <ul class="accordion">
        <li class="accordion-item">
          <a class="accordion-title map-button" href="<?php echo get_home_url(); ?>/map-of-camp-locations">
            Camp Dates and Locations<i class="fa fa-chevron-right"></i>
          </a>
        </li>
      </ul>
  </div>
</div>