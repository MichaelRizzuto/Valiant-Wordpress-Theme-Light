<?php

function valiant_customize_register($wp_customize) {
	// Header Options
	$wp_customize->add_section('valiant_header_options', array(
		'title' => __('Header Options'),
		'priority' => 175,
	));

		// Header Logo
		$wp_customize->add_setting('header_logo', array(
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-logo', array(
			'label' => __('Header Logo'),
			'section' => 'valiant_header_options',
			'settings' => 'header_logo',
			'description' => '512x512 recommended'
		)));

		// Header Accent
		$wp_customize->add_setting('header_accent', array(
			'default' => '#cccccc',
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header-accent', array(
			'label' => __('Header Accent'),
			'section' => 'valiant_header_options',
			'settings' => 'header_accent',
		)));

	// Footer Options
	$wp_customize->add_section('valiant_footer_options', array(
		'title' => __('Footer Options'),
		'priority' => 176,
	));

		// Footer Logo
		$wp_customize->add_setting('footer_logo', array(
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer-logo', array(
			'label' => __('Footer Logo'),
			'section' => 'valiant_footer_options',
			'settings' => 'footer_logo',
			'description' => '512 height recommended'
		)));

		// Footer Copyright
		$wp_customize->add_setting('footer_copyright', array(
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-copyright', array(
			'label' => __('Footer Copright'),
			'section' => 'valiant_footer_options',
			'settings' => 'footer_copyright',
			'description' => 'Supports a tags',
		)));

	// Home Options
	$wp_customize->add_section('valiant_home_options', array(
		'title' => __('Home Options'),
		'priority' => 177,
	));

		// Home Slideshow
		$wp_customize->add_setting('home_slideshow', array(
			'transport' => 'refresh',
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home-slideshow', array(
			'label' => __('Home Slideshow'),
			'section' => 'valiant_home_options',
			'settings' => 'home_slideshow',
			'description' => 'Images displayed on slideshow',
		)));
}
add_action('customize_register', 'valiant_customize_register');
