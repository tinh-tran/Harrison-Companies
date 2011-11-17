<?php  
add_theme_support( 'post-thumbnails' );
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}
