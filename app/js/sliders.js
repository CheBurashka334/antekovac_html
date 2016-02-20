var Sliders = {
    run: function () {
        var sliders = [
            {
                'selector' : '.main-slider',
                'options' : {
                    items: 1,
                    nav: true,
                    navContainerClass: 'main-slider-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', '']
                }
            },
            // {
            //     'selector' : '.index-new-products',
            //     'options' : {
            //         items: 1,
            //         nav: true,
            //         // navContainerClass: 'main-slider-navs',
            //         // navClass: ['nav-prev', 'nav-next'],
            //         navText: ['', '']
            //     }
            // }
        ];

        sliders.forEach(function(item) {
          $(item.selector).find('.owl-carousel').owlCarousel(item.options);
        });
    }
};

module.exports = Sliders;
