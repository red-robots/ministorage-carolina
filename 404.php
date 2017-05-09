<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="content" role="main">


				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'We&rsquo;re sorry. The page you are looking for cannot be found.', 'avalillys' ); ?></h1>
				</header>

<div id="sitemap">					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Please use the links below to browse our site.', 'olive' ); ?></p>
<ul><?php wp_list_pages('sort_column=menu_order&title_li='); ?></ul>
                  </div>
             </div>     
               

<?php get_footer(); ?>