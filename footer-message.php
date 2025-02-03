<?php
/*
Plugin Name: Footer Message Plugin
Plugin URI: https://localhost/ecommerce
Description: A simple plugin that adds a custom message to the footer.
Version: 1.0
Author: Andrea Chirillano
Author URI: https://localhost/ecommerce
License: GPL2
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Check if WordPress is active
function fmp_check_dependencies() {
    if ( ! function_exists( 'wp_footer' ) ) {
        deactivate_plugins( plugin_basename(__FILE__) );
        wp_die( 'This plugin requires WordPress to function properly.' );
    }
}
register_activation_hook( __FILE__, 'fmp_check_dependencies' );

// Add the message to the footer
function fmp_add_footer_message() {
    $message = get_option( 'fmp_footer_message', 'This is your custom footer message.' );
    echo '<p style="text-align: center; color: #888;">' . esc_html( $message ) . '</p>';
}
add_action( 'wp_footer', 'fmp_add_footer_message' );

// Add a settings page in the WordPress menu
function fmp_add_menu() {
    add_options_page(
        'Footer Message Settings',
        'Footer Message',
        'manage_options',
        'footer-message',
        'fmp_settings_page'
    );
}
add_action( 'admin_menu', 'fmp_add_menu' );

// Display the settings page
function fmp_settings_page() {
    ?>
    <div class="wrap">
        <h1>Footer Message Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'fmp_settings_group' );
            do_settings_sections( 'footer-message' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function fmp_register_settings() {
    register_setting( 'fmp_settings_group', 'fmp_footer_message', 'sanitize_text_field' );

    add_settings_section(
        'fmp_settings_section',
        'Customize the footer message',
        null,
        'footer-message'
    );

    add_settings_field(
        'fmp_footer_message',
        'Footer message:',
        'fmp_message_callback',
        'footer-message',
        'fmp_settings_section'
    );
}
add_action( 'admin_init', 'fmp_register_settings' );

// Callback function for the settings field
function fmp_message_callback() {
    $message = get_option( 'fmp_footer_message', 'This is your custom footer message.' );
    echo '<input type="text" name="fmp_footer_message" value="' . esc_attr( $message ) . '" class="regular-text">';
}

?>