<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item"><a href="#">Магазин</a></li>
		<li class="breadcrumbs__item"><a href="#">Для нее</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Саквояжи</a></li>
	</ul>
</div>
<div class="catalog-products container">
    <div class="heading block-heading--mobile">
        <h2>Саквояжи</h2>
    </div>
	<div class="filter-list grid-noGutter hidden-mobile">
		<div class="filter-item col-3">
			<div class="dropdown">
				<div class="dropdown__caret"><svg class="i-icon"><use xlink:href="#arrow"/></svg></div>
				<div class="dropdown__value"></div>
				<ul class="dropdown__list">
					<li class="dropdown__item dropdown__item--placeholder">
						<input type="radio" class="dropdown__inp" name="filter-price" value="v0" id="filter-price-rad-v0"/>
						<label class="dropdown__title" for="filter-price-rad-v0">Цена</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-price" value="v1" id="filter-price-rad-v1"/>
						<label class="dropdown__title" for="filter-price-rad-v1">до 10 000 ₽</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-price" value="v2" id="filter-price-rad-v2"/>
						<label class="dropdown__title" for="filter-price-rad-v2">10 000 ₽ - 25 000 ₽</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-price" value="v3" id="filter-price-rad-v3"/>
						<label class="dropdown__title" for="-rad-v3">25 000 ₽ - 50 000 ₽</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-price" value="v4" id="filter-price-rad-v4"/>
						<label class="dropdown__title" for="filter-price-rad-v4">дороже 50 000 ₽</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="filter-item col-3">
			<div class="dropdown">
				<div class="dropdown__caret"><svg class="i-icon"><use xlink:href="#arrow"/></svg></div>
				<div class="dropdown__value"></div>
				<ul class="dropdown__list">
					<li class="dropdown__item dropdown__item--placeholder">
						<input type="radio" class="dropdown__inp" name="filter-color" value="v0" id="filter-color-rad-v0"/>
						<label class="dropdown__title" for="filter-color-rad-v0">Цвет</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-color" value="v1" id="filter-color-rad-v1"/>
						<label class="dropdown__title" for="filter-color-rad-v1">Белый</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-color" value="v2" id="filter-color-rad-v2"/>
						<label class="dropdown__title" for="filter-color-rad-v2">Черный</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-color" value="v3" id="filter-color-rad-v3"/>
						<label class="dropdown__title" for="filter-color-rad-v3">Бежевый</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-color" value="v4" id="filter-color-rad-v4"/>
						<label class="dropdown__title" for="filter-color-rad-v4">Всяко-разный</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="filter-item col-3">
			<div class="dropdown">
				<div class="dropdown__caret"><svg class="i-icon"><use xlink:href="#arrow"/></svg></div>
				<div class="dropdown__value"></div>
				<ul class="dropdown__list">
					<li class="dropdown__item dropdown__item--placeholder">
						<input type="radio" class="dropdown__inp" name="filter-collection" value="v0" id="filter-collection-rad-v0"/>
						<label class="dropdown__title" for="filter-collection-rad-v0">Коллекция</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-collection" value="v1" id="filter-collection-rad-v1"/>
						<label class="dropdown__title" for="filter-collection-rad-v1">Альфонс Муха. Модерн</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-collection" value="v2" id="filter-collection-rad-v2"/>
						<label class="dropdown__title" for="filter-collection-rad-v2">Architekt</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-collection" value="v3" id="filter-collection-rad-v3"/>
						<label class="dropdown__title" for="filter-collection-rad-v3">Кандинский цирк</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-collection" value="v4" id="filter-collection-rad-v4"/>
						<label class="dropdown__title" for="filter-collection-rad-v4">Тимофей Баженов коллекция KomplyMAN</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="filter-item col-3">
			<div class="dropdown">
				<div class="dropdown__caret"><svg class="i-icon"><use xlink:href="#arrow"/></svg></div>
				<div class="dropdown__value"></div>
				<ul class="dropdown__list">
					<li class="dropdown__item dropdown__item--placeholder">
						<input type="radio" class="dropdown__inp" name="filter-sort" value="v0" id="filter-sort-rad-v0"/>
						<label class="dropdown__title" for="filter-sort-rad-v0">Сортировка</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-sort" value="v1" id="filter-sort-rad-v1"/>
						<label class="dropdown__title" for="filter-sort-rad-v1">Сначала дороже</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-sort" value="v2" id="filter-sort-rad-v2"/>
						<label class="dropdown__title" for="-rad-v2">Сначала дешевле</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-sort" value="v3" id="filter-sort-rad-v3"/>
						<label class="dropdown__title" for="filter-sort-rad-v3">По популярности</label>
					</li>
					<li class="dropdown__item">
						<input type="radio" class="dropdown__inp" name="filter-sort" value="v4" id="filter-sort-rad-v4"/>
						<label class="dropdown__title" for="filter-sort-rad-v4">По алфавиту</label>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="sort-mobile mobile-fullwidth">
		<span class="sort-mobile__text">Сортировать:</span>
		<!-- id = name у соответстсвующего dropdown -->
		<select class="sort-mobile__sel js-dropdown-synh" name="filter-sort-sel" id="filter-sort">
			<option value="v1" selected>Сначала дороже</option>
			<option value="v2">Сначала дешевле</option>
			<option value="v3">По популярности</option>
			<option value="v4">По алфавиту</option>
		</select>
	</div>
	<div class="block-aside filter--aside filter-mobile mobile-only mobile-fullwidth--noGutter">
		<button class="btn btn-filter btn--square--primary--only-icon js-toggle-box" data-box=".filter-mobile">
			<svg class="i-icon"><use xlink:href="#filter"/></svg>
		</button>
		<?php require ('filter-mobile.php') ?>
	</div>
    <div class="products-list clearfix">
        <div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-7133.png" alt="" />
                    </a>
                </div>
                <div class="product-tile__info">
					<div class="product-tile__name">
						Сумка №40 «Небесно-голубое»
					</div>
					<div class="product-tile__label product-tile__label--sale">
						SALE
					</div>
					<div class="product-tile__price">
						<div class="price price--old">
							26 680 ₽
						</div>
						<div class="price">
							24 680 ₽
						</div>
					</div>
				</div>
                <div class="product-tile__like active">
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
        <div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-7166.png" alt="" />
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
		<div class="product-tile product-tile--half-wrapper">
			<div class="product-tile product-tile--half">
				<div class="product-tile__wrap">
					<div class="product-tile__image">
						<a href="#">
							<img src="images/catalog/afm-white-8122.png" alt="" />
						</a>
					</div>
					<div class="product-tile__info">
						<div class="product-tile__name">
							Ключница
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
			<div class="product-tile product-tile--half">
				<div class="product-tile__wrap">
					<div class="product-tile__image">
						<a href="#">
							<img src="images/catalog/afm-white-8134.png" alt="" />
						</a>
					</div>
					<div class="product-tile__info">
						<div class="product-tile__name">
						   Обложка
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
		<div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-7351.png" alt="" />
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
		<div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-7940.png" alt="" />
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
		<div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-7992.png" alt="" />
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
        <div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-8010.png" alt="" />
                    </a>
                </div>
				<div class="product-tile__info">
					<div class="product-tile__name">
						Рюкзак
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
		<div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/catalog/afm-white-8045.png" alt="" />
                    </a>
                </div>
				<div class="product-tile__info">
					<div class="product-tile__name">
						Саквояж
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
        <div class="product-tile product-tile--half-wrapper">
			<div class="product-tile product-tile--half">
				<div class="product-tile__wrap">
					<div class="product-tile__image">
						<a href="#">
							<img src="images/catalog/afm-white-8147.png" alt="" />
						</a>
					</div>
					<div class="product-tile__info">
						<div class="product-tile__name">
							Рюкзак
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
			<div class="product-tile product-tile--half">
				<div class="product-tile__wrap">
					<div class="product-tile__image">
						<a href="#">
							<img src="images/catalog/afm-white-8165.png" alt="" />
						</a>
					</div>
					<div class="product-tile__info">
					<div class="product-tile__name">
						Планшет
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
<div class="container">
	<ul class="pagination mobile-fullwidth--noGutter">
		<li class="pagination__item pagination__item--prev"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
		<li class="pagination__item"><a href="#">1</a></li>
		<li class="pagination__item pagination__item--more"><span>...</span></li>
		<li class="pagination__item"><a href="#">8</a></li>
		<li class="pagination__item"><a href="#">9</a></li>
		<li class="pagination__item pagination__item--current"><a href="#">10</a></li>
		<li class="pagination__item"><a href="#">11</a></li>
		<li class="pagination__item"><a href="#">12</a></li>
		<li class="pagination__item pagination__item--more"><span>...</span></li>
		<li class="pagination__item"><a href="#">17</a></li>
		<li class="pagination__item pagination__item--next"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
	</ul>
</div>
<div class="container hidden-mobile">
	<div class="tile-block">
		<h2 class="base-color">SEO-текст</h2>
		<div class="tile-block__text">
			<p>Своеобразной формой дизайна, умелым сочетанием цветов и продуманностью удобной конструкции арт-объект без сомнения заслужит восхищение Ваше и окружающих. Особое внимание привлекает необычная форма сумки, при которой съемная внешняя часть обволакивает и защищает внутреннюю, выполненную из нежной замши разных оттенков.</p>
			<p>Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Равным образом дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции позволяет оценить значение модели развития. Не следует, однако забывать, что начало повседневной работы по формированию позиции позволяет оценить значение дальнейших направлений развития. Товарищи! дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.</p>
			<div class="read-more collapsible">
				<div class="collapsible__body">
					<p>Своеобразной формой дизайна, умелым сочетанием цветов и продуманностью удобной конструкции арт-объект без сомнения заслужит восхищение Ваше и окружающих. Особое внимание привлекает необычная форма сумки, при которой съемная внешняя часть обволакивает и защищает внутреннюю, выполненную из нежной замши разных оттенков.</p>
					<p>Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Равным образом дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции позволяет оценить значение модели развития. Не следует, однако забывать, что начало повседневной работы по формированию позиции позволяет оценить значение дальнейших направлений развития. Товарищи! дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.</p>
				</div>
			</div>
			<a href="javascript:void(0);" class="collapsible__link js-toggle-box" data-box=".read-more">
				<span class="text-open">Читать полностью</span>
				<span class="text-close">Свернуть</span>
			</a>
		</div>
	</div>
	</br></br></br>
</div>
<?php require ('footer.php') ?>