<?php

// Wells [nix-well size="lg" class="extraclass"] ... [/nix-well]
function nix_well($atts, $content = null)
{
    $size = '';
    $class = '';
    extract(shortcode_atts(
            array(
                'size' => 'lg',
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="well well-' . $size . ' ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-well', 'nix_well');