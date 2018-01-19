<?php

// row shortcodes [nix-row][/nix-row]
function nix_row($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="row ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-row', 'nix_row');
