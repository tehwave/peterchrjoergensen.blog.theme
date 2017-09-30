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

// Fix Captions w/ Width applied via Style
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
    // New-style shortcode with the caption inside the shortcode with the link and image tags.
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }
    // Allow plugins/themes to override the default caption template.
    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' )
        return $output;
    extract(shortcode_atts(array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr));
    if ( 1 > (int) $width || empty($caption) )
        return $content;
    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
    return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: auto">'
    . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}