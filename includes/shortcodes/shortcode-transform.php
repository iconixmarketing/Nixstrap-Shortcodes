<?php

// Transform Animation [nix-transform class="extraclass" bgcolor="#ffffff" stopx="300" stopy="1100" stopz="300" speedx="1" speedy="1" speedz="1" transition="2" width="300px" height="300px" img=""][/nix-transform]
function nix_transform($atts, $content = null)
{
    $class = '';
    $width = '';
    $height = '';
    $img = '';
    $transition = '';
    $stopx = '';
    $stopy = '';
    $stopz = '';
    $speedy = '';
    $speedx = '';
    $speedz = '';
    $bgcolor = '';
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
                'width' => '300px',
                'height' => '300px',
                'img' => '',
                'transition' => '2',
                'stopx' => '300',
                'stopy' => '1100',
                'stopz' => '300',
                'speedy' => '1',
                'speedx' => '1',
                'speedz' => '1',
                'bgcolor' => '#ffffff',
            ), $atts)
    );

    return '<div data-type="nix-transform" data-stopx="' . $stopx . '" data-stopy="' . $stopy . '" data-stopz="' . $stopz . '" data-speedy="' . $speedy . '" data-speedx="' . $speedx . '" data-speedz="' . $speedz . '" class="moves ' . $class . '" style="
	height: ' . $height . ';
	width: ' . $width . ';
	background-image: url(' . $img . ');
	background-color: ' . $bgcolor . ';
	background-repeat: no-repeat;
	background-position: center center;
	transition: all ' . $transition . 's;
	transform: translate3d(0,0,0);
	z-index: 1199;
	">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-transform', 'nix_transform');