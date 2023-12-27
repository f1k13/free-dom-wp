<?php
  // Template Name: finishing 
?>

<?php get_header(); ?>
<main>
  <section class="section">
        <div class="container path__wrapper">
            <ul class="path__list">
                <li class="path__list-item">Главная</li>
                <li class="path__list-item">Наши услуги</li>
                <li class="path__list-item">Отделка и ремонт помещений</li>
            </ul>
        </div>
    </section>
    <section class="section header__main">
        <div class="container header__content-wrapper">
            <div class="header__content-left">
                <h2 class="header__content-title">Отделка и ремонт помещений</h2>
                <p class="header__content-subtitle">Локальный и капитальный ремонт для организаций и частных <br> лиц.
                    Работаем с ТСЖ, ЖСК, ТСН, УК, 44-ФЗ,
                    223-ФЗ. <br>
                    Оставьте заявку на коммерческое предложение в 2 клика</p>
                <button class="header__content-left-button">Получить предложение</button>
            </div>
            <div class="slider_wrapper">
                <div class="myslide">
                    <div class="slider_item "><img class="img-slider" src="<?php bloginfo('template_url'); ?>/assets/images//img-header.jpg" alt="1"></div>
                </div>
                <div class="myslide">
                    <div class="slider_item "><img class="img-slider" src="<?php bloginfo('template_url'); ?>/assets/images//img-slider-1.jpg" alt="8"></div>
                </div>
                <div class="myslide">
                    <div class="slider_item "><img class="img-slider" src="<?php bloginfo('template_url'); ?>/assets/images//img-slider-2.jpg" alt="sl"></div>
                </div>
                <div class="myslide">
                    <div class="slider_item "><img class="img-slider" src="<?php bloginfo('template_url'); ?>/assets/images//img-slider-3.jpg" alt="sl"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal">
        <div class="modal__content">
            <h3 class="modal-title">Получить предложение</h3>
            <form class="modal__form" action="">
                <div class="form__input">
                    <label class="input-label" for="telephone">Введите телефон*</label>
                    <input class="input" id="telephone" type="text" placeholder="+7 999 999 99 99">
                </div>
                <div class="form__input">
                    <label class="input-label" for="address">Адрес объекта</label>
                    <input class="input" id="address" type="text" placeholder="Напишите адрес объекта">
                </div>
                <div class="form__input">
                    <label class="input-label" for="task">Адрес объекта</label>
                    <textarea class="textarea" name="text" id="task" cols="20" rows="5"
                              placeholder="Опишите задачу "></textarea>
                </div>
                <div class="form-button">
                    <label class="input-file">
                        <input type="file" name="file">
                        <span class="input-file-btn">Прикрепить файлы (фото или документ)</span>
                    </label>
                </div>
                <button type="submit" class="modal-button">Отрпавить</button>
            </form>
            <div class="modal__personal">
                <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку</p>
                <span class="personal-text blue">персональных данных</span>
            </div>
        </div>
    </div>
    <div class="modal__finish">
        <div class="modal__finish-content">
            <img class="modal__finish-content-img" src="<?php bloginfo('template_url'); ?>/assets/images//check-circle.svg" alt="">
            <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
        Мы свяжемся с вами в ближайшее время</span>
        </div>
    </div>
    <section class="section">
        <div class="container main-services__wrapper">
            <h2 class="services__title">Виды услуг</h2>
            <div class="main__services-cards">
                <div class="main__services-card">
                    <div  class="main__services-card-left">
                        <h3  class="main__services-card-title">Отделка и ремонт помещений</h3>
                        <p class="main-services__card-price">от 5000 ₽</p>
                        <div class="main__services-card-description">
                            <span class="main__services-card-text ">Описание Описание</span>
                            <span class="main__services-card-text">Описание Описание</span>
                            <span class="main__services-card-text">Описание Описание</span>
                        </div>
                        <button data-service="Отделка и ремонт помещений" class="main__services-card-button">Заказать</button>
                    </div>
                    <img class="main__services-card-img" src="<?php bloginfo('template_url'); ?>/assets/images//roofing-img-1.png" alt="">
                </div>
            </div>
            <div class="modal__seller">
                <div class="modal__content-seller">
                    <h3 class="modal-title">Оставить заявку</h3>
                    <form class="modal__form" action="">
                        <div class="form__input">
                            <label class="input-label-seller" for="name">Имя</label>
                            <input class="input" id="name" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form__input">
                            <label class="input-label-seller" for="telephone1">Телефон</label>
                            <input class="input" id="telephone1" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form__input">
                            <p class="input-label-seller">Услуга</p>
                            <div class="input">
                                <p class="input-text"></p>
                            </div>
                        </div>
                        <button type="submit" class="modal-button-seller">Отправить</button>
                    </form>
                    <div class="modal__personal">
                        <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку</p>
                        <span class="personal-text blue">персональных данных</span>
                    </div>
                </div>
            </div>
            <div class="modal__seller-finish">
                <div class="modal__finish-content-seller">
                    <img class="modal__finish-content-img" src="<?php bloginfo('template_url'); ?>/assets/images//check-circle.svg" alt="">
                    <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
        Мы свяжемся с вами в ближайшее время</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container about__wrapper">
            <div class="about__left">
                <h2 class="left-title">О компании</h2>
                <p class="left-subtitle">Группа компаний «Фридом» работает с 2016 года, выполняет строительные,
                    ремонтные, монтажные работы,
                    осуществляет текущее содержание зданий и территорий. Основными заказчиками компании являются
                    государственные и муниципальные организации, коммерческие предприятия, управляющие компании и
                    товарищества собственников жилья.</p>
            </div>
            <div class="about__right">
                <div class="right-cards">
                    <div class="right__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images//figure.svg" alt="">
                        <img class='card-check' src="<?php bloginfo('template_url'); ?>/assets/images//check.svg" alt="">
                        <p class="card-text">Гарантия на работы до 5 лет</p>
                    </div>
                    <div class="right__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images//like.svg" alt="">
                        <p class="card-text">7 лет на рынке подрядных услуг</p>
                    </div>
                </div>
                <div class="right-cards">
                    <div class="right__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images//people-check.svg" alt="">
                        <p class="card-text text-width">Более 200 постоянных заказчиков</p>
                    </div>
                    <div class="right__card">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images//houses.svg" alt="">
                        <p class="card-text text-width">Более 500 выполненных работ</p>
                    </div>
                </div>
                <div class="about__button">
                    <button class="button-sales">Получить предложение</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container works__wrapper">
            <h2 class="works-title">Как мы работаем?</h2>
            <div class="works__cards">
                <div class="works__card">
                    <h3 class="works__card-title">Заявка</h3>
                    <p class="works__card-subtitle">Вы оставляете заявку на услугу любым способом</p>
                    <button class="works__card-button"><a href="/">Оставить заявку</a></button>
                    <div class="works__cards-circle mb">
                        <span class="circle-text">1</span>
                    </div>
                </div>
                <div class="works__card">
                    <h3 class="works__card-title">Осмотр</h3>
                    <p class="works__card-subtitle">Мы осматриваем объект на месте или дистанционно по фото / видео</p>
                    <div class="works__cards-circle mt">
                        <span class="circle-text">2</span>
                    </div>
                </div>
                <div class="works__card">
                    <h3 class="works__card-title">Смета</h3>
                    <p class="works__card-subtitle">Мы производим расчет стоимости работ и высылаем вам коммерческое
                        предложение</p>
                    <div class="works__cards-circle">
                        <span class="circle-text">3</span>
                    </div>
                </div>
                <div class="works__card">
                    <h3 class="works__card-title">Договор</h3>
                    <p class="works__card-subtitle">Вместе с вами согласовываем условия и подписываем документы</p>
                    <div class="works__cards-circle">
                        <span class="circle-text">4</span>
                    </div>
                </div>
                <div class="works__card">
                    <h3 class="works__card-title">Работы</h3>
                    <p class="works__card-subtitle">Мы выполняем и сдаем работы, подписываем акты и несем гарантийные
                        обязательства</p>
                    <div class="works__cards-circle">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images//check.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>