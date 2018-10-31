<?php 
/* 
@package nells
*/

class Nells_Profile_Widget extends WP_Widget{
	public function __construct(){
		$widget_ops = array(
			'classname' => 'nells-profile-widget',
			'description' => 'Nells Custom Widget'
		);
		parent:: __construct('nells_profile', 'Nells Profile', $widget_ops);
	}

	//back end display
	public function form($instance){
		echo '<p><strong>No options for this Widget!</strong><br>You can access the Widget Settings <a href="?page=nells_admin">here</a></p>';
	}
	//front end display

	public function widget($args, $instance){
		$profilePicture = esc_attr(get_option('profile_picture')); 
		$firstName = esc_attr(get_option('first_name'));
		$lastName = esc_attr(get_option('last_name'));
		$fullName = $firstName . ' ' . $lastName;

		echo $args['before_widget'];
		get_template_part('inc/template-parts/nells', 'widget');
		echo $args['after_widget'];
	}
}

class Nells_Pages_Widget extends WP_Widget{
	public function __construct(){
		$widget_ops = array(
			'classname' => 'nells-pages-widget',
			'description' => 'Nells Pages Widget'
		);
		parent:: __construct('nells_pages', 'Nells Pages', $widget_ops);
	}

	//back end display
	public function form($instance){
		echo '<p><strong>No options for this Widget!</strong><br>You can access the Widget Settings <a href="?page=nells_admin">here</a></p>';
	}
	//front end display

	public function widget($args, $instance){
		$profilePicture = esc_attr(get_option('profile_picture')); 
		$firstName = esc_attr(get_option('first_name'));
		$lastName = esc_attr(get_option('last_name'));
		$fullName = $firstName . ' ' . $lastName;

		echo $args['before_widget'];
		get_template_part('inc/template-parts/nells', 'pages-widget');
		echo $args['after_widget'];
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'Nells_Profile_Widget');
} );
add_action( 'widgets_init', function(){
	register_widget( 'Nells_Pages_Widget');
} );