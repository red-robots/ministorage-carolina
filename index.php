<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="row1">



<div id="row1-box1"><a href="<?php bloginfo('url'); ?>/specials"></a></div>

<div id="row1-box2">
<div class="row1box2-heading">Helpful People, Convenient Storage</div>
  <ul>
    <li>Monthly & Long Term Rentals
      </li>
    <li>Unit Sizes To Suit Your Needs </li>
    <li>Packing Supplies </li>
    <li>Super Competitive Rates! </li>
  </ul>
</div>


<div id="find-location-box">

<div id="find-location-box-header">Find A<br>Location</div>

<div id="find-location-menu">

<div id="find-location-text2">View Storage Unit Sizes,  Make a Reservation, Make a Payment, <br>
  View Map of Locations, See Features, Contact Us & More!</div>

<div id="dropdown-text">LOCATIONS: </div>
<div id="dropdown-menu">	
<nav>
    <ul>
    <li class="main-li-width">Choose from our convenient locations

 <?php $the_query = new WP_Query( 'showposts=-1' ); ?>

<ul><?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

 <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

 <?php endwhile;?>



</ul>
</li>
</ul></nav></div>

<div class="button-sm margin1"><a href="<?php bloginfo('url'); ?>/our-storage-locations/">GO</a></div>

</div>		
</div>
</div>

<!-- </div> -->





<div id="home-row2">

<?php $recent = new WP_Query("page_id=73"); while($recent->have_posts()) : $recent->the_post();?>


<div class="home-row2-box">
  <h2 class="heading1">GETTING STARTED:</h2>
 
 <div class="home-row2-box-content"> 
<h3><?php the_field('box_1_heading'); ?></h3>

<p><?php the_field('box_1_text'); ?>


<p><?php 
$image = get_field('box_1_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>




<div class="button-lg button-bottom"><a href="<?php bloginfo('url'); ?>/getting-started/how-much-space-do-you-need/">GO</a></div>

</div>

</div>

<div class="home-row2-box">
  <h2 class="heading2">SEARCH BY FEATURES:</h2>
<div class="home-row2-box-content"> 
<h3><?php the_field('box_2_heading'); ?></h3>

<p><?php the_field('box_2_text'); ?>


<p><?php 
$image = get_field('box_2_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>




<div class="button-lg button-bottom"><a href="<?php bloginfo('url'); ?>/features-amenities/">GO</a></div>

</div>
</div>

<div class="home-row2-box2">
  <h2 class="heading3">REQUEST A RESERVATION NOW: </h2>
<div class="home-row2-box-content"> 
<h3><?php the_field('box_3_heading'); ?></h3>

<p><?php the_field('box_3_text'); ?>


<p><?php 
$image = get_field('box_3_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>




<div class="button-lg button-bottom"><a href="<?php bloginfo('url'); ?>/rent-space/">GO</a></div>

</div>
</div>

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
</div>

<div id="row3">

<div id="row3-left">
<h2>Storage Locations</h2>
<?php $recent = new WP_Query("page_id=73"); while($recent->have_posts()) : $recent->the_post();?>
<p><?php the_field('storage_locations'); ?>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
</div>

<div id="row3-right">



<iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k0vgc2Miq_FI" width="100%" height="350"></iframe>  


</div>


</div>

	


<?php get_footer(); ?>