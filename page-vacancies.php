<?php
  // Template Name: Vacancies
?>

<?php get_header(); ?>

<main>
    <section class="section">
        <div class="container path__wrapper">
            <ul class="path__list">
                <li class="path__list-item"><a href="<?php echo get_site_url() ?>/">Главная</a></li>
                <li class="path__list-item">Вакансии</li>
            </ul>
            <h2 class="title">Вакансии</h2>
        </div>
    </section>
    <section class="section vacancies">
        <div class="container vacancies__wrapper"><ul class="vacancies__list">
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
                <li class="vacancies__item">
                    <h3 class="vacancies-item-title">Монтажник</h3>
                    <p class="vacancies-item-subtitle">Город: Сыктывкар</p>
                    <p class="vacancies-item-subtitle">Обязанности:</p>
                    <p class="vacancies-item-subtitle">Требования:</p>
                    <span class="vacancies-item-price">80 000 – 150 000 ₽</span>
                    <button class="vacancies-item-button">Подробнее</button>
                </li>
            </ul>
            <div class="modal__vacancies">
                <div class="modal__content-vacancies">
                    <h3 class="modal-title">Заполните форму, чтобы узнать подробнее о вакансии</h3>
                    <form class="modal__form" action="">
                        <div class="form__input">
                            <label class="input-label" for="name">Имя</label>
                            <input class="input" id="name" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form__input">
                            <label class="input-label" for="telephone1">Телефон</label>
                            <input class="input" id="telephone1" type="text" placeholder="+7 999 999 99 99">
                        </div>
                        <div class="form__input">
                            <label class="input-label" for="city">Город</label>
                            <input class="input" id="city" type="text" placeholder="Ваш город">
                        </div>
                        <div class="form__input">
                            <label class="input-label" for="your-works">Какие работы вы выполняли?</label>
                            <input class="input" id="your-works" type="text" placeholder="Опишите работы, которые вы выполняли">
                        </div>
                        <button type="submit" class="modal-button">Отрпавить</button>
                    </form>
                    <div class="modal__personal">
                        <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку</p>
                        <a href="<?php echo get_site_url() ?>/condition/" class="personal-text blue">персональных данных</a>
                    </div>
                </div>
            </div>
            <div class="modal__finish">
                <div class="modal__finish-content">
                    <img class="modal__finish-content-img" src="../images/check-circle.svg" alt="">
                    <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
        Мы свяжемся с вами в ближайшее время</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>