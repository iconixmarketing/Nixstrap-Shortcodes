<?php

// col-9 shortcodes [nix-col-9][/nix-col-9]
function nix_col_nine($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-9 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-9', 'nix_col_nine');