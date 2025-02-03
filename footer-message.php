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

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Evitar acceso directo.
}

// Función para agregar el mensaje al pie de página
function add_footer_message() {
    echo '<p style="text-align: center; color: #888;">This is your personalized footer message.</p>';
}

// Enganchar la función en el 'wp_footer'
add_action( 'wp_footer', 'add_footer_message' );
?>
