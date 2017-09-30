<?php

// Stylesheets
function pcj_add_stylesheets()
{
    wp_register_style('pcj.css', get_template_directory_uri().'/resources/css/pcj.min.css');
    wp_enqueue_style('pcj.css');

    wp_register_style('blog.css', get_template_directory_uri().'/resources/css/blog.min.css');
    wp_enqueue_style('blog.css');
}

add_action('wp_enqueue_scripts', 'pcj_add_stylesheets');

// Scripts
function pcj_add_scripts()
{
    wp_register_script('parallax.js', get_template_directory_uri().'/resources/js/parallax.min.js', ['jquery-core']);
    wp_enqueue_script('parallax.js');

    wp_register_script('smoothscroll.js', get_template_directory_uri().'/resources/js/smoothscroll.min.js');
    wp_enqueue_script('smoothscroll.js');
}

add_action('wp_enqueue_scripts', 'pcj_add_scripts');

// Widgets
if (function_exists('register_sidebar')) {
    register_sidebar([
        'id'            => 'sidebar',
        'name'          => 'Sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);
}

// Support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');;
