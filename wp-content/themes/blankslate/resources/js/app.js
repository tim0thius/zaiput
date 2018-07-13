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

	$(".block-highlights__testimonials-slider").slick({
	  // normal options...
	  infinite: true,
	  dots: true, 
	  adaptiveHeight: true
	});

	$('section.block-hero-content').last().addClass('last');

	$('.action--open-tab').click(function(){
		var targetId = $(this).attr('data-tab-target');
		$(this).addClass('active').parent().siblings().children().removeClass('active');

		$('.block-product-tabs__content[id="'+ targetId +'"]').addClass('active').siblings().removeClass('active');
		console.log(targetId);
	});
})