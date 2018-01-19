<?php

// col-1 shortcodes [nix-col-1][/nix-col-1]
function nix_col_one($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-1 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-1', 'nix_col_one');
