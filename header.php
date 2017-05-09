<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head><meta name="google-site-verification" content="PI2UWpLYbI7tQh6XvuE7CgUTgNlp-788sGRUQh5wFZA" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>


<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicons/manifest.json">
<meta name="theme-color" content="#ffffff">


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php the_field('google_analytics', 'option'); ?>

<script language="javascript" type="text/javascript">
function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
      }
   }
}
</script>

<script type="text/javascript">          
  		function swap(image) {
		       document.getElementById("mainimage").src = image.href;          
			   }      
               </script>

</head>

<body <?php body_class(); ?>>






<?php if(is_home()) { ?>

                <div id="bg-body-home">

            <?php } else { ?>

                <div id="sub-wrapper">
                
            <?php } ?>




<div id="bg-body1">

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<div id="logo"><div id="logo-image"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" border="0"></a></div></div>
            
            <!-- new logo? -->
<div id="header-content">    

<div id="header-row1">

<div id="specials-mobile"><a href="<?php bloginfo('url'); ?>/specials">See Our Specials</a></div>

  <div id="gift-button"><a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a></div></div>
 
            
            <div id="header-text"><h1>The Mini Storage Center</h1>
            Self-Storage Space For Individuals & Businesses
<br>Convenient Locations in North Carolina & South Carolina</div>
            
            
            
</div>            
			
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
        <div id="site-navigation-position">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

<div id="payment-button"><a href="<?php bloginfo('url'); ?>/make-a-payment/">Make a Payment</a></div>   

		</div></nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
    

<div id="mobile-nav">
 
<div id="subnav">
 
      <p><a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">Menu</a></p>
      <div id="example" class="nav-more">
         <p><?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?></p>
         <p><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">[x] close</a></p>
      </div>

 
 </div>   

</div><!-- mobile nav-->