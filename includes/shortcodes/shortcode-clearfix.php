<?php

// Clearfix [nix-clearfix]
function nix_clearfix( $atts ) {
	$id = '';
	extract( shortcode_atts(
			array(
				'id' => 'clearfix',
			), $atts )
	);

	return '<div id="' . $id . '" class="clearfix"></div>';
}

add_shortcode( 'nix-clearfix', 'nix_clearfix' );