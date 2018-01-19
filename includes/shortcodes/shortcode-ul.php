<?php

// Ul [nix-ul] ... [/nix-ul]
function nix_ul($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="list-group ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-ul', 'nix_ul');