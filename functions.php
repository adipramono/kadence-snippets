<?php
/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );


/* Load Google font: Outfit */
function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );