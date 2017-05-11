<?php
/**
 * Enqueue scripts and styles.
 */
function acstarter_scripts() {
	wp_enqueue_style( 'acstarter-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');

	

	wp_enqueue_script( 
			'acstarter-blocks', 
			get_template_directory_uri() . '/assets/js/vendors.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script( 
			'acstarter-custom', 
			get_template_directory_uri() . '/assets/js/custom.js', 
			array(), '20120206', 
			true 
		);

	// wp_enqueue_script( 
	// 		'acstarter-flexslider', 
	// 		get_template_directory_uri() . '/js/flexslider.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'acstarter-colorbox', 
	// 		get_template_directory_uri() . '/js/colorbox.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'acstarter-isotope', 
	// 		get_template_directory_uri() . '/js/isotope.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'acstarter-images-loaded', 
	// 		get_template_directory_uri() . '/js/images-loaded.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);


	// wp_enqueue_script( 
	// 		'acstarter-navigation', 
	// 		get_template_directory_uri() . '/js/navigation.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'nicescroll', 
	// 		get_template_directory_uri() . '/js/nicescroll.min.js', 
	// 		array(), '20120206', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'wow', 
	// 		get_template_directory_uri() . '/js/wow.js', 
	// 		array(), '20130115', 
	// 		true 
	// 	);

	// wp_enqueue_script( 
	// 		'acstarter-skip-link-focus-fix', 
	// 		get_template_directory_uri() . '/js/skip-link-focus-fix.js', 
	// 		array(), '20130115', 
	// 		true 
	// 	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acstarter_scripts' );