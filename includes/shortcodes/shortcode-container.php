<?php

// container shortcodes [nix-container][/nix-container]
function nix_container($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="container ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-container', 'nix_container');