<?php

function posts_sort_alphabetical( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
		
		if (is_category('all-courses'))
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
        return;
		
}
add_action( 'pre_get_posts', 'posts_sort_alphabetical', 1 );