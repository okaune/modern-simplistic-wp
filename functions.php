<?php
	// Add sidebar to theme
	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'name'=>'Sidebar name',
			'id'=>'sidebar_name',
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

	// Hide admin bar on "frontend"
	add_filter('show_admin_bar', '__return_false');

	// Enqueue jquery
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	}

	// Enqueue other scripts and styles
	function theme_name_scripts() {
		// Styles
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css' );
		wp_enqueue_style( 'foundation', get_template_directory_uri() . '/bower_components/foundation/css/foundation.css' );
		// wp_enqueue_style( 'justifiedGallery', get_template_directory_uri() . '/bower_components/Justified-Gallery/dist/css/justifiedGallery.min.css' );
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

		// Scripts
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', array(), '1.0.0', false );
		wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/bower_components/foundation/js/vendor/fastclick.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array('jquery'), '1.0.0', true );
		// wp_enqueue_script( 'justifiedGallery', get_template_directory_uri() . '/bower_components/Justified-Gallery/dist/js/jquery.justifiedGallery.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jquery', 'foundation'), '1.0.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>
