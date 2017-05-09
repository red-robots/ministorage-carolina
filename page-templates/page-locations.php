<?php

/**

 * Template Name: Our Storage Locations

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







		<div id="content" role="main">



			<?php while ( have_posts() ) : the_post(); ?>

            

<header class="entry-header">

<h1 class="entry-title"><?php the_title( '' ); ?></h1></header>     

  <div id="locations-map" style="padding-bottom: 10px; height: 410px;">

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k0vgc2Miq_FI" width="100%" height="100%"></iframe>  
 

  </div>           <br>   <div id="locations-map" style="padding-bottom: 10px; height: 410px;">

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k2igJ6LyJH4s" width="100%" height="100%"></iframe>  



  </div><div class="entry-content"><div class="locations-list"><?php the_content( '' ); ?></div></div>

                

  

              

                

			

			<?php endwhile; // end of the loop. ?>

            

  

            

      

            



		</div><!-- #content -->



<?php get_footer(); ?>