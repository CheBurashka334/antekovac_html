<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item"><a href="#">Бренд</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Коллекции</a></li>
	</ul>
</div>
<div class="container">
	<div class="heading">
        <h2>Бренд</h2>
    </div>
	<!-- подменю: все коллекции, для него, для нее -->
	<?php require ('brend_menu.php') ?>
	<div class="page--collections">
		<div class="grid-equalHeight">
			<div class="col-6_sm-12">
				<div class="tile-block tile-block--collection-image mobile-fullwidth">
					<div class="tile-block__image collection__image">
						<img src="images/collection-architekt-medium.jpg" />
					</div>
					<div class="tile-block__content">
						<div class="collection__note">
							Коллекция
						</div>
						<div class="collection__heading">
							Одиннадцатиклассница в цирке
						</div>
						<a href="#" class="btn btn--transparent btn--arrow">
							<span class="btn-text">Посмотреть <span class="hidden-mobile">коллекцию</span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6_sm-12">
				<div class="tile-block tile-block--collection-image mobile-fullwidth">
					<div class="tile-block__image collection__image">
						<img src="images/collection-circus-medium.jpg" />
					</div>
					<div class="tile-block__content">
						<div class="collection__note">
							Коллекция
						</div>
						<div class="collection__heading">
							Альфонс Муха. Модерн
						</div>
						<a href="#" class="btn btn--transparent btn--arrow">
							<span class="btn-text">Посмотреть <span class="hidden-mobile">коллекцию</span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6_sm-12">
				<div class="tile-block tile-block--collection-image mobile-fullwidth">
					<div class="tile-block__image collection__image">
						<img src="images/collection-architekt-medium.jpg" />
					</div>
					<div class="tile-block__content">
						<div class="collection__note">
							Коллекция
						</div>
						<div class="collection__heading">
							Architekt
						</div>
						<a href="#" class="btn btn--transparent btn--arrow">
							<span class="btn-text">Посмотреть <span class="hidden-mobile">коллекцию</span></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-6_sm-12">
				<div class="tile-block tile-block--collection-image mobile-fullwidth">
					<div class="tile-block__image collection__image">
						<img src="images/collection-circus-medium.jpg" />
					</div>
					<div class="tile-block__content">
						<div class="collection__note">
							Коллекция
						</div>
						<div class="collection__heading">
							Кандинский цирк
						</div>
						<a href="#" class="btn btn--transparent btn--arrow">
							<span class="btn-text">Посмотреть <span class="hidden-mobile">коллекцию</span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		</br><a href="#" class="btn btn--flat-light-gray--big--center">Архив</a>
	</div>
</div>
<?php require ('footer.php') ?>