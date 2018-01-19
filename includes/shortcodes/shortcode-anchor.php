<?php

// Anchor [nix-anchor id=""]
function nix_anchor( $atts ) {
	$id = '';
	extract( shortcode_atts(
			array(
				'id' => 'nix_anchor',
			), $atts )
	);

	return '<div class="nix-anchor" id="' . $id . '"></div>';
}

add_shortcode( 'nix-anchor', 'nix_anchor' );