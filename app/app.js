'use strict';

// Load plugins

import 'jquery';
import 'normalize.css';

// Load styles

require('./styles/imports');
// require('./styles/fonts.css');

// Lazy components

var lazyComponents = [
    { name: 'sameHeight', data: '[data-same-height]' },
    { name: 'anchors', data: '[data-anchor]' }
];

// Run lazy components

$(function () {
    lazyComponents.forEach(function(item) {
        if ($(item.data).length) {
            require('bundle!./js/lazy-components/' + item.name + '.js')(function(component) {
                component.run();
            })
        }
    });
});

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
