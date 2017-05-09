<?php // Opening PHP tag - nothing should be before this, not even whitespace

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

// Changing WordPress admin Menu Names
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Locations';
    $submenu['edit.php'][5][0] = 'Locations';
    $submenu['edit.php'][10][0] = 'Add a Location';
   // $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Locations';
        $labels->singular_name = 'Locations';
        $labels->add_new = 'Add a Location';
        $labels->add_new_item = 'Add a Location';
        $labels->edit_item = 'Edit Locations';
        $labels->new_item = 'Locations';
        $labels->view_item = 'View Locations';
        $labels->search_items = 'Search Locations';
        $labels->not_found = 'No Locations found';
        $labels->not_found_in_trash = 'No Locations found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );
?>
<?php
    add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}
?>