<?php 

add_filter( 'body_class', 'homepage_class');
function homepage_class( $classes ) {
	if( is_front_page() )
		$classes[] = 'homepage_body';
	else{
		$classes[] = 'content_body';
	}
	return $classes; 
}