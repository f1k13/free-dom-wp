<?php
  // Template Name: Works
?>

<?php get_header(); ?>

<section class="section">
        <div class="container path__wrapper">
            <ul class="path__list">
                <li class="path__list-item">Главная</li>
                <li class="path__list-item">Наши работы</li>
            </ul>
        </div>
    </section>
    <main>
    <section class="section">
       
        <div class="container works__wrapper">
             <div class="modal__seller-slider">
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
                        <button type="submit" class="modal-button-seller">Отправить</button>
                    </form>
                    <div class="modal__personal">
                        <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку</p>
                        <span class="personal-text blue">персональных данных</span>
                    </div>
                </div>
            </div>
            <div class="modal__seller-finish-slider">
                <div class="modal__finish-content-seller">
                    <img class="modal__finish-content-img" src="<?php bloginfo('template_url'); ?>/assets/images//check-circle.svg" alt="">
                    <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
        Мы свяжемся с вами в ближайшее время</span>
                </div>
            </div>
            <h2 class="title">Наши работы</h2>
            <div class="works__cards-sliders">
                <div class="works__card-slider">
                    <div class="card__content">
                        <h3 class="card-title">Ремонт кровли</h3>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                            massa
                            quis enim. Donec pede justo, fringilla vel</p>
                        <button class="card-button">Оставить заявку</button>
                    </div>
                    <div id="slide_1" class="card__slider">
                        <img data-slide="#slide_1" class="slider-img-arrow controlls prev" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider.png" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-1.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-2.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-3.jpeg" alt="">
                        <img data-slide="#slide_1" class="slider-img-arrow-right next controlls" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                    </div>
                </div>
                <div class="works__card-slider">
                    <div class="card__content">
                        <h3 class="card-title">Ремонт кровли</h3>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                            massa
                            quis enim. Donec pede justo, fringilla vel</p>
                        <button class="card-button">Оставить заявку</button>
                    </div>
                    <div id="slide_2" class="card__slider">
                        <img data-slide="#slide_2" class="slider-img-arrow controlls prev"  src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider.png" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-1.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-2.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-3.jpeg" alt="">
                        <img data-slide="#slide_2" class="slider-img-arrow-right next controlls" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                    </div>
                </div>
                <div class="works__card-slider">
                    <div class="card__content">
                        <h3 class="card-title">Ремонт кровли</h3>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                            massa
                            quis enim. Donec pede justo, fringilla vel</p>
                        <button class="card-button">Оставить заявку</button>
                    </div>
                    <div id="slide_3" class="card__slider">
                        <img data-slide="#slide_3" class="slider-img-arrow controlls prev " src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider.png" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-1.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-2.jpg" alt="">
                        <img class="slider-img" src="<?php bloginfo('template_url'); ?>/assets/images/house-slider-img-3.jpeg" alt="">
                        <img data-slide="#slide_3" class="slider-img-arrow-right next controlls" src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>