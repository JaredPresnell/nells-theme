<?php 
/*
@package nells
*/
function nells_contact_form($atts, $content=null){
	//[contact_form]

	$atts =shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	ob_start();

	get_template_part('inc/template-parts/contact-form');

	return ob_get_clean();
}

add_shortcode( 'contact_form', 'nells_contact_form');

?>