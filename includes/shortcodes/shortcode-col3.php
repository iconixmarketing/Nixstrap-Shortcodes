<?php

// col-3 shortcodes [nix-col-3][/nix-col-3]
function nix_col_three($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-3 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-3', 'nix_col_three');