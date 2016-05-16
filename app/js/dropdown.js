'use strict';

var Dropdowns = {
	run: function(){
		var self = this;
		
		$('.dropdown, .dropdown--mobile').each(function() {
			self.init($(this));
		});
		
		if($('html').hasClass('bx-touch')){
			$('.dropdown__value').on('click', function(e){
				e.stopPropagation();
				self.dClose();
				self.dOpen($(this).parents('.dropdown,.dropdown--mobile'));
			});
			$(window).on('click', function(){
				self.dClose();
			});
		} else {
			$('.dropdown').on('mouseenter', function(e){
				e.stopPropagation();
				self.dClose();
				self.dOpen($(this));
			});
			$('.dropdown').on('mouseleave',function(){
				self.dClose();
			});
		}
		
		
		$('.dropdown .dropdown__title').on('click', function(e){
			e.stopPropagation();
			self.change($(this));
			self.dClose();
		});
	},
	
    init: function (item) {
		
		var value;
		
		if(item.find('.dropdown__item--placeholder').length > 0){
			value = item.find('.dropdown__item--placeholder').eq(0).find('.dropdown__title').html();
		} else if(item.find('.dropdown__item--active').length > 0) {
			value = item.find('.dropdown__item--active').eq(0).find('.dropdown__title').html();
		} else {
			value = item.find('.dropdown__item').eq(0).find('.dropdown__title').html();
		}
		
		item.find('.dropdown__value').html(value);
		
    },

   dOpen: function (item) {
		item.addClass('open');
    },
	
	dClose: function(){
		$('.dropdown,.dropdown--mobile').removeClass('open');
	},
	
	change: function(item){
		var dropdown = item.parents('.dropdown,.dropdown--mobile');
		var value = item.html();
		item.parent('.dropdown__item')
			.addClass('.dropdown__item--active')
			.siblings().removeClass('.dropdown__item--active');
		dropdown.find('.dropdown__value').html(value);
	}
};

module.exports = Dropdowns;