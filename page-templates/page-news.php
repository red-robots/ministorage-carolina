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
  <?php endwhile; // end of the loop. 
        wp_reset_postdata(); 
        wp_reset_query();
  ?>

    <section class="stories stories-blog">
 <?php
  $wp_query = new WP_Query();
  $wp_query->query(array(
  'post_type'=>'post',
  'posts_per_page' => 10,
  'paged' => $paged,
));
  if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
        
    <?php $wp_query->the_post(); ?>

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
      <?php  endwhile; ?>
      <div class="clear"></div>
      <?php
      if(function_exists('pagi_posts_nav')){
      //echo 'something';
    }

      pagi_posts_nav();
 //previous_posts_link('&laquo; Newer posts');
    //next_posts_link( 'Older posts &raquo;', $query->max_num_pages );
      endif; wp_reset_postdata();  // close loop and reset the query 
      ?>
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