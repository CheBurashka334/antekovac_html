<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Корзина</a></li>
	</ul>
</div>
<div class="container">
	<div class="tile-page page--basket">
		<div class="tile-page__head">
			<div class="heading block-heading--mobile hidden-desktop hidden-medium hidden-small">
				<h2>ваша корзина</h2>
			</div>
			<div class="basket-toolbar hidden-mobile">
				<a href="javascript:void(0)" class="basket-toolbar__btn current" onclick="showBasketItemsList()">
					ваша корзина
					<div class="count">5</div>
				</a>
				<a href="javascript:void(0)" onclick="showBasketItemsList(2)" class="basket-toolbar__btn">
					отложенные товары
					<div class="count">1</div>
				</a>
			</div>
		</div>
		<div class="tile-page__body">
			<div class="basket-table">
				<div class="basket-table__head">
					<div class="basket-table__col basket-table__col--image">
						фото
					</div>
					<div class="basket-table__col basket-table__col--name">
						наименование товара
					</div>
					<div class="basket-table__col basket-table__col--quantity">
						кол-во
					</div>
					<div class="basket-table__col basket-table__col--price">
						стоимость
					</div>
					<div class="basket-table__col basket-table__col--sum">
						сумма
					</div>
					<div class="basket-table__col basket-table__col--actions"></div>
				</div>
				<div class="basket-table__row product">
					<div class="basket-table__col basket-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-7992.png"/></a>
						</div>
					</div>
					<div class="basket-table__col basket-table__col--name">
						<div class="product__name">Сумка №23 «Монте карло»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="basket-table__col basket-table__col--quantity">
						<div class="basket-quantity">
							<a href="javascript:void(0);" class="minus js-anim--click" onclick="setQuantity(72, 1, 'down', false);"><svg class="i-icon"><use xlink:href="#arrow"/></svg></a>
							<input class="base" type="text" size="3" id="QUANTITY_INPUT_72" name="QUANTITY_INPUT_72" maxlength="18" min="0" max="0" step="0" style="max-width: 50px" value="1" onchange="updateQuantity('QUANTITY_INPUT_72', '72', 0, false)">
							<a href="javascript:void(0);" class="plus js-anim--click" onclick="setQuantity(72, 1, 'up', false);"><svg class="i-icon"><use xlink:href="#arrow"/></svg></a>
						</div>
					</div>
					<div class="basket-table__col basket-table__col--price">
						<span class="product__price">20 900 ₽</span>
					</div>
					<div class="basket-table__col basket-table__col--sum">
						<span class="product__sum">20 900 ₽</span>
					</div>
					<div class="basket-table__col basket-table__col--actions">
						<div class="product__actions">
							<a href="/cart/?action=delay&amp;id=72">Отложить</a>
							<a class="delete" href="/cart/?action=delete&amp;id=72">Удалить</a>
						</div>
					</div>
				</div>
				<div class="basket-table__row product">
					<div class="basket-table__col basket-table__col--image">
						<div class="product__image">
							<a href="product_detail.php"><img src="images/catalog/afm-white-8010.png"/></a>
						</div>
					</div>
					<div class="basket-table__col basket-table__col--name">
						<div class="product__name">Сумка №23 «княгиня»</div>
						<div class="product__collection">коллекция: <a href="#">Альфонс Муха</a></div>
					</div>
					<div class="basket-table__col basket-table__col--quantity">
						<div class="basket-quantity">
							<a href="javascript:void(0);" class="minus js-anim--click" onclick="setQuantity(72, 1, 'down', false);"><svg class="i-icon"><use xlink:href="#arrow"/></svg></a>
							<input class="base" type="text" size="3" id="QUANTITY_INPUT_72" name="QUANTITY_INPUT_72" maxlength="18" min="0" max="0" step="0" style="max-width: 50px" value="1" onchange="updateQuantity('QUANTITY_INPUT_72', '72', 0, false)">
							<a href="javascript:void(0);" class="plus js-anim--click" onclick="setQuantity(72, 1, 'up', false);"><svg class="i-icon"><use xlink:href="#arrow"/></svg></a>
						</div>
					</div>
					<div class="basket-table__col basket-table__col--price">
						<span class="product__price">37 900 ₽</span>
					</div>
					<div class="basket-table__col basket-table__col--sum">
						<span class="product__sum">37 900 ₽</span>
					</div>
					<div class="basket-table__col basket-table__col--actions">
						<div class="product__actions">
							<a href="/cart/?action=delay&amp;id=72">Отложить</a>
							<a class="delete" href="/cart/?action=delete&amp;id=72">Удалить</a>
						</div>
					</div>
				</div>
			</div>
			<div class="basket-coupon">
				<div class="basket-coupon__title">личный промо-код на скидку</div>
				<div class="grid-middle">
					<div class="basket-coupon__field col-5">
						<input class="base" type="text" placeholder="Введите промо-код"/>
						<a href="javascript:void(0)" class="btn btn--flat-gray js-anim--click"><span class="btn-text">Применить</span></a>
					</div>
					<div class="basket-coupon__note col-6">Промо-код предоставляется каждому клиенту индивидуально</div>
				</div>
			</div>
		</div>
		<div class="tile-page__foot">
			<div class="grid-equalHeight-noGutter">
				<div class="col-9_sm-12">
					<div class="basket-totals basket__foot grid-noGutter">
						<div class="basket-totals--sum col">
							<div class="basket-totals__label">сумма:</div>
							<div class="basket-totals__result">66 900 ₽</div>
						</div>
						<div class="basket-totals--sale col">
							<div class="basket-totals__label">скидка:</div>
							<div class="basket-totals__result">3 000 ₽</div>
						</div>
						<div class="basket-totals--total col">
							<div class="basket-totals__label">Итог <span class="small-note-text">(без учета доставки):</span></div>
							<div class="basket-totals__result primary-color">63 900 ₽</div>
						</div>
					</div>
				</div>
				<div class="col-3_lg-3_md-3_sm-12">
					<button class="btn btn--dark--big js-anim--click"><span class="btn-text">Перейти к оформлению</span></button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>