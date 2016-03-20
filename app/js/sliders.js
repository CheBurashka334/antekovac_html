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
			/*{
                'selector' : '.carousel--mobile-only',
                'options' : {
					items: 1,
					dots: true,
					mergeFit: true,
					nav: false,
                }
            },*/
			{
                'selector' : '.set-products',
                'options' : {
					responsive:{
						0: {
							items: 1,
							nav: false,
							dots: true
						},
						768: {
							items: 2,
							nav: false,
							dots: false
						},
						1025: {
							items: 3,
							nav: false,
							dots: false
						},
						1300: {
							items: 3,
							nav: true,
							dots: false
						}
					},
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
                    navText: ['', ''],
					mouseDrag: false,
                }
            },
			{
                'selector' : '.carousel--dark-navs',
                'options' : {
                    items: 1,
                    nav: true,
                    navContainerClass: 'dark-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', ''],
					dots: false
                }
            },
			{
                'selector' : '.carousel--dark-navs--outside',
                'options' : {
                    items: 1,
                    nav: true,
                    navContainerClass: 'dark-navs dark-navs--outside',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', ''],
					dots: false
                }
            },
        ];

        sliders.forEach(function(item) {
          $(item.selector).find('.owl-carousel').owlCarousel(item.options);
        });
		
		if($(window).width() < 768){
			$('.carousel--mobile-only').owlCarousel({
				items: 1,
				dots: true,
				mergeFit: true,
				nav: false,
			});
		}
    }
};

module.exports = Sliders;
