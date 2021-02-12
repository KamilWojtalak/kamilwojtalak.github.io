<?php
if ( ! isset( $content_width ) )
    $content_width = 900; 
 
if ( ! function_exists( 'custom_setup' ) ) {

    function custom_setup() {
 
    load_theme_textdomain( 'custom', get_template_directory() . '/languages' );
 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
 
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'custom' ),
        'secondary' => __('Secondary Menu', 'custom' )
    ) );
 
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
} 
add_action( 'after_setup_theme', 'custom_setup' );