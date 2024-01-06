<?php

$site_key = 'WNW';
// $page_loading_first_time = true;

// foreach (explode(" ", "plugins") as $req) {
// 	require_once 'inc/'.$req.'.php';
// }

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Register and Enqueue Styles.
 */
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

function acf_image($name, $className = '', $size, $id = -1) {
	$rtn = '';
	if ($id !== -1) {
		$image = get_field($name, $id);
	} else {
		$image = get_field($name);
	}
	if( !empty( $image ) ) {
		$url = (isset($size)) ? $image['sizes'][$size] : $image['url'];
		$rtn = '<img src="'.esc_url($url).'" alt="'.esc_attr($image['alt']).'" class="'.$className.'" />';
	}
	echo $rtn;
}


// add_action( 'init', 'site_first_load_cookie' );

// function site_first_load_cookie() {
// 	global $page_loading_first_time;

// 	if(isset($_COOKIE['isFirstLoad'])){
// 		$page_loading_first_time = false;
// 	}else{
// 		$page_loading_first_time = true;
// 		setcookie( 'isFirstLoad', true, time() + 600); //10 mins of expiry time
// 	}
// }

// register menu
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary' ) );
}