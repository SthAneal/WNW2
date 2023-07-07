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

	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

</head>

<body <?php body_class(); ?> class="container">
	<?php
	wp_body_open();
	?>
	<header class="main">
		<nav class="container">
			<a href="/#about">about us</a>
			<a href="/#service">services</a>
			<a href="/#hours">hours</a>
			<a href="/" class="logo">
				<img src="<?php path_to('images/logo-text.png') ?>" alt="whiskey & whiskers" />
				<!-- <img src="<?php path_to('images/logo-img.png') ?>" alt="whiskey & whiskers barber shop" /> -->
			</a>
			<a href="/#products">products</a>
			<a href="/#gallery">gallery</a>
			<a href="/#contact">contact</a>
		</nav>
	</header>