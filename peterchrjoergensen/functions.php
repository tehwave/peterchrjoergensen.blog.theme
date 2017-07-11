<?php

// Stylesheets
function pcj_add_stylesheets() {
	wp_register_script('pcj.css', get_template_directory_uri() . '/assets/css/pcj.min.css', array(),'1.0');

	wp_register_script('jquery.js', 'https://code.jquery.com/jquery-1.12.4.min.js', array(),'1.0');
	wp_enqueue_script('jquery.js');
}

add_action('wp_enqueue_scripts', 'pcj_add_stylesheets');

// Scripts
function pcj_add_scripts() {
	wp_register_script('parallax.js', get_template_directory_uri() . '/assets/js/parallax.min.js', array(),'1.0');
	wp_enqueue_script('parallax.js');
}

add_action('wp_enqueue_scripts', 'pcj_add_scripts');
?>