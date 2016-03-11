var Viewers = {
    run: function () {
		$.fn.viewer.setDefaults({
			'navbar': false,
			'title': false,
			'tooltip': false,
			'rotatable': false,
			'scalable': false,
			'fullscreen': false
		});
		$('.js-viewer').viewer();
		$('.js-viewer-wrapper').on('click', function(){
			var img = '<img class="js-viewer-fullimg hidden" src="'+$(this).attr('data-fullimg')+'"/>';
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