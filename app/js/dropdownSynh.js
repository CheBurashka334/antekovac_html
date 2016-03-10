'use strict';

var DropdownSynh = {
	run: function(){
		var self = this;
		
		if($(window).outerWidth() < 769){
			$('.js-dropdown-synh').each(function() {
				self.init($(this));
			});
		}
		
		$('.js-dropdown-synh').change(function() {
			self.change($(this));
		});
	},
	init: function (item) {
		var dropdownName = item.attr('id');
		var value = item.val();
		$('[name="'+dropdownName+'"]:checked').prop('checked', false);
		console.log($('[name="'+dropdownName+'"][value="'+value+'"]'), value);
		$('[name="'+dropdownName+'"][value="'+value+'"]').prop('checked', true);
    },
	change: function(item){
		var dropdownName = item.attr('id');
		var value = item.val();
		$('[name="'+dropdownName+'"]:checked').prop('checked', false);
		console.log($('[name="'+dropdownName+'"][value="'+value+'"]'), value);
		$('[name="'+dropdownName+'"][value="'+value+'"]').prop('checked', true);
	}
};

module.exports = DropdownSynh;