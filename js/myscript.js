//this script highlights the sidebar link when the page is active
// e.g. "about" link is highlighed when visiting jaredpresnell.me/about
jQuery(document).ready( function($){
	//mobile sidebar
	$('#nells_mobile_hamburger').on('click',function(){
		$('.nells_mobile_sidebar').slideToggle();
		$('#nells_mobile_hamburger').toggle();
		$('#nells_mobile_exit').toggle();
	});
	$('#nells_mobile_exit').on('click',function(){
		$('.nells_mobile_sidebar').slideToggle();
		$('#nells_mobile_hamburger').toggle();
		$('#nells_mobile_exit').toggle();
	});

	var loc = $(location).attr("href");
	$('.widget_pages ul li a').each(function(e){
		//console.log($(this).attr("href"));
		if($(this).attr("href")==loc){
			$(this).parent().addClass('page_active');
		}
	});	
});

