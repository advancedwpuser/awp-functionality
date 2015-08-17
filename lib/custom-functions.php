<?php

//Add CPTS to Author Page
function custom_post_author_archive( &$query )
{
    if ( $query->is_author )
        $query->set( 'post_type', 'meetups' );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' ); // run once!
}
add_action( 'pre_get_posts', 'custom_post_author_archive' );
