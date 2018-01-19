<?php

// col-2 shortcodes [nix-col-2][/nix-col-2]
function nix_col_two($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-2 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-2', 'nix_col_two');