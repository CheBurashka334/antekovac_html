'use strict';

// Load plugins

import 'jquery';
import 'normalize.css';

// Load styles

require('./styles/imports');

$(function () {
    //if ($('.owl-carousel').length) {
        require.ensure([], function (require) {
            require('owl.carousel');
            let Sliders = require('./js/sliders');
            Sliders.run();
        })
    //}
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
	if(($('.js-anim-scroll').length) && ($(window).width() > 1023)){
		function animation(){
			require.ensure([],function(require){
				require('gsap');
				let gsapAnims = require('./js/gsapAnims');
				var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
				$('.js-anim-scroll').each(function(){
					var tween = gsapAnims.getTL($(this));
						Scrollissimo.add(tween, 0, 60);
				});
				$(window).scroll(function(){
					Scrollissimo.knock();
				});
			});
		}
		setTimeout(function(){
			var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			if(scrollTop < $(window).height()/2){
				animation();
			} else {
				$('.js-anim-scroll').animate({'opacity': 1},500);
			}
		},500);
		$(window).on('resize', function(){
			setTimeout(function(){
				var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
				if(scrollTop < $(window).height()/2){
					animation();
				}
			},1000);
		});
	}
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

$(function(){
	$('input[type="file"]').on('change', function(){
		var self = this;
		var cssPrefix = self.className.split('__')[0];
		var filesListContainer = $(this).siblings('.'+cssPrefix+'__files-list');
		var contentToInsert = '';
		if(self.files.length > 0){
			if(self.multiple){
				for (var i = 0; i < self.files.length; i++){
					self.files[i].index = i;
					contentToInsert += getFileTemplate(self.files[i], true, cssPrefix)
				}
			} else {
				contentToInsert = getFileTemplate(self.files[0], true, cssPrefix);
			}
			filesListContainer.html(contentToInsert);
			
		} else {
			filesListContainer.html('');
		}
		console.dir(self.files);
	});
	$('.file-field').on('click', '.file-field__btn-delete', function(e){
		e.preventDefault();
		/*var cssPrefix = this.className.split('__')[0];
		var inputFile = $(this).parents('.'+cssPrefix).find('.'+cssPrefix+'__input')[0];
		var fileToDelIndex = +$(this).attr('data-delete-index');
		var otherFiles = [];
		for (var i = 0; i < inputFile.files.length; i++){
			if( i != fileToDelIndex){
				otherFiles.push(inputFile.files[i]);
			}
		}
		$(this).parents('.'+cssPrefix).find('.'+cssPrefix+'__input').val(otherFiles);*/
	});
});
function getFileTemplate(file, btn, cssPrefix){
	cssPrefix = cssPrefix || 'file-field';
	btn = btn || true;
	var templateStart = '<div class="'+cssPrefix+'__file">';
	var templateEnd = '</div>';
	var templateBtn = '';
	if(btn){
		templateBtn = '<button class="'+cssPrefix+'__btn-delete btn-delete" data-delete-index="'+file.index+'"></button>';
	}
	var templateFilename = '<span class="filename">'+file.name+'</span>';
	var template = templateStart+templateFilename+templateBtn+templateEnd;
	return template;
}
// validate forms
function isValid(el,type){
	type = type || 'required';
	switch (type){
		case 'email':
			var emailPattern = /.+@.+\..+/i;
			return emailPattern.test(el.val());
		break;
		/*case 'file':
			var typePattern = /ppt|pptx|doc|docx|xls|xlsx|txt|pdf|png|jpg/i;
			if((el[0].files[0].size > 10485760) || !(typePattern.test(el[0].files[0].name.split('.').pop()))) {
				return false;
			} else {
				return true;
			}
		break;*/
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
//$('body').on('change', 'input[type="file"]', function () {
	/*if (isValid($(this), 'file')) {
		$(this).removeClass('invalid').addClass('valid');
	} else {
		$(this).removeClass('valid').addClass('invalid');
	}*/
	//console.log('change');
//});

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

	/*$(this).find('input[type="file"]').each(function(){
		if (isValid($(this), 'file')) {
			$(this).removeClass('invalid').addClass('valid');
		} else {
			error = true;
			$(this).removeClass('valid').addClass('invalid');
		}
	});*/
	
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
			$(box).find('.btn-close').bind('click', function(){
				player.pauseVideo();
			});
			$(box).on('click', function(e){
				player.pauseVideo();
			});
		}
	});
});
