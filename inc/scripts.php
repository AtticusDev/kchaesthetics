<?php
/**
 * Enqueue scripts and styles.
 */
function kchaesthetics_scripts() {
	wp_enqueue_style( 'kchaesthetics-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_script( 'kchaesthetics-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Cormorant:300,400', false );

	wp_enqueue_style( 'fast-fonts', 'href="//fast.fonts.net/cssapi/30ef04f5-766c-4e57-9004-5411af80b5e6.css', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kchaesthetics_scripts' );