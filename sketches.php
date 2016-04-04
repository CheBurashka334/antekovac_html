<?php require ('header.php') ?>
<div class="container">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item"><a href="#">Главная</a></li>
		<li class="breadcrumbs__item breadcrumbs__item--unactive"><a href="#">Арт-лаборатория</a></li>
	</ul>
</div>
<div class="container page--sketches">
	<div class="heading block-heading--mobile">
        <h2>арт-лаборатория</h2>
    </div>
	<?php require ('art-lab_menu.php') ?>
	<div class="grid-equalHeight sketches-list">
		<div class="col-4_sm-12">
			<div class="tile-block tile-block--dark tile-block--individual mobile-minify">
				<div class="tile-block__heading"><h2>изделие с вашим рисунком</h2></div>
                <div class="tile-block__text">
                    <p>Вы можете заказать себе любой предмет со своим рисунком. Заполните форму и мы свяжемся с вами и все обсудим.</p>
				</div>
				<div class="tile-block__image">
					<img src="images/individual.png" alt=""/>
				</div>
                <button class="btn btn--arrow btn--transparent btn--fullwidth js-toggle-box" data-box=".modal.order-form">Заказать изделие со&nbsp;своим&nbsp;рисунком</button>
				<!-- форма из индивидуального заказа -->
			</div>
		</div>
		<div class="col-4_sm-6_xs-12">
			<div class="sketch sketch--big">
				<div class="sketch__image">
					<img src="images/sketches/sketch-1.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_sm-6_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-2.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-3.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-4.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-5.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-6.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-7.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-8.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
					</a>
				</div>
			</div>
		</div>
		<div class="col-4_xs-12">
			<div class="sketch">
				<div class="sketch__image">
					<img src="images/sketches/sketch-9.jpg" alt="" />
				</div>
				<div class="sketch__overlay">
					<a href="#" class="sketch__link">
						<svg class="i-icon"><use xlink:href="#arrow-right"/></svg>
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