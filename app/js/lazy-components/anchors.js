'use strict';

var Anchors = {
    run: function() {
        var initer = $('[data-anchor]');

        initer.on('click', function() {
            var el = $(this).attr('href');
            $('body, html').animate({
                scrollTop: $(el).offset().top
            }, 500);
            return false;
        });
    }
};

module.exports = Anchors;