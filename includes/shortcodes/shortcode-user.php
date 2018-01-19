<?php

// User Only Content [nix-user-only][/nix-user-only]
function nix_user_only( $atts, $content = null ) {
	$login_url = wp_login_url( get_permalink() );
	$reg_url   = wp_registration_url();
	$id        = '';
	extract( shortcode_atts(
			array(
				'id' => '',
			), $atts )
	);
	if ( is_user_logged_in() && ! is_null( $content ) && ! is_feed() ) {
		return $content;
	} else {
		return '<p id="' . $id . '" style="color:red;"><strong>You must <a href="' . $login_url . '" title="Login">Login</a> or <a href="' . $reg_url . '" title="Register">Register</a> to view this content.</strong></p>';
	}
}

add_shortcode( 'nix-user-only', 'nix_user_only' );