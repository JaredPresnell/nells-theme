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
	
	// // CONTACT FORM
	// $('#nellsContactForm').on('submit', function(e){
	// 	e.preventDefault();
	// 	var ajaxurl = my_ajax_object.ajax_url;// from enqueue.php
	// 	var name = $('#name').val();
	// 	var email = $('#email').val();
	// 	var message = $('#message').val();

	// 	if(name=="" || email=="" || message=="")
	// 	{
	// 		console.log('fields required~!');	
	// 		return;
	// 	}
	// 	var form = $('#nellsContactForm');
	// 	form.find('input, button, textarea').attr('disabled','disabled');
	// 	$('.js-form-submit').addClass('js-show-feedback');
	// 	$.ajax({
	// 		url : my_ajax_object.ajax_url,
	// 		type : 'post',
	// 		data : {
	// 			action : "submit_nells_contact",
	// 			name : name, 
	// 			email : email,
	// 			message : message
	// 		}, 
	// 		error : function( response ){
	// 			console.log(response);
	// 			setTimeout(function(){
	// 				$('.js-form-error').addClass('js-show-feedback');
	// 				$('.js-form-submit').removeClass('js-show-feedback');
	// 				form.find('input, button, textarea').removeAttr('disabled','disabled');
	// 			},2000);
	// 		},
	// 		success : function( response ){
	// 			console.log(response);
	// 			if(response ==0)
	// 			{
	// 				setTimeout(function(){
	// 					$('.js-form-error').addClass('js-show-feedback');
	// 					$('.js-form-submit').removeClass('js-show-feedback');
	// 					form.find('input, button, textarea').removeAttr('disabled','disabled');
	// 				},2000);
	// 			}
	// 			else{
	// 				setTimeout(function(){
	// 					$('.js-form-success').addClass('js-show-feedback');
	// 					$('.js-form-submit').removeClass('js-show-feedback');
	// 					form.find('input, button, textarea').removeAttr('disabled','disabled').val('');
	// 				},2000);
	// 			}
				
	// 		}	
	// 	});
	// });
	
});

