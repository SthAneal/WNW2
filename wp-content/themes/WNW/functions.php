<?php

$site_key = 'WNW';

foreach (explode(" ", "plugins") as $req) {
	require_once 'inc/'.$req.'.php';
}

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Register and Enqueue Styles.
 */
function pm_register_styles() {
	global $site_key;
	wp_enqueue_style( $site_key.'-style', get_template_directory_uri() . '/assets/css/styles.css', array(), 1.0 );

	foreach (explode(" ", "ux") as $script) {
		wp_enqueue_script( $site_key.'-'.$script, get_stylesheet_directory_uri() . '/assets/scripts/'.$script.'.js', array( 'jquery' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'pm_register_styles' );

add_action( 'after_setup_theme', function() {
	add_theme_support( 'woocommerce' );
  // add_image_size('product-thumbnail', 260, 260, true);
} );

function path_to($file, $do_echo = true) {
	$stubs = array(
		'/^images/' => 'assets/images',
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
