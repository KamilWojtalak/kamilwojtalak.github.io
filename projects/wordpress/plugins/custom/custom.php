<?php
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
function pcustom_setup() {
    // styles

    wp_enqueue_style( 'custom-style', plugins_url('style.css', __DIR__ . 'style.css'), array(), 1.0, 'all' );

    // scripts
    wp_enqueue_style( 'custom-script', plugins_url('script.js', __DIR__ . 'script.js'), array(), 1.0, true );

}

function pcustom_post_type() {
    register_post_type( 'book', ['public' => true ] );
}

add_action( 'init', 'pcustom_post_type' );

// function pcustom_add_settings_section() {
//     $c = "<div>";
//     $c .= "Siehehehma to jest callback z add_settings_section";
//     $c .= "</div>";

//     return $c;
// }

// function pcustom_add_settings_field() {
//     $c = "<div>";
//     $c .= "Siehehehma to jest callback z add_settings_field";
//     $c .= "</div>";

//     return $c;
// }
// function pcustom_settings() {
//     register_setting( 'privacy', 'pcustom_siema', array(
//         'type' => 'string',
//         'description' => 'Siema description...',
//         'sanitize_callback' => '',
//         'show_int_rest' => true,
//         'default' => 'privacy',
//     ) );

//     add_settings_section( 'pcustom_section', 'Custom Settings Section Title', 'pcustom_add_settings_section', 'privacy' );

//     add_settings_field( 'pcustom_field', 'Custom Settings Field Title', 'pcustom_add_settings_field', 'privacy', 'pcustom_section', array() );

//     do_settings_sections( 'privacy' );
//     do_settings_fields( 'privacy', 'pcustom_section' );

// }

// add_action( 'admin_init', 'pcustom_settings' )

function pcustom_activate() {
    pcustom_setup();
    pcustom_post_type();
    flush_rewrite_rules();



}

register_activation_hook( __FILE__, 'pcustom_activate' );

function pcustom_deactivation() {
    unregister_post_type( 'book' );
    flush_rewrite_rules();

    unregister_setting( 'privacy', 'pcustom_siema' );

    remove_menu_page( 'custom' );
}

register_deactivation_hook( __FILE__, 'pcustom_deactivation' );

register_uninstall_hook( __FILE__, 'pcustom__uninstall' );

// Additional Parameters #

// function pcustom_callback() {

// }

// add_action( 'init', 'pcustom_callback', 11, 0 );

// Number of Arguments #

// function pcustom_pcustom_custom( $id, $post ) {

// }

// add_action( 'save_post', 'pcustom_pcustom_custom', 10, 2 );

// function pcustom_filter_title( $title ) {
//     return "The $title was filtered!";
// }

// add_filter( 'the_title', 'pcustom_filter_table', 10, 1 );

function pcustom_siema_cb( $atts, $content ) {
    if ( shortcode_exists( 'pcustom_siehehehma' ) ) {
        $c = "<div>Siema: $content" . do_shortcode( 'pcustom_siehehehma' ) ."</div>";
    } else {
        $c = "<div>Siema: $content</div>";
    }
 
    return $c;
}

add_shortcode( 'pcustom_siema', 'pcustom_siema_cb' );

if ( shortcode_exists( 'pcustom_siema' ) ) {
    remove_shortcode( 'pcustom_siema' );
}



function pcustom_settings_init() {
    // register a new setting for "writing" page
    register_setting('writing', 'pcustom_setting_name');
 
    // register a new section in the "writing" page
    add_settings_section(
        'pcustom_settings_section',
        'pcustom Settings Section', 'pcustom_settings_section_callback',
        'writing'
    );
 
    // register a new field in the "pcustom_settings_section" section, inside the "writing" page
    add_settings_field(
        'pcustom_settings_field',
        'pcustom Setting', 'pcustom_settings_field_callback',
        'writing',
        'pcustom_settings_section'
    );
}
 
/**
 * register pcustom_settings_init to the admin_init action hook
 */
add_action('admin_init', 'pcustom_settings_init');
 
/**
 * callback functions
 */
 
// section content cb
function pcustom_settings_section_callback() {
    echo '<p>pcustom Section Introduction.</p>';
}
 
// field content cb
function pcustom_settings_field_callback() {
    // get the value of the setting we've registered with register_setting()
    $setting = get_option('pcustom_setting_name');
    // output the field
    ?>
    <input type="text" name="pcustom_setting_name" value="<?php echo isset( $setting ) ? esc_attr( $setting ) : ''; ?>">
    <?php
}

function custom_options_page_display() {
    ?>
    <div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() );?></h1>
    <form action="options.php" method="post">
    <div class="">Siehehema Description</div>
    <?php
        settings_fields( 'custom_options' );
        do_settings_sections( 'custom' );
        submit_button( __( 'Save button', 'custom' ) );
    ?>
    </form>
    </div>
    <?php
}

function custom_options_page_submit() {

}

add_action( 'admin_menu', 'custom_options_page' );
function custom_options_page() {
    add_menu_page(
        'Custom Page',
        'Custom Page',
        'manage_options',
        'custom',
        'custom_options_page_display',
        '',
        '20',

    );
}

function custom_submenu_display() {
    if (!current_user_can( 'manage_options' ) ) {
        return;
    }

    ?>

    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="action.php" method="post">
            <?php
                settings_fields( 'custom_options' );
                do_settings_sections( 'custom_options' );
                submit_button( __( 'Submit button', 'custom' ) );
            ?>
        </form>
    </div>
    <?php
}

add_action( 'admin_menu', 'custom_submenu' );

function custom_submenu() {
    add_submenu_page(
        'custom',
        'Custom Subpage',
        'Custom Subpage',
        'manage_options',
        'custom_sub',
        'custom_submenu_display',
    );
}

add_action( 'admin_init', 'custom_add_setting' );

function custom_add_setting() {
    register_setting(
        'general',
        'custom_setting',
        array(
            'type' => 'string',
            'Description' => 'Description',
            'default' => 'default_custom_setting',
        )
    );

    add_settings_section(
        'custom_settings_section',
        'Custom Settings Section',
        'custom_settings_section_display',
        'general',
    );

    add_settings_field(
        'custom_settings_field',
        'Custom Settings Field',
        'custom_settings_field_display',
        'general',
        'custom_settings_section',
        array(

        )
    );
}

function custom_settings_section_display() {
    echo "<div><b>Custom setting section</b></div>";
}

function custom_settings_field_display() {
    ?>
        <div class="">
            <h2>Settings field</h2>
                <?php
                    $custom_setting = get_option( 'custom_setting' );
                ?>

                <input type="text" name="custom_setting" value="<?php echo isset( $custom_setting) ? esc_attr( $custom_setting ) : ''; ?>">
        </div>
    <?php
}
