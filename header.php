<!DOCTYPE html>
<html>
<head>
    <title>Верстка Анте Ковач</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
	<link rel="apple-touch-icon-precomposed apple-touch-icon" href="/favicons/apple-touch-icon-precomposed.png">
	<link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="manifest" href="/favicons/manifest.json">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href="build/build.css" type="text/css"  rel="stylesheet" />
	<link href="app/styles/fonts.css" type="text/css"  rel="stylesheet" />
	<script src="build/main.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<!-- OpenGraph разметка для соцсетей -->
	<meta property="og:site_name" content="Название сайта" />
	<meta property="og:title" content="Название товара" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="Ссылка на страницу товара" />
	<meta property="og:image" content="Фото товара" />
	<meta property="og:description" content="Описание товара, 1-2 предложения. Уточнить, каких именно." />
	<!-- / og -->
</head>

<body>
<div class="hidden"><?php require("svg/symbol/svg/sprite.symbol.svg"); ?></div>

<aside class="page-aside page-aside--left main-menu">
	<?php require ('page-aside_left.php') ?>
</aside>
<aside class="page-aside page-aside--right feed-back">
	<?php require ('page-aside_right.php') ?>
</aside>
<main class="page"><!-- .home-page добавить на главной-->
	<!-- .header--transparent только на главной-->
    <header class="header">
		<div class="container">
			<div class="header__wrap">
				<div class="header-menu">
					<div class="header-menu__burger js-anim--hover js-anim--click js-toggle-box" data-box=".page-aside.main-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="header__logo">
					<a href="#">
						<svg class="logo" role="img"><use xlink:href="#logo"/></svg>
					</a>
				</div>
				<div class="header__right">
					<div class="header__link">
						<button class="search-btn js-toggle-box" data-box=".modal.search-form">
							<svg class="i-icon i-icon--stroke" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#zoom"></use>
							</svg>
						</button>
					</div>
					<div class="header__link">
						<a href="#">
							<svg class="i-icon i-icon--stroke" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
							</svg>
							<span>17</span>
						</a>
					</div>
					<div class="header__link">
						<a href="#">
							<svg class="i-icon" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#basket"></use>
							</svg>
							<span>8</span>
						</a>
					</div>
				</div>
			</div>
		</div>
    </header>
	<div class="workarea">