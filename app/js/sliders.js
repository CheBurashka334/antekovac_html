var Sliders = {
    run: function () {
        var sliders = [
            {
                'selector' : '.main-slider',
                'options' : {
                    items: 1,
                    nav: true,
					lazyLoad: true,
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
					lazyLoad: $('.set-products').attr('data-lazyload') ? !!+$('.set-products').attr('data-lazyload') : false,
                    navContainerClass:  $('.set-products').attr('data-nav-style') ? $('.set-products').attr('data-nav-style') : 'set-products-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', '']
                }
            },
			{
                'selector' : '.product-detail__slider',
                'options' : {
                    items: 1,
                    nav: true,
					lazyLoad: true,
                    navContainerClass: 'compact-navs',
                    navClass: ['nav-prev', 'nav-next'],
                    navText: ['', ''],
					mouseDrag: false,
                }
            },
			{
                'selector' : '.carousel--dark-navs',
                'options' : {
					responsive:{
						0: {
							items: $('.carousel--dark-navs').attr('data-items-xs') ? +$('.carousel--dark-navs').attr('data-items-xs') : 1,
							nav:  $('.carousel--dark-navs').attr('data-navs-xs') ? !!+$('.carousel--dark-navs').attr('data-navs-xs') :true,
							dots:  $('.carousel--dark-navs').attr('data-dots-xs') ? !!+$('.carousel--dark-navs').attr('data-dots-xs') : false
						},
						768: {
							items: $('.carousel--dark-navs').attr('data-items-sm') ? +$('.carousel--dark-navs').attr('data-items-sm') : 1,
							nav:  $('.carousel--dark-navs').attr('data-navs-sm') ? !!+$('.carousel--dark-navs').attr('data-navs-sm') : true,
							dots:  $('.carousel--dark-navs').attr('data-dots-sm') ? !!+$('.carousel--dark-navs').attr('data-dots-sm') : false
						},
						1025: {
							items: $('.carousel--dark-navs').attr('data-items-md') ? +$('.carousel--dark-navs').attr('data-items-md') : 1,
							nav:  $('.carousel--dark-navs').attr('data-navs-md') ? !!+$('.carousel--dark-navs').attr('data-navs-md') : true,
							dots:  $('.carousel--dark-navs').attr('data-dots-md') ? !!+$('.carousel--dark-navs').attr('data-dots-md') : false
						},
						1300: {
							items: $('.carousel--dark-navs').attr('data-items-lg') ? +$('.carousel--dark-navs').attr('data-items-lg') : 1,
							nav:  $('.carousel--dark-navs').attr('data-items-lg') ? !!+$('.carousel--dark-navs').attr('data-items-lg') : true,
							dots:  $('.carousel--dark-navs').attr('data-dots-lg') ? !!+$('.carousel--dark-navs').attr('data-dots-lg') : false
						}
					},
                    navContainerClass: 'dark-navs',
                    navClass: ['nav-prev', 'nav-next'],
					lazyLoad: $('.carousel--dark-navs').attr('data-lazyload') ? !!+$('.carousel--dark-navs').attr('data-lazyload') : false,
                    navText: ['', ''],
                }
            },
			{
                'selector' : '.carousel--dark-navs--compact',
                'options' : {
					responsive:{
						0: {
							items: $('.carousel--dark-navs--compact').attr('data-items-xs') ? +$('.carousel--dark-navs--compact').attr('data-items-xs') : 1,
							nav:  $('.carousel--dark-navs--compact').attr('data-navs-xs') ? !!+$('.carousel--dark-navs--compact').attr('data-navs-xs') :true,
							dots:  $('.carousel--dark-navs--compact').attr('data-dots-xs') ? !!+$('.carousel--dark-navs--compact').attr('data-dots-xs') : false
						},
						768: {
							items: $('.carousel--dark-navs--compact').attr('data-items-sm') ? +$('.carousel--dark-navs--compact').attr('data-items-sm') : 1,
							nav:  $('.carousel--dark-navs--compact').attr('data-navs-sm') ? !!+$('.carousel--dark-navs').attr('data-navs-sm') : true,
							dots:  $('.carousel--dark-navs').attr('data-dots-sm') ? !!+$('.carousel--dark-navs--compact').attr('data-dots-sm') : false
						},
						1025: {
							items: $('.carousel--dark-navs--compact').attr('data-items-md') ? +$('.carousel--dark-navs--compact').attr('data-items-md') : 1,
							nav:  $('.carousel--dark-navs--compact').attr('data-navs-md') ? !!+$('.carousel--dark-navs--compact').attr('data-navs-md') : true,
							dots:  $('.carousel--dark-navs--compact').attr('data-dots-md') ? !!+$('.carousel--dark-navs--compact').attr('data-dots-md') : false
						},
						1300: {
							items: $('.carousel--dark-navs--compact').attr('data-items-lg') ? +$('.carousel--dark-navs--compact').attr('data-items-lg') : 1,
							nav:  $('.carousel--dark-navs--compact').attr('data-items-lg') ? !!+$('.carousel--dark-navs--compact').attr('data-items-lg') : true,
							dots:  $('.carousel--dark-navs--compact').attr('data-dots-lg') ? !!+$('.carousel--dark-navs--compact').attr('data-dots-lg') : false
						}
					},
                    navContainerClass: 'dark-navs dark-navs--compact',
                    navClass: ['nav-prev', 'nav-next'],
					lazyLoad: $('.carousel--dark-navs--compact').attr('data-lazyload') ? !!+$('.carousel--dark-navs--compact').attr('data-lazyload') : false,
                    navText: ['', ''],
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
					lazyLoad: $('.carousel--dark-navs--outside').attr('data-lazyload') ? !!+$('.carousel--dark-navs--outside').attr('data-lazyload') : false,
					dots: false
                }
            },
			{
				'selector': '.modal__slider',
				'options': {
					items: 1,
					nav: true,
					lazyLoad: true,
					navContainerClass:  $('.modal__slider').attr('data-nav-style') ? $('.modal__slider').attr('data-nav-style') : 'arrow-thin-navs',
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
		$('.js-to-slide').on('click', function(e){
			e.preventDefault();
			var slide = $(this).attr('href');
			var pos = $('[data-slide="'+slide+'"]').parent('.owl-item').index();
			var slider = $('[data-slide="'+slide+'"]').parents('.owl-carousel');
			slider.trigger('to.owl.carousel',[pos,10,true]);
		});
    }
};

module.exports = Sliders;
