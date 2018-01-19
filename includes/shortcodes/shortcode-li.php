<?php

// LI [nix-li type="active" link="#" target="_parent"] ... [/nix-li]
function nix_li($atts, $content = null)
{
    $type = '';
    $link = '';
    $target = '';
    extract(shortcode_atts(
            array(
                'type' => '',
                'link' => '#',
                'target' => '_parent',
            ), $atts)
    );

    return '<a class="list-group-item list-group-item-action' . $type . '" href="' . $link . '"  target="' . $target . '">' . do_shortcode($content) . '</a>';
}

add_shortcode('nix-li', 'nix_li');