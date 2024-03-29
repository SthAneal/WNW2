<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<title>Whiskey & Whiskers Barbershop: Yours Complete Barber Solution</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php path_to('assets/images/favicon/apple-touch-icon.png');?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php path_to('assets/images/favicon/favicon-32x32.png');?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php path_to('assets/images/favicon/favicon-16x16.png');?>">
	<link rel="manifest" href="<?php path_to('assets/images/favicon/site.webmanifest');?>">
	<link rel="mask-icon" href="<?php path_to('assets/images/favicon/safari-pinned-tab.svg" color="#000000');?>">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	global $page_loading_first_time;
	wp_body_open();
	?>
	<header class="main">
		<div class="container">
			<div id="hamburger">
				<img src="<?php path_to('/assets/images/icons/menu.png') ?>" alt="menu icon" class="open" />
				<img src="<?php path_to('/assets/images/icons/close.png') ?>" alt="close icon" class="close" />
			</div>

			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'menu-wrapper',
					// 'container_id' => 'navbarNavDropdown',
					'menu_class' => 'menu',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'depth' => 0
				)
			); ?>
			<div class="booknow">
				<a href="/booking" class="btn">
					<img src="<?php path_to('/assets/images/icons/booking.png') ?>" alt="booking icon" />
					book now
				</a>
			</div>
		</div>
	</header>