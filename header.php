<!DOCTYPE html>
<html>
<head>
    <title>Верстка Анте Ковач</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="build/build.css" type="text/css"  rel="stylesheet" />
	<link href="app/styles/fonts.css" type="text/css"  rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="build/main.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="hidden"><?php require("svg/symbol/svg/sprite.symbol.svg"); ?></div>


<main>

    <header>
        <div class="header">
            <div class="container">
                <div class="header__wrap">
                    <div class="header-menu">
                        <div class="header-menu__burger js-anim--hover js-anim--click js-toggle-box" data-box=".page-aside">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="menu-dropdown">

                        </div>
                    </div>
                    <div class="header__logo header__logo--short">
                        <a href="#">
                            <!--<img src="images/logo.png" alt="" />-->
							<svg class="logo" role="img"><use xlink:href="#logo"/></svg>
                        </a>
                    </div>
                    <div class="header__right">
                        <div class="header__link">
                            <a href="#">
                                <svg class="i-icon i-icon--stroke"role="img">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#zoom"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="header__link">
                            <a href="#">
                                <svg class="i-icon i-icon--stroke"role="img">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
                                </svg>
                                <span>17</span>
                            </a>
                        </div>
                        <div class="header__link">
                            <a href="#">
                                <svg class="i-icon"role="img">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#basket"></use>
                                </svg>
                                <span>8</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
