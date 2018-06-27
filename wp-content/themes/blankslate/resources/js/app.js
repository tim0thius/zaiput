require('jquery');

jQuery(document).ready(function ($) {
	$('.action--show-slideshow').click(function(e){
		var initialSlideIndex = $(this).attr('data-index') - 1 + 1 // no idea why this works

			$(".block-gallery__slider").slick({
			  // normal options...
			  initialSlide: initialSlideIndex,
			  infinite: true,
			  dots: true, 
			  adaptiveHeight: true
			});

		$('body').addClass('state--slideshow-visible')
	})

	$('.action--hide-slideshow').click(function(){
		$('body').removeClass('state--slideshow-visible')
		$('.block-gallery__slider').slick('unslick');
	})

	$(".block-hero__slider").slick({
 
	  // normal options...
	  infinite: true,
	  dots: false,
	  lazyload: 'ondemand',
	  // the magic
	  responsive: [{
	 
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1,
	        infinite: true,
	        dots: true
	      }
	 
	    }, {
	 
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        dots: true
	      }
	 
	    }, {
	 
	      breakpoint: 300,
	      settings: "unslick" // destroys slick
	 
	    }]
	});	

	$('section.block-hero-content').last().addClass('last');
})