$(window).load(function(){
	'use strict';
	//scroll to top and remove animations on reload
    $("html,body").animate({scrollTop: 0}, 100);
	setTimeout(function() {
		removeAnimations();
	}, 200); 
	//responsive menu
	if($(window).width()>767){
		$(".navbar-collapse").removeClass("collapse").addClass("in");
	}
	else{
	 $(".navbar-collapse").removeClass("in").addClass("collapse");
	}
    $(window).resize(function() {
		if($(window).width()>767){
			$(".navbar-collapse").removeClass("collapse").addClass("in");
		}
		else{
			$(".navbar-collapse").removeClass("in").addClass("collapse");
		}
    });
	if($(window).width()<767){
		$(".navbar-collapse").removeClass("in").addClass("collapse");
	}
});
$(document).ready(function() {
	'use strict';
	//ie10 detection
	if (/*@cc_on!@*/false) { 
    	document.documentElement.className+=' ie10'; 
	} 
	//nice scroll
	$("html, .modal").niceScroll({cursorcolor:"#000000", horizrailenabled: false});
	//empty link
	$('a[href="#"]').click(function() {
		return false;
	});
	//tooltips
	$(function() {
		$('.tips').tooltip();
	});	
	//magnific popup
 	$('.image-link').magnificPopup({
		type: 'image',
  		retina: {
    			ratio: 2 // can also be function that should retun this number
  		},
	gallery: {
        	enabled: true,
        	navigateByImgClick: true,
        	preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        	},
	});	
	//popover
	$(function (){ 
		$(".project-popover").popover({
			placement:'top'
		});  
	}); 
	$('.project-list-item').click(function() {
		$(this).children('.project-popover').popover('toggle');
	});
	//sticky menu
	$('.my-sticky-element').waypoint('sticky');
	$('.navbar-toggle').click(function () {
		if(($(window).width()<768) && (!$('.my-sticky-element').hasClass("stuck")) && (!$('body').hasClass("ie8"))){
			setTimeout(function() {
				$(window).scrollTop($('.navbar-nav').outerHeight()+10);
			}, 100);
		}
	});
	//tabs
	$('.nav-tabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show');
	});
	//desktop or mobile
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('body').addClass('mobile');
	}
	else{
		$('body').addClass('desktop');
	}
	//smooth-scrolling
	$(function() {
		$('ul.nav a, .smooth').bind('click',function(event){
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	});
	//menu click
	$('.navbar-collapse ul a').click(function () {
		if($(window).width()<768){
			$(".navbar-collapse").removeClass("in");
			$(".navbar-collapse").addClass("collapse");
		}
	});
	//modernizr
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
	  		var input = $(this);
	  		if (input.val() == input.attr('placeholder')) {
				input.val('');
				input.removeClass('placeholder');
	  		}
		}).blur(function() {
	  		var input = $(this);
	  		if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
	  		}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
	  		$(this).find('[placeholder]').each(function() {
			var input = $(this);
				if (input.val() == input.attr('placeholder')) {
		 			input.val('');
				}
	  		})
		});
	}
}); 

//borders
$(window).load(function(){
	'use strict';
    var w = $(window).width(); 
    $('.top_angle_left, .top_angle_right').css('border-left-width', w); 
    $('.bot_angle_left, .bot_angle_right').css('border-right-width', w);
	$(window).resize(function() {
		var w = $(window).width(); 
		$('.top_angle_left, .top_angle_right').css('border-left-width', w); 
		$('.bot_angle_left, .bot_angle_right').css('border-right-width', w);
	});
});
//ie8
function ie8menu()  { 
	'use strict';
	if(($(window).width()>767)  && ($('html').hasClass("ie8"))){
  		$('.navbar-collapse').addClass('smallie8');
  		$('.navbar-collapse').removeClass('largeie8');	
	}  
	else if(($(window).width()<768)  && ($('html').hasClass("ie8"))){
  		$('.navbar-collapse').removeClass('smallie8');
  		$('.navbar-collapse').addClass('largeie8');
	}
}
$(window).load(function(){
	'use strict';
	ie8menu();
	$(window).resize(function() {
		setTimeout(function() {
			ie8menu();
		}, 1000);
	}); 
});
//scrollspy
function scrollref()  { 
	'use strict';
	$('[data-spy="scroll"]').each(function () {
  		$('body').scrollspy('refresh');

	});  
}
$(window).load(function(){
	'use strict';
	setTimeout(function() {
			scrollref();
		}, 3000);
	$(window).resize(function() {
		setTimeout(function() {
			scrollref();
		}, 2000);
	}); 
});    
 
//carousels  
$(window).load(function(){
	'use strict';
	$(".caroufred .gallery").carouFredSel({
       responsive: true,
        width: '100%',		
        auto: true,
        scroll: {
		items:1,
			pauseOnHover: true
		},	 					     
        pagination: "#caroufred_home_slide_pager",	
        swipe: {
            onMouse: false,
            onTouch: false
        },
        items: {
            width: 600,
            height: 'auto',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 2
            },
			start: 1
        }
    });

	$(".caroufred-text .testimonials").carouFredSel({
       responsive: true,
        width: '100%',
		height: 'variable',		
        auto: true,
        scroll: {
		items:1,
			pauseOnHover: true
		},						
        pagination: "#caroufred_testimonials_pager",	
        swipe: {
            onMouse: false,
            onTouch: false
        },
        items: {
            height: 'variable',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 1
            },
			start: "random"
        }
    });

	$(".project-list-gallery").carouFredSel({
       responsive: true,
        width: '100%',		
        auto: true,
        scroll: {
		items:1,
			pauseOnHover: true
		},				  
        pagination: "#caroufred_project_list_gallery",	
        swipe: {
            onMouse: false,
            onTouch: false
        },
        items: {
           width:300,
			height:'auto',
            visible: {
                min: 1,
                max: 10
            },
			start: "random"
        }
    });
 });

//Animations
function coolAnimations()  {
	'use strict';
	$('.animated-slideup').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("slideUp");
		}
	});
	$('#projects .animated-fadein').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+$(window).height()-50) {
			$(this).addClass("slideDown");
		}
	});
	$('.animated-slidedown').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("slideDown");
		}
	});
	$('.animated-slideleft').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("slideLeft");
		}
	});
	$('.animated-slideright').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("slideRight");
		}
	});
	$('.animated-slideexpandup').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("slideExpandUp");
		}
	});
	$('.animated-expandup').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("expandUp");
		}
	});
	$('.animated-fadein').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("fadeIn");
		}
	});
	$('.animated-expandopen').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("expandOpen");
		}
	});
	$('.animated-bigentrance').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("bigEntrance");
		}
	});
	$('.animated-hatch').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("hatch");
		}
	});
	$('.animated-bounce').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("bounce");
		}
	});
	$('.animated-pulse').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("pulse");
		}
	});
	$('.animated-floating').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("floating");
		}
	});
	$('.animated-tossing').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("tossing");
		}
	});
	$('.animated-pullup').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("pullUp");
		}
	});
	$('.animated-pulldown').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("pullDown");
		}
	});
	$('.animated-stretchleft').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("stretchLeft");
		}
	});
	$('.animated-stretchright').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("stretchRight");
		}
	});
	$('.animated-scale-up').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-scale-up");
		}
	});
	$('.animated-scale-down').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-scale-down");
		}
	});
	$('.animated-slide-left').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-slide-left");
		}
	});
	$('.animated-slide-right').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-slide-right");
		}
	});
	$('.animated-slide-top').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-slide-top");
		}
	});
	$('.animated-slide-bottom').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-slide-bottom");
		}
	});
	$('.animated-fade').each(function(){
		var imagePos = $(this).offset().top;
		var topOfWindow = $(window).scrollTop();
		if (imagePos < topOfWindow+($(window).height()/4)*3) {
			$(this).addClass("custom-animation-fade");
		}
	});
}
function removeAnimations()  {
	'use strict';
	$('.animated-slideup').each(function(){
		$(this).removeClass("slideUp");
	});
	$('.animated-slidedown').each(function(){
		$(this).removeClass("slideDown");
	});
	$('.animated-slideleft').each(function(){
		$(this).removeClass("slideLeft");
	});
	$('.animated-slideright').each(function(){
		$(this).removeClass("slideRight");
	});
	$('.animated-slideexpandup').each(function(){
		$(this).removeClass("slideExpandUp");
	});
	$('.animated-expandup').each(function(){
		$(this).removeClass("expandUp");
	});
	$('.animated-fadein').each(function(){
		$(this).removeClass("fadeIn");
	});
	$('.animated-expandopen').each(function(){
		$(this).removeClass("expandOpen");
	});
	$('.animated-bigentrance').each(function(){
		$(this).removeClass("bigEntrance");
	});
	$('.animated-hatch').each(function(){
		$(this).removeClass("hatch");
	});
	$('.animated-bounce').each(function(){
		$(this).removeClass("bounce");
	});
	$('.animated-pulse').each(function(){
		$(this).removeClass("pulse");
	});
	$('.animated-floating').each(function(){
		$(this).removeClass("floating");
	});
	$('.animated-tossing').each(function(){
		$(this).removeClass("tossing");
	});
	$('.animated-pullup').each(function(){
		$(this).removeClass("pullUp");
	});
	$('.animated-pulldown').each(function(){
		$(this).removeClass("pullDown");
	});
	$('.animated-stretchleft').each(function(){
		$(this).removeClass("stretchLeft");
	});
	$('.animated-stretchright').each(function(){
		$(this).removeClass("stretchRight");
	});
	$('.animated-scale-up').each(function(){
		$(this).removeClass("custom-animation-scale-up");
	});
	$('.animated-scale-down').each(function(){
		$(this).removeClass("custom-animation-scale-down");
	});
	$('.animated-slide-left').each(function(){
		$(this).removeClass("custom-animation-slide-left");
	});
	$('.animated-slide-right').each(function(){
		$(this).removeClass("custom-animation-slide-right");
	});
	$('.animated-slide-top').each(function(){
		$(this).removeClass("custom-animation-slide-top");
	});
	$('.animated-slide-bottom').each(function(){
		$(this).removeClass("custom-animation-slide-bottom");
	});
	$('.animated-fade').each(function(){
		$(this).removeClass("custom-animation-fade");
	});
}
$(window).scroll(function() {
	'use strict';
	coolAnimations();
	});
$(window).load(function(){
	'use strict';
	setTimeout(function() {
		coolAnimations();
	}, 2000);
});
//isotope
$(window).load(function(){
	'use strict';
	var $container = $('.portfolioContainer');
	$container.isotope({
		layoutMode : 'fitRows',
			filter: '*',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
	}); 
	$('.portfolioFilter a').click(function(){
		$('.portfolioFilter .current').removeClass('current');
		$(this).addClass('current');	 
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
	});
	setTimeout(function() {
		scrollref();
	}, 2000); 
	return false;	
	});	
});

//home gallery heights
function calculateHome()  {
	'use strict';
	var currentSmallestGallery = 20000;
	$('.gallery').children('li').each(function(i){
		if ($(this).children('img').height() < currentSmallestGallery) { currentSmallestGallery = $(this).height(); }
	});  
	$('.gallery').css({'max-height': currentSmallestGallery});
	$('.home-slider .caroufred, .home-slider .caroufredsel_wrapper').css("height", $('.gallery').height() + "px");
	$('.caroufred li .home-overlay').css('top', $('.gallery').height()-81+'px');
}
//project list heights
function calculateProject()  {
	'use strict';
	var currentSmallestProject = 20000;
	$('.project-list-gallery').children('li').each(function(i){
		if ($(this).children('img').height() < currentSmallestProject) { currentSmallestProject = $(this).height(); }
	});  
	$('.project-list-gallery').css({'max-height': currentSmallestProject-5});
	$('.project-list .caroufredsel_wrapper').css("height", $('.project-list-gallery').height() + "px");
}
//portfolio images height
function calculateProduct()  {
	'use strict';
	var currentSmallest = 20000;
	$('.isotope-img').children('img').each(function(i){
		if ($(this).children('img').height() < currentSmallest) { currentSmallest = $(this).height(); }
	});  
	$('.isotope-img').css({'max-height': currentSmallest-1}); 
}
$(window).load(function(){	
	'use strict';
	calculateHome();
	calculateProject(); 
	if ($(window).width()>767){	
		calculateProduct(); 
	}	
	var $container = $('.portfolioContainer');
	$container.isotope('reLayout');
	$(window).resize(function() {
		setTimeout(function() {
			calculateHome();
		}, 300); 
			setTimeout(function() {
			calculateProject();
		}, 300); 
		var $container = $('.portfolioContainer');
		$container.isotope('reLayout');	
		calculateProduct(); 
		setTimeout(function() {
			$.waypoints('refresh');
		}, 500); 		
	});
});

