<?php

$site_key = 'WNW';

add_filter('wpcf7_autop_or_not', '__return_false');

function wnw_register_styles() {
	global $site_key;
	wp_enqueue_style( $site_key.'-style', get_template_directory_uri() . '/assets/css/styles.css', array(), 1.2 );

	foreach (explode(" ", "wnw") as $script) {
		wp_enqueue_script( $site_key.'-'.$script, get_stylesheet_directory_uri() . '/assets/scripts/'.$script.'.js', array( 'jquery' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'wnw_register_styles' );

function path_to($file, $do_echo = true) {
	$stubs = array(
		'/^images/' => 'assets/images',
		'/^media/' => 'assets/media',
		'/^icons/' => 'assets/icons',
		'/^videos/' => 'assets/videos'
	);
 	$rtn = get_template_directory_uri().'/'.preg_replace(array_keys($stubs), array_values($stubs), $file);
	if ($do_echo) {
		echo $rtn;
	} else {
		return $rtn;
	}
}

// register menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary' ) );
}