<?php

// [nix-color-swatches]
function nix_color_swatches( $atts ) {
	$id = '';
	extract( shortcode_atts(
			array(
				'id' => 'nix_color_swatches',
			), $atts )
	);

	return '
<div id="' . $id . '" class="row">
	<div class="col-md-1 bg-primary" style="min-height:100px;">primary</div>
	<div class="col-md-1 bg-secondary" style="min-height:100px;">primary</div>
	<div class="col-md-1 bg-success" style="min-height:100px;">success</div>
	<div class="col-md-1 bg-danger" style="min-height:100px;">danger</div>
	<div class="col-md-1 bg-warning" style="min-height:100px;">warning</div>
	<div class="col-md-1 bg-info" style="min-height:100px;">info</div>
	<div class="col-md-1 bg-light" style="min-height:100px;"></div>
	<div class="col-md-1 bg-dark" style="min-height:100px;"></div>
</div>
';
}

add_shortcode( 'nix-color-swatches', 'nix_color_swatches' );
