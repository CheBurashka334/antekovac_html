'use strict';

var SameHeight = {
    initer: function() {
        return $('[data-same-height]');
    },
    run: function () {
        var self = this;

        this.calculate();

        $(window).on('resize', function () {
            self.calculate();
        });
    },

    calculate: function () {
        var initer = $('[data-same-height]');
        initer.children().css('height', 'auto');

        $.each(initer, function () {
            var height = 0;
            $.each($(this).children(), function () {
                if ($(this).height() > height)
                    height = $(this).height();
            });

            $(this).children().height(height);
        });
    }
};

module.exports = SameHeight;