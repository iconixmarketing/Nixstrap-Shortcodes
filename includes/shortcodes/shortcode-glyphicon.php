<?php

// Glyphicon [nix-glyphicon type="ok"]
function nix_glyphicon($atts)
{
    $type = '';
    extract(shortcode_atts(
            array(
                'type' => 'star',
            ), $atts)
    );

    return '<i class="glyphicon glyphicon-' . $type . '"></i>';
}

add_shortcode('nix-glyphicon', 'nix_glyphicon');