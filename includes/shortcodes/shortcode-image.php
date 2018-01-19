<?php

// Images [nix-image src="#" alt="" type="thumbnail" align="alignleft"]
function nix_image( $atts ) {
	$type  = '';
	$src   = '';
	$alt   = '';
	$align = '';
	extract( shortcode_atts(
			array(
				'type'  => 'fluid',
				'src'   => '#',
				'alt'   => '',
				'align' => 'alignleft',
			), $atts )
	);

	return '<img src="' . $src . '" alt="' . $alt . '" class="img-' . $type . ' ' . $align . '">';
}

add_shortcode( 'nix-image', 'nix_image' );