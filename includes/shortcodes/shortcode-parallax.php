<?php

// Parallax-Fixed [nix-parallax-fixed id="parallax-section-fixed-1" image="#" height="450px" class="extraclass"][/nix-parallax-fixed]
function nix_parallax_fixed($atts, $content = null)
{
    $image = '';
    $height = '';
    $id = '';
    $class = '';
    extract(shortcode_atts(
            array(
                'image' => '#',
                'height' => '450px',
                'id' => 'parallax-section-fixed-1',
                'class' => 'extraclass',
            ), $atts)
    );

    return '
	<div class="row">
		<div class="col-sm-12 pad-0">
			<div class="nix-para-background" style="position: relative;	overflow: hidden; min-height: ' . $height . ';">
				<section data-type="nix-fixed-background" id="' . $id . '" class="' . $class . '" style="
					min-height: ' . $height . ';
					position: absolute;
					width: 100%;
					top: 0;
					bottom: 0;
					background: transparent url(' . $image . ') no-repeat fixed 50% 0;
					background-size: cover;">' . do_shortcode($content) . '
				</section>
			</div>
		</div>
	</div>
	';
}

add_shortcode('nix-parallax-fixed', 'nix_parallax_fixed');
