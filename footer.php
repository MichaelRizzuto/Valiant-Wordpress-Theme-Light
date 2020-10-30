<?php
	// Copyright Text
	if (get_theme_mod('footer_copyright')) {
		$copyright = get_theme_mod('footer_copyright');
	} else {
		$title = get_bloginfo($name);
		$copyright = '&copy; ' . $title . ' <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.';
	}
?>
		<?php wp_footer(); ?>
	</body>
	<footer>
		<h1><?php echo $copyright; ?></h1>
	</footer>
</html>
