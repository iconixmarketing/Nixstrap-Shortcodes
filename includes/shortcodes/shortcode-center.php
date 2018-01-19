<?php

// absolute center shortcodes [nix-center height="auto"][/nix-center]
function nix_center($atts, $content = null)
{
    $height = '';
    extract(shortcode_atts(
            array(
                'height' => 'auto',
            ), $atts)
    );

    return '
    <div class="nix-parent" style="height:' . $height . ';">
        <div class="nix-parent-inner">
            ' . do_shortcode($content) . '
        </div>
    </div>
    ';
}

add_shortcode('nix-center', 'nix_center');

// absolute center shortcodes [nix-layout-header-content id=""]
function nix_center_2( $atts, $content = null ) {
	$id = '';
	extract( shortcode_atts(
			array(
				'id' => 'nix_center_2',
			), $atts )
	);

	return '
	<div id="' . $id . '" class="d-flex align-items-center h-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
					' . do_shortcode( $content ) . '
					</div>
				</div>
			</div>
		</div>
	</div>
	';
}

add_shortcode( 'nix-center-2', 'nix_center_2' );