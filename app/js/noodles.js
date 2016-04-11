'use strict';

var Noodles = {
    run: function() {
        $('.js-anim--hover')
			.on('mouseenter',function(){
				$(this).removeClass('anim-hover--end').addClass('anim-hover--start');
			})
			.on('mouseleave',function(){
				$(this).removeClass('anim-hover--start').addClass('anim-hover--end');
				setTimeout(function(){
					$('.anim-hover--end').removeClass('anim-hover--end');
				},1000);
			});
		$('.js-anim--click')
			.on('mousedown',function(){
				$(this).addClass('anim-click--play');
			})
			.on('mouseup',function(){
				$(this).removeClass('anim-click--play');
			});
			
		$('.js-toggle-box').on('click', function(e){
			if(!$(this).hasClass('js-to-slide')){
				e.preventDefault();
			}
			e.stopPropagation();
			toggleBox($(this));
		});
		function toggleBox(elem){
			var box = elem.attr('data-box');
			if(box != '' && box != 'undefined'){
				if($(box).length > 0){
					if($(box).hasClass('collapsible')) {
						$(box).slideToggle(500);
					} else {
						if(($(box).hasClass('page-aside')) || ($(box).hasClass('block-aside')) || ($(box).hasClass('modal'))){
							if($('.page').hasClass('fixed')){
								position();
								$('.page').removeClass('fixed');
							} else {
								position('fix');
								$('.page').addClass('fixed');
							}
						}
						$(box).toggleClass('open');
					}
				} else {
					console.error(box+' isn\'t found');
				}
			} else {
				console.error('Box? Which box?');
			}
			elem.siblings('.js-toggle-box').removeClass('opened');
			elem.toggleClass('opened');
		}
		
		$('.collapsible-block__header').on('click', function(){
			$(this).parent('.collapsible-block__wrapper').toggleClass('open');
			$(this).siblings('.collapsible-block').slideToggle(500);
		});
		
		if($(window).width() < 768){
			$('.read-more--mobile').each(function(){
				$(this).wrapInner('<div class="read-more collapsible"><div class="collapsible__body"></div></div>');
				$(this).append('<a href="javascript:void(0);" class="collapsible__link js-toggle-box" data-box=".read-more"><span class="text-open">Читать полностью</span><span class="text-close">Свернуть</span></a>');
			});
			$('.read-more--mobile').on('click', '.js-toggle-box', function(e){
				e.stopPropagation();
				toggleBox($(this));
			});
		}
		
		$('.menu--multilevel--aside > .menu-item--parent > .menu-item__link').on('click', function(e){
			e.preventDefault();
			if($(this).parents('.menu--multilevel--aside').length > 1){
				$(this).parents('.submenu--sided').first().addClass('next-level');
			} else {
				$(this).parents('.menu--multilevel--aside').addClass('next-level');
			}
			$(this).next('.submenu--sided').addClass('open');
			$(this).parents('.page-aside__menu').height($(this).next('.submenu--sided').children('.menu').height() + $(this).next('.submenu--sided').children('.submenu__back').outerHeight());
			$(this).parents('.page-aside__wrap').delay(300).animate({scrollTop: 0},250);
			$('.header-menu').addClass('scrolled--left');
		});
		$('.submenu__back').on('click', function(){
			$(this).parent('.submenu--sided').removeClass('open');
			if($(this).parents('.menu--multilevel--aside').length > 1){
				$(this).parents('.submenu--sided').eq(1).removeClass('next-level');
				$(this).parents('.page-aside__menu').height($(this).parents('.submenu--sided').eq(1).children('.menu').height() + $(this).parents('.submenu--sided').eq(1).children('.submenu__back').outerHeight());
			} else {
				$(this).parents('.menu--multilevel--aside').removeClass('next-level');
				$(this).parents('.page-aside__menu').height('auto');
				$('.header-menu').removeClass('scrolled--left');
			}
		});
		$('.page-aside.main-menu > .page-aside__wrap').on('scroll', function(){
			if($(this).scrollTop() > 0){
				$('.header-menu').addClass('scrolled--top');
			} else {
				$('.header-menu').removeClass('scrolled--top');
			}
		});
		
		
		$(window).on('scroll', function(){
			if($(window).scrollTop() > 100){
				$('.home-page .header').removeClass('header--transparent');
			} else {
				if(!$('.home-page').hasClass('fixed')){
					$('.home-page .header').addClass('header--transparent');
				}
			}
		});
		
		$('.page,.modal').on('click', function(){
			if($('.page').hasClass('fixed')){
				position();
				$('.page').removeClass('fixed');
				$('.page-aside.open,.modal.open').removeClass('open');
			}
		});
		$('.modal__wrap').on('click', function(e){
			e.stopPropagation();
		});
		$('.modal__wrap').on('click','.js-toggle-box', function(e){
			e.stopPropagation();
			toggleBox($(this));
		});
		
		
		$('.js-play-video').on('click', function(){
			if($(this).attr('data-video')){
				var video = $($(this).attr('data-video'))[0];
			} else {
				console.error('Video? Which video?');
			}
			video.play();
			$(this).siblings('.js-toggle-box').each(function(){
				$(this).bind('click', function(){video.pause()});
			});
		});
		
		function position(fix) {
			if(fix == 'fix'){
				var pos = $(window).scrollTop();
				$('.page').css({'position': 'fixed', 'top': - pos+'px'});
			} else {
				var pos = parseInt($('.page').css('top'), 10);
				$('.page').css({'position': 'relative', 'top': 0});
				$(window).scrollTop(-pos);
			}
		}
    }
};

module.exports = Noodles;