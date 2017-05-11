<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="wrapper">
  <div id="content" role="main">

    <?php if(is_page( array( 27,29 ) ) ) { 
          get_template_part('template-parts/callout');
     } ?>



  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

  <?php if(is_page( 'News' ) ) { ?>
    <div id="news">
      <ul>
      <?php /* Second Custom Query pulling the post type, "announcements" */  
      $args = array( 
        'post_type' => array('announcements'), 
        'posts_per_page' => '-1',  
      );
      $query = new WP_Query( $args );  // Query all of your arguments from above
      if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
        <li>
          <div class="feed-date">
            <?php the_date('m.d.Y') ?>
          </div>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <?php the_excerpt(); ?> 
          <a href="<?php the_permalink() ?>">read more >></a>
        </li>
      <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
      </ul>
    </div>
    <!-- news -->
  <?php } ?> 

  <?php if(is_page( 'Events' ) ) { ?>
    <div id="news">
    <?php $the_query = new WP_Query( 'showposts=-1' ); ?>
      <ul>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li>
          <div class="feed-date">
            <?php the_field('date') ?>
          </div>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <a href="<?php the_permalink() ?>">more info >></a>
        </li>
      <?php endwhile;?>
      </ul>
    <?php wp_reset_postdata(); ?>
    </div>
  <?php } ?> 

  <?php if(is_page( 'Sitemap' ) ) { ?>
    <div id="sitemap">
      <ul>
        <?php wp_list_pages('title_li=','sort_column=menu_order'); ?>
      </ul>
    </div>
  <?php } ?> 

  <?php if(is_page( 'Executive Staff' ) ) { ?>           
    <?php if(get_field('staff_box')): ?>          
      <?php while(has_sub_field('staff_box')): ?>
        <div class="staff-box">
          <?php the_sub_field("staff_info"); ?>
        </div>  
      <?php endwhile; endif; ?>
  <?php } ?> 

  </div><!-- #content -->
</div>
<?php get_footer(); ?>