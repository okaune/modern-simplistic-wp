<?php
	// Add sidebar to theme
	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'name'=>'Hero text',
			'id'=>'hero_text',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<div style="display: none;">',
			'after_title' => '</div>',
		)
	);

	// Add menues to theme
	register_nav_menus( array(
		'main_menu' => 'Main menu'
	));

	// Hide admin bar on "frontend"
	add_filter('show_admin_bar', '__return_false');

	// Add image support for featured images
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails'  );
	}

	// Register custom image sizes
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'post_thumbnail', 303, 189, true );
		add_image_size( 'post_image', 1920, 500, true );
	}

	// Enqueue other scripts and styles
	function theme_name_scripts() {
		// Styles
		//wp_enqueue_style( 'normalize', get_template_directory_uri() . '/bower_components/normalize-css/normalize.css' );
		wp_enqueue_style( 'foundation', get_template_directory_uri() . '/bower_components/foundation/css/foundation.css' );
		// wp_enqueue_style( 'justifiedGallery', get_template_directory_uri() . '/bower_components/Justified-Gallery/dist/css/justifiedGallery.min.css' );
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

		// Scripts
		wp_enqueue_script('jquery'); // Use the included version of jQuery (in safe mode)
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', array(), '1.0.0', false );
		wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/bower_components/foundation/js/vendor/fastclick.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array('jquery'), '1.0.0', true );
		// wp_enqueue_script( 'justifiedGallery', get_template_directory_uri() . '/bower_components/Justified-Gallery/dist/js/jquery.justifiedGallery.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jquery', 'foundation'), '1.0.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	// Add post type: Resume
	function my_post_type_resume() {
		register_post_type(
			'resume',
			array(
			'label' => __('Resume'),
			'singular_label' => __('Resume'),
			'public' => true,
			'query_var' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'show_in_nav_menus' => true,
			'hierarchical' => false,
			'capability_type' => 'post',
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'resume',
				'with_front' => false,
			),
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
					'excerpt',
					'custom-fields'
					)
				)
			);
			register_taxonomy('resumecategory', 'resume', array(
				'hierarchical' => true,
				'label' => 'Resume kategori',
				'singular_name' => 'Resume kategori',
				"rewrite" => true,
				"query_var" => true
				)
			);
	}
	add_action('init', 'my_post_type_resume');

?>
