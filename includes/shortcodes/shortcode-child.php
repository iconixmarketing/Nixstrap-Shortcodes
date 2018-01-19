<?php
/**
 * Created by PhpStorm.
 * User: derrickdedmon
 * Date: 10/4/16
 * Time: 12:08 PM
 */

function nix_child() {

	global $post;

	if ( is_page() && $post->post_parent ) {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	} else {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	}

	if ( $childpages ) {

		$liststring = '<ul class="nav nav-pills">' . $childpages . '</ul>';
	}

	/** @var string $liststring */
	return $liststring;

}

add_shortcode( 'nix_child', 'nix_child' );

function bootstrap_accordion_hierarchical_pages() {
	global $post;
	$output_markup = '<div class="panel-group" id="left-menu" role="navigation">';
	$ancestors     = get_post_ancestors( $post->ID );
	$root          = count( $ancestors ) - 1;
	$oldest_parent = ( $ancestors ) ? $ancestors[ $root ] : $post->ID;
	$mypages       = get_pages( array( 'child_of' => $oldest_parent, 'hierarchical' => 0, 'parent' => $oldest_parent ) );
	$counter       = 1;

	foreach ( $mypages as $page ) {
		$children = get_pages( array( 'child_of' => $page->ID ) );

		$output_markup .= '<div class="panel panel-default">';
		if ( $children ) {
			$output_markup .= '<div class="panel-heading has-children">' .
			                  '<a class="title-link" href="' . $page->guid . '">' .
			                  '<h4 class="panel-title">' .
			                  $page->post_title .
			                  '</h4>' .
			                  '</a>' .
			                  '<a data-toggle="collapse" class="arrow collapsed" data-parent="#left-menu" href="#collapse' . $counter . '">' .
			                  '<div class="awesome-triangle"></div>' .
			                  '</a>' .
			                  '</div>' .
			                  '<div id="collapse' . $counter . '" class="panel-collapse collapse">' .
			                  '<div class="panel-body">';

			foreach ( $children as $child ) {
				$output_markup .= '<a href="' . $child->guid . '"><h4>' . $child->post_title . '</h4></a>';
			}
			$output_markup .= '</div></div>';

		} else {
			$output_markup .= '<div class="panel-heading">' .
			                  '<a class="title-link" href="' . $page->guid . '">' .
			                  '<h4 class="panel-title">' .
			                  $page->post_title .
			                  '</h4>
                                </a>
                            </div>';
		}

		$output_markup .= '</div>';
		$counter ++;
	}
	$output_markup .= '</div>';

	return $output_markup;
}

add_shortcode( 'bootstrap_accordion_hierarchical_pages', 'bootstrap_accordion_hierarchical_pages' );
