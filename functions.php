<?php

// Set up widgets
add_action( 'widgets_init', 'aapcse_widgets_init' );
function aapcse_widgets_init() {
	register_sidebar( array(
		'name' => 'Footer Widget',
		'id' => 'footer-widget',
		'description' => __( 'The footer widget area. Add a text widget to include your address and phone.'),
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="footer-widget">',
		'after_title' => '</h3>',
	) );
} // End widget setup

// Start Theme Setup. 
add_action('after_setup_theme', 'aapcse_themesetup');
function aapcse_themesetup() {	
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'a11yall_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );
	// Let users add "featured images", AKA post-thumbnails
	add_theme_support( 'post-thumbnails' );
} // End AAPCSE Theme Setup

