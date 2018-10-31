jQuery(document).ready(function($){
	console.log('ready');
	var mediaUploader;

	$('#upload-button').on('click', function(e){
		console.log('clicked');
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Profile Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-picture').val(attachment.url);
			$('#profile-picture-preview').css('background-image', 'url('+attachment.url+')');
		});

		mediaUploader.open();

	});

	$('#upload-button-book').on('click', function(e){
		console.log('clicked');
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Book Cover',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('.book_cover').val(attachment.url);
			//$('#profile-picture-preview').css('background-image', 'url('+attachment.url+')');
		});

		mediaUploader.open();

	});

	$('#upload-button-portfolio-cover').on('click', function(e){
		e.preventDefault();
		if(mediaUploader){
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Portfolio Cover',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('.portfolio_cover ').val(attachment.url);
			//$('#profile-picture-preview').css('background-image', 'url('+attachment.url+')');
		});

		mediaUploader.open();

	});
		var oldAuthCount = $('.author_form').length;
		var authcount = oldAuthCount;
		$('#add_author').on('click',function(e){

			e.preventDefault();
			//var oldAuthCount = $('.author_form').length;
			console.log(oldAuthCount);
			// var authcount = oldAuthCount + 1;
			//var authcount = $('#add_author').data('authcount')+1;
			authcount++;
			console.log(authcount);
			$('.author_info').append(
				'<label>Author:</label><input name="book_author_first_'+authcount+'" value="" size="30"/><input name="book_author_last_'+authcount+'" value="" size="30"/><br><label>Author Link:</label><input name="author_link_'+authcount+'" value="" size="50"/><br>'
			);	
			// $('#add_author').data('authcount', $('#add_author').data('authcount')+1);
		});
});