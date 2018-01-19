<?php

// columns [nix-columns xs="6" sm="6" md="6" lg="6" class="extraclass"][/nix-col]
function nix_columns($atts, $content = null)
{
    $xs = '';
    $sm = '';
    $md = '';
    $lg = '';
    $class = '';
    extract(shortcode_atts(
            array(
                'xs' => '12',
                'sm' => '12',
                'md' => '12',
                'lg' => '12',
                'class' => '',
            ), $atts)
    );

    return '<div class="col-xs-' . $xs . ' col-sm-' . $sm . ' col-md-' . $md . ' col-lg-' . $lg . ' ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('nix-columns', 'nix_columns');
