'use strict';

var Noodles = {
    run: function() {
		$('body').addClass('page-loaded');
		var scrollbarWidth = $('.page').width() - $(window).width();
		$('.page').css('padding-right', scrollbarWidth);
        $('.js-anim--hover')
			.on('mouseenter',function(){
				$(this).removeClass('anim-hover--end').addClass('anim-hover--start');
			})
			.on('mouseleave touchend',function(){
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
			if(!$(this).hasClass('js-to-slide') && !$(this).hasClass('js-yt-video')){
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
						if( ($(box).hasClass('page-aside')) || 
							($(box).hasClass('block-aside')) || 
							(($(box).hasClass('modal')) && !($('.page-aside').hasClass('open')))
						){
							if($('.page').hasClass('fixed')){
								position();
								$('.page').removeClass('fixed');
							} else {
								position('fix');
								$('.page').addClass('fixed');
							}
						}
						$(box).toggleClass('open');
						if($(box).hasClass('search-form') && $(box).hasClass('open')){
							$(box).find('.search-form__field input[type="text"]').focus();
						}
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
		
		$('.open > .collapsible-block').slideDown(500);
		$('.collapsible-block__header,.collapsible-block__btn').on('click', function(){
			var collapsibleWrapper = $(this).parents('.collapsible-block__wrapper');
			collapsibleWrapper.toggleClass('open');
			collapsibleWrapper.find('.collapsible-block').slideToggle(500);
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
		
		
		$('.js-play-video').on('click', function(e){
			if($(this).is('a')){
				e.preventDefault();
			}
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
		$('.js-toggle-playing-video').on('click', function(e){
			if($(this).is('a')){
				e.preventDefault();
			}
			if($(this).attr('data-video')){
				var video = $($(this).attr('data-video'))[0];
			} else {
				console.error('Video? Which video?');
			}
			var playerBox = $($(this).attr('data-video')).parent();
			if((video.played.length == 0) || video.paused || video.ended){
				if($('video').length > 1){
					var videoCollection = $('video');
					for (var i = 0; i < videoCollection.length; i++){
						if(videoCollection[i] != video){
							videoCollection[i].pause();
							$(videoCollection[i].offsetParent).removeClass('video--playing');
						}
					}
				}
				video.play();
				playerBox.addClass('video--playing');
			} else {
				playerBox.removeClass('video--playing');
				video.pause();
			}
			if(playerBox.parents('.modal--video').length){
				var modal = playerBox.parents('.modal--video').eq(0);
				modal.find('.btn-close').bind('click', function(){video.pause()});
				modal.bind('click', function(){video.pause()});
			}
		});
		
		if($('html').hasClass('bx-ie')){
			$('[data-object-fit]').each(function(){
				objectFit($(this));
			});
		}
		
		$('.messages__content').on('change', '.messages__selection input[type="checkbox"]', function(){
			var checkValue = $(this).prop('checked');
			if($(this).attr('data-check-all')){
				$('.messages__content').find('.messages__selection input[type="checkbox"]').each(function(){
					$(this).prop('checked', checkValue);
				});
				if(checkValue){
					$('.messages__content').find('.messages__dialog').addClass('messages__dialog--selected');
				} else {
					$('.messages__content').find('.messages__dialog').removeClass('messages__dialog--selected');
				}
			} else {
				if($(this).prop('checked')){
					$(this).parents('.messages__dialog').addClass('messages__dialog--selected');
				} else {
					$(this).parents('.messages__dialog').removeClass('messages__dialog--selected');
				}
			}
		});
		
		function objectFit(el){
			var fitType = el.attr('data-object-fit');
			var src = el.attr('src');
			el.wrap('<div class="object-fit-wrapper" style="background-image: url('+src+');background-size: '+fitType+';"></div>');
			el.hide();
		}
		if($('.js-same-height').length > 1){
			var heightCollection = {};
			$('.js-same-height').each(function(){
				if(!heightCollection[$(this).attr('data-set')]){
					heightCollection[$(this).attr('data-set')] = [];
				}
				heightCollection[$(this).attr('data-set')].push($(this).outerHeight());
			});
			for (var set in heightCollection){
				$('[data-set="'+set+'"]').each(function(){
					$(this).outerHeight(Math.max.apply(null,heightCollection[set]));
				});
			}
		}
		
		function position(fix) {
			if(fix == 'fix'){
				$('html').css('overflow', 'hidden');
			} else {
				$('html').css('overflow', '');
			}
		}
    }
};

module.exports = Noodles;