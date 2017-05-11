<?php

/**

 * Template Name: Our Storage Locations
 *

 */
get_header(); ?>

<div class="wrapper">
	<div id="content" role="main">
		
			<section class="page-content-col">
			<?php while ( have_posts() ) : the_post(); 
				$theContent = get_the_content();
			 endwhile; // end of the loop. ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title( '' ); ?></h1>
				</header>
				<div class="entry-content">
						<?php echo $theContent; ?>

					<div class="locations-list">
						<?php $wp_query = new WP_Query();
					    $wp_query->query(array(
					      'post_type'=>'location',
					      'posts_per_page' => -1
					    )); ?>
					    <?php while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
					      <li>
					        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					      </li>
					    <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
					</div>
				</div>
				
			</section>

			<section class="page-maps">
				<div id="locations-map" style="padding-bottom: 10px; height: 410px;">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k0vgc2Miq_FI" width="100%" height="100%"></iframe>  
				</div>
				<div id="locations-map" style="padding-bottom: 10px; height: 410px;">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k2igJ6LyJH4s" width="100%" height="100%"></iframe>  
				</div>
			</section>  
			
		
	</div><!-- #content -->
</div>
<?php get_footer(); ?>