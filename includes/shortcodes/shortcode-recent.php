<?php

// Recent Post [nix-recent-posts posts="3"]
function nix_allowedtags()
{
    // Add custom tags to this string
    return '<blockquote>,<script>,<style>,<br>,<em>,<strong>,<h1>,<h2>,<h3>,<h4>,<h5>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>';
}

if (!function_exists('nix_custom_wp_trim_excerpt')) :

    /**
     * @param $nix_excerpt
     *
     * @return mixed|string|void
     */
    function nix_custom_wp_trim_excerpt($nix_excerpt)
    {
        $raw_excerpt = $nix_excerpt;
        if ('' == $nix_excerpt) {

            $nix_excerpt = get_the_content('');
            $nix_excerpt = strip_shortcodes($nix_excerpt);
            $nix_excerpt = apply_filters('the_content', $nix_excerpt);
            $nix_excerpt = str_replace(']]>', ']]&gt;', $nix_excerpt);
            $nix_excerpt = strip_tags($nix_excerpt, nix_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
            $excerpt_word_count = 122;
            $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
            $tokens = array();
            $excerptOutput = '';
            $count = 0;

            // Divide the string into tokens; HTML tags, or words, followed by any whitespace
            preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $nix_excerpt, $tokens);

            foreach ($tokens[0] as $token) {

                if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                    $excerptOutput .= trim($token);
                    break;
                }

                // Add words to complete sentence
                $count++;

                // Append what's left of the token
                $excerptOutput .= $token;
            }

            $nix_excerpt = trim(force_balance_tags($excerptOutput));

            $excerpt_end = ' <a class="btn btn-primary pull-right" href="' . esc_url(get_permalink()) . '">Read More</a> ';
            $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

            //$pos = strrpos($nix_excerpt, '</');
            //if ($pos !== false)
            // Inside last HTML tag
            //$nix_excerpt = substr_replace($nix_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
            //else
            // After the content
            $nix_excerpt .= $excerpt_more; /*Add read more in new paragraph */

            return $nix_excerpt;

        }

        return apply_filters('nix_custom_wp_trim_excerpt', $nix_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'nix_custom_wp_trim_excerpt');

function nix_recent_posts_function($atts)
{
    $posts = '';
    extract(shortcode_atts(
            array(
                'posts' => '3',
            ), $atts)
    );
    $return_string = '<div class="nix-recent-posts">';
    query_posts(array('orderby' => 'date', 'order' => 'DESC', 'showposts' => $posts));
    if (have_posts()) :
        while (have_posts()) : the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'nix_recent_posts', true);
            $thumb_url = $thumb_url_array[0];
            $return_string .= '
<div class="well well-sm">
	<div class="row">
		<div class="col-sm-4">
			<a href="' . get_permalink() . '"><img src="' . $thumb_url . '" class="img-fluid"></a>
		</div>
  		<div class="col-sm-8">
    		<h5><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5>
    		<div class="nix-recent-text">' . get_the_excerpt() . '</div>
  		</div>
	</div>
	<div class="clearfix"></div>
</div>
         ';
        endwhile;
    endif;
    $return_string .= '</div>';

    wp_reset_query();

    return $return_string;
}

add_shortcode('nix-recent-posts', 'nix_recent_posts_function');