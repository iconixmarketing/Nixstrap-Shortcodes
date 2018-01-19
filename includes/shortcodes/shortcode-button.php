<?php

// Buttons [nix-btn title="title" target="_blank" type="warning" size="lg" block="btn-block" class="extraclass" link="http://www.google.com"] button text [/nix-btn]
function nix_btn( $atts, $content = null ) {
	$type   = '';
	$size   = '';
	$block  = '';
	$link   = '';
	$target = '';
	$title  = '';
	$class  = '';
	extract( shortcode_atts(
			array(
				'type'   => 'primary',
				'size'   => 'md',
				'block'  => '',
				'link'   => '#',
				'target' => '_parent',
				'title'  => 'title',
				'class'  => 'extraclass',
			), $atts )
	);

	return '<a class="btn btn-' . $type . ' btn-' . $size . ' ' . $block . ' ' . $class . '" href="' . $link . '" role="button" target="' . $target . '" title="' . $title . '">' . do_shortcode( $content ) . '</a>';
}

add_shortcode( 'nix-btn', 'nix_btn' );