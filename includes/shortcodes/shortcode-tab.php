<?php

// Tab Wrapper [nix-tabs] ... [/nix-tabs]
function nix_tab( $atts, $content = null ) {
	$class = '';
	extract( shortcode_atts(
			array(
				'class' => 'extraclass',
			), $atts )
	);

	return '<ul class="nav nav-tabs ' . $class . '" role="tablist">' . do_shortcode( $content ) . '</ul>';
}

add_shortcode( 'nix-tabs', 'nix_tab' );

// Tab Titles [nix-tab-title] ... [/nix-tab-title]
function nix_tab_title( $atts, $content = null ) {
	$class  = '';
	$number = '';
	extract( shortcode_atts(
			array(
				'number' => '1',
				'class'  => 'extraclass',
			), $atts )
	);

	return '<li class="' . $class . '"><a href="#' . $number . '" role="tab" data-toggle="tab">' . do_shortcode( $content ) . '</a></li>';
}

add_shortcode( 'nix-tab-title', 'nix_tab_title' );

// Tab Content Wrapper [nix-tab-content] ... [/nix-tab-content]
function nix_tab_content( $atts, $content = null ) {
	$class = '';
	extract( shortcode_atts(
			array(
				'class' => 'extraclass',
			), $atts )
	);

	return '<div class="tab-content ' . $class . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'nix-tab-content', 'nix_tab_content' );

// Tab Content [nix-tab-text] ... [/nix-tab-text]
function nix_tab_text( $atts, $content = null ) {
	$class  = '';
	$number = '';
	extract( shortcode_atts(
			array(
				'number' => '1',
				'class'  => 'extraclass',
			), $atts )
	);

	return '<div class="tab-pane ' . $class . '" id="' . $number . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'nix-tab-text', 'nix_tab_text' );

