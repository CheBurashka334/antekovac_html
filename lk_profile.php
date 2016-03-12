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
	<div class="tile-page page--profile">
		<div class="tile-page__body">
			<div class="grid-spaceBetween">
				<div class="col-6_lg-6_md-6_sm-6_xs-12 form-block">
					<div class="field required">
						<label class="field__label">Имя</label>
						<input type="text" class="field__inputtext" />
					</div>
					<div class="field required">
						<label class="field__label">Фамилия</label>
						<input type="text" class="field__inputtext" />
					</div>
					<div class="field required">
						<label class="field__label">Телефон</label>
						<input type="tel" class="field__inputtext field__inputtext--tel" />
					</div>
					<div class="field required">
						<label class="field__label">E-mail</label>
						<input type="email" class="field__inputtext field__inputtext--email" />
					</div>
					<div class="field required">
						<label class="field__label">Город</label>
						<div class="location-block-wrapper">
							<div class="location-block-wrapper">
								<div class="bx-sls ">
									<div class="dropdown-block bx-ui-sls-input-block">
										<span class="dropdown-icon"></span>
										<input type="text" autocomplete="off" class="dropdown-field" placeholder="Введите название ..." 
										style="display: none;">
										<div class="bx-ui-sls-container" style="margin: 0px; padding: 0px; border: none; position: relative;">
										<input type="text" disabled="disabled" autocomplete="off" class="bx-ui-sls-route" style="padding: 6px 0px 0px 8px; margin: 0px;">
										<input type="text" autocomplete="off" value="2173" class="bx-ui-sls-fake" placeholder="Введите название ..." title="Тюмень, Тюменская область, Урал, Россия"></div>

										<div class="dropdown-fade2white"></div>
										<div class="bx-ui-sls-loader"></div>
										<div class="bx-ui-sls-clear" title="Отменить выбор" style="display: block;"></div>
										<div class="bx-ui-sls-pane" style="overflow-y: auto; overflow-x: hidden; display: none;">
										<div class="bx-ui-sls-variants"></div></div>
									</div>
									<div class="bx-ui-sls-error-message"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6_lg-6_md-6_sm-6_xs-12 form-block">
					<div class="field">
						<label class="field__label">Пол</label>
						<select>
							<option value="m" selected>Мужской</option>
							<option value="f">Женский</option>
						</select>
					</div>
					<div class="field">
						<label class="field__label">Дата рождения</label>
						<div class="grid">
							<div class="col">
								<select>
									<option value="v1">1</option>
									<option value="v2">2</option>
									<option value="v3">3</option>
									<option value="v4">4</option>
									<option value="v5" selected>5</option>
									<option value="v6">6</option>
									<option value="v7">7</option>
								</select>
							</div>
							<div class="col">
								<select>
									<option value="v1">Январь</option>
									<option value="v2">Февраль</option>
									<option value="v3" selected>Март</option>
									<option value="v4">Апрель</option>
									<option value="v5">Май</option>
								</select>
							</div>
							<div class="col">
								<select>
									<option value="v1">1990</option>
									<option value="v2">1991</option>
									<option value="v3" selected>1992</option>
									<option value="v4">1993</option>
									<option value="v5">1994</option>
								</select>
							</div>
						</div>
					</div>
					<div class="field required">
						<label class="field__label">Несколько слов о Вас</label>
						<textarea rows="9" class="field__inputtext"></textarea>
					</div>
				</div>
			</div>
			<div class="note-text primary-color">Вся информация требуется исключительно для внутреннего анализа. Она никогда не будет передана третьим лицам.</div>
			<br><br>
			<button class="btn btn--dark--medium js-anim--click"><span class="btn-text">Сохранить настройки профиля</span></button>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>