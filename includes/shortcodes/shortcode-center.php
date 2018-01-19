<?php

// absolute center shortcodes [nix-center height="auto"][/nix-center]
function nix_center($atts, $content = null)
{
    $height = '';
    extract(shortcode_atts(
            array(
                'height' => 'auto',
            ), $atts)
    );

    return '
    <div class="nix-parent" style="height:' . $height . ';">
        <div class="nix-parent-inner">
            ' . do_shortcode($content) . '
        </div>
    </div>
    ';
}

add_shortcode('nix-center', 'nix_center');