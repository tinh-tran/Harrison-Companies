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

add_filter( 'the_password_form', 'custom_password_form' );
function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
	' . __( "Realtors looking for HOA documentation, please log in below. <br />Call 435-649-8800 for password.<br /><br />" ) . '
	<label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
	</form>
	';
	return $o;
}