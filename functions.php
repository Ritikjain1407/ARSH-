<?php
/**
 * Arsh Clinic Theme functions and definitions
 */

if ( ! function_exists( 'arsh_clinic_setup' ) ) :
	function arsh_clinic_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'arsh-clinic' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'arsh_clinic_setup' );

function arsh_clinic_scripts() {
	// Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
	
	// Custom CSS
	wp_enqueue_style( 'arsh-clinic-style', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0' );
	
	// Main Stylesheet (required by WP)
	wp_enqueue_style( 'arsh-clinic-main', get_stylesheet_uri(), array(), '1.0.0' );

	// Custom JS
	wp_enqueue_script( 'arsh-clinic-js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'arsh_clinic_scripts' );
