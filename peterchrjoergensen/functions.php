<?php

// Stylesheets
function pcj_add_stylesheets() {
	wp_register_script('pcj.css', get_template_directory_uri() . '/assets/css/pcj.min.css', array(),'1.0');
	wp_enqueue_script('pcj.css');
}

add_action('wp_enqueue_scripts', 'pcj_add_stylesheets');

// Scripts
function pcj_add_scripts() {
	wp_register_script('parallax.js', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery-core'),'1.0');
	wp_enqueue_script('parallax.js');

	wp_register_script('SmoothScroll.js', get_template_directory_uri() . '/assets/js/SmoothScroll.min.js', array(),'1.0');
	wp_enqueue_script('SmoothScroll.js');
}

add_action('wp_enqueue_scripts', 'pcj_add_scripts');
?>