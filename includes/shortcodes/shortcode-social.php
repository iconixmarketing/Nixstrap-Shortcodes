<?php
// [nix-social-icon url="#" social="google"]
function nix_social_icon($atts)
{
    $url = '';
    $social = '';
    extract(shortcode_atts(
            array(
                'url' => '#',
                'social' => 'google',
            ), $atts)
    );

    return '<a href="' . $url . '" class="btn btn-social-icon btn-' . $social . '"><i class="fa fa-' . $social . '"></i></a>';
}

add_shortcode('nix-social-icon', 'nix_social_icon');