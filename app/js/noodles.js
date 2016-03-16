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
					$('.anim-hover--end').removeClass('anim-hover--end').addClass('anim-hover--after');
				},1000);
				setTimeout(function(){
					$('.anim-hover--after').removeClass('anim-hover--after');
				},1500);
			});
		$('.js-anim--click')
			.on('mousedown',function(){
				$(this).addClass('anim-click--play');
			})
			.on('mouseup',function(){
				$(this).removeClass('anim-click--play');
			});
			
		$('.js-toggle-box').on('click', function(){
			var box = $(this).attr('data-box');
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
			$(this).toggleClass('opened');
		});
		
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
			$('.header-menu__burger').addClass('scrolled--left');
		});
		$('.submenu__back').on('click', function(){
			$(this).parent('.submenu--sided').removeClass('open');
			if($(this).parents('.menu--multilevel--aside').length > 1){
				$(this).parents('.submenu--sided').eq(1).removeClass('next-level');
			} else {
				$(this).parents('.menu--multilevel--aside').removeClass('next-level');
				$(this).parents('.page-aside__menu').height('auto');
				$('.header-menu__burger').removeClass('scrolled--left');
			}
		});
		$('.page-aside.main-menu > .page-aside__wrap').on('scroll', function(){
			if($(this).scrollTop() > 0){
				$('.header-menu__burger').addClass('scrolled--top');
			} else {
				$('.header-menu__burger').removeClass('scrolled--top');
			}
		});
		
		
		$(window).on('scroll', function(){
			if($(window).scrollTop() > 100){
				$('.home-page .header').removeClass('header--transparent');
			} else {
				$('.home-page .header').addClass('header--transparent');
			}
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