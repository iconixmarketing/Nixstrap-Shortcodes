<?php

// col-6 shortcodes [nix-col-6][/nix-col-6]
function nix_col_six($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-6 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-6', 'nix_col_six');