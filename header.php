<!doctype html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>

</head>
<body>

<div class="wrapper">
	<div class="header">
		<h1>
        	<a href="<?php bloginfo('url'); ?>">
				<?php bloginfo('name'); ?>
        	</a>
        </h1>
		<?php bloginfo('description'); ?>
        <ul>
        	<?php wp_nav_menu(array('theme_location'  => 'main_menu')); ?>
        </ul>
	</div>