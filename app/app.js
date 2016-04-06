'use strict';

// Load plugins

import 'jquery';
import 'normalize.css';
//import 'jquery.inputmask';

// Load styles

require('./styles/imports');
// require('./styles/fonts.css');

// Lazy components

/*var lazyComponents = [
    { name: 'sameHeight', data: '[data-same-height]' },
    { name: 'anchors', data: '[data-anchor]' }
];*/

// Run lazy components

/*$(function () {
    lazyComponents.forEach(function(item) {
        if ($(item.data).length) {
            require('bundle!./js/lazy-components/' + item.name + '.js')(function(component) {
                component.run();
            })
        }
    });
});*/

// Load carousel 

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

/*$(function(){
	if($('input[type="tel"]').length){
		require.ensure([],function(require){
			let inputmask = require('jquery.inputmask');
			//$('input[type="tel"]').inputmask("+7(999)999-99-99");
			$('input[type="tel"]').each(function(){
				//let inputmask = require('jquery.inputmask');
				/*var im = new Inputmask("+7(999)999-99-99");
				im.mask($(this));*//*
				$(this).inputmask("+7(999)999-99-99");
			});
		});
	}
});*/

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
//exports.sameheight = SameHeight;
//exports.anchors = Anchors;
//exports.sliders = Sliders;
exports.dropdowns = Dropdowns;
exports.dropdownSynh = DropdownSynh;
exports.radios = Radios;
exports.Noodles;
