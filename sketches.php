<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Арт-лаборатория</a></li>
	</ul>
</div>
<div class="container page--sketches">
	<div class="heading block-heading--mobile">
        <h2>арт-лаборатория</h2>
    </div>
	<?php require ('art-lab_menu.php') ?>
	<div class="grid-equalHeight sketches-list">
		<div class="col-4_sm-12">
			<div class="tile-block tile-block--dark tile-block--individual mobile-minify">
				<div class="tile-block__heading"><h2>изделие с вашим рисунком</h2></div>
                <div class="tile-block__text">
                    <p>Вы можете заказать себе любой предмет со своим рисунком. Заполните форму и мы свяжемся с вами и все обсудим.</p>
				</div>
				<div class="tile-block__image">
					<img src="images/individual.png" alt=""/>
				</div>
                <button class="btn btn--arrow btn--transparent btn--fullwidth js-toggle-box" data-box=".modal.order-form">Заказать изделие со&nbsp;своим&nbsp;рисунком</button>
				<!-- форма из индивидуального заказа -->
			</div>
		</div>
		<div class="col-4_sm-6_xs-12">
			<div class="sketch sketch--big">
				<div class="sketch__image">
					<img src="images/sketches/sketch-1.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-1" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_sm-6_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-2.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-2" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-3.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-3" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-4.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-4" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-5.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-5" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-6.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-6" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-7.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-7" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-8.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-8" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-9.jpg" alt="" data-object-fit="cover" />
				</div>
				<div class="sketch__overlay">
					<a href="#sketch-9" class="sketch__link js-toggle-box js-to-slide" data-box=".modal.modal-slider">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
	</div>
	<ul class="pagination">
		<li class="pagination__item pagination__item--prev"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
		<li class="pagination__item pagination__item--current"><a href="#">1</a></li>
		<li class="pagination__item"><a href="#">2</a></li>
		<li class="pagination__item"><a href="#">...</a></li>
		<li class="pagination__item"><a href="#">17</a></li>
		<li class="pagination__item pagination__item--next"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
	</ul>
</div>
<div class="modal modal--fullsize modal-slider">
	<button class="btn btn--flat btn-close js-toggle-box" data-box=".modal.modal-slider"></button>
	<div class="modal__wrap">
		<div class="modal__slider">
			<div class="owl-carousel">
				<div class="modal-slider__slide" data-slide="#sketch-1">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-1.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-2">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-2.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-3">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-3.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-4">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-4.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-5">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-5.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-6">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-6.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-7">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-7.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-8">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-8.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
				<div class="modal-slider__slide" data-slide="#sketch-9">
					<img class="owl-lazy" data-src="images/sketches/full/sketch-9.jpg" alt=""/>
					<p class="slide-title align-center">Эскиз с названием „Голубая ночь”</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>