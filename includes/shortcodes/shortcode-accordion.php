<?php

// Accordion Group [nix-accordion] ... [/nix-accordion]
function nix_accordion( $atts, $content = null ) {
	$class = '';
	extract( shortcode_atts(
			array(
				'size'  => 'lg',
				'class' => 'extraclass',
			), $atts )
	);

	return '<div class="panel-group ' . $class . '" id="accordion">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'nix-accordion', 'nix_accordion' );

// Accordion Panel [nix-accordion-panel title="" number="" open=""] ... [/nix-accordion-panel]
function nix_accordion_panel( $atts, $content = null ) {
	$number = '';
	$title  = '';
	$open   = '';
	extract( shortcode_atts(
			array(
				'title'  => 'Title',
				'number' => '1',
				'open'   => '',
			), $atts )
	);

	return '<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $number . '">' . $title . '</a></h4>
		</div>
		<div id="collapse' . $number . '" class="panel-collapse collapse ' . $open . '">
			<div class="panel-body">' . do_shortcode( $content ) . '</div>
		</div>
	</div>';
}

add_shortcode( 'nix-accordion-panel', 'nix_accordion_panel' );