<?php
function wpflex_assets_loader() {
    wp_register_style( 'style', get_stylesheet_uri(), '', '2.0.7', 'screen' );
    wp_enqueue_style( 'style');
}

add_action( 'wp_enqueue_scripts', 'wpflex_assets_loader' );
?>