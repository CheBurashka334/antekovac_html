<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Контакты</a></li>
	</ul>
</div>
<div class="container page--contacts">
	<div class="heading block-heading--mobile">
        <h2>Контакты</h2>
    </div>
	<div class="tile-block mobile-fullwidth mobile-delimiter">
		<div class="grid-equalHeight">
			<div class="col-6_sm-12">
				<div class="contacts__block">
					<h4>Контакты мастерской Шоу-рума</h4>
					<span class="label--left">Адрес:</span>
					<p>	107140, Москва, 1-й&nbsp;Красносельский </br>
						переулок,д.3</p>
					<span class="label--left">Тел.:</span>
					<p>	8&nbsp;495&nbsp;789&nbsp;75&nbsp;55 </br>
						8&nbsp;800&nbsp;700&nbsp;75&nbsp;99</p>
				</div>
				<div class="contacts__block">
					<h4>Режим работы</h4>
					<p>	Пн-Пт:  9:00&nbsp;до&nbsp;20:00 </br>
						Сб:  13:00&nbsp;до&nbsp;14:00</p>
					<p class="primary-color">По предварительной договоренности по телефону </br>
					8&nbsp;495&nbsp;789&nbsp;75&nbsp;55 визит строго по договоренности</p>
				</div>
				<div class="contacts__block">
					<h4>Как добраться</h4>
					<p>Выход из метро один, далее налево вдоль ул. Краснопрудной до пересечения с ТТК, далее левее через тоннель (необходимо пересечь ТТК), далее прямо 50 м, первый поворот налево, красный кирпичный дом, цоколь первого подъезда. От метро 350 м, время в пути 4-5 мин.</p>
				</div>
			</div>
			<div class="col-6_sm-12">
				<div class="contacts__map map" id="contacts-map"></div>
			</div>
		</div>
		<div class="contacts__block">
			<h4>Наши магазины</h4>
			<div class="grid-2_xs-1">
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
				<div class="col primary-color">Москва, 1-й Красносельский переулок,д.3 </div>
			</div>
		</div>
	</div>
	<div class="tile-block mobile-fullwidth">
		<div class="grid contacts__form">
			<div class="col-6_xs-12">
				<div class="tile-block__heading"><h2>напишите нам</h2></div>
					<div class="tile-block__form">
						<div class="field required">
							<label class="field__label">Ваше имя</label>
							<input type="text" class="field__inputtext" />
						</div>
						<div class="field required">
							<label class="field__label">Номер телефона / e-mail</label>
							<input type="text" class="field__inputtext" />
						</div>
						<div class="field required">
							<label class="field__label">Сообщение</label>
							<textarea class="field__inputtext" rows="6"></textarea>
						</div>
						<button class="btn">Отправить сообщение</button>
					</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>