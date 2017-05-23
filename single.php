<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="wrapper">
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
	<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			          
		            
		<div class="entry-content single">

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		 </div>             
		            

		<?php endwhile; // end of the loop. ?>
		
	</div><!-- #content -->
</div>
 <!-- wrapper -->

<?php get_footer(); ?>