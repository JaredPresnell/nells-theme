<?php

/*
@package nells
*/

//======================
// 		ADMIN PAGE
//======================
function nells_add_admin_page(){
	//Generate admin page
	add_menu_page('Nells Theme Options', 'Nells', 'manage_options', 'nells_admin', 'nells_theme_create_page',"",110);

	//Generate Subpages
	add_submenu_page( 'nells_admin', 'Nells Sidebar Options', 'Sidebar', 'manage_options', 'nells_admin', 'nells_theme_create_page' );
	add_submenu_page( 'nells_admin', 'Nells CSS Options', 'CSS', 'manage_options', 'nells_admin_settings', 'nells_create_settings_page' );	
}
add_action('admin_menu', 'nells_add_admin_page');
add_action('admin_init', 'nells_custom_settings');

function nells_theme_create_page(){
	require_once(get_template_directory() . '/inc/templates/nells-admin.php');
}
function nells_create_settings_page(){
	require_once(get_template_directory() . '/inc/templates/nells-admin-pages-widget.php');
}
function nells_custom_settings(){
	register_setting('nells-settings-group', 'profile_picture');
	register_setting('nells-settings-group', 'first_name');
	register_setting('nells-settings-group', 'last_name');
	register_setting('nells-settings-group', 'user_description');

	add_settings_section('nells-sidebar-options','Sidebar Options', 'nells_sidebar_options', 'nells_admin');

	add_settings_field('sidebar-picture', 'Picture', 'nells_sidebar_picture', 'nells_admin', 'nells-sidebar-options');
	add_settings_field('sidebar-name', 'Full Name', 'nells_sidebar_name', 'nells_admin', 'nells-sidebar-options');
	add_settings_field('sidebar-description', 'Description', 'nells_sidebar_description', 'nells_admin', 'nells-sidebar-options');

	//Custom Pages Widget Settings
	$option_group = 'nells-pages-settings-group';
	$option_name = 'nells_pages';
	$section_id = 'nells-pages-settings';
	$section_title = 'Pages Settings';
	$section_callback = 'nells_pages_options';
	$page = 'nells_admin_settings';
	$field_id = 'settings-pages';
	$field_title = 'Pages';
	$field_callback = 'nells_widget_pages';
	register_setting( $option_group, $option_name);
	add_settings_section( $section_id, $section_title, $section_callback, $page );
	add_settings_field($field_id, $field_title, $field_callback, $page, $section_id );

	// register_setting( 'nells-pages-settings-group', 'nells_pages');
	// add_settings_section( 'nells-pages-settings', 'Pages Settings', 'nells_pages_options', 'nells_admin_settings' );
	// add_settings_field('settings-pages', 'Pages', 'nells_widget_pages', 'nells_admin_settings', 'nells-pages-settings');
}

function nells_widget_pages(){
	$pages = esc_attr(get_option('nells_pages'));
	echo '<input type="text" name="nells_pages" value="'.$pages.'" placeholder="Pages"/>';
}
function nells_sidebar_picture(){
	$picture = esc_attr(get_option('profile_picture'));
	echo '<input id="upload-button" type="button" class="button button-secondary" value="Upload Profile Picture"/><input id="profile-picture" type="hidden" name="profile_picture" value="'.$picture.'"/>';
}
function nells_sidebar_name(){
	$firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>';
}
function nells_sidebar_description(){
	$description = esc_attr(get_option('user_description'));
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/>';
}
function nells_sidebar_options(){
}
function nells_pages_options(){

}