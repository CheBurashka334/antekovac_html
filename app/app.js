'use strict';

// Load plugins

import 'jquery';
import 'normalize.css';

// Load styles

require('./styles/imports');


$(function () {
    if ($('.owl-carousel').length) {
        require.ensure([], function (require) {
            require('owl.carousel');
            let Sliders = require('./js/sliders');
            Sliders.run();
        })
    }
});

$(function(){
	if($('.js-viewer,.js-viewer-wrapper').length){
		require.ensure([],function(require){
			require('imageviewer');
			let Viewers = require('./js/viewers');
			Viewers.run();
		});
	}
});

let Scrollissimo = require('scrollissimo');
$(function(){
	function animation(){
		if(($('.js-anim-scroll').length) && ($(window).width() > 1023)){
			require.ensure([],function(require){
				require('gsap');
				let gsapAnims = require('./js/gsapAnims');
				$('.js-anim-scroll').each(function(){
					var tween = gsapAnims.getTL($(this));
					Scrollissimo.add(tween, 0, 60);
				});
				$(window).scroll(function(){
					Scrollissimo.knock();
				});
			});
		}
	}
	animation();
	$(window).on('resize', function(){
		setTimeout(animation(),1000);
	});
});

$(function(){
	if($(".js-scrollable-content").length){
		require.ensure([],function(require){
			require('jquery-mousewheel');
			require('malihu-custom-scrollbar-plugin')($);
			$(".js-scrollable-content").mCustomScrollbar({
				autoDraggerLength: false,
				theme: 'ant',
				setHeight: $(".js-scrollable-content").attr('data-height') ? $(".js-scrollable-content").attr('data-height') : '20em',
			});
		});
	}
});
$(function(){
	let objectFit = require('object-fit');
	objectFit.polyfill({
		selector: '.collection-block__image img',
		fittype: 'cover'
	});
});


let LazyImages = require('./js/lazyImages');
let Dropdowns = require('./js/dropdown');
let DropdownSynh = require('./js/dropdownSynh');
let Radios = require('./js/customRadio');
let Noodles = require('./js/noodles');


// Run components

$(function () {
    LazyImages.run();
});

$(function(){
	Dropdowns.run();
});
$(function(){
	DropdownSynh.run();
});
$(function(){
	Radios.run();
});

$(function(){
	Noodles.run();
});
// Export components

exports.lazyimages = LazyImages;
exports.dropdowns = Dropdowns;
exports.dropdownSynh = DropdownSynh;
exports.radios = Radios;
exports.Noodles;


// validate forms
function isValid(el,type){
	type = type || 'required';
	switch (type){
		case 'email':
			var emailPattern = /.+@.+\..+/i;
			return emailPattern.test(el.val());
		break;
		case 'file':
			var typePattern = /ppt|pptx|doc|docx|xls|xlsx|txt|pdf|png|jpg/i;
			if((el[0].files[0].size > 10485760) || !(typePattern.test(el[0].files[0].name.split('.').pop()))) {
				return false;
			} else {
				return true;
			}
		break;
		case 'required':
		default:
			if((el.val().length == 0) || ((el.attr('type') == 'checkbox') && (el.prop('checked') == false))){
				return false;
			} else {
				return true;
			}
		break;
	};
}
$('body').on('change', '.required input, .required textarea', function () {
	if ($(this).attr("type") == "tel"){
		if ($(this).inputmask("isComplete"))
			$(this).removeClass('invalid').addClass('valid');
		else
			$(this).removeClass('valid').addClass('invalid');
	} else {
		if (isValid($(this))) {
			$(this).removeClass('invalid').addClass('valid');
		} else {
			$(this).removeClass('valid').addClass('invalid');
		}
	}
});
$('body').on('change', 'input[type="email"]', function () {
	if (isValid($(this), 'email')) {
		$(this).removeClass('invalid').addClass('valid');
	} else {
		$(this).removeClass('valid').addClass('invalid');
	}
});
$('body').on('change', 'input[type="file"]', function () {
	if (isValid($(this), 'file')) {
		$(this).removeClass('invalid').addClass('valid');
	} else {
		$(this).removeClass('valid').addClass('invalid');
	}
});

$("body").on("submit", "form:not('[name=ORDER_FORM]')", function(){
	var error = false;

	$(this).find('.required input, .required textarea').each(function () {
		if ($(this).attr("type") == "tel"){
			if ($(this).inputmask("isComplete"))
				$(this).removeClass('invalid').addClass('valid');
			else{
				$(this).removeClass('valid').addClass('invalid');
				error = true;
			}
		} else {
			if (isValid($(this))) {
				$(this).removeClass('invalid').addClass('valid');
			} else {
				$(this).removeClass('valid').addClass('invalid');
				error = true;
			}
		}
	});

	$(this).find('input[type="email"]').each(function(){
		if (isValid($(this), 'email')) {
			$(this).removeClass('invalid').addClass('valid');
		} else {
			$(this).removeClass('valid').addClass('invalid');
			error = true;
		}
	});

	$(this).find('input[type="file"]').each(function(){
		if (isValid($(this), 'file')) {
			$(this).removeClass('invalid').addClass('valid');
		} else {
			error = true;
			$(this).removeClass('valid').addClass('invalid');
		}
	});

	if (error){
		BX.closeWait();
		return false;
	}
	
});

// video
$(function(){
	if($('.yt-video').length){
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/player_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	}
	$('.js-yt-video').on('click', function(e){
		e.preventDefault();
		var player;
		var videoID = $(this).attr('data-video-id');
		function onYouTubePlayerAPIReady(){
			player = new YT.Player(videoID, {
				height: '360',
				width: '640',
				videoId: videoID,
				playerVars: {
					autoplay: 1
				}
			});
		}
		onYouTubePlayerAPIReady();
		if($(this).hasClass('js-toggle-box')){
			var box = $(this).attr('data-box');
			$(box).find('.btn-close').bind('click', function(){player.stopVideo()});
		}
	});
});

// same height
$(function(){
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
});