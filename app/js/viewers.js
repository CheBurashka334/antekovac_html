var Viewers = {
    run: function () {
		$.fn.viewer.setDefaults({
			'navbar': false,
			'title': false,
			'tooltip': false,
			'rotatable': false,
			'scalable': false,
			'fullscreen': false,
			'minZoomRatio': 0.3,
			'maxZoomRatio': 0.5
		});
		$('.js-viewer').viewer();
		$('.js-viewer-wrapper').on('click', function(){
			var fullimgSrc;
			if($(window).width() < 360){
				fullimgSrc = $(this).attr('data-fullimg-mobile') ? $(this).attr('data-fullimg-mobile') : $(this).attr('data-fullimg');
			} else if ($(window).width() < 700) {
				fullimgSrc = $(this).attr('data-fullimg-tablet') ? $(this).attr('data-fullimg-tablet') : $(this).attr('data-fullimg');
			} else {
				fullimgSrc = $(this).attr('data-fullimg');
			}
			var img = '<img class="js-viewer-fullimg hidden" src="'+fullimgSrc+'"/>';
			$('.viewer-placeholder').html(img);
			$().viewer('update');
			$('.js-viewer-fullimg').viewer('show');
		});
		$('.viewer-close').on('click', function(e){
			e.stopPropagation();
			$().viewer('hide');
		});
    }
};

module.exports = Viewers;