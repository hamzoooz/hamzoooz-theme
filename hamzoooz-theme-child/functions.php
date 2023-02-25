<?php 

add_action( 'wp_enqueue_scripts', 'hamzoooz_child_enqueue_style' );
function hamzoooz_child_enqueue_style() {
	$parenthandle = 'hamzoooz-stylesheet'; // This is 'hamzoooz-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}