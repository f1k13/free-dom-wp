<footer>
    <section class="section">
        <div class="container footer__wrapper">
            <ul class="footer__list">
                <li class="list-title">
                    <a href="/services" class="list-title-item-link">Наши услуги</a>
                    <ul class="item__list">
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/roofing">Кровельные работы</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/fasade">Фасадные работы</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/services/">Отделка и ремонт помещений</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/services/">Демонтаж</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/networks">Сети</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/rise">Высотные работы</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/building">Обслуживание зданий и территорий</a></li>
                    </ul>
                </li>
                <li class="list-title"><a class="list-title-item-link" href="<?php echo get_site_url() ?>/partner">Сотрудничество</a>
                    <ul class="item__list">
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/partner">Поставщикам</a></li>
                        <li><a class="list-item-link" href="<?php echo get_site_url() ?>/partner">Подрядчикам</a></li>
                    </ul>
                </li>
                <li class="list-title"><a class="list-title-item-link" href="<?php echo get_site_url() ?>/works">Наши работы</a></li>
                <li class="list-title"><a class="list-title-item-link" href="<?php echo get_site_url() ?>/vacancies">Вакансии</a></li>
                <li class="list-title"><a class="list-title-item-link" href="<?php echo get_site_url() ?>/about">О нас</a></li>
                <li class="list-title"><a class="list-title-item-link" href="<?php echo get_site_url() ?>/contacts">Контакты</a></li>
            </ul>
            <div class="footer__private">
                <div class="private__text-politic">
                    <p class="private-text">Политика приватности</p>
                    <a href="<?php echo get_site_url() ?>/condition/" class="private-text">Согласие на обработку персональных данных</a>
                </div>
                <div class="private__social">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/tg.svg" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/vk.svg" alt="">
                </div>
                <div class="private__contacts">
                    <p class="contacts-title">Номер телефона</p>
                    <span class="contacts-subtitle">+7 8212 29 72 30</span>
                </div>
                <div class="private__contacts">
                    <p class="contacts-title">E-mail</p>
                    <span class="contacts-subtitle">pohta@mail.ru</span>
                </div>
                <h2 class="private-company">фридом</h2>
            </div>
            <div class="footer__adaptive">
                <div class="footer__phone-contacts">
                    <div>
                        <h3 class="contacts__title">Номер телефона</h3>
                        <p class="contacts__subtitle">+ 7 8212 29 72 30</p>
                    </div>
                    <div class="footer__social-email-adaptive">
                        <div>
                            <h3 class="contacts__title">E-mail</h3>
                            <p class="contacts__subtitle">pohta@mail.ru</p>
                        </div>
                        <div class="footer__adaptive-social">
                            <img class="footer-img-social-adaptive" src="<?php bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt="">
                            <img class="footer-img-social-adaptive" src="<?php bloginfo('template_url'); ?>/assets/images/tg.svg" alt="">
                            <img class="footer-img-social-adaptive" src="<?php bloginfo('template_url'); ?>/assets/images/vk.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="footer__contacts">
                    <button class="contacts-call">Заказать звонок</button>
                    <button class="contacts-write">Написать нам</button>
                </div>
                <div class="footer__private-adaptive">
                    <p class="private-adaptive-text">Политика приватности</p>
                    <p class="private-adaptive-text">Согласие на обработку персональных данных</p>
                    <p class="private-adaptive-logo-text">Фридом</p>
                </div>
            </div>
            <div class="modal__footer">
                        <div class="modal__wrapper-footer">
                            <h3 class="modal-title">Заказать звонок </h3>
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
                                <button type="submit" class="modal-button-footer">Отправить</button>
                            </form>
                            <div class="modal__personal">
                                <p class="personal-text">Нажимая кнопку «Отправить», вы подтверждаете свое согласие на
                                    обработку</p>
                                <a href="<?php echo get_site_url() ?>/condition/" class="personal-text blue">персональных данных</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal__finish-footer">
                        <div class="modal__finish-content-footer">
                            <img class="modal__finish-content-img" src="<?php bloginfo('template_url'); ?>/assets/images/check-circle.svg" alt="">
                            <span class="modal__finish-content-text">Ваша заявка отправлена! <br>
                            Мы свяжемся с вами в ближайшее время</span>
                        </div>
                    </div>
        </div>
    </section>
</footer>

<?php wp_footer();?>

</body>
</html>