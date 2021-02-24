<?php

if ( !defined('WP_UNINSTALL_PLUGIN') ) {
    die;
}

$custom_option_name = 'custom_option';

delete_option( $option_name );

global $wpdb;
$wpdb->query( 'DROP TABLE IF EXISTS {$wpdb->prefix}custom' );