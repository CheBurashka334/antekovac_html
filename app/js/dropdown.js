'use strict';

var Dropdowns = {
	run: function(){
		var self = this;
		
		$('.dropdown').each(function() {
			self.init($(this));
		});
		
		$('.dropdown__value').on('click', function(e){
			e.stopPropagation();
			self.dClose();
			self.dOpen($(this).parent('.dropdown'));
		});
		
		$(window).on('click', function(){
			self.dClose();
		});
		
		$('.dropdown .dropdown__title').on('click', function(e){
			e.stopPropagation();
			self.change($(this));
			self.dClose();
		});
	},
	
    init: function (item) {
		
		var value;
		
		if(item.find('.dropdown__item--placeholder').length > 0){
			value = item.find('.dropdown__item--placeholder').eq(0).find('.dropdown__title').text();
		} else if(item.find('.dropdown__item--active').length > 0) {
			value = item.find('.dropdown__item--active').eq(0).find('.dropdown__title').text();
		} else {
			value = item.find('.dropdown__item').eq(0).find('.dropdown__title').text();
		}
		
		item.find('.dropdown__value').text(value);
		
    },

   dOpen: function (item) {
		item.addClass('open');
    },
	
	dClose: function(){
		$('.dropdown').removeClass('open');
	},
	
	change: function(item){
		var dropdown = item.parents('.dropdown');
		var value = item.text();
		item.parent('.dropdown__item')
			.addClass('.dropdown__item--active')
			.siblings().removeClass('.dropdown__item--active');
		dropdown.find('.dropdown__value').text(value);
	}
};

module.exports = Dropdowns;