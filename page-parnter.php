<?php
  // Template Name: Partner
?>

<?php get_header(); ?>
<main>
  <section class="section">
        <div class="container path__wrapper">
            <ul class="path__list">
                <li class="path__list-item">Главная</li>
                <li class="path__list-item">Наши работы</li>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container partner__wrapper">
            <h2 class="partner-title">Партнерам</h2>
            <div class="partner__blocks">
                <div class="block__contractors">
                    <h3 class="contractors-title">Подрядчикам</h3>
                    <p class="contractors-subtitle">Предлагаем сотрудничество :</p>
                    <ul class="contractors__list">
                        <li class="contractors-item">субподрядным организациям;</li>
                        <li class="contractors-item">бригадам (мастерам) отделочных работ;</li>
                        <li class="contractors-item">бригадам (мастерам) кровельных и фасадных работ;</li>
                        <li class="contractors-item">мастерам по установке оконных конструкций;</li>
                        <li class="contractors-item">промышленным альпинистам;</li>
                        <li class="contractors-item">собственником спецтехники.</li>
                    </ul>
                    <p class="contractors-text">Мы работаем с ФЛ и ЮЛ</p>
                    <button class="contractors-button">Оставить заявку</button>
                    <div class="modal__application">
                        <div class="modal__wrapper-application">
                            <h3 class="modal-title">Оставить заявку </h3>
                            <form class="modal__form" action="">
                                <div class="form__button-modal">
                                    <label class="input-label" for="name">Имя / название</label>
                                    <input class="input" id="name" type="text"
                                           placeholder="Напишите имя или название организации">
                                </div>
                                <div class="form__button-modal">
                                    <label class="input-label" for="telephone">Телефон</label>
                                    <input class="input" id="telephone" type="text"
                                           placeholder="+ 7 999 999 99 99">
                                </div>
                                <div class="form__button-modal">
                                    <label class="input-label" for="works">Какие работы производите?</label>
                                    <input class="input" id="works" type="text"
                                           placeholder="Список работ">
                                </div>
                                <button type="submit" class="modal-button-application">Отправить</button>
                            </form>
                            <div class="modal__personal">
                                <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на
                                    обработку</p>
                                <span class="personal-text blue">персональных данных</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal__finish-application">
                        <div class="modal__finish-content-application">
                            <img class="modal__finish-content-img" src="../images/check-circle.svg" alt="">
                            <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
                            Мы свяжемся с вами в ближайшее время</span>
                        </div>
                    </div>
                </div>
                <div class="block__supplier">
                    <h3 class="supplier-title">Поставщикам</h3>
                    <p class="supplier-subtitle">Вы поставщик или производитель строительных материалов, <br>
                        инструмента,
                        строительной техники? <br>
                        Тогда оставьте нам ваши данные для направления заявок</p>
                    <button class="supplier-button">Оставить данные</button>
                    <div class="modal__supplier">
                        <div class="modal__wrapper-supplier">
                            <h3 class="modal-title">Оставить заявку </h3>
                            <form class="modal__form" action="">
                                <div class="form__button-modal">
                                    <label class="input-label" for="name2">Имя / название</label>
                                    <input class="input" id="name2" type="text"
                                           placeholder="Напишите имя или название организации">
                                </div>
                                <div class="form__button-modal">
                                    <label class="input-label" for="telephone2">Телефон</label>
                                    <input class="input" id="telephone2" type="text"
                                           placeholder="+ 7 999 999 99 99">
                                </div>
                                <div class="form__button-modal">
                                    <label class="input-label" for="email">E-mail</label>
                                    <input class="input" id="email" type="text"
                                           placeholder="your@email.ru">
                                </div>
                                <div class="form__button-modal">
                                    <label class="input-label" for="works2">Какие работы производите?</label>
                                    <input class="input" id="works2" type="text"
                                           placeholder="Список поставляемых товаров">
                                </div>
                                <button type="submit" class="modal-button-supplier">Отправить</button>
                            </form>
                            <div class="modal__personal">
                                <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на
                                    обработку</p>
                                <span class="personal-text blue">персональных данных</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal__finish-supplier">
                        <div class="modal__finish-content-supplier">
                            <img class="modal__finish-content-img" src="../images/check-circle.svg" alt="">
                            <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
                            Мы свяжемся с вами в ближайшее время</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
