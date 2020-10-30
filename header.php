<?php
	// Head
	$title = wp_title('', false);
	if ($title == '') {
		$title = 'Home';
	} else {
		$title = $title;
	}
	// Header Logo
	if (get_theme_mod('header_logo')) {
		$logo = get_theme_mod('header_logo');
	} else {
		$logo = get_template_directory_uri() . '/assets/images/default_logo.png';
	}
	// Header Accent
	if (get_theme_mod('header_accent')) {
		$accent = get_theme_mod('header_accent');
	} else {
		$accent = "#cccccc";
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php echo $title; ?> - <?php echo get_bloginfo($name) ?></title> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge;" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="header" style="border-bottom: 0.5rem solid <?php echo $accent ?>">
			<img src="<?php echo $logo ?>"/>
			<h1><?php echo get_bloginfo($name) ?></h1>
			<div id="navbar_container" class="navbar-container">
				<?php wp_nav_menu(array('navbar' => 'navbar-menu')); ?>
			</div>
			<p><i id="dropdown_button" class="fas fa-bars"></i></p>
			<button onclick="toggleMobileNavigation()" class="navbar-dropdown"></button>
		</div>
