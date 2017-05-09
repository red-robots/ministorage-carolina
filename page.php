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


		<div id="content" role="main">
   <?php if(is_page( 'How Much Space Do You Need?' ) ) { ?>   
  
<div id="right-column">
<div class="callout-box">
  <h2 class="heading3">REQUEST A RESERVATION NOW: </h2>
<div class="home-row2-box-content">
<!-- -->

<?php $recent = new WP_Query("page_id=73"); while($recent->have_posts()) : $recent->the_post();?>

<h3><?php the_field('box_3_heading'); ?></h3>

<p><?php the_field('box_3_text'); ?>


<p><?php 
$image = get_field('box_3_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

<!-- --> 


<div class="button-lg button-bottom"><a href="<?php bloginfo('url'); ?>/rent-space/">GO</a></div>

</div>
</div>
</div><!-- end right column -->
            
 <?php } ?>        
        
<?php if(is_page( 'FAQs' ) ) { ?>   
  
<div id="right-column">
<div class="callout-box">
  <h2 class="heading3">REQUEST A RESERVATION NOW: </h2>
<div class="home-row2-box-content">
<!-- -->

<?php $recent = new WP_Query("page_id=73"); while($recent->have_posts()) : $recent->the_post();?>

<h3><?php the_field('box_3_heading'); ?></h3>

<p><?php the_field('box_3_text'); ?>


<p><?php 
$image = get_field('box_3_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

<!-- --> 


<div class="button-lg button-bottom"><a href="<?php bloginfo('url'); ?>/rent-space/">GO</a></div>

</div>
</div>
</div><!-- end right column -->
            
 <?php } ?>        
        
 

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			
			<?php endwhile; // end of the loop. ?>
            
   <?php if(is_page( 'News' ) ) { ?>
<div id="news">
<ul><?php /* Second Custom Query pulling the post type, "announcements" */  

           $args = array( 

            'post_type' => array('announcements'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
            'posts_per_page' => '-1', // # of posts to show use -1 for all posts.    
            );
            $query = new WP_Query( $args );  // Query all of your arguments from above
           ?>
           <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
          <li><div class="feed-date"><?php the_date('m.d.Y') ?></div>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <br><?php the_excerpt(); ?> 
 <br><a href="<?php the_permalink() ?>">read more >></a></li>
        <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
  </ul></div>

            <?php } ?>     
            
            
<?php if(is_page( 'Events' ) ) { ?>
<div id="news">

<?php $the_query = new WP_Query( 'showposts=-1' ); ?>

<ul><?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

 <li><div class="feed-date"><?php the_field('date') ?></div>
 <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
 
 <br>&nbsp;
 <p><a href="<?php the_permalink() ?>">more info >></a></li>

 <?php endwhile;?>

 </ul>

 <?php wp_reset_postdata(); ?>

</div>

            <?php } ?>    
            
            
              <?php if(is_page( 'Sitemap' ) ) { ?>

<div id="sitemap"><ul>
<?php wp_list_pages('title_li=','sort_column=menu_order'); ?>
</ul></div>
      

            <?php } ?>       
            
            
 <?php if(is_page( 'Executive Staff' ) ) { ?>           
  
<?php if(get_field('staff_box')): ?>          

<?php while(has_sub_field('staff_box')): ?>

<div class="staff-box"><?php the_sub_field("staff_info"); ?></div>  
<?php endwhile; endif; ?>

  
     
 <?php } ?>      
 
 
     
		</div><!-- #content -->

<?php get_footer(); ?>