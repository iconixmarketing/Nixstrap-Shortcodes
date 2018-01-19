<?php

// Get Post Thumbnail [nix-thumb class="extraclass"]
function nix_thumb($atts)
{
    $class = '';
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'nix_recent_posts', true);
    $thumb_url = $thumb_url_array[0];
    extract(shortcode_atts(
            array(
                'class' => 'extraclass',
            ), $atts)
    );

    return '<img src="' . $thumb_url . '" class="img-responsive ' . $class . '">';
}

add_shortcode('nix-thumb', 'nix_thumb');