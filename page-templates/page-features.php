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
<div class="wrapper">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	    
	    <section class="feature-amenity">       
		<div id="features-table">               
			<div class="feature-title-heading">STORAGE LOCATION</div>
			
			<div class="location-info">
				<div class="feature-heading js-blocks">
					Indoor 
					Storage 
					Available?
				</div>
				<div class="feature-heading js-blocks">
					Climate 
					Controlled 
					Storage?
				</div>
				<div class="feature-heading js-blocks">
					Office/ 
					Warehouse 
					Space 
					Available?
				</div>
				<div class="feature-heading js-blocks">
					Truck, RV, 
					and/or 
					Motorcycle 
					Parking?
				</div>
				<div class="feature-heading js-blocks">
					24/7 
					Access?
				</div>
				<div class="feature-heading js-blocks">
					Packing 
					Supplies 
					Available?
				</div>
				<div class="feature-heading js-blocks">
					Uhaul/ 
					Moving Truck 
					Rentals 
					Available?
				</div>
				<div class="feature-heading js-blocks">
					Online 
					Payment 
					Option 
					Available?
				</div>
				<div class="feature-heading js-blocks">
					Manager 
					Lives 
					On Site?
				</div>
			</div>
			<!-- location info -->


		<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'location',
			'posts_per_page' => -1
		));
			if ($wp_query->have_posts()) : ?>
		    



		<ul>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li>
					<div class="feature-title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</div>
				<div class="location-info">

				<!-- indoor_storage -->
				<div class="feature js-blocks">
					<?php
					$amenity2 = get_field('indoor_storage');
					if( ($amenity2) ) { ?>
					 	<div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Indoor Storage Available">
					 	</div>
					 	<div class="feature-mobile">Indoor Storage Available</div>
					<?php } ?>
				</div>
				<!-- / indoor_storage -->  

				<!-- climate_controlled_storage -->
				<div class="feature js-blocks">
					<?php
					$amenity3 = get_field('climate_controlled_storage');
					if( ($amenity3) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Climate Controlled Storage Available">
					 </div>
					 <div class="feature-mobile">Climate Controlled Storage</div>
					<?php } ?>
				</div>
				<!-- / climate_controlled_storage -->  

				<!-- office_warehouse_space_available -->
				<div class="feature js-blocks">
					<?php
					$amenity4 = get_field('office_warehouse_space_available');
					if( ($amenity4) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Office/ Warehouse Space Available">
					 </div>
					 <div class="feature-mobile">Office/ Warehouse Space Available</div>
					<?php } ?>
				</div>
				<!-- / office_warehouse_space_available --> 

				<!-- truck_rv_motorcycle_parking -->
				<div class="feature js-blocks">
					<?php
					$amenity5 = get_field('truck_rv_motorcycle_parking');
					if( ($amenity5) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Truck, RV, Motorcycle Parking Available">
					 </div>
					 <div class="feature-mobile">Truck, RV, Motorcycle Parking</div>
					<?php } ?>
				</div>
				<!-- / truck_rv_motorcycle_parking --> 

				<!-- access -->
				<div class="feature js-blocks">
					<?php
					$amenity6 = get_field('access');
					if( ($amenity6) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="24/7 Access Available">
					 </div>
					 <div class="feature-mobile">24/7 Access</div>
					<?php } ?>
				</div>
				<!-- / access --> 

				<!-- packing_supplies_available -->
				<div class="feature js-blocks">
					<?php
					$amenity7 = get_field('packing_supplies_available');
					if( ($amenity7) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Packing Supplies Available">
					 </div>
					 <div class="feature-mobile">Packing Supplies Available</div>
					<?php } ?>
				</div>
				<!-- / packing_supplies_available --> 

				<!-- truck_rentals -->
				<div class="feature js-blocks">
					<?php
					$amenity8 = get_field('truck_rentals');
					if( ($amenity8) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Uhaul/ Moving Truck Rentals Available">
					 </div>
					 <div class="feature-mobile">Uhaul/ Moving Truck Rentals</div>
					<?php } ?>
				</div>
				<!-- / truck_rentals --> 

				<!-- online_payment -->
				<div class="feature js-blocks">
					<?php
					$amenity9 = get_field('online_payment');
					if( ($amenity9) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Online Payment Available">
					 </div>
					 <div class="feature-mobile">Online Payment Available</div>
					<?php } ?>
				</div>
				<!-- / online_payment --> 


				    <!-- other_amenities -->
				<div class="feature js-blocks">
					<?php
					$amenity11 = get_field('other_amenities');
					if( ($amenity11) ) { ?>
					 <div class="feature-mobile-image">
					 	<img src="<?php bloginfo('template_url'); ?>/images/feature-yes.png" alt="Manager Lives On Site Available">
					 </div>
					 <div class="feature-mobile">Manager Lives On Site</div>
					<?php } ?>
				</div>
				<!-- / other_amenities -->   

				</div>
				</li>
			<?php endwhile;?>
		</ul>
	
		 <?php //wp_reset_postdata(); ?>

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

			<?php endwhile; endif; endif; ?>
		</div>
	 </section>           	    
	</div><!-- #content -->
</div> 
<!-- wrapper -->
<?php get_footer(); ?>