<?php
remove_action('wp_head', 'wp_generator');

if ( ! function_exists( 'esperal_setup' ) ) {
function esperal_setup() {
    add_theme_support('post-thumbnails'); 
    set_post_thumbnail_size('custom', 400, 300, true);
}
add_action( 'after_setup_theme', 'esperal_setup' );
}

if ( ! function_exists( 'esperal_scripts' ) ) {
function esperal_scripts() {
    // styles
    wp_enqueue_style( 'style', get_theme_file_uri() . '/style.css', array(), '1.0', 'all');    // scripts
}
add_action( 'wp_enqueue_scripts', 'esperal_scripts' );
}

if ( ! function_exists( 'esperal_excerpt' ) ) {
    function esperal_excerpt( $length ) {
        return 20;
    }
}

apply_filters( 'excerpt_length', 'esperal_excerpt' );


