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

    if($('.block-vertical-tabs__tab').length){
        set_tab_via_url();
    }

    video_fix_for_chrome();
    
})

function video_fix_for_chrome() {
    // var isIE = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isIE = /*@cc_on!@*/false || !!document.documentMode;

    if (isIE) {
        console.log('is IE');
        jQuery('#block-hero--frontpage').addClass('video--youtube');
        jQuery('body').addClass('is-ie');
    }
}

function set_tab_via_url() {

    page_hash = window.location.hash;

    // window.location.hash = '';
    tab_target = page_hash.replace('#', '');
    tab_target  = tab_target.replace(/^_/, '');
    scroll_to_target = '#' + jQuery('.block-vertical-tabs').first().attr('id');
    console.log(scroll_to_target);
    // scroll_to_target = jQuery('#block-product-tabs--multistage-extraction');


    if(tab_target != ''){
        scrollToTabs(tab_target, scroll_to_target);
    }   
}

function scrollToTabs(f_tab_target, f_scroll_to_target) {
    jQuery(`[data-tab-target='${f_tab_target}']`).click();
    setTimeout(function(){
        jQuery('html, body').animate({
        scrollTop: jQuery(scroll_to_target).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }, 500);
}
// setTimeout(video_fix_for_chrome, 2000);