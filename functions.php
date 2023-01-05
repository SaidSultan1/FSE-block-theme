<?php

if ( ! function_exists( 'FSE_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function FSE_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'FSE_theme_support' );


/* --------------------------------------------------
Enqueue Styles
---------------------------------------------------*/
add_action('wp_enqueue_scripts', 'blocksStyle');

function blocksStyle() {
    // Register style sheet 
    wp_enqueue_style( 'themeStyle', get_stylesheet_uri());
    wp_enqueue_style( 'blockStyle', get_template_directory_uri() . "/assets/css/blocks.css");
}
