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
}
add_action('customize_register', 'valiant_customize_register');
