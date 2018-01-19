<?php

// col-8 shortcodes [nix-col-8][/nix-col-8]
function nix_col_eight($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-8 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-8', 'nix_col_eight');