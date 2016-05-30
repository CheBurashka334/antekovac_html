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
		<a href="#" class="link--exit">Выход</a>
    </div>
	<?php require ('lk_menu.php') ?>
	<div class="tile-page page--lk-messages">
		<div class="tile-page__body">
			<div class="messages__content">
				<div class="messages-list__actions messages-list__actions--admin">
					<div class="messages__selection">
						<input type="checkbox" class="tick" data-check-all="true" id="check-all"/><label for="check-all" class="checkbox-lbl"></label>
					</div>
					<div class="messages__filter">
						<a href="#" class="link--dashed">непрочитанные (1)</a>
						<a href="#" class="link--dashed">прочитанные (3)</a>
					</div>
					<button class="btn btn--flat-light-gray">удалить</button>
					<div class="messages__search-form">
						<div class="search-form__field">
							<input type="text" class="transparent" placeholder="Поиск по сообщениям">
							<button class="btn btn--flat--square--only-icon">
								<svg class="i-icon i-icon--stroke"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#zoom"></use></svg>
							</button>
						</div>
					</div>
				</div>
				<div class="messages__list">
					<div class="messages__dialog">
						<div class="messages__dialog-header">
							<div class="messages__selection">
								<input type="checkbox" class="tick" id="check-1"/><label for="check-1" class="checkbox-lbl"></label>
								<!-- отмечено как важное - класс .selected у кнопки -->
								<button class="btn btn--only-icon--square--flat btn-star selected">
									<svg class="i-icon"><use xlink:href="#star"/></svg>
								</button>
							</div>
							<div class="message">
								<div class="message__theme">
									<span class="notification">3</span>
									<span class="message__author">Cheburashka, </span>
									<span class="theme-text">Сумка №23 «княгиня»</span>
								</div>
								<div class="message__text">
									<p>В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. </p>
								</div>
							</div>
							<div class="message__date">
								<span class="light-text small-text">25.03.2016</span>
							</div>
						</div>
						<div class="messages__wrapper messages__dialog-body collapsible-block__wrapper">
							<a href="javascript:void(0)" class="collapsible-block__btn btn--link">Показать переписку</a>
							<div class="messages collapsible-block">
								<div class="messages__messages-list">
									<div class="messages__message message">
										<div class="message__author">Команда Ante Kovac:</div>
										<div class="message__text">
											<p>Заказала три недели назад. До сих пор статус заказа „в обработке”. Когда заказ будет передан в службу доставки ?</p>
										</div>
										<div class="message__files download-files">
											<div class="download-files__title">Скачать прикрепленные файлы</div>
											<div class="download-files__list">
												<a href="#" class="download-files__file">Screenshot at april 8.png</a>
												<a href="#" class="download-files__file">1.zip</a>
												<a href="#" class="download-files__file">Описание.doc</a>
											</div>
										</div>
									</div>
									<div class="messages__message message">
										<div class="message__author">Cheburashka:</div>
										<div class="message__text">
											<p>Задача организации, в особенности же дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития. Не следует, однако забывать, что реализация намеченных плановых заданий в значительной степени обуславливает создание соответствующий условий активизации. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение модели развития. Товарищи! реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. Таким образом рамки и место обучения кадров позволяет оценить значение новых предложений.</p>
										</div>
									</div>
								</div>
								<div class="messages__form">
									<form action="" method="">
										<div class="field required">
											<textarea class="field__inputtext base" placeholder="Текст вашего сообщения" rows="6"></textarea>
										</div>
										<div class="grid-noGutter messages-form__actions">
											<input type="submit" class="btn btn--dark--medium" value="Отправить"/>
											<div class="field file-field">
												<input type="file" multiple class="file-field__input" />
												<div class="file-field__btn">
													<span class="btn--link">Прикрепить файл</span>
												</div>
												<div class="file-field__files-list"></div>
											</div>
											<a href="javascript:void(0)" class="collapsible-block__btn btn--link">Свернуть переписку</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="messages__dialog">
						<div class="messages__dialog-header">
							<div class="messages__selection">
								<input type="checkbox" class="tick" id="check-2"/><label for="check-2" class="checkbox-lbl"></label>
								<button class="btn btn--only-icon--square--flat btn-star">
									<svg class="i-icon"><use xlink:href="#star"/></svg>
								</button>
							</div>
							<div class="message">
								<div class="message__theme">
									<span class="message__author">Cheburashka, </span>
									<span class="theme-text">Сумка №23 «княгиня»</span>
								</div>
								<div class="message__text">
									<p>В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. </p>
								</div>
							</div>
							<div class="message__date">
								<span class="light-text small-text">25.03.2016</span>
							</div>
						</div>
						<div class="messages__wrapper messages__dialog-body collapsible-block__wrapper">
							<a href="javascript:void(0)" class="collapsible-block__btn btn--link">Показать переписку</a>
							<div class="messages collapsible-block">
								<div class="messages__messages-list">
									<div class="messages__message message">
										<div class="message__author">Вы:</div>
										<div class="message__text">
											<p>Заказала три недели назад. До сих пор статус заказа „в обработке”. Когда заказ будет передан в службу доставки ?</p>
										</div>
										<div class="message__files download-files">
											<div class="download-files__title">Скачать прикрепленные файлы</div>
											<div class="download-files__list">
												<a href="#" class="download-files__file">Screenshot at april 8.png</a>
												<a href="#" class="download-files__file">1.zip</a>
												<a href="#" class="download-files__file">Описание.doc</a>
											</div>
										</div>
									</div>
									<div class="messages__message message">
										<div class="message__author">Команда Ante Kovac:</div>
										<div class="message__text">
											<p>Задача организации, в особенности же дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития. Не следует, однако забывать, что реализация намеченных плановых заданий в значительной степени обуславливает создание соответствующий условий активизации. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение модели развития. Товарищи! реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. Таким образом рамки и место обучения кадров позволяет оценить значение новых предложений.</p>
										</div>
									</div>
								</div>
								<div class="messages__form">
									<form action="" method="">
										<div class="field required">
											<textarea class="field__inputtext base" placeholder="Текст вашего сообщения" rows="6"></textarea>
										</div>
										<div class="grid-noGutter messages-form__actions">
											<input type="submit" class="btn btn--dark--medium" value="Отправить"/>
											<div class="field file-field">
												<input type="file" multiple class="file-field__input" />
												<div class="file-field__btn">
													<span class="btn--link">Прикрепить файл</span>
												</div>
												<div class="file-field__files-list"></div>
											</div>
											<a href="javascript:void(0)" class="collapsible-block__btn btn--link">Свернуть переписку</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="messages__dialog">
						<div class="messages__dialog-header">
							<div class="messages__selection">
								<input type="checkbox" class="tick" id="check-3"/><label for="check-3" class="checkbox-lbl"></label>
								<button class="btn btn--only-icon--square--flat btn-star">
									<svg class="i-icon"><use xlink:href="#star"/></svg>
								</button>
							</div>
							<div class="message">
								<div class="message__theme">
									<span class="message__author">Cheburashka, </span>
									<span class="theme-text">Сумка №23 «княгиня»</span>
								</div>
								<div class="message__text">
									<p>В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. </p>
								</div>
							</div>
							<div class="message__date">
								<span class="light-text small-text">25.03.2016</span>
							</div>
						</div>
					</div>
					<div class="messages__dialog">
						<div class="messages__dialog-header">
							<div class="messages__selection">
								<input type="checkbox" class="tick" id="check-4"/><label for="check-4" class="checkbox-lbl"></label>
								<button class="btn btn--only-icon--square--flat btn-star">
									<svg class="i-icon"><use xlink:href="#star"/></svg>
								</button>
							</div>
							<div class="message">
								<div class="message__theme">
									<span class="message__author">Cheburashka, </span>
									<span class="theme-text">Сумка №23 «княгиня»</span>
								</div>
								<div class="message__text">
									<p>В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. В. Кандинский был выбран художником коллекции "Цирк" не только благодаря известному мастерству владения цветом и необычности его абстрактных сюжетов. Наша миссия - создавать применимые к жизни арт-объекты со смыслом. </p>
								</div>
							</div>
							<div class="message__date">
								<span class="light-text small-text">25.03.2016</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<ul class="pagination mobile-fullwidth--noGutter">
				<li class="pagination__item pagination__item--prev"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
				<li class="pagination__item"><a href="#">1</a></li>
				<li class="pagination__item pagination__item--current"><a href="#">2</a></li>
				<li class="pagination__item"><a href="#">3</a></li>
				<li class="pagination__item"><a href="#">4</a></li>
				<li class="pagination__item"><a href="#">5</a></li>
				<li class="pagination__item pagination__item--next"><a href="#"><svg class="i-icon" role="img"><use xlink:href="#arrow"/></svg></a></li>
			</ul>
		</div>
	</div>
</div>
<?php require ('footer.php') ?>