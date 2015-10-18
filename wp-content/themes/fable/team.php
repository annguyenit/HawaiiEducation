<?php
function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
            $subex = mb_substr( $excerpt, 0, $charlength - 5 );
            $exwords = explode( ' ', $subex );
            $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
            if ( $excut < 0 ) {
                    echo mb_substr( $subex, 0, $excut );
            } else {
                    echo $subex;
            }
            echo '[...]';
    } else {
            echo $excerpt;
    }
}

/* Template Name: Team */

get_header(); 

global $post;

get_template_part('page', $post->post_name); 

get_footer(); 