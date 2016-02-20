'use strict';

var LazyImages = {
    run: function () {
        var self = this;

        $(window).on('scroll', function () {
            self.loadImages();
        });

        self.loadImages();
    },

    loadImages: function () {
        var scrollTop = $(window).scrollTop();
        var windowHeight = window.innerHeight;
        var currentEls = $('.lazy-image-container');
        var result = [];
        currentEls.each(function(){
            var el = $(this);
            var offset = el.parent().offset();
            if(scrollTop + windowHeight >= offset.top) {
                $(this).fadeIn();
            }
        });
    }
};

module.exports = LazyImages;