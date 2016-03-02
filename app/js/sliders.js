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
			{
                'selector' : '.set-products',
                'options' : {
                    items: 3,
					itemsDesktop: [1300,3],
					itemsDesktopSmall: [1024,2],
					itemsTablet: [768,1],
					itemsMobile: false,
                    nav: true,
                    navContainerClass: 'set-products-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', '']
                }
            },
			{
                'selector' : '.product-detail__slider',
                'options' : {
                    items: 1,
                    nav: true,
                    navContainerClass: 'compact-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', '']
                }
            },
        ];

        sliders.forEach(function(item) {
          $(item.selector).find('.owl-carousel').owlCarousel(item.options);
        });
    }
};

module.exports = Sliders;
