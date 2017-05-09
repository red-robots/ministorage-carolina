<?php
/**
 * Template Name: Features & Amenities
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
            
                
 <div id="features-table">               
                

 <div class="feature-title-heading">STORAGE LOCATION</div>
 
 
<div class="location-info">
<div class="feature-heading">Indoor<br>
Storage<br>
Available?</div>
<div class="feature-heading">Climate<br>
Controlled<br>
Storage?</div>
<div class="feature-heading">Office/<br>
Warehouse<br>
Space<br>
Available?</div>
<div class="feature-heading">Truck, RV,<br>
and/or<br>
Motorcycle<br>
Parking?</div>
<div class="feature-heading">24/7<br>
Access?</div>
<div class="feature-heading">Packing<br>
Supplies<br>
Available?</div>
<div class="feature-heading">Uhaul/<br>
Moving Truck<br>
Rentals<br>
Available?</div>
<div class="feature-heading">Online<br>
Payment<br>
Option<br>
Available?</div>
<div class="feature-heading">Manager<br>
Lives<br>
On Site?</div>
</div>



<?php query_posts('category_name=uncategorized&showposts=20'); ?>



<ul><?php while (have_posts()) : the_post(); ?>

 <li>
 
 <div class="feature-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
 
 <div class="location-info">
 

<!-- indoor_storage -->
<div class="feature"><?php
$amenity2 = get_field('indoor_storage');
if( ($amenity2) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Indoor<br>Storage<br>Available</div>';
}
?></div>
<!-- / indoor_storage -->  

<!-- climate_controlled_storage -->
<div class="feature"><?php
$amenity3 = get_field('climate_controlled_storage');
if( ($amenity3) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Climate<br>Controlled<br>Storage</div>';
}
?></div>
<!-- / climate_controlled_storage -->  

<!-- office_warehouse_space_available -->
<div class="feature"><?php
$amenity4 = get_field('office_warehouse_space_available');
if( ($amenity4) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Office/<br>Warehouse<br>Space<br>Available</div>';
}
?></div>
<!-- / office_warehouse_space_available --> 

<!-- truck_rv_motorcycle_parking -->
<div class="feature"><?php
$amenity5 = get_field('truck_rv_motorcycle_parking');
if( ($amenity5) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Truck, RV,<br>Motorcycle<br>Parking</div>';
}
?></div>
<!-- / truck_rv_motorcycle_parking --> 

<!-- access -->
<div class="feature"><?php
$amenity6 = get_field('access');
if( ($amenity6) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">24/7<br>Access</div>';
}
?></div>
<!-- / access --> 

<!-- packing_supplies_available -->
<div class="feature"><?php
$amenity7 = get_field('packing_supplies_available');
if( ($amenity7) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Packing<br>Supplies<br>Available</div>';
}
?></div>
<!-- / packing_supplies_available --> 

<!-- truck_rentals -->
<div class="feature"><?php
$amenity8 = get_field('truck_rentals');
if( ($amenity8) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Uhaul/<br>Moving Truck<br>Rentals</div>';
}
?></div>
<!-- / truck_rentals --> 

<!-- online_payment -->
<div class="feature"><?php
$amenity9 = get_field('online_payment');
if( ($amenity9) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Online<br>Payment<br>Available</div>';
}
?></div>
<!-- / online_payment --> 


    <!-- other_amenities -->
<div class="feature"><?php
$amenity11 = get_field('other_amenities');
if( ($amenity11) )
{
 echo '<div class="feature-mobile-image"><img src="../images/feature-yes.png"></div><div class="feature-mobile">Manager<br>Lives<br>On Site</div>';
}
?></div>
<!-- / other_amenities -->   


 
 </div>
 
 </li>

 <?php endwhile;?>


 </ul>
 <?php wp_reset_postdata(); ?>
























<?php if(get_field('property_row')): ?>          

<?php while(has_sub_field('property_row')): ?>
<div class="features1"><?php the_sub_field("property"); ?></div>
<div class="features1"><?php the_sub_field("address"); ?></div>
<div class="features1"><?php the_sub_field("phone_number"); ?></div>
<div class="features1"><?php the_sub_field("fax_number"); ?></div>
<div class="features1"><?php the_sub_field("general_email_address"); ?></div>
<div class="features1"><?php the_sub_field("outdoor_storage_available"); ?></div>
<div class="features1"><?php the_sub_field("indoor_storage_available"); ?></div>
<div class="features1"><?php the_sub_field("climate_controlled_storage"); ?></div>
<div class="features1"><?php the_sub_field("office_warehouse_space_available"); ?></div>
<div class="features1"><?php the_sub_field("truck_rv_motorcycle_parking"); ?></div>
<div class="features1"><?php the_sub_field("electronic_gate_access"); ?></div>
<div class="features1"><?php the_sub_field("access_hours"); ?></div>
<div class="features1"><?php the_sub_field("office_hours"); ?></div>
<div class="features1"><?php the_sub_field("packing_supplies"); ?></div>
<div class="features1"><?php the_sub_field("moving_truck_rentals_available"); ?></div>
<div class="features1"><?php the_sub_field("online_payment_option"); ?></div>
<div class="features1"><?php the_sub_field("online_reservation_option"); ?></div>
<div class="features1"><?php the_sub_field("additional_urls"); ?></div>
<div class="features1"><?php the_sub_field("other_amenity"); ?></div>

<?php endwhile; endif; ?>










                
                </div>
                
                
			
			
  
            
            



  
      
            

		</div><!-- #content -->

<?php get_footer(); ?>