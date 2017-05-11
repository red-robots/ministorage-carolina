<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Locations', 'post type general name'),
    'singular_name' => _x('Location', 'post type singular name'),
    'add_new' => _x('Add New', 'Location'),
    'add_new_item' => __('Add New Location'),
    'edit_item' => __('Edit Locations'),
    'new_item' => __('New Location'),
    'view_item' => __('View Locations'),
    'search_items' => __('Search Locations'),
    'not_found' =>  __('No Locations found'),
    'not_found_in_trash' => __('No Locations found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Locations'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('location',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type