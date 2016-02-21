<?php
/**
 * Template part for Reports from the Front - Single Article
 **/
?>
<div class="nano has-scrollbar tabs-content medium-8 columns">
    <div class="nano-content">
      <?php while ( have_posts() ) : the_post(); ?>

        <h2>
          <span>Reports From the Front</span>
          <?php the_title();?>
        </h2>

        <hr>

        <?php the_content();?>

        <a href="<?php echo home_url();?>/working-with-us/#panel1">View All Reports</a>
    
  <?php endwhile;?>
    </div>
</div>
