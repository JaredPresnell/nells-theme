<?php 
/*
@package nells
*/

//this shortcode no longer in use, but it's here as an example
// ob_start() puts the template part into the output buffer, so it loads in the correct order on the page
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