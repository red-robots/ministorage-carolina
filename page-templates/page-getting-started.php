<?php
/**
 * Template Name: Getting Started
 */

get_header(); ?>

<div class="wrapper">
  <div id="content" role="main">

    <?php get_template_part('template-parts/callout');?>


    <div class="site-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; // end of the loop. ?>
    </div>

 

  </div><!-- #content -->
</div>
<?php get_footer(); ?>