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
    }
};

module.exports = Noodles;