<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Восстановление пароля</a></li>
	</ul>
</div>
<div class="container">
	<div class="tile-page page--marg">
		<div class="tile-page__body tile-page__body--bigPadding">
			<h2 class="base-color">Восстановление пароля</h2>
			<div class="grid-bigGutter">
				<div class="col-6_xs-12">
					<div class="field required">
						<label class="field__label">Введите свой e-mail</label>
						<input type="email" class="field__inputtext field__inputtext--email" />
					</div>
				</div>
			</div>
			<div class="form-actions grid-noGutter-middle">
				<input type="submit" class="btn btn--dark--medium" value="Восстановить пароль"/>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>