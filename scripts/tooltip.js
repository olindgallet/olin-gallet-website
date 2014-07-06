$(document).ready(function() { 
	var is_showing = false;
	var current_id = 0;
	
	var TOOLTIP_WIDTH = 400;
	var PAGE_WIDTH    = 850;

	$('#portfolio .gallery-image img').on('click', function(e) {
		var left = e.pageX - $(this).offset().left;
		var top = e.pageY - $(this).offset().top;
		
		if (e.pageX + TOOLTIP_WIDTH > screen.availWidth ){
		  left = left - TOOLTIP_WIDTH;
		} else if (e.pageX - TOOLTIP_WIDTH < 0){
		  left = 0;
		}
	
		if (!is_showing){
			$(this).next('div').css('left', left);
			$(this).next('div').css('top', top);
			$(this).next('div').fadeIn('500', function(){ 
				$(this).fadeTo('500',0.9); 
			});
			is_showing = true;
			current_id = $(this).next('div').attr('id').match(/\d/g).join();
		} else{
			$('#portfolio .gallery-image img').next('div:visible').fadeOut('100');
			if ($(this).next('div').attr('id').match(/\d/g).join() != current_id){
				$(this).next('div').css('left', left);
				$(this).next('div').css('top', top);
				$(this).next('div').fadeIn('500', function(){ 
				$(this).fadeTo('500',0.9); 
			});
				current_id = $(this).next('div').attr('id').match(/\d/g).join();
			} else{
				is_showing = false;
			}
		}
	});
});