<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Личный кабинет</a></li>
	</ul>
</div>
<div class="container">
	<div class="heading block-heading--mobile">
        <h2>Личный кабинет</h2>
    </div>
	<?php require ('lk_menu.php') ?>
	<div class="order-list page--marg">
		<div class="tile-block order order--processing">
			<div class="order-table">
				<div class="order-table__head">
					<div class="order-table__col order-table__col--image">
						фото
					</div>
					<div class="order-table__col order-table__col--name">
						наименование товара
					</div>
					<div class="order-table__col order-table__col--price">
						стоимость
					</div>
					<div class="order-table__col order-table__col--quantity">
						кол-во
					</div>
					<div class="order-table__col order-table__col--sum">
						сумма
					</div>
				</div>
				<div class="order-table__row product">
					<div class="order-table__col order-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-7992.png"/></a>
						</div>
					</div>
					<div class="order-table__col order-table__col--name">
						<div class="product__name">Сумка №23 «Монте карло»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="order-table__col order-table__col--price">
						<span class="product__price">20 900 ₽ <span class="mobile-only"> х 1</span></span>
					</div>
					<div class="order-table__col order-table__col--quantity hidden-mobile">
						<span class="product__quantity">1</span>
					</div>
					<div class="order-table__col order-table__col--sum">
						<span class="product__sum">20 900 ₽</span>
					</div>
				</div>
				<div class="order-table__row product">
					<div class="order-table__col order-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-8010.png"/></a>
						</div>
					</div>
					<div class="order-table__col order-table__col--name">
						<div class="product__name">Сумка №23 «княгиня»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="order-table__col order-table__col--price">
						<span class="product__price">20 900 ₽ <span class="mobile-only"> х 1</span></span>
					</div>
					<div class="order-table__col order-table__col--quantity hidden-mobile">
						<span class="product__quantity">1</span>
					</div>
					<div class="order-table__col order-table__col--sum">
						<span class="product__sum">37 900 ₽</span>
					</div>
				</div>
			</div>
			<div class="order-totals grid">
				<div class="col-3_lg-3_md-4_sm-4_xs-12">
					<div class="order-info">
						<span class="order-info__param">Заказ №12:</span>
						<span class="order-info__value order-info__value--noupper">25 января 2016</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">статус:</span>
						<span class="order-info__value">В обработке</span>
					</div>
				</div>
				<div class="col-3_lg-3_md-4_sm-6_xs-12">
					<div class="order-info hidden-mobile">
						<span class="order-info__param">сумма:</span>
						<span class="order-info__value">20 900 Р</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">способ доставки:</span>
						<span class="order-info__value">самовывоз</span>
					</div>
				</div>
			</div>
		</div>
		<div class="tile-block order order--processing">
			<div class="order-table">
				<div class="order-table__head">
					<div class="order-table__col order-table__col--image">
						фото
					</div>
					<div class="order-table__col order-table__col--name">
						наименование товара
					</div>
					<div class="order-table__col order-table__col--price">
						стоимость
					</div>
					<div class="order-table__col order-table__col--quantity">
						кол-во
					</div>
					<div class="order-table__col order-table__col--sum">
						сумма
					</div>
				</div>
				<div class="order-table__row product">
					<div class="order-table__col order-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-7992.png"/></a>
						</div>
					</div>
					<div class="order-table__col order-table__col--name">
						<div class="product__name">Сумка №23 «Монте карло»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="order-table__col order-table__col--price">
						<span class="product__price">20 900 ₽ <span class="mobile-only"> х 1</span></span>
					</div>
					<div class="order-table__col order-table__col--quantity hidden-mobile">
						<span class="product__quantity">1</span>
					</div>
					<div class="order-table__col order-table__col--sum">
						<span class="product__sum">20 900 ₽</span>
					</div>
				</div>
			</div>
			<div class="order-totals grid">
				<div class="col-3_lg-3_md-4_sm-4_xs-12">
					<div class="order-info">
						<span class="order-info__param">Заказ №12:</span>
						<span class="order-info__value order-info__value--noupper">25 января 2016</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">статус:</span>
						<span class="order-info__value">В обработке</span>
					</div>
				</div>
				<div class="col-3_lg-3_md-4_sm-6_xs-12">
					<div class="order-info hidden-mobile">
						<span class="order-info__param">сумма:</span>
						<span class="order-info__value">20 900 Р</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">способ доставки:</span>
						<span class="order-info__value">самовывоз</span>
					</div>
				</div>
			</div>
		</div>
		<div class="tile-block order order--complete">
			<div class="order-table">
				<div class="order-table__head">
					<div class="order-table__col order-table__col--image">
						фото
					</div>
					<div class="order-table__col order-table__col--name">
						наименование товара
					</div>
					<div class="order-table__col order-table__col--price">
						стоимость
					</div>
					<div class="order-table__col order-table__col--quantity">
						кол-во
					</div>
					<div class="order-table__col order-table__col--sum">
						сумма
					</div>
				</div>
				<div class="order-table__row product">
					<div class="order-table__col order-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-7992.png"/></a>
						</div>
					</div>
					<div class="order-table__col order-table__col--name">
						<div class="product__name">Сумка №23 «Монте карло»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="order-table__col order-table__col--price">
						<span class="product__price">20 900 ₽ <span class="mobile-only"> х 1</span></span>
					</div>
					<div class="order-table__col order-table__col--quantity hidden-mobile">
						<span class="product__quantity">1</span>
					</div>
					<div class="order-table__col order-table__col--sum">
						<span class="product__sum">20 900 ₽</span>
					</div>
				</div>
			</div>
			<div class="order-totals grid">
				<div class="col-3_lg-3_md-4_sm-4_xs-12">
					<div class="order-info">
						<span class="order-info__param">Заказ №12:</span>
						<span class="order-info__value order-info__value--noupper">25 января 2016</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">статус:</span>
						<span class="order-info__value">Выполнен</span>
					</div>
				</div>
				<div class="col-3_lg-3_md-4_sm-6_xs-12">
					<div class="order-info hidden-mobile">
						<span class="order-info__param">сумма:</span>
						<span class="order-info__value">20 900 Р</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">способ доставки:</span>
						<span class="order-info__value">самовывоз</span>
					</div>
				</div>
			</div>
		</div>
		<div class="tile-block order order--complete">
			<div class="order-table">
				<div class="order-table__head">
					<div class="order-table__col order-table__col--image">
						фото
					</div>
					<div class="order-table__col order-table__col--name">
						наименование товара
					</div>
					<div class="order-table__col order-table__col--price">
						стоимость
					</div>
					<div class="order-table__col order-table__col--quantity">
						кол-во
					</div>
					<div class="order-table__col order-table__col--sum">
						сумма
					</div>
				</div>
				<div class="order-table__row product">
					<div class="order-table__col order-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-7992.png"/></a>
						</div>
					</div>
					<div class="order-table__col order-table__col--name">
						<div class="product__name">Сумка №23 «Монте карло»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="order-table__col order-table__col--price">
						<span class="product__price">20 900 ₽ <span class="mobile-only"> х 1</span></span>
					</div>
					<div class="order-table__col order-table__col--quantity hidden-mobile">
						<span class="product__quantity">1</span>
					</div>
					<div class="order-table__col order-table__col--sum">
						<span class="product__sum">20 900 ₽</span>
					</div>
				</div>
			</div>
			<div class="order-totals grid">
				<div class="col-3_lg-3_md-4_sm-4_xs-12">
					<div class="order-info">
						<span class="order-info__param">Заказ №12:</span>
						<span class="order-info__value order-info__value--noupper">25 января 2016</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">статус:</span>
						<span class="order-info__value">Выполнен</span>
					</div>
				</div>
				<div class="col-3_lg-3_md-4_sm-6_xs-12">
					<div class="order-info hidden-mobile">
						<span class="order-info__param">сумма:</span>
						<span class="order-info__value">20 900 Р</span>
					</div>
					<div class="order-info">
						<span class="order-info__param">способ доставки:</span>
						<span class="order-info__value">самовывоз</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>