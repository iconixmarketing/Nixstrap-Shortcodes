<?php

// container-fluid shortcodes [nix-container-fluid][/nix-container-fluid]
function nix_container_fluid($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="container-fluid ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-container-fluid', 'nix_container_fluid');