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

<div class="wrapper">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>

		<section class="contact-table">               
			<?php $wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'location',
					'posts_per_page' => -1
				)); ?>
					<?php while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

					$contactPhone = get_field('contact_phone');
					$contactFax = get_field('contact_fax');
					$contactTollFree = get_field('contact_toll_free');
					$contactEmail = get_field('contact_email');
					$spamer = antispambot($contactEmail);

		

		?>
						
				<div class="contact-block">
					<h2 class="item"><?php the_title(); ?></h2>
					<div class="location-info ">
						<div class="contact-info2 block">
							<h3>ADDRESS</h3>
							<?php the_field("address"); ?>
						</div>
						<div class="contact-info2 block">
							<h3>CONTACT</h3>
							<?php 
							if($contactPhone) echo '<div class="item">p:'.$contactPhone.'</div>';
							if($contactFax) echo '<div class="item">f:'.$contactFax.'</div>';
							if($contactTollFree) echo '<div class="item">toll free:'.$contactTollFree.'</div>';
							if($contactEmail) echo '<div class="item email">e: <a href="'.$spamer.'">'.$spamer.'</a></div>';
							 ?>
						</div>
					</div>
					<div class="goto"><a href="<?php the_permalink() ?>">More Information</a></div>
					
				</div>
				<?php endwhile;?>
			
			<?php wp_reset_postdata(); ?>
		</section>

	</div><!-- #content -->
</div>
<!-- wrapper -->
<?php get_footer(); ?>