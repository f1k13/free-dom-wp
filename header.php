<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <section class="section">
        <div class="container header__wrapper">
            <div class="header__nav">
                <div class="nav__burger">
                    <a href="../pages/index.html" class="header__logo">
                        <h1 class="logo-title">Фридом</h1>
                        <p class="logo-subtitle">строительная компания</p>
                    </a>
                    <div class="burger__menu">
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                        <span class="menu-item"></span>
                    </div>
                </div>
                <div class="header__navbar">
                    <nav class='navbar'>
                        <ul class="navbar__list">
                            <li class="list-item"><a class="list-item-link-nav" href="service/">Наши услуги</a>
                            </li>
                            <li class="list-item"><a class="list-item-link-nav" href="works/">Наши работы</a>
                            </li>
                            <li class="list-item"><a class="list-item-link-nav" href="partner/">Партнерам</a>
                            </li>
                            <li class="list-item"><a class="list-item-link-nav" href="vacancies/">Вакансии</a>
                            </li>
                            <li class="list-item"><a class="list-item-link-nav" href="about/">О нас</a></li>
                            <li class="list-item"><a class="list-item-link-nav" href="contacts/">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__end">
                        <button class="end-button">
                            <a type="tel" href="tel:+78212297230">+ 7 8212 29 72 30</a>
                        </button>
                        <div class="end-button">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/map-pin.svg" alt="">
                            <p class="button-end-text">г.Сыктывкар</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>