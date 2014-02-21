<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-face.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Christopher Stein Logo">
			</div>
			<div class="masthead">
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description')?></h2>
			</div>

			<!-- 
			<nav class="menu">
				<ul>
					<li class="current-menu-item"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</nav> --> <!-- end menu -->

			<?php 
		        $settings = array(
		            'theme_location'  => 'main'
		            );  

		        wp_nav_menu( $settings );
		    ?> 
		</header>
