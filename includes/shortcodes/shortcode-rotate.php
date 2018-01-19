<?php

// Rotate Animation [nix-rotate class="extraclass" bgcolor="#ffffff" speed="1" transition="2" width="300px" height="300px" img=""][/nix-rotate]
function nix_rotate( $atts, $content = null ) {
	$class      = '';
	$speed      = '';
	$width      = '';
	$height     = '';
	$img        = '';
	$transition = '';
	$bgcolor    = '';
	extract( shortcode_atts(
			array(
				'class'      => 'extraclass',
				'speed'      => '0.1',
				'width'      => '300px',
				'height'     => '300px',
				'img'        => '#',
				'transition' => '2',
				'bgcolor'    => '#ffffff',
			), $atts )
	);

	return '<div class="rotate ' . $class . '" data-type="nix-rotate" data-speed="' . $speed . '" style="
	width: ' . $width . ';
	height: ' . $height . ';
	background-image: url(' . $img . ');
	background-color: ' . $bgcolor . ';
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	transition: all ' . $transition . 's;
	transform: rotate(0deg);
	">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'nix-rotate', 'nix_rotate' );