<?php

// col-5 shortcodes [nix-col-5][/nix-col-5]
function nix_col_five($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-5 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-5', 'nix_col_five');