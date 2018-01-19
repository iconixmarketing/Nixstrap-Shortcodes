<?php

// Parallax [nix-parallax id="parallax-section-1" speedx="50" speedy="0.2" start="-40" image="#" height="450px" class="extraclass"][/nix-parallax]
function nix_parallax($atts, $content = null)
{
    $image = '';
    $height = '';
    $id = '';
    $class = '';
    $speedy = '';
    $speedx = '';
    $start = '';
    extract(shortcode_atts(
            array(
                'image' => '#',
                'height' => '450px',
                'id' => 'parallax-section-1',
                'class' => 'extraclass',
                'speedy' => '0.2',
                'speedx' => '50',
                'start' => '-40',
            ), $atts)
    );

    return '
	<div class="row">
		<div class="col-sm-12 pad-0">
			<div class="nix-para-background" style="position: relative;	overflow: hidden; min-height: ' . $height . ';">
				<section data-type="nix-background" data-start="' . $start . '" data-speedx="' . $speedx . '" data-speedy="' . $speedy . '" id="' . $id . '" class="' . $class . '" style="
					min-height: ' . $height . ';
					position: absolute;
					width: 100%;
					top: 0;
					bottom: 0;
					background: transparent url(' . $image . ') no-repeat scroll 50% 0;
					background-size: cover;">' . do_shortcode($content) . '
				</section>
			</div>
		</div>
	</div>
	';
}

add_shortcode('nix-parallax', 'nix_parallax');