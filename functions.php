<?php
/**
 * Functions
 */

/**
 * Theme Setup
 *
 * Contains the items that are tied to the after_setup_theme hook.
 */
function phresh_setup() {

	/**
	 * Set content width (in pixels)
	 */
	$GLOBALS['content_width'] = apply_filters( 'phresh_content_width', 680 );

	/**
	 * Load translations
	 */
	load_theme_textdomain( 'phresh', get_template_directory() . '/languages/' );

	/**
	 * Register nav menus
	 */
	register_nav_menu( 'main', esc_html__( 'Main Menu', 'phresh' ) );

	/**
	 * Add theme support
	 */

	// Automatic feed links
	add_theme_support( 'automatic-feed-links' );

	// Custom header image
	add_theme_support( 'custom-header', array(
		'width' => 1600,
		'height' => 400,
		'header-text' => false,
	) );

	// Custom logo
	add_theme_support( 'custom-logo' );

	// HTML5 markup
	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	) );

	// Post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Automatic title tag
	add_theme_support( 'title-tag' );

	// Add editor style
	add_editor_style( 'editor.css' );

}
add_action( 'after_setup_theme', 'phresh_setup' );

/**
 * Assets
 *
 * Register and enqueue style and script assets.
 */
function phresh_assets() {

	// Main theme style
	wp_enqueue_style( 'phresh', esc_url( get_stylesheet_uri() ), array( 'dashicons' ) );

	// Main theme script
	wp_enqueue_script( 'phresh', esc_url( get_template_directory_uri() . '/assets/js/script.js' ), array( 'jquery' ), '', true );

	// Only enqueue comment reply script where it will actually be needed
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// i18n labels
	wp_localize_script( 'phresh', 'phresh_i18n', array(
		'expand' => esc_html__( 'Expand', 'phresh' ),
	) );

}
add_action( 'wp_enqueue_scripts', 'phresh_assets' );

/**
 * Includes
 */
include get_template_directory() . '/includes/template-tags.php';
