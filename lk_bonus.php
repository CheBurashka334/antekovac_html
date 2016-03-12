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
	<div class="tile-block tile-block--bonus page--marg">
		<div class="grid bonus">
			<div class="col-4_xs-12">
				<div class="bonus__image">
					<img src="images/bonus-card.png"/>
				</div>
			</div>
			<div class="col-8_xs-12">
				<div class="bonus__info">
					<div class="bonus__heading">
						Ваша скидка: <span class="success-green-text">Начальный</span>
					</div>
					<div class="bonus__text">
						Скидка составляет: 3%</br>
						Ваш баланс: 75 000 руб.
					</div>
					<div class="bonus__note">
						<span class="light-text">До скидки 7% осталось набрать: 4 500 руб.</span></br>
						<a href="#" class="link--question">Правила начисления скидки</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>