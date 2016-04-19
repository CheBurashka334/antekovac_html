var Viewers = {
    run: function () {
		$.fn.viewer.setDefaults({
			'navbar': false,
			'title': false,
			'tooltip': false,
			'rotatable': false,
			'scalable': false,
			'fullscreen': false,
			'minZoomRatio': 0.1,
			'maxZoomRatio': 3
		});
		$('.js-viewer').viewer();
		$('.js-viewer-wrapper').on('click', function(){
			var img = '<img class="js-viewer-fullimg hidden" src="'+$(this).attr('data-fullimg')+'"/>';
			$('.viewer-placeholder').html(img);
			var maxZoom = $(this).attr('data-max-zoom') ? $(this).attr('data-max-zoom') : 3;
			//var viewer = new Viewer($('.js-viewer-fullimg'),{'maxZoomRatio': maxZoom});
			$().viewer('update');
			$('.js-viewer-fullimg').viewer({'maxZoomRatio': maxZoom});
			$('.js-viewer-fullimg').viewer('show');
		});
		$('.viewer-close').on('click', function(e){
			e.stopPropagation();
			$().viewer('hide');
		});
    }
};

module.exports = Viewers;