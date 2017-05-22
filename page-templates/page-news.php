<?php
/**
 * Template Name: News
 *
 * 
 */

get_header(); ?>

<div class="wrapper">
<!-- remember your content-area div -->

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

 
    <section class="stories">

    
    <?php /* Second Custom Query pulling the post type, "announcements" */  
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => '2'  
      );
      $query = new WP_Query( $args );  // Query all of your arguments from above
      if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
    <div class="news-story-blog">
          <div class="story-title">
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        </div>
        <div class="story-body">
          <div class="img-wrap"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
          
          <div class="story-excerpt"><?php the_excerpt(); ?></div>
        </div>
        <div class="story-read">
          <a href="<?php the_permalink() ?>">read more</a>
        </div>
        <div class="clear"></div>
    </div>  
      <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
    <!-- news -->
    </section> 
</div>



<div class="widget-area">
<!-- list recetn posts here -->
</div>
<?php get_footer(); ?>