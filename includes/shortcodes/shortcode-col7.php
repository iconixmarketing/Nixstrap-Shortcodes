<?php

// col-7 shortcodes [nix-col-7][/nix-col-7]
function nix_col_seven($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-7 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-7', 'nix_col_seven');