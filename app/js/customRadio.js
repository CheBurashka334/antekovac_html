'use strict';

var Radios = {
	run: function(){
		var self = this;
		
		$('.custom-radio input').each(function() {
			self.init($(this));
		});
		
		$('.custom-radio input').on('change', function(){
			self.change($(this));
		});
	},
	
    init: function (item) {
		
		if(item.prop('checked')){
			item.parents('.custom-radio').addClass('checked');
		}
		
    },
	
	change: function(item){
		
		var radios = item.attr('name');
		$('[name="'+radios+'"]').each(function(){
		
			if($(this).prop('checked')){
				$(this).parents('.custom-radio').addClass('checked');
			} else {
				$(this).parents('.custom-radio').removeClass('checked');
			}
			
		});
	}
};

module.exports = Radios;