<?php

// Navbar
function register_navbar_options() {
	register_nav_menus (
		array(
			'navbar-menu' => __('Navbar Menu')
		)
	);
}
add_action('init', 'register_navbar_options');

// Customzier
require get_template_directory() . '/inc/customizer.php';

// CSS
function load_stylesheets() {
	wp_register_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900', array(), false, 'all');
	wp_enqueue_style('roboto');

	wp_register_style('monsterrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap', array(), false, 'all');
	wp_enqueue_style('monsterrat');

	wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), false, 'all');
	wp_enqueue_style('fontawesome');

	wp_register_style('animate', get_template_directory_uri() . '/assets/animate.css', array(), false, 'all');
	wp_enqueue_style('animate');

	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Javascript
function load_javascript() {
	wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', '', 1, false);
	wp_enqueue_script('jquery');

	wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', '', 1, false);
	wp_enqueue_script('mainjs');
}
add_action('wp_enqueue_scripts', 'load_javascript');
