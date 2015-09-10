<?php

// Set up a sidebar widger
add_action( 'widgets_init', 'aapcse_widgets_init' );
function aapcse_widgets_init() {
	register_sidebar( array(
		'name' => 'About Sidebar',
		'id' => 'about-widgets',
		'description' => __( 'Drag to create or update the sidebar for pages using the "About Us Template"'),
		'before_widget' => '<li class="custom-widget">',
		'after_widget' => "</div>",
	) );
	register_sidebar( array(
		'name' => 'Education Sidebar',
		'id' => 'educ-widgets',
		'description' => __( 'Drag to create or update the sidebar for pages using the Education Template'),
		'before_widget' => '<li class="custom-widget">',
		'after_widget' => "</div>",
	) );
	register_sidebar( array(
		'name' => 'Ministry Sidebar',
		'id' => 'ministry-widgets',
		'description' => __( 'Drag to create or update the sidebar for pages using the Ministry Template'),
		'before_widget' => '<li class="custom-widget">',
		'after_widget' => "</div>",
	) );
	register_sidebar( array(
		'name' => 'Footer Widget',
		'id' => 'footer-widget',
		'description' => __( 'The footer widget area. Add a text widget to include your address and phone.'),
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="footer-widget">',
		'after_title' => '</h3>',
	) );

}

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
	
} // End Part 1 of Theme Setup

?>
