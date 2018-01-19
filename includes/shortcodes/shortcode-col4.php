<?php

// col-4 shortcodes [nix-col-4][/nix-col-4]
function nix_col_four($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-4 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-4', 'nix_col_four');