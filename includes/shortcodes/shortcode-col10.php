<?php

// col-10 shortcodes [nix-col-10][/nix-col-10]
function nix_col_ten($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-10 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-10', 'nix_col_ten');