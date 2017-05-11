<div id="right-column" class="widget-area">
  <section class="boxes">
    <div class="box box-full">
      <h2 class="heading3">REQUEST A RESERVATION NOW: </h2>
      <div class="home-row2-box-content">
        <?php $recent = new WP_Query("page_id=73"); while($recent->have_posts()) : $recent->the_post();?>
        <h3><?php the_field('box_3_heading'); ?></h3>
        <?php the_field('box_3_text'); ?>
        <?php 
        $image = get_field('box_3_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
        <?php endif; ?>
      <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
        <div class="button-lg button-bottom">
          <a href="<?php bloginfo('url'); ?>/rent-space/">GO</a>
        </div>
      </div>
    </div>
  </section>
</div><!-- end right column -->