<?php

/*
@package nells
*/

//=========================
//		ADMIN 
//=========================
function nells_load_admin_scripts($hook){

	if('toplevel_page_nells_admin' !=$hook){return;}
	wp_register_style('nells_admin', get_template_directory_uri() . '/css/nells.admin.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('nells_admin');

	wp_enqueue_media();

	wp_register_script('nells_admin_script',get_template_directory_uri() . '/js/nells.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script('nells_admin_script');
}
add_action( 'admin_enqueue_scripts', 'nells_load_admin_scripts' );

function nells_load_post_scripts($hook){
	if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
		wp_register_script('nells_admin_script',get_template_directory_uri() . '/js/nells.admin.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('nells_admin_script');
	}
}
add_action( 'admin_enqueue_scripts', 'nells_load_post_scripts' );

//=========================
//		FRONT END 
//=========================
function nells_enqueue_styles() {
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,500' );
	wp_enqueue_style( 'anton', 'https://fonts.googleapis.com/css?family=Russo+One' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'scrollbar','//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css');
 	wp_enqueue_style( 'nells-css', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all' );

 	wp_register_script( 'front_script', get_template_directory_uri() . '/js/myscript.js', array('jquery'),'1.0.0',true );
 	wp_localize_script( 'front_script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php'), 'test'=>'SHRED' ) );
 	wp_enqueue_script('front_script');
 	//wp_enqueue_script('front_script', get_template_directory_uri() . '/js/myscript.js', array('jquery'),'1.0.0',true);
 	wp_enqueue_script( 'scrollbar', '//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js');
}

add_action( 'wp_enqueue_scripts', 'nells_enqueue_styles' );