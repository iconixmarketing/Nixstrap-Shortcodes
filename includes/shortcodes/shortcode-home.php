<?php

function nix_test_home_layout( $atts ) {
	$id = '';
	extract( shortcode_atts(
			array(
				'id' => 'extra',
			), $atts )
	);

	return '';
}

add_shortcode( 'nix_test_home_layout', 'nix_test_home_layout' );