require('jquery');

jQuery(document).ready(function ($) {
	$('.action--toggle-menu').click(function(e){
		$('.block-header--menu').toggleClass('state--open');
		$('.block-header__menu-toggle').toggleClass('state--open');
		e.preventDefault();
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

		$('.block-vertical-tabs__content[id="'+ targetId +'"]').addClass('active').siblings().removeClass('active');
		console.log(targetId);
	});

	$('.component-faq__question').click(function(){
		$(this).parent().toggleClass('state--open');
	});
})