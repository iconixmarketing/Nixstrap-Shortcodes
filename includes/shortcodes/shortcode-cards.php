<?php
/**
 * Created by PhpStorm.
 * User: derrickdedmon
 * Date: 1/11/18
 * Time: 2:05 PM
 */


// Card with image [nix-card-image src="#" title="Title" text="Some quick example text to build on the card title and make up the bulk of the card's content." btn_text="Go somewhere"]
function nix_card_image( $atts ) {
	$src      = '';
	$title    = '';
	$text     = '';
	$btn_text = '';

	extract( shortcode_atts(
			array(
				'src'      => '#',
				'title'    => 'Title',
				'text'     => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
				'btn_text' => 'Go somewhere',

			), $atts )
	);

	return '

<div class="card">
  <img class="card-img-top" src="' . $src . '" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">' . $title . '</h5>
    <p class="card-text">' . $text . '</p>
    <a href="#" class="btn btn-primary">' . $btn_text . '</a>
  </div>
</div>	
	
	';
}

add_shortcode( 'nix-card-image', 'nix_card_image' );