<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

		<div id="content" role="main">
<div class="entry-content">
			<?php while ( have_posts() ) : the_post(); ?>


<h1><?php the_title(); ?></h1>
            
            

<p><?php the_field("date"); ?>
<br><?php the_field("time"); ?>

<p><?php the_field("location"); ?>
    
<p><?php the_content(); ?>
            
                
                


                

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->


			<?php endwhile; // end of the loop. ?>
</div>
		</div><!-- #content -->

<?php get_footer(); ?>