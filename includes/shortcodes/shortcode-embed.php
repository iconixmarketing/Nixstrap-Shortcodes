<?php
/**
 * Created by PhpStorm.
 * User: derrickdedmon
 * Date: 1/12/18
 * Time: 11:21 AM
 */

// Anchor [nix-embed id="nix_embed" class="mb-5" video="https://player.vimeo.com/video/226481580"]
function nix_embed( $atts ) {
	$id = '';
	$video = '';
	$class = '';
	extract( shortcode_atts(
			array(
				'id' => 'nix_embed',
				'video' => 'https://player.vimeo.com/video/226481580',
				'class' => 'extraclass',
			), $atts )
	);

	return '<div id="' . $id . '" class="embed-container ' . $class . '"><iframe src="' . $video . '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
';
}

add_shortcode( 'nix-embed', 'nix_embed' );