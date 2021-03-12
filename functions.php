<?php

function wsu_posts_sort_alphabetical( $query ) {

    if ( ! is_admin() && $query->is_main_query() ) {
		
		if ( is_category( 'all-courses') ) {

			$query->set( 'orderby', 'title' );
			$query->set( 'order', 'ASC' );
	
		}

	}
		
}


add_action( 'pre_get_posts', 'wsu_posts_sort_alphabetical', 1 );

require_once __DIR__ . '/list-custom-taxonomy-widget.php';

