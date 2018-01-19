<?php
/**
 * Nixstrap Shortcodes.
 *
 * @package   nix
 * @author    Derrick Dedmon
 * @license   LICENSE.txt
 * @link      https://www.linkedin.com/in/derrickdedmon
 * @copyright Copyright © 2018 iconixmarketing
 *
 * Plugin Name:       Nixstrap Shortcodes
 * Plugin URI:        https://www.linkedin.com/in/derrickdedmon
 * Description:       Nixstrap Shortcodes for use with Bootstrap 4 Themes.
 * Version:           1.12
 * Author:            Derrick Dedmon
 * Author URI:        https://www.linkedin.com/in/derrickdedmon
 * Text Domain:       nix
 * License URI:       LICENSE.txt
 * Domain Path:       /languages
 * Tested up to:      4.3.1
 */


function nix_shortcode_scripts() {

	$version_control = '1.12';

	wp_enqueue_script( 'nix-shortcode-parallax', plugins_url( 'includes/js/nix-parallax.js', __FILE__ ), array( 'jquery' ), $version_control, true );
	wp_enqueue_script( 'nix-shortcode-jarallax', plugins_url( 'includes/js/jarallax.min.js', __FILE__ ), array( 'jquery' ), $version_control, true );
	wp_enqueue_script( 'nix-shortcode-jarallax-video', plugins_url( 'includes/js/jarallax-video.min.js', __FILE__ ), array( 'nix-shortcode-jarallax' ), $version_control, true );
	wp_enqueue_style( 'nix-shortcode-styles', plugins_url( 'includes/css/nix-shortcode-styles.css', __FILE__ ), array(), $version_control );

}

add_action( 'wp_enqueue_scripts', 'nix_shortcode_scripts', 999 );

require 'includes/shortcodes.php';
require 'includes/tinymce.php';
require 'includes/quicktags.php';