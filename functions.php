<?php

// Add some CSS

function whiteFlag_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'whiteFlag_resources');

// Post thumbnails, logo support

add_theme_support( 'post-thumbnails' );
add_theme_support('custom-logo');

// Menu registration - header Main Menu

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main Menu' ));
}

add_action( 'init', 'register_my_menu' );





?>

