<?php

function nells_register_nav_menu(){
	register_nav_menu('primary', 'Header Navigation Menu');	
}
add_action('after_setup_theme', 'nells_register_nav_menu');


//================
//	   SIDEBAR
//================
function nells_sidebar_init(){
	register_sidebar(
		array(
			'name' 	=> esc_html__( 'Nells Sidebar', 'nells' ),
			'id' 	=> 'nells-sidebar',
			'description' 		=> 'Sidebar',
			'before_widget' 	=> '<section id="%1$s" class="nells_widget %2$s">',
			'after_widget' 		=> '</section>',
			'before_title'		=> '<h2 class="nells-widget-title">',
			'after_title'		=> '</h2>',
		)
	);
}
add_action('widgets_init', 'nells_sidebar_init');

function nells_sidebar_mobile_init(){
	register_sidebar(
		array(
			'name' 	=> esc_html__( 'Nells Sidebar Mobile', 'nells' ),
			'id' 	=> 'nells-sidebar-mobile',
			'description' 		=> 'Mobile Sidebar',
			'before_widget' 	=> '<section id="%1$s" class="nells_widget_mobile %2$s">',
			'after_widget' 		=> '</section>',
			'before_title'		=> '<h2 class="nells-mobile-widget-title">',
			'after_title'		=> '</h2>',
		)
	);
}
add_action('widgets_init', 'nells_sidebar_mobile_init');
?>
