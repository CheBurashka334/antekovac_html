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
				},500);
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
					$(box).toggleClass('open');
				} else {
					console.error(box+' isn\'t found');
				}
			} else {
				console.error('Box? Which box?');
			}
		});
		
		$('.menu--multilevel--aside > .menu-item--parent > .menu-item__link').on('click', function(e){
			e.preventDefault();
			if($(this).parents('.menu--multilevel--aside').length > 1){
				$(this).parents('.submenu--sided').first().addClass('next-level');
			} else {
				$(this).parents('.menu--multilevel--aside').addClass('next-level');
			}
			$(this).next('.submenu--sided').addClass('open');
			$('.header-menu__burger').hide();
		});
		$('.submenu__back').on('click', function(){
			$(this).parent('.submenu--sided').removeClass('open');
			if($(this).parents('.menu--multilevel--aside').length > 1){
				$(this).parents('.submenu--sided').eq(1).removeClass('next-level');
			} else {
				$(this).parents('.menu--multilevel--aside').removeClass('next-level');
				$('.header-menu__burger').show();
			}
		});
		
		
		
		$(window).on('scroll', function(){
			if($(window).scrollTop() > 100){
				$('.home-page .header').removeClass('header--transparent');
			} else {
				$('.home-page .header').addClass('header--transparent');
			}
		});
    }
};

module.exports = Noodles;