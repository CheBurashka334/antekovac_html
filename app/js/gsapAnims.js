'use strict';

var gsapAnims = {
    getTL: function(elem) {
		//var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		var tl = new TimelineMax();
		var startPosition = 0;
		var endPosition = 0;
		var speedIndex = 1;
		var durationInPixels = 100;
		if(elem.attr('data-start-position')){
			startPosition = elem.attr('data-start-position');
		}
		if(elem.attr('data-end-position')){
			endPosition = elem.attr('data-end-position');
		}
		if(elem.attr('data-speed')){
			speedIndex = elem.attr('data-speed');
		}
		var duration = durationInPixels * speedIndex;
		
		/*if(scrollTop > (elem.offset().top + elem.offsetHeight()){
			tl.fromTo(elem, 0, {opacity: 0}, {opacity: 1, ease: Power0.easeNone})
			  .to(elem,duration,{yPercent: 100*endPosition, ease: Power1.easeInOut});
		} else {*/
			tl.fromTo(elem, 0, {opacity: 0}, {yPercent: 100*startPosition, opacity: 1, ease: Power0.easeNone})
			  .to(elem,duration,{yPercent: 100*endPosition, ease: Power1.easeInOut});
		//}
		return tl;
	},
};

module.exports = gsapAnims;