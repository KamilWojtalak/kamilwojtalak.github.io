<?php
if ( ! isset( $content_width ) ) {
    $content_width = 900; 
}
 
if ( ! function_exists( 'custom_setup' ) ) {

function custom_setup() {
 
    $header_args = array(
        'default-image' => get_theme_file_uri() . 'assets/images/header-default.jpg',
        'default-text-color' => '#fff',
        'width' => 700,
        'height' => 400,
        'flex-width' => true,
        'flex-height' => true,
    );

    load_theme_textdomain( 'custom', get_template_directory() . '/languages' );
 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header', $header_args );
 
    $header_images = array(
        'default-1' => array(
            'url' => get_theme_file_uri() . 'assets/images/header-default-1.jpg',
            'thumbnail_url' => get_theme_file_uri() . 'assets/images/header-thumbnail-default-1.jpg',
            'description' => 'Default image no 1'
        ),
        'default-2' => array(
            'url' => get_theme_file_uri() . 'assets/images/header-default-2.jpg',
            'thumbnail_url' => get_theme_file_uri() . 'assets/images/header-thumbnail-default-2.jpg',
            'description' => 'Default image no 2'
        ),
    );

    register_default_headers( $header_images );

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'custom' ),
        'secondary' => __('Secondary Menu', 'custom' )
    ) );
 
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
    add_action( 'after_setup_theme', 'custom_setup' );
}


if ( !function_exists( 'custom_load_scripts_styles' ) ) {
    function custom_load_scripts_styles() {
        // styles
        wp_enqueue_style( 'style', get_theme_file_uri() . '/style.css', array(), '1.0', 'all');
        // scripts
        wp_enqueue_script( 'main', get_theme_file_uri() . '/assets/js/main.js', array(), '1.0', true);

    }

    add_action( 'wp_enqueue_scripts', 'custom_load_scripts_styles');
}

