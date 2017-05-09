<?php
/**
 * Template Name: Blog
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width: 100%!important;">
		<div id="content" role="main" style="width: 100%!important;">
        
        <div id="pagetext">

<h1 class="entry-title" style="font-size: 22px; font-weight: normal;">The Facts</h1>
 
 <p>&nbsp;           
 <!-- #blog -->  
 <?php $the_query = new WP_Query( 'showposts=-1' ); ?>

<ul id="blog"><?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

 <li><h2><?php the_title(); ?></h2><br><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a>
 </li>

 <?php endwhile;?>


 </ul>
 <?php wp_reset_postdata(); ?>
           
<!-- #blog -->       
</div>     

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>