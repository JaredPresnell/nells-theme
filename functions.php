<?php
require get_template_directory() . '/inc/function-admin.php'; 
require get_template_directory() . '/inc/enqueue.php'; 			// enqueueing of styles and scripts
require get_template_directory() . '/inc/theme-support.php';  	//functions for theme support
require get_template_directory() . '/inc/walker.php';			// custom walker functions
require get_template_directory() . '/inc/add-homepage-class.php'; //adds a custom class to the homepage body
require get_template_directory() . '/inc/widgets.php'; 
//require get_template_directory() . '/inc/ajax.php'; //moved to plugin
require get_template_directory() . '/inc/shortcodes.php'; 
require get_template_directory() . '/inc/custom-post-types.php'; 
//require get_template_directory() . '/inc/custom-taxonomies.php'; 

