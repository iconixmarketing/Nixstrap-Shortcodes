<?php

// col-12 shortcodes [nix-col-12][/nix-col-12]
function nix_col_twelve($atts, $content = null)
{
    $class = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div class="col-sm-12 ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-col-12', 'nix_col_twelve');