<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<title>Whiskey & Whiskers</title>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-');
	</script> -->

</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	?>
	<header class="main">
		<nav class="container">
			<a href="/#about">About us</a>
			<a href="/#service">Services</a>
			<a href="/#hours">Hours</a>
			<a href="/" class="logo">
				<img src="<?php path_to('images/logo-text.png') ?>" alt="whiskey & whiskers" />
				<img src="<?php path_to('images/logo-img.png') ?>" alt="whiskey & whiskers barber shop" />
				<button>=</button>
			</a>
			<a href="/#products">Products</a>
			<a href="/#gallery">Gallery</a>
			<a href="/#contact">Contact</a>
		</nav>
	</header>