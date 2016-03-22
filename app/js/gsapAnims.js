'use strict';

var gsapAnims = {
    run: function() {
		var self = this;
		
		if($('.js-anim-scroll--init').length){
			self.init();
		}
		if($('.js-anim-scroll--scrollable').length){
			require('scrollissimo');
			$('.js-anim-scroll--scrollable').each(function(){
				var elem = $(this);
				var startPosition = 1;
				var speedIndex = 1;
				if(elem.attr('data-start-position')){
					startPosition = elem.attr('data-start-position')
				}
				if(elem.attr('data-speed')){
					speedIndex = elem.attr('data-speed')
				}
				self.scrolling(elem,startPosition,speedIndex);
			});
		}
	},
	init: function(){
		var tween = TweenLite.fromTo('.js-anim-scroll--init',0.5,{yPercent: 100, opacity: 0},{yPercent: 0, opacity: 1});
	},
	scrolling: function(elem,startPosition,speedIndex){
		if(startPosition == 1){
			var tween = TweenLite.to(elem,100*speedIndex,{yPercent: 0});
		} else {
			var tween = TweenLite.fromTo(elem,100*speedIndex,{yPercent: 100*startPosition},{yPercent: 0});
		}
		scrollissimo.add(tween, 0, 60);
		$(window).scroll(function(){
			scrollissimo.knock();
		});
	}
};

module.exports = gsapAnims;