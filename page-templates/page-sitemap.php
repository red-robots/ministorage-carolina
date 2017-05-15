<?php
/**
 * Template Name: Sitemap
 *
 * 
 */

get_header(); ?>

<div class="wrapper">
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<div id="sitemap">	
				<ul>				
					<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
				</ul>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div>
<?php get_footer(); ?>