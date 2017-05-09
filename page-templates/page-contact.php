<?php
/**
 * Template Name: Contact Us
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
				<?php get_template_part( 'content', 'page' ); ?>
                <?php endwhile; // end of the loop. ?>
                
            
                
 <div id="contact-table">               
               

<?php query_posts('category_name=uncategorized&showposts=20'); ?>



<ul><?php while (have_posts()) : the_post(); ?>

 <li>
 
 <div class="feature-title2"><div class="feature-title-heading2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div></div>
 
 <div class="location-info">
 


<div class="contact-info2"><h3>ADDRESS</h3>
<?php the_field("address"); ?></div>

<div class="contact-info2"><h3>CONTACT</h3>
<?php the_field("contact"); ?></div>


 
 </div>
 
 </li>

 <?php endwhile;?>


 </ul>
 <?php wp_reset_postdata(); ?>









	





                
                </div>
                
                
			
			
  
            
            



  
      
            

		</div><!-- #content -->

<?php get_footer(); ?>