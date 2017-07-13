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
<!-- lw2 -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "The Mini Storage Center",
  "image" : "http://ministoragecarolina.com/bw/wp-content/themes/ministorage-carolina/images/logo.png",
  "url" : "https://ministoragecarolina.com/",
  "department": 
    [
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28208",
                "streetAddress": "2318 Freedom Dr"
            },
            "telephone" : "(704) 393-1425",
            "email" : "fd@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28205",
                "streetAddress": "1515 E. Sugar Creek Rd"
            },
            "telephone" : "(704) 375-7983",
            "email" : "sc@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28205",
                "streetAddress": "4500 Monroe Rd"
            },
            "telephone" : "(704) 333-7064",
            "email" : "mr@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28209",
                "streetAddress": "4475 South Blvd"
            },
            "telephone" : "(704) 523-1156",
            "email" : "sb@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28273",
                "streetAddress": "700-A Westinghouse Blvd"
            },
            "telephone" : "(704) 588-3915",
            "email" : "wb@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Columbia",
                "addressRegion": "SC",
                "postalCode": "29169",
                "streetAddress": "730 Chris Dr"
            },
            "telephone" : "(803) 794-4228"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Conway",
                "addressRegion": "SC",
                "postalCode": "29526",
                "streetAddress": "490 University Forest Dr"
            },
            "telephone" : "(843) 349-9800",
            "email" : "501@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Conway",
                "addressRegion": "SC",
                "postalCode": "29526",
                "streetAddress": "1488 Hwy 501"
            },
            "telephone" : "(843) 349-9800",
            "email" : "501@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Conway",
                "addressRegion": "SC",
                "postalCode": "29526",
                "streetAddress": "1480 Hwy 501 Bus"
            },
            "telephone" : "(843) 349-9800",
            "email" : "501@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Garden City",
                "addressRegion": "SC",
                "postalCode": "29576",
                "streetAddress": "12053 Hwy 17 Bypass"
            },
            "telephone" : "(843) 651-0440",
            "email" : "gc@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Garden City",
                "addressRegion": "SC",
                "postalCode": "29576",
                "streetAddress": "605 Boundary Ave"
            },
            "telephone" : "(843) 651-0440",
            "email" : "gc@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Garden City",
                "addressRegion": "SC",
                "postalCode": "29576",
                "streetAddress": "565 Pine Ave"
            },
            "telephone" : "(843) 651-0440",
            "email" : "gc@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Myrtle Beach",
                "addressRegion": "SC",
                "postalCode": "29588",
                "streetAddress": "Coastal Storage & Retail"
            },
            "telephone" : "(843) 650-6802",
            "email" : "707@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Rock Hill",
                "addressRegion": "SC",
                "postalCode": "29732",
                "streetAddress": "1370 Constitution Blvd"
            },
            "telephone" : "(803) 985-3660",
            "email" : "rh@ministoragecarolina.com"
        },
        {
            "@type": "Storage Center",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Spartanburg",
                "addressRegion": "SC",
                "postalCode": "29301",
                "streetAddress": "350 E. Blackstock Rd"
            },
            "telephone" : "(864) 587-9515",
            "email" : "sp@ministoragecarolina.com"
        },
    ],
  
  
}
</script>

<?php wp_head(); ?>


<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicons/manifest.json">
<meta name="theme-color" content="#ffffff">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php the_field('google_analytics', 'option'); ?>

</head>

<body <?php body_class(); ?>>


<div id="bg-body1">
  <div id="page" class="hfeed site">


    <header id="masthead" class="site-header" role="banner">
    <div class="wrapper">
        <?php if(is_home()) { ?>
        <h1 class="logo">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <?php } else { ?>
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <?php } ?>

        <div id="header-content">    
          <div id="header-row1">
            <div class="contact-us">
              <a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a>
            </div>
          </div>
          <div id="header-text">
            <h1>The Mini Storage Center</h1>
            Self-Storage Space For Individuals & Businesses
            <br>Convenient Locations in North Carolina & South Carolina
          </div>
        </div>            

        <div class="nav-wrap">
          <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <?php esc_html_e( 'MENU', 'acstarter' ); ?>
            </button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          </nav><!-- #site-navigation -->

          <div id="payment-button">
            <a href="<?php bloginfo('url'); ?>/make-a-payment/">Make a Payment</a>
          </div>   
        </div>

      <?php if ( get_header_image() ) : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
      <?php endif; ?>
    </div>
    <!-- wrapper -->
    </header><!-- #masthead -->

    <div id="main" class="">
    