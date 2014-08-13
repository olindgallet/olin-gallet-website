$(document).ready(function(){
	$('#submit-contact-form').click(function(){
		event.preventDefault();
		var email    = $('#contact-email').val();
		if (email.indexOf('@') == -1) {
			$('#contact-form-status').text('Invalid email address.');
			$('#contact-email').select();
		} else {						
			$('#contact-form-status').text('Contact successful.');
			$('#contact-form').submit();
		}
	});

	$('#contact-email').focus(function(){
		if(this.value == this.defaultValue){
			this.select();
		}
	});	
	
	$('#contact-message').focus(function(){
		if(this.value == this.defaultValue){
			this.select();
		}
	});
});
