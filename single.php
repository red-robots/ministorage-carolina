<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="wrapper">
<div id="content" role="main">
<div class="entry-content">
<?php while ( have_posts() ) : the_post(); ?>
	<div id="locations-dropdown">
		<div id="dropdown-menu">	
			<nav>
				<div id="locations-dropdown-header">VIEW ANOTHER LOCATION</div>
				<ul>
					<li class="main-li-width">Choose from our convenient locations
					<?php $the_query = new WP_Query( 'showposts=-1' ); ?>
					<ul>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile;?>
					</ul>
					 <?php wp_reset_postdata(); ?>
					</li>
				</ul>
			</nav>
		</div>
	</div>           
            

<h2>Our Storage Locations:</h2>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
            
<?php echo do_shortcode("[tabby title='Location, Contact & Hours']"); ?>

<section class="location-contact">
	<h3>ADDRESS</h3>
	<div class="contact-info"><?php the_field("address"); ?></div>

	<h3>CONTACT</h3>
	<div class="contact-info analytics">
	<?php 

	$contactPhone = get_field('contact_phone');
	$contactFax = get_field('contact_fax');
	$contactTollFree = get_field('contact_toll_free');
	$contactEmail = get_field('contact_email');
	$spamer = antispambot($contactEmail);
	if($contactPhone) echo '<div class="item">p:<a href="tel:'.preg_replace('/[^0-9]/',"",$contactPhone).'" class="label:'.preg_replace('/[^0-9]/',"",$contactPhone).' action:call cat:'.sanitize_title_with_dashes( get_the_title()).'">'.$contactPhone.'</a></div>';
	if($contactFax) echo '<div class="item">f:'.$contactFax.'</div>';
	if($contactTollFree) echo '<div class="item">toll free:<a href="tel:'.preg_replace('/[^0-9]/',"",$contactTollFree).'>" class="label:'.preg_replace('/[^0-9]/',"",$contactTollFree).' action:toll cat:'.sanitize_title_with_dashes( get_the_title()).'">'.$contactTollFree.'</a></div>';
	if($contactEmail) echo '<div class="item">e: <a href="mailto:'.$spamer.'" class="label:'.$spamer.' action:email cat:'.sanitize_title_with_dashes( get_the_title(  )).'">'.$spamer.'</a></div>';
	?>
	
	</div>

	<h3>HOURS & ACCESS</h3>
	<div class="contact-info"><?php the_field("hours_access"); ?></div>
</section>

<section class="location-desc">
	
</section>

<div id="locations-map">
	<?php the_field("map"); ?>
</div>





<?php echo do_shortcode("[tabby title='Storage Units, Pricing & Amenitites']"); ?>

<h3>FACILITY & AMENITIES</h3>
<div id="amenities-list">
<ul>

<!-- outdoor_storage -->
<?php
$amenity1 = get_field('outdoor_storage');
if( ($amenity1) )
{
 echo '<li>Outdoor Storage</li>';
}
?>
<!-- / outdoor_storage -->  


<!-- indoor_storage -->
<?php
$amenity2 = get_field('indoor_storage');
if( ($amenity2) )
{
 echo '<li>Indoor Storage</li>';
}
?>
<!-- / indoor_storage -->  

<!-- climate_controlled_storage -->
<?php
$amenity3 = get_field('climate_controlled_storage');
if( ($amenity3) )
{
 echo '<li>Climate Controlled Storage</li>';
}
?>
<!-- / climate_controlled_storage -->  

<!-- office_warehouse_space_available -->
<?php
$amenity4 = get_field('office_warehouse_space_available');
if( ($amenity4) )
{
 echo '<li>Office/Warehouse Space Available</li>';
}
?>
<!-- / office_warehouse_space_available --> 

<!-- truck_rv_motorcycle_parking -->
<?php
$amenity5 = get_field('truck_rv_motorcycle_parking');
if( ($amenity5) )
{
 echo '<li>Truck, RV, and/or Motorcycle Parking</li>';
}
?>
<!-- / truck_rv_motorcycle_parking --> 

<!-- access -->
<?php
$amenity6 = get_field('access');
if( ($amenity6) )
{
 echo '<li>24/7 Access</li>';
}
?>
<!-- / access --> 

<!-- packing_supplies_available -->
<?php
$amenity7 = get_field('packing_supplies_available');
if( ($amenity7) )
{
 echo '<li>Packing Supplies Available</li>';
}
?>
<!-- / packing_supplies_available --> 

<!-- truck_rentals -->
<?php
$amenity8 = get_field('truck_rentals');
if( ($amenity8) )
{
 echo '<li>Uhaul/Moving Truck Rentals Available</li>';
}
?>
<!-- / truck_rentals --> 

<!-- truck_rentals -->
<?php
$amenity8 = get_field('van_rentals_available');
if( ($amenity8) )
{
 echo '<li>Van Rentals Available</li>';
}
?>
<!-- / truck_rentals --> 

<!-- online_payment -->
<?php
$amenity9 = get_field('online_payment');
if( ($amenity9) )
{
 echo '<li>Online Payment</li>';
}
?>
<!-- / online_payment --> 

<!-- online_reservations -->
<?php
$amenity10 = get_field('online_reservations');
if( ($amenity10) )
{
 echo '<li>Online Reservations</li>';
}
?>
<!-- / online_reservations -->

    <!-- trailer_hitches -->
<?php
$amenity12 = get_field('trailer_hitches');
if( ($amenity12) )
{
 echo '<li>Trailer Hitches For Sale</li>';
}
?>
<!-- / trailer_hitches -->   

    <!-- other_amenities -->
<?php
$amenity11 = get_field('other_amenities');
if( ($amenity11) )
{
 echo '<li>Other Amenities</li>';
}
?>
<!-- / other_amenities -->     

</ul>
</div>

<h3>UNIT SIZES & PRICING</h3>

<?php if(get_field('size_pricing')): ?>          

<?php while(has_sub_field('size_pricing')): ?>

<div class="unit-block">
<div class="unit-size"><?php the_sub_field("unit_size"); ?></div>
<div class="unit-price"><?php the_sub_field("unit_price"); ?></div>
</div>
<?php endwhile; endif; ?>





<?php echo do_shortcode("[tabby title='Make A Reservation']"); ?>

<?php the_field("make_a_reservation"); ?>

<?php echo do_shortcode("[tabby title='Make A Payment']"); ?>

<?php the_field("make_a_payment"); ?>

<?php echo do_shortcode("[tabby title='Special Savings']"); ?>

<?php the_field("special_savings"); ?>

<?php echo do_shortcode("[tabbyending]"); ?>      


<div id="locations-gallery">

<div id="photo1">
	<img src="<?php the_field("location_default_photo"); ?>" name="mainimage" width="450" height="300" id="mainimage">
</div>


<div id="thumbs">
 
<!-- -->

<?php if(get_field('location_gallery')): ?>          

<?php while(has_sub_field('location_gallery')): ?>

<div class="thumb1">
	<a href="<?php the_sub_field("location_photo"); ?>" onclick="swap(this); return false;">
		<img src="<?php the_sub_field("location_photo"); ?>" width="150" height="99" border="0" style="opacity: 0.4;" onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100" onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40">
	</a>
</div>

<?php endwhile; endif; ?>
<!-- -->  
</div>
</div>                

<?php endwhile; // end of the loop. ?>
</div>  
</div><!-- #content -->
        
 </div>
 <!-- wrapper -->

<?php get_footer(); ?>