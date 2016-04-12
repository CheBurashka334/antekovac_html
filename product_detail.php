<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Магазин</a></li>
		<li class="breadcrumbs__item"><a href="#">Для нее</a></li>
		<li class="breadcrumbs__item"><a href="#">Цирк</a></li>
		<li class="breadcrumbs__item"><a href="#">Сумки</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Сумка №40 «Небесно-голубое»</a></li>
	</ul>
</div>
<div class="container product-detail js-anim-scroll" data-start-position="0.1" data-speed="2">
	<button class="btn btn--square--only-icon btn-favorite hidden-desktop hidden-small hidden-medium">
		<svg class="i-icon i-icon--stroke"><use xlink:href="#heart"/></svg>
	</button>
	<div class="grid-equalHeight">
		<div class="col-7_lg-7_md-6_sm-6_xs-12 slider-wrapper">
			<div class="product-detail__slider js-anim-scroll" data-end-position="-0.5" data-speed="10">
				<div class="owl-carousel">
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8264.png" data-src="images/product-detail/big/afm-white-8264.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8265.png" data-src="images/product-detail/big/afm-white-8265.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8268.png" data-src="images/product-detail/big/afm-white-8268.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8273.png" data-src="images/product-detail/big/afm-white-8273.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8276.png" data-src="images/product-detail/big/afm-white-8276.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8278.png" data-src="images/product-detail/big/afm-white-8278.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8287.png" data-src="images/product-detail/big/afm-white-8287.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8291.png" data-src="images/product-detail/big/afm-white-8291.png">
					</div>
					<div class="product-detail__slide js-viewer-wrapper owl-lazy" data-fullimg="images/product-detail/full/afm-white-8293.png" data-src="images/product-detail/big/afm-white-8293.png">
					</div>
				</div>
			</div>
		</div>
		<div class="col-7_lg-5_md-6_sm-6_xs-12">
			<div class="product-detail__info tile-block tile-block--bordered--no-mobile no-margin js-anim-scroll">
				<div class="product-detail__buttons--outside hidden-mobile">
					<!-- .added если товар отложен -->
					<button class="btn btn--square--only-icon--primary btn-favorite js-anim--click js-toggle-box" data-box=".modal.message">
						<svg class="i-icon i-icon--stroke"><use xlink:href="#heart"/></svg>
					</button>
					<button class="btn btn--square--only-icon--dark btn-print js-anim--click">
						<svg class="i-icon"><use xlink:href="#print"/></svg>
					</button>
				</div>
				<div class="tile-block__wrapper grid-column-noGutter">
					<div class="product-detail__name">
						<div class="product-detail__title">
							<h1>Cумка №40 </br>Небесно-голубое</h1>
						</div>
						<div class="product-detail__price">
							<span class="price">20 900 ₽</span>
							<span class="availability availability--in-stock">Товар в наличии</span>
						</div>
					</div>
					<div class="tile-block--bordered--mobile">
						<div class="product-detail__desc">
							<p>Своеобразной формой дизайна, умелым сочетанием цветов и продуманностью удобной конструкции арт-объект без сомнения заслужит восхищение Ваше и окружающих. </p>
							<p>Особое внимание привлекает необычная форма сумки, при которой съемная внешняя часть обволакивает и защищает внутреннюю, выполненную из нежной замши разных оттенков. </p>
						</div>
						<div class="product-detail__params hidden-mobile">
							<table class="nostyle params-table">
								<tr><td class="param-name">Длина</td><td class="param-value">25 см</td></tr>
								<tr><td class="param-name">Ширина</td><td class="param-value">45 см</td></tr>
								<tr><td class="param-name">Высота</td><td class="param-value">154 см</td></tr>
								<tr><td class="param-name">Материал</td><td class="param-value">Натуральная кожа</td></tr>
							</table>
						</div>
						<div class="product-detail__buttons grid-noGutter">
							<div class="col">
								<button class="btn btn--dark--with-icon--big--main-anim btn-one-click js-anim--click js-toggle-box" data-box=".one-click-form">
									<svg class="i-icon"><use xlink:href="#arr-diagonal"/></svg>
									<span class="btn-text">Купить в 1 клик</span>
								</button>
							</div>
							<div class="col">
								<button class="btn btn--primary--with-icon--big--main-anim btn-add-to-cart js-anim--click">
									<svg class="i-icon"><use xlink:href="#basket"/></svg>
									<span class="btn-text">Купить</span>
								</button>
							</div>
						</div>
					</div>
					<div class="product-detail__like grid-noGutter-equalHeight">
						<div class="col">
							<button class="btn btn--with-icon btn--like js-anim--click">
								<svg class="i-icon"><use xlink:href="#fb-like"/></svg>
								<span class="btn-text">Мне нравится</span>
							</button>
						</div>
						<div class="col">
							<div class="product-detail__like__text">
								<span class="hidden-mobile">458 людям нравится этот товар</span>
								<span class="hidden-small hidden-medium hidden-desktop">Понравилось 458 людям</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container hidden-mobile show-print js-anim-scroll" data-start-position="0.5" data-speed="5">
    <div class="grid-equalHeight">
        <div class="col-5_lg-5_md-6 wrap">
            <div class="tile-block js-anim-scroll" data-start-position="1.5" data-speed="4.5">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#ind"/></svg></div>
                <h2>индивидуальный заказ</h2>
                <div class="tile-block__text">
                    <p>
                        Интернет магазин эксклюзивных сумок Анте Ковач дает возможность изменить модель сумки, нанести рисунок своей тематики, модифицировать внутреннее пространство , изменить длину, ширину, длину ручек и прочее.
                    </p>
                </div>
                <a href="#" class="btn btn--arrow btn--transparent">Подробнее</a>
            </div>
			<div class="tile-block tile-block--dark js-anim-scroll" data-start-position="1.3" data-speed="6.5">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#garantee"/></svg></div>
                <h2>гарантии возврата</h2>
                <div class="tile-block__text">
                    <p>
                        Вы можете самостоятельно забрать заказ из мастерской или воспользоваться доставкой. Доставка осуществляется собственной курьерской службой магазина в течение 1-3 дней...
                    </p>
                </div>
            </div>
			<div class="tile-block tile-block--dark hidden-large hidden-print js-anim-scroll" data-start-position="2" data-speed="8">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#share"/></svg></div>
                <h2>поделиться в сети</h2>
                <div class="tile-block__socials">
                    <a href="" class="i-icon">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-vk"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3_lg-3_md-6 wrap">
            <div class="tile-block tile-block--collection js-anim-scroll" data-start-position="2" data-speed="5.5">
                <div class="tile-block__wrapper" style="background-image: url(images/collection-circus_bg.jpg)">
                    <div class="collection__info">
						<div class="collection__icon">
							<img src="images/collection-circus_icon.png"/>
						</div>
						<div class="collection__note">
							Коллекция
						</div>
						<div class="collection__heading">
							Одиннадцатиклассница в цирке
						</div>
						<div class="collection__button">
							<a href="#" class="btn btn--transparent btn--arrow">
								Подробнее
							</a>
						</div>
					</div>
                </div>
            </div>
			<div class="tile-block hidden-large js-anim-scroll" data-start-position="2.5" data-speed="7">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#kcard"/></svg></div>
                <h2>Доставка и оплата</h2>
                <div class="tile-block__text">
                    <p>
                        Вы можете самостоятельно забрать заказ из мастерской или воспользоваться доставкой. Доставка осуществляется собственной курьерской службой магазина в течение 1-3 дней с момента размещения заказа в интернет-магазине, по адресу, который указан при регистрации или оформлении
                    </p>
                </div>
                <a href="#" class="btn btn--arrow btn--transparent">Подробнее</a>
            </div>
        </div>
		<div class="col-4 hidden-small hidden-medium wrap hidden-print">
			<div class="tile-block tile-block--dark js-anim-scroll" data-start-position="1.5" data-speed="5">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#share"/></svg></div>
                <h2>поделиться в сети</h2>
                <div class="tile-block__socials">
                    <a href="" class="i-icon">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="i-icon">
                        <i class="fa fa-vk"></i>
                    </a>
                </div>
            </div>
			<div class="tile-block js-anim-scroll" data-start-position="1.8" data-speed="5">
				<div class="tile-block__icon"><svg class="i-icon"><use xlink:href="#kcard"/></svg></div>
                <h2>Доставка и оплата</h2>
                <div class="tile-block__text">
                    <p>
                        Вы можете самостоятельно забрать заказ из мастерской или воспользоваться доставкой. Доставка осуществляется собственной курьерской службой магазина в течение 1-3 дней с момента размещения заказа в интернет-магазине, по адресу, который указан при регистрации или оформлении
                    </p>
                </div>
                <a href="#" class="btn btn--arrow btn--transparent">Подробнее</a>
            </div>
		</div>
    </div>
</div>
<div class="container media-lib hidden-mobile hidden-print">
	<div class="block-heading block-heading--mobile">
		<h2>медиатека</h2>
	</div>
	<div class="grid-equalHeight">
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<!-- миниатюра 300*300 -->
				<img src="images/product-detail/thumb/afm-white-8264.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8265.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8268.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8273.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8276.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8278.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8287.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8291.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="photo-container">
				<img src="images/product-detail/thumb/afm-white-8293.png" alt=""/>
			</div>
		</div>
		<div class="col-3_lg-3_md-4 media-lib__item">
			<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/T4mx78erGUo?rel=0&amp;showinfo=0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="block-heading block-heading--mobile">
		<h2>идеальный комплект</h2>
	</div>
	<div class="set-products">
		<div class="owl-carousel">
			<div class="set-products__slide">
				<div class="product-tile">
					<div class="product-tile__wrap">
						<div class="product-tile__image">
							<a href="#">
								<img src="images/product1.png" alt="" />
							</a>
						</div>
						<div class="product-tile__info">
							<div class="product-tile__name">
								Сумка №40 «Небесно-голубое»
							</div>
							<div class="product-tile__price">
								<div class="price">
									24 680 ₽
								</div>
							</div>
						</div>
						<div class="product-tile__like">
							<svg class="i-icon"role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
						</div>
						<div class="product-tile__overlay">
							<a href="#">
							   <svg class="i-icon"role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="set-products__slide">
				<div class="product-tile">
					<div class="product-tile__wrap">
						<div class="product-tile__image">
							<a href="#">
								<img src="images/product3.png" alt="" />
							</a>
						</div>
						<div class="product-tile__info">
							<div class="product-tile__name">
								Дорожная сумка
							</div>
							<div class="product-tile__price">
								<div class="price">
									24 680 ₽
								</div>
							</div>
						</div>
						<div class="product-tile__like">
							<svg class="i-icon"role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
						</div>
						<div class="product-tile__overlay">
							<a href="#">
							   <svg class="i-icon"role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="set-products__slide">
				<div class="product-tile">
					<div class="product-tile__wrap">
						<div class="product-tile__image">
							<a href="#">
								<img src="images/product4.png" alt="" />
							</a>
						</div>
						<div class="product-tile__info">
							<div class="product-tile__name">
								Клатч
							</div>
							<div class="product-tile__price">
								<div class="price">
									24 680 ₽
								</div>
							</div>
						</div>
						<div class="product-tile__like">
							<svg class="i-icon"role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
						</div>
						<div class="product-tile__overlay">
							<a href="#">
							   <svg class="i-icon"role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="set-products__slide">
				<div class="product-tile">
					<div class="product-tile__wrap">
						<div class="product-tile__image">
							<a href="#">
								<img src="images/product5.png" alt="" />
							</a>
						</div>
						<div class="product-tile__info">
							<div class="product-tile__name">
								Несессер
							</div>
							<div class="product-tile__price">
								<div class="price">
									24 680 ₽
								</div>
							</div>
						</div>
						<div class="product-tile__like">
							<svg class="i-icon"role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
						</div>
						<div class="product-tile__overlay">
							<a href="#">
							   <svg class="i-icon"role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="set-products__slide">
				<div class="product-tile">
					<div class="product-tile__wrap">
						<div class="product-tile__image">
							<a href="#">
								<img src="images/product8.png" alt="" />
							</a>
						</div>
						<div class="product-tile__info">
							<div class="product-tile__name">
								Портфель мж
							</div>
							<div class="product-tile__price">
								<div class="price">
									24 680 ₽
								</div>
							</div>
						</div>
						<div class="product-tile__like">
							<svg class="i-icon"role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
						</div>
						<div class="product-tile__overlay">
							<a href="#">
							   <svg class="i-icon"role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="viewer-placeholder"></div>
<div class="modal one-click-form">
	<div class="modal__wrap">
		<button class="btn btn--flat btn-close js-toggle-box" data-box=".modal.one-click-form"></button>
		<div class="modal__inner">
			<div class="grid-equalHeight-bigGutter">
				<div class="col-5 hidden-mobile">
					<div class="modal__image" style="background-image: url('images/product-detail/thumb/afm-white-8264.png');"></div>
				</div>
				<div class="col-7_xs-12">
					<div class="modal__content">
						<div class="modal__heading"><h2>Купить в 1 клик</h2></div>
						<div class="modal__form">
							<div class="field required">
								<label class="field__label">Ваше имя</label>
								<input type="text" class="field__inputtext" />
							</div>
							<div class="field required">
								<label class="field__label">Номер телефона / e-mail</label>
								<input type="text" class="field__inputtext" />
							</div>
							<button class="btn">Отправить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal message">
	<div class="modal__wrap">
		<button class="btn btn--flat btn-close js-toggle-box" data-box=".modal.message"></button>
		<div class="modal__inner">
			<div class="grid-bigGutter-middle">
				<div class="col-5 hidden-mobile">
					<div class="modal__image" style="background-image: url('images/product-detail/thumb/afm-white-8264.png');"></div>
				</div>
				<div class="col-7_xs-12">
					<div class="modal__content">
						<div class="modal__heading"><h2>товар добавлен в отложенное</h2></div>
						<div class="modal__text">
							<p class="light-text">Можете продолжить покупки или пеерйти в список отложенных товаров.</p>
						</div>
						<a href="#" class="btn btn--with-icon js-anim--click">
							<svg class="i-icon i-icon--small"><use xlink:href="#heart"/></svg>
							<span class="btn-text"><span class="hidden-mobile">Перейти в </span> Отложенные товары</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>