<?php
/**
 * Created by PhpStorm.
 * User: derrickdedmon
 * Date: 1/11/18
 * Time: 3:55 PM
 */

// Alert [nix-videobg video="https://vimeo.com/250173038?background=1" img="https://www.wc.org/wp-content/uploads/2017/12/Screen-Shot-2017-12-13-at-10.00.34-AM.png" height="650px"]Content[/nix-videobg]
function nix_videobg( $atts, $content = null ) {
	$video  = '';
	$img    = '';
	$height = '';
	$class  = '';
	extract( shortcode_atts(
			array(
				'video'  => 'https://vimeo.com/250173038?background=1',
				'img'    => 'https://www.wc.org/wp-content/uploads/2017/12/Screen-Shot-2017-12-13-at-10.00.34-AM.png',
				'height' => '650px',
				'class'  => 'nix-videobg',
			), $atts )
	);

	return '
	<div class="jarallax ' . $class . '" data-jarallax=\'{"speed": 0.2}\' data-jarallax-video="' . $video . '" style="height: ' . $height . ';">
	<img class="jarallax-img" src="' . $img . '" alt="jarallax-img">
	' . do_shortcode( $content ) . '
	</div>
	';
}

add_shortcode( 'nix-videobg', 'nix_videobg' );