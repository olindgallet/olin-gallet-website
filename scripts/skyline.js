var paper      = Raphael(document.getElementById("header"), 950, 300);
var time_display = {
	text: paper.text(580, 80, "My Time: " + moment().tz('America/Matamoros').format('h:mm a') + " CST").attr({fill: '#fff', 'font-size': 36, 'font-family': 'Cabin Condensed'}),
	color: "#000"
};
var skyline;


$(window).on("load", function(){
	var LIGHT_BODY = '#f3e2a7';
	var DARK_BODY  = '#996633';

	var LIGHT_HEADER = '#fff';
	var DARK_HEADER  = '#000';

	var currentTime = new Date();
	var hours=currentTime.getHours();

	var REG_EX = /sky-[a-z]+/;

	function light_morning_button(){
		$('#midday-button').addClass('translucent');
		$('#sunset-button').addClass('translucent');
		$('#night-button').addClass('translucent');
	}

	function light_midday_button(){
		$('#morning-button').addClass('translucent');
		$('#sunset-button').addClass('translucent');
		$('#night-button').addClass('translucent');
	}

	function light_sunset_button(){
		$('#morning-button').addClass('translucent');
		$('#midday-button').addClass('translucent');
		$('#night-button').addClass('translucent');
	}
	
	function light_night_button(){
		$('#morning-button').addClass('translucent');
		$('#midday-button').addClass('translucent');
		$('#sunset-button').addClass('translucent');
	}

	function reset_sky_buttons(){
		$('#sky-buttons ul li img').each(function(){
			if ($(this).hasClass('translucent')){
				$(this).removeClass('translucent');
			}
		});
	}

	if (hours > 5 && hours <= 8){
		skyline = paper.image("images/skyline-header-morning.png", 2, 2, 950, 300);
		$('header').addClass('sky-morning');
		$('header #page-title h2').css('color', DARK_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		light_morning_button();
		time_display.color = '#000';
		time_display.text.attr({fill: time_display.color});
	}
	else if (hours > 8 && hours <= 16){
		skyline = paper.image("images/skyline-header-midday.png", 2, 2, 950, 300);
		$('header').addClass('sky-midday');
		$('header #page-title h2').css('color', LIGHT_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		light_midday_button();
		time_display.color = '#fff';
		time_display.text.attr({fill: time_display.color});
	}
	else if (hours > 16 && hours <= 19){
		skyline = paper.image("images/skyline-header-sunset.png", 2, 2, 950, 300);
		$('header').addClass('sky-sunset');
		$('header #page-title h2').css('color', DARK_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		light_sunset_button();
		time_display.color = '#000';
		time_display.text.attr({fill: time_display.color});
	}
	else if (hours > 19 || hours <= 5){
		skyline = paper.image("images/skyline-header-night.png", 2, 2, 950, 300);
		$('header').addClass('sky-night');
		$('header #page-title h2').css('color', LIGHT_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		light_night_button();
		time_display.color = '#fff';
		time_display.text.attr({fill: time_display.color});
	}
	
	/************************************************/

	$('#morning-button').click(function(){
		skyline.node.href.baseVal = "images/skyline-header-morning.png";
		$('header #page-title h2').css('color', DARK_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		var elm = $('header');		  
		elm[0].className = elm[0].className.replace(REG_EX, 'sky-morning');
		reset_sky_buttons();
		light_morning_button();
		time_display.color = '#000';
		time_display.text.attr({fill: time_display.color});
	});
	$('#midday-button').click(function(){
		skyline.node.href.baseVal = "images/skyline-header-midday.png";
		$('header #page-title h2').css('color', LIGHT_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		var elm = $('header');
		elm[0].className = elm[0].className.replace(REG_EX, 'sky-midday');
		reset_sky_buttons();
		light_midday_button();
		time_display.color = '#fff';
		time_display.text.attr({fill: time_display.color});
	});
	$('#sunset-button').click(function(){
		skyline.node.href.baseVal = "images/skyline-header-sunset.png";
		$('header #page-title h2').css('color', DARK_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		var elm = $('header');
		elm[0].className = elm[0].className.replace(REG_EX, 'sky-sunset');
		reset_sky_buttons();
		light_sunset_button();
		time_display.color = '#000';
		time_display.text.attr({fill: time_display.color});
	});
	$('#night-button').click(function(){
		skyline.node.href.baseVal = "images/skyline-header-night.png";
		$('header #page-title h2').css('color', LIGHT_HEADER);
		$('body').css('background-color', LIGHT_BODY);
		var elm = $('header');
		elm[0].className = elm[0].className.replace(REG_EX, 'sky-night');
		reset_sky_buttons();
		light_night_button();
		time_display.color = '#fff';
		time_display.text.attr({fill: time_display.color});
	});		
});

$(document).ready(function(){
	var contact_tab = '0px';
	var info_tab = '0px';
	
	$('#contact-tab h2').click(function(){
		if (contact_tab != '440px'){
			contact_tab = '440px';
			$('#contact-tab').animate({'left': contact_tab}, "medium", function(){
				$('#contact-form').fadeIn('fast');
			});
		} else{
			contact_tab = '0px';
			$('#contact-form').fadeOut('fast', function(){
				$('#contact-tab').animate({'left': contact_tab}, "medium");
			});
		}
	});

	$('#info-tab h2').click(function(){
		if (info_tab != '440px'){
			info_tab = '440px';
			$('#info-tab').animate({'left': info_tab}, "medium", function(){
				$('#info-form').fadeIn('fast');
			});
		} else{
			info_tab = '0px';
			$('#info-form').fadeOut('fast', function(){
				$('#info-tab').animate({'left': info_tab}, "medium");
			});
		}
	});	
	
	$('span#contact-link').click(function(){
		element_to_scroll_to = document.getElementById('contact-tab');
		element_to_scroll_to.scrollIntoView();
		$('#contact-tab h2').trigger('click');
	});
 
	$('span#info-link').click(function(){
		element_to_scroll_to = document.getElementById('info-tab');
		element_to_scroll_to.scrollIntoView();
		$('#info-tab h2').trigger('click');
	});
 
	var NUMBER_OF_CLOUDS = 15;
	  
	var header_clouds = new Array();
	var is_cloud_active = new Array();
	  	  
	function spawn_cloud(cloud_no){
		var randomY = Math.round(((Math.random()*180)+1) * 1000)/1000;
		var speed   = Math.round((Math.random()*10)+10)*1000;
		var size    = (Math.random()*2)+1;
		var cloud   = paper.path("m950,"+randomY+"c0.019-0.195,0.03-0.392,0.03-0.591c0-3.452-2.798-6.25-6.25-6.25c-2.679,0-4.958,1.689-5.847,4.059c-0.589-0.646-1.429-1.059-2.372-1.059c-1.778,0-3.219,1.441-3.219,3.219c0,0.21,0.023,0.415,0.062,0.613c-2.372,0.391-4.187,2.436-4.187,4.918c0,2.762,2.239,5,5,5h15.875c2.762,0,5-2.238,5-5C28.438,16.362,26.672,14.332,24.345z").attr({fill: "#fff", stroke: "#fff"});
		var a0 = Raphael.animation({ transform: "t-950,0S"+size}, speed, function(){ is_cloud_active[cloud_no] = false; });
		
		if (Math.random() > .5)
			cloud.toFront();
		else
			cloud.toBack();

		cloud.animate(a0);
		return cloud;		
	}
	  
	function maintain_animations(){
		var j = 0;
		while (j < NUMBER_OF_CLOUDS){
			if (!is_cloud_active[j]){			
				header_clouds[j].remove();
				is_cloud_active[j] = true;
				header_clouds[j] = spawn_cloud(j);
			}
			j = j + 1;
		}
		
		time_display.text.remove();
		time_display.text = paper.text(580, 80, "My Time: " + moment().tz('America/Matamoros').format('h:mm a') + " CST").attr({fill: time_display.color, 'font-size': 36, 'font-family': 'Cabin Condensed'});
	}
	 
	var i = 0;
	while (i < NUMBER_OF_CLOUDS){
		is_cloud_active[i] = true;	  
		header_clouds[i]   = spawn_cloud(i);
		i = i + 1;
	}
	
	setInterval(maintain_animations,1000); 
});

