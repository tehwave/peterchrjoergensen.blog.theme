<?php

// Stylesheets
function pcj_add_stylesheets() {
	wp_register_style('pcj.css', get_template_directory_uri() . '/resources/css/pcj.min.css');
	wp_enqueue_style('pcj.css');
}

add_action('wp_enqueue_scripts', 'pcj_add_stylesheets');

// Scripts
function pcj_add_scripts() {
	wp_register_script('parallax.js', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery-core'));
	wp_enqueue_script('parallax.js');

	wp_register_script('SmoothScroll.js', get_template_directory_uri() . '/assets/js/SmoothScroll.min.js');
	wp_enqueue_script('SmoothScroll.js');

	wp_register_script('SmoothScrolltop.js', get_template_directory_uri() . '/assets/js/SmoothScrolltop.jquery.min.js', array('jquery-core'));
	wp_enqueue_script('SmoothScrolltop.js');
}

add_action('wp_enqueue_scripts', 'pcj_add_scripts');

// Widgets
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'id'            => 'sidebar',
		'name'          => 'Sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

// Support
add_theme_support( 'post-thumbnails' );
?>
