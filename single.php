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
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			          
		            
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		 </div>             
		            

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
	        
	</div>
 <!-- wrapper -->

<?php get_footer(); ?>