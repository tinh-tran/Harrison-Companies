<?php  
add_theme_support( 'post-thumbnails' );
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'login-menu' => __( 'Login Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}