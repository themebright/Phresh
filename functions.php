<?php

function phresh_setup() {

	$GLOBALS['content_width'] = 780;

	load_theme_textdomain( 'phresh', get_template_directory() . '/languages/' );

	register_nav_menu( 'main', esc_html__( 'Main Menu', 'phresh' ) );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'custom-header', array(
		'width' => 1600,
		'height' => 400,
		'header-text' => false,
	) );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	) );

	add_theme_support( 'jetpack-social-menu' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'phresh_setup' );

function phresh_assets() {

	wp_enqueue_style( 'phresh-fonts', 'https://fonts.googleapis.com/css?family=Bitter:400,700,400italic|Montserrat:400,700|Karla:400,700' );
	wp_enqueue_style( 'normalize', esc_url( get_template_directory_uri() . '/assets/vendor/normalize.css' ) );
	wp_enqueue_style( 'phresh', esc_url( get_stylesheet_uri() ), array( 'phresh-fonts', 'normalize', 'dashicons' ) );

	wp_enqueue_script( 'phresh', esc_url( get_template_directory_uri() . '/assets/js/script.js' ), array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'phresh_assets' );

include get_template_directory() . '/includes/template-tags.php';
