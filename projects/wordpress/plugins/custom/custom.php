/**
 * Plugin Name:       Custom
 * Description:       Custom plugin.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Kamil Wojtalak
 * Text Domain:       custom
 * Domain Path:       /languages
 */
<?php
function custom_setup() {
    // styles

    wp_enqueue_style( 'custom-style', plugin_url('style.css', __DIR__ . 'style.css'), array(), 1.0, 'all' );

    // scripts
    wp_enqueue_style( 'custom-script', plugin_url('script.js', __DIR__ . 'script.js'), array(), 1.0, true );

}

function custom_post_type() {
    register_post_type( 'book', ['public' => true ] );
}

add_action( 'init', 'custom_post_type' );

function custom_activate() {
    custom_setup();
    custom_post_type();
    flush_rewrite_rules();
}

register_activate_hook( __FILE__, 'custom_activate' );

function custom_deactivate() {
    unregsiter_post_type( 'book' );
    flush_rewrite_rules();
}

register_deactivate_hook( __FILE__, 'custom_deactivate' );

register_uninstall_hook( __FILE__, 'custom__uninstall' );

// Additional Parameters #

// function custom_callback() {

// }

// add_action( 'init', 'custom_callback', 11, 0 );

// Number of Arguments #

// function custom_wporg_custom( $id, $post ) {

// }

// add_action( 'save_post', 'custom_wporg_custom', 10, 2 );

// function custom_filter_title( $title ) {
//     return "The $title was filtered!";
// }

// add_filter( 'the_title', 'custom_filter_table', 10, 1 );