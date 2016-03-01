<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Магазин</a></li>
		<li class="breadcrumbs__item"><a href="#">Для нее</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Саквояжи</a></li>
	</ul>
</div>
<div class="catalog-products container">
    <div class="heading block-heading--mobile">
        <h2>Саквояжи</h2>
    </div>
	<div class="filter-list grid-noGutter">
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
    <div class="products-list clearfix">
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
		<div class="product-tile product-tile--half-wrapper">
			<div class="product-tile product-tile--half">
				<div class="product-tile__wrap">
					<div class="product-tile__image">
						<a href="#">
							<img src="images/product2.png" alt="" />
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
							<img src="images/product6.png" alt="" />
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
        <div class="product-tile">
            <div class="product-tile__wrap">
                <div class="product-tile__image">
                    <a href="#">
                        <img src="images/product9.png" alt="" />
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
                        <img src="images/product11.png" alt="" />
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
							<img src="images/product10.png" alt="" />
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
							<img src="images/product7.png" alt="" />
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
	<ul class="pagination">
		<li class="pagination__item pagination__item--prev"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
		<li class="pagination__item pagination__item--current"><a href="#">1</a></li>
		<li class="pagination__item"><a href="#">2</a></li>
		<li class="pagination__item"><a href="#">...</a></li>
		<li class="pagination__item"><a href="#">17</a></li>
		<li class="pagination__item pagination__item--next"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
	</ul>
</div>

<?php require ('footer.php') ?>