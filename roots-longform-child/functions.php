<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Flamenco&display=swap', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Flamenco&family=Josefin+Sans:ital,wght@0,100;0,400;1,300;1,400&display=swap', false );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
?>

