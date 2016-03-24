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
							items: $('.set-products').attr('data-items-xs') ? +$('.set-products').attr('data-items-xs') : 1,
							nav:  $('.set-products').attr('data-navs-xs') ? !!+$('.set-products').attr('data-navs-xs') : false,
							dots:  $('.set-products').attr('data-dots-xs') ? !!+$('.set-products').attr('data-dots-xs') : true
						},
						768: {
							items: $('.set-products').attr('data-items-sm') ? +$('.set-products').attr('data-items-sm') : 2,
							nav:  $('.set-products').attr('data-navs-sm') ? !!+$('.set-products').attr('data-navs-sm') : false,
							dots:  $('.set-products').attr('data-dots-sm') ? !!+$('.set-products').attr('data-dots-sm') : false
						},
						1025: {
							items: $('.set-products').attr('data-items-md') ? +$('.set-products').attr('data-items-md') : 3,
							nav:  $('.set-products').attr('data-navs-md') ? !!+$('.set-products').attr('data-navs-md') : false,
							dots:  $('.set-products').attr('data-dots-md') ? !!+$('.set-products').attr('data-dots-md') : false
						},
						1300: {
							items: $('.set-products').attr('data-items-lg') ? +$('.set-products').attr('data-items-lg') : 3,
							nav:  $('.set-products').attr('data-items-lg') ? !!+$('.set-products').attr('data-items-lg') : true,
							dots:  $('.set-products').attr('data-dots-lg') ? !!+$('.set-products').attr('data-dots-lg') : false
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
