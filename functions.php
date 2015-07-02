<?php
	// Add sidebar to theme
	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'name'=>'Sidebar name',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		)
	);
	
	// Add menues to theme
	register_nav_menus( array(
		'main_menu' => 'Main menu'
	));
?>