<?php
/**
 * Template Name: Make a Payment
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