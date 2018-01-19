<?php

// FontAwesome [nix-fontawesome type="star"]
function nix_fontawesome($atts)
{
    $type = '';
    extract(shortcode_atts(
            array(
                'type' => 'star',
            ), $atts)
    );

    return '<i class="fa fa-' . $type . '"></i>';
}

add_shortcode('nix-fontawesome', 'nix_fontawesome');
