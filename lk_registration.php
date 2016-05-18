<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Регистрация</a></li>
	</ul>
</div>
<div class="container">
	<div class="tile-page page--marg">
		<div class="tile-page__body tile-page__body--bigPadding">
			<h2 class="base-color">регистрация</h2>
			<div class="grid-bigGutter">
				<div class="col-6_xs-12">
						<div class="field required">
							<label class="field__label">Ваше имя</label>
							<input type="text" class="field__inputtext" />
						</div>
						<div class="field required">
							<label class="field__label">Номер телефона</label>
							<input type="tel" class="field__inputtext field__inputtext--tel" />
							<div class="tooltip">
								<p>+(код страны)(код города или оператора)(номер телефона)</br>
								Например: +79001111111</p>
							</div>
						</div>
						<div class="field required">
							<label class="field__label">E-mail</label>
							<input type="email" class="field__inputtext field__inputtext--email" />
						</div>
				</div>
				<div class="col-6_xs-12">
					<div class="field required">
						<label class="field__label">Введите пароль</label>
						<input type="password" class="field__inputtext" />
					</div>
					<div class="field required">
						<label class="field__label">Повторите пароль</label>
						<input type="password" class="field__inputtext" />
					</div>
				</div>
			</div>
			<div class="form-actions grid-noGutter-middle">
				<input type="submit" class="btn btn--dark--medium" value="Зарегистрироваться"/>
				<div class="form-actions__links">
					<a href="#" class="link--dashed js-toggle-box" data-box=".modal.login-form">Я уже зарегистрирован</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>