<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item"><a href="#">Корзина</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Оформление заказа</a></li>
	</ul>
</div>
<div class="container">
	<div class="tile-page page--checkout">
		<div class="tile-page__head">
			<div class="grid-noGutter-middle">
				<div class="col-6_lg-6_md-6_sm-12">
					<div class="heading block-heading--mobile">
						<h2>оформление заказа</h2>
					</div>
				</div>
				<div class="col-6_lg-6_md-6_sm-12">
					<div class="switch">
						<label for="PERSON_TYPE_1" class="switch__text switch__text--left">Физическое лицо</label>
						<span class="switch__field">
							<input type="radio" class="radio--left" id="PERSON_TYPE_1" name="PERSON_TYPE" value="1" checked="checked"/>
							<input type="radio" class="radio--right" id="PERSON_TYPE_2" name="PERSON_TYPE" value="2"/>
							<span class="switcher"></span>
						</span>
						<label for="PERSON_TYPE_2" class="switch__text switch__text--right">Юридическое лицо</label>
					</div>
				</div>
			</div>
		</div>
		<div class="tile-page__body">
			<div class="grid-bigGutter checkout-block checkout-block__personal">
				<div class="col-6_lg-6_md-6_sm-12">
					<div class="field required">
						<label class="field__label">Ф.И.О</label>
						<input type="text" class="field__inputtext" />
					</div>
					<div class="field required">
						<label class="field__label">E-mail</label>
						<input type="email" class="field__inputtext field__inputtext--email" />
					</div>
					<div class="field required">
						<label class="field__label">Телефон</label>
						<input type="tel" class="field__inputtext field__inputtext--tel" />
					</div>
				</div>
				<div class="col-6_lg-6_md-6_sm-12">
					<div class="field">
						<label class="field__label">Индекс</label>
						<input type="text" class="field__inputtext" />
					</div>
					<div class="field required">
						<label class="field__label">Местоположение</label>
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
					<div class="field required">
						<label class="field__label">Адрес</label>
						<input type="text" class="field__inputtext" />
					</div>
				</div>
			</div>
			<div class="grid checkout-block checkout-block__delivery">
				<div class="col-11_sm-12">
					<div class="heading block-heading--mobile">
						<h2>способ доставки</h2>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="delivery" value="v1" checked="checked" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Самовывоз <span class="primary-color">(Бесплатно)</span></span>
							</label>
							<div class="field__text">
								<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="delivery" value="v2" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Курьерская доставка по Москве в пределах МКАД <span class="primary-color">(400 рублей)</span></span>
							</label>
							<div class="field__text">
								<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм.</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="delivery" value="v3" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Курьерская доставка по Москве вне МКАД <span class="primary-color">(700 рублей)</span></span>
							</label>
							<div class="field__text">
								<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="delivery" value="v4" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Доставка в регионы России <span class="primary-color">(Индивидуально)</span></span>
							</label>
							<div class="field__text">
								<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="delivery" value="v5" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Доставка в другие страны <span class="primary-color">(Индивидуально)</span></span>
							</label>
							<div class="field__text">
								<p>Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять важные задания по разработке систем массового участия.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid checkout-block checkout-block__payment">
				<div class="col-6_sm-12">
					<div class="heading block-heading--mobile">
						<h2>способ оплаты</h2>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="payment" value="v1" checked="checked" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Оплата наличными в мастерской</span>
							</label>
							<div class="field__text">
								<p>Оплата в момент доставки товара</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="payment" value="v2" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Оплата картой в мастерской</span>
							</label>
							<div class="field__text">
								<p>Вы будете перемещены на страницу оплаты</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="payment" value="v3" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Uniteller (оплата банковской картой онлайн)</span>
							</label>
							<div class="field__text">
								<p>Яндекс.деньги, PayPal и др.</p>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="custom-radio">
							<label class="radio-label">
								<input type="radio" name="payment" value="v4" class="field__radio"/>
								<div class="custom-radio__circle"></div>
								<span class="custom-radio__heading">Оплата по счету</span>
							</label>
							<div class="field__text">
								<p>Яндекс.деньги, PayPal и др.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="basket">
			<div class="basket__body">
				<div class="heading block-heading--mobile">
					<h2>Состав заказа</h2>
				</div>
				Products here
			</div>
			<div class="basket__foot">
				Total
			</div>
		</div>
		<div class="tile-page__foot">
			<div class="grid-equalHeight-noGutter">
				<div class="col-9">
					<div class="field no-margin">
						<textarea class="field__inputtext field__inputtext--full" placeholder="КОММЕНТАРИЙ К ЗАКАЗУ:"></textarea>
					</div>
				</div>
				<div class="col-3">
					<button class="btn btn--dark--big">Оформить заказ</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>