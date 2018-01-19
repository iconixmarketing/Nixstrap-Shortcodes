<?php

// Alert [nix-alert type="info"]Content[/nix-alert]
function nix_alert( $atts, $content = null ) {
	$type = '';
	extract( shortcode_atts(
			array(
				'type' => 'warning',
			), $atts )
	);

	return '<div class="alert alert-' . $type . '"  role="alert">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'nix-alert', 'nix_alert' );

// Alert Dismissible [nix-alert-dismissible type="info"]Content[/nix-alert-dismissible]

function nix_alert_dismissible( $atts, $content = null ) {
	$type = '';
	extract( shortcode_atts(
			array(
				'type' => 'warning',
			), $atts )
	);

	return '<div class="alert alert-' . $type . ' alert-dismissible fade show"  role="alert">' . do_shortcode( $content ) . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}

add_shortcode( 'nix-alert-dismissible', 'nix_alert_dismissible' );