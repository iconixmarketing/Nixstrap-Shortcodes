<?php

// Spacer [nix-spacer space="20" class="extraclass"]
function nix_spacer($atts)
{
    $space = '';
    $class = '';
    extract(shortcode_atts(
            array(
                'space' => '20',
                'class' => 'extraclass',
            ), $atts)
    );

    return '<div style="padding-top: ' . $space . 'px;" class="' . $class . ' clearfix"></div>';
}

add_shortcode('nix-spacer', 'nix_spacer');