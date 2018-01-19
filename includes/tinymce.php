<?php
/* TinyMCE */
add_action('init', 'nix_buttons');
function nix_buttons()
{
    add_filter("mce_external_plugins", "nix_add_buttons");
    add_filter('mce_buttons', 'nix_register_buttons_1');
    add_filter('mce_buttons_2', 'nix_register_buttons_2');
}

function nix_add_buttons($plugin_array)
{
    $plugin_array['nix'] = plugin_dir_url(__FILE__) . '/js/tinymce.js';
    return $plugin_array;
}

function nix_register_buttons_1($buttons1)
{
    array_push($buttons1,
        'nix_container',
        'nix_fluidcontainer',
        'nix_row',
        'nix_column',
        'nix_clearfix',
        'nix_button',
        'nix_well',
        'nix_icon',
        'nix_images',
        'nix_alert',
        'nix_list',
        'nix_spacer'
    );

    return $buttons1;
}

function nix_register_buttons_2($buttons2)
{
    array_push($buttons2,
        'nix_accordion',
        'nix_tabs',
        'nix_anchor',
        'nix_parallax',
        'nix_parallax_fixed',
        'nix_center',
        'nix_recent_posts',
        'nix_user_only',
        'nix_featured_image',
        'nix_rotate',
        'nix_transform'
    );

    return $buttons2;
}