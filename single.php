<?php
/**
 * The Template for displaying all single posts
 *
 * 
 */

get_header(); ?>


<div class="wrapper">
	<div id="content">
		<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				          
			            
			<div class="entry-content single">
				
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				
				<?php the_content(); ?>

			 </div>             
			            

			<?php endwhile; // end of the loop. ?>
			
		</div><!-- .site content -->


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

	</div>
</div>
 <!-- wrapper -->

<?php get_footer(); ?>