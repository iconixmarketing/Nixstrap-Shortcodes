<?php

// col-11 shortcodes [nix-col-11][/nix-col-11]
function nix_col_eleven($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 col-md-11 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-11', 'nix_col_eleven');