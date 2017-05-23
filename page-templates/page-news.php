<?php
/**
 * Template Name: News
 *
 * 
 */

get_header(); ?>

<div class="wrapper">
  <div id="content" role="main">

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

    <section class="stories stories-blog">
    <?php /* Second Custom Query pulling the post type, "announcements" */  
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => '2'  
      );
      $query = new WP_Query( $args );  // Query all of your arguments from above
      if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop 

        if( has_post_thumbnail() ) {
          $divClass = 'has';
        } else {
          $divClass = 'dont-have';
        }

      ?>
        <div class="news-story-blog">
            <div class="story-title">
              <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            </div>
          <div class="story-body">
            <?php if( has_post_thumbnail() ) { ?>
                <div class="img-wrap"><?php the_post_thumbnail( 'medium' ); ?></div>
            <?php } ?>
            
            <div class="story-excerpt <?php echo $divClass; ?>">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <div class="story-read">
            <a href="<?php the_permalink() ?>">read more</a>
          </div>
          <div class="clear"></div>
      </div>  
      <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
    <!-- news -->
    </section>

    <div class="widget-area">
      <h2>Recent Posts</h2>
        <ul>
        <?php
          $recent_posts = wp_get_recent_posts();
          foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          }
          wp_reset_query();
        ?>
        </ul>
    </div> <!-- widget-area -->
  </div> <!--content -->
</div> <!--wrapper -->


<?php get_footer(); ?>