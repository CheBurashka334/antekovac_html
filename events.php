<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item"><a href="#">Бренд</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Новости</a></li>
	</ul>
</div>
<div class="container">
	<div class="heading">
        <h2>Бренд</h2>
    </div>
	<?php require ('brend_menu-1.php') ?><!-- то же меню, только без второго уровня (как в лк) -->
	<div class="grid-equalHeight news page--events">
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-1.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Мастер-класс
					</div>
					<div class="tile-block__heading">
						клатч своими руками
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-2.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Новый магазин
					</div>
					<div class="tile-block__heading">
						открытие торговой точки в киеве
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-3.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Мастер-класс
					</div>
					<div class="tile-block__heading">
						клатч своими руками
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-4.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Новый магазин
					</div>
					<div class="tile-block__heading">
						открытие торговой точки в киеве
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-1.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Мастер-класс
					</div>
					<div class="tile-block__heading">
						клатч своими руками
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6_sm-12">
			<div class="tile-block tile-block--image tile-block--centered mobile-fullwidth">
				<div class="tile-block__image">
					<img src="images/events/event-2.jpg" />
				</div>
				<div class="tile-block__content">
					<div class="tile-block__note">
						Новый магазин
					</div>
					<div class="tile-block__heading">
						открытие торговой точки в киеве
					</div>
					<a href="#" class="btn btn--transparent btn--arrow">
						<span class="btn-text">Узнать подробности</span>
					</a>
				</div>
			</div>
		</div>
	</div>
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