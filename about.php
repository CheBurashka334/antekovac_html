<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item"><a href="#">Бренд</a></li>
		<li class="breadcrumbs__item"><a href="#">История</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Мы</a></li>
	</ul>
</div>
<div class="container">
	<div class="heading">
        <h2>Бренд</h2>
    </div>
	<?php require ('brend_menu.php') ?>
	<div class="video-custom-player mobile-fullwidth--noGutter">
		<video id="brend-video" src="video/ante-kovac_collection-kandinskiy-cirk.mp4" type="video/mp4" poster="images/ak-video-poster.jpg" preload="none"></video>
		<a href="#" class="video-custom-player__overlay js-toggle-playing-video" data-video="#brend-video">
			<svg class="i-icon i-icon--stroke"><use xlink:href="#play" /></svg>
		</a>
	</div>
	<div class="tile-page page--text page--about">
		<div class="tile-page__body">
			<h3>О компании</h3>
			<p>Бренд Ante Kovac – это новое решение в мире моды, стиля и утонченности. Нашими клиентами становятся успешные люди, которые стремятся поразить окружающих своим изысканным и тонким вкусом. Среди приоритетных задач AnteKovac – нахождение новых способов самовыражения и создание сумок и аксессуаров в обход шаблонных стереотипов. Абсолютно все дизайнерские сумки Анте Ковач – изделия ручной работы с тщательно продуманными деталями, рисунки также наносятся вручную. Художник вкладывает свою душу, а вещь сохраняет теплоту мастерских рук.</p>
			<div class="read-more--mobile">
				<p>АнтеКовач занимается производством концептуальных, эксклюзивных вещей для тех, кто не приемлет оставаться незамеченным, а предпочитает выделяться из общей массы и выглядеть так, как никто другой. Идеология стиля Ante Kovac основывается на сочетании незаурядных современных форм с изыском художественных уникальных и оригинальных дизайнерских разработок, свой стиль мы называем «ANTEкварный casual”. </p>
				<p>Наша продукция пользуется спросом у неординарных личностей, которые мыслят смело и не боятся показать свои чувства. Эти люди хотят быть неповторимыми и получать от жизни максимум удовольствия, выражая независимость своего мышления и вкуса.</p>
				<p>Успех компании начался с пошива сумок ручной работы на заказ и их продаж в интернет-магазине; по сей день соблюдается особая производственная традиция – все модные сумки мы создаем исключительно из натуральной кожи и вручную. Ассортимент компании разрастается стремительно, но нашей визитной карточной на день сегодняшней так и остаются дизайнерские сумки-трансформеры, включающие много фрагментов. Их составляющие можно носить как отдельно, так и вместе, а также комбинировать друг с другом. А именно, приобретая для себя одну сумку в зависимости от повода или настроения Вы придаете ей разный вид, видоизменяя ее посредством выбора фрагментов  и их композиции, или же легким движением превращаете рюкзак в сумку и наоборот.</p>
				<p>Оригинальные сумки, рисунки с сюжетом на вещах Ante Kovac акцентируют вкус обладателя, раскрывают в нем скрытые таланты, превращают его в ценителя искусства и высочайшего качества, привлекают в ряды своих поклонников близких, друзей и коллег.</p>
				<p>Наша компания находится в стадии активного развития, организует фотосессии, пополняет интернет магазин сумок новыми коллекциями, задает модные тенденции, не перестает радовать клиентов очередными находками, наличием мужских сумок и новых дизайнерских решений.</p>
				<p>Вы непременно оцените по достоинству дизайнерские сумки и другие предметы мануфактуры Ante Kovac , ведь они способны создать атмосферу совершенства! Будьте гостем интернет магазина и любуйтесь представленным товаром или делайте заказ. Мы рады видеть каждого, кто наделен страстью к прекрасному.</p>
				<p>Ante Kovac предлагает пошив кожаных сумок на заказ, тем самым восхищая и искушая ценителей единственных в своем роде произведений искусства. На нашем сайте Вы можете заказать пошив сумок на заказ!</p>
			</div>
			<div class="block--look-book">
				<h3>LOOK BOOK</h3>
				<div class="grid-center">
					<div class="col-10_xs-12">
						<div class="carousel carousel--dark-navs--outside mobile-fullwidth--noGutter">
							<div class="owl-carousel">
								<div class="carousel__item">
									<img src="images/look-book.jpg"/>
								</div>
								<div class="carousel__item">
									<img src="images/look-book.jpg"/>
								</div>
								<div class="carousel__item">
									<img src="images/look-book.jpg"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="carousel carousel--dark-navs carousel--bg-img carousel--show-room">
	<div class="carousel__title heading--dark-block">шоу рум</div>
	<div class="owl-carousel">
		<div class="carousel__item" style="background-image:url('images/show-room.jpg');"></div>
		<div class="carousel__item" style="background-image:url('images/show-room.jpg');"></div>
		<div class="carousel__item" style="background-image:url('images/show-room.jpg');"></div>
	</div>
	<a href="catalog.php" class="btn btn--primary--medium carousel__btn">Начать покупки</a>
</div>
<?php require ('footer.php') ?>