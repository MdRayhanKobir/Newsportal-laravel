(function ($) {
	"use strict";
 
    jQuery(document).ready(function($){


        

		$(".news_sec").owlCarousel({
		    dots: false,
			autoplay: true,
			animateOut: 'fadeOut',
			margin: 15,
			loop: true,
			nav: true,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
			],
		    responsiveClass: true,
		    responsive: {
		        0:{
		          items: 1
		        },
		        480:{
		          items: 2
		        },
		        768:{
		          items: 2 
		        },
		        800:{
		          items: 3
		        }
		    }
		});

		$(".gallery_sec").owlCarousel({
		    dots: false,
			autoplay: true,
			animateOut: 'fadeOut',
			margin: 15,
			loop: true,
			nav: true,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
			],
		    responsiveClass: true,
		    responsive: {
		        0:{
		          items: 1
		        },
		        480:{
		          items: 2
		        },
		        768:{
		          items: 2 
		        },
		        800:{
		          items: 3
		        }
		    }
		});



    });


    jQuery(window).load(function(){

        
    });


}(jQuery));
