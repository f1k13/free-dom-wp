<?php
  // Template Name: Services
?>

<?php get_header(); ?>

<main>
  <section class="section">
        <div class="container path__wrapper">
            <ul class="path__list">
                <li class="path__list-item">Главная</li>
                <li class="path__list-item">Наши услуги</li>
            </ul>
            <h2 class="title">Наши услуги</h2>
        </div>
    </section>
    <section class="section">
        <div class="container service__wrapper">
          <ul class="aside__list">
            <li class="list-item-tab active" data-tab="#tab_1">
              Кровельные работы
            </li>
            <li class="list-item-tab" data-tab="#tab_2">Фасадные работы</li>
            <li class="list-item-tab" data-tab="#tab_3">
              Отделка и ремонт помещений
            </li>
            <li class="list-item-tab" data-tab="#tab_4">Демонтаж</li>
            <li class="list-item-tab" data-tab="#tab_5">Сети</li>
            <li class="list-item-tab" data-tab="#tab_6">Высотные работы</li>
            <li class="list-item-tab" data-tab="#tab_7">
              Обслуживание зданий и территорий
            </li>
            <button class="list-item-button">Заказать консультацию</button>
          </ul>
          <div class="modal__advice">
            <div class="modal__content-advice">
              <h3 class="modal-title">Заказать консультацию</h3>
              <form class="modal__form" action="">
                <div class="form__input">
                  <label class="input-label" for="name">Введите имя*</label>
                  <input
                    class="input"
                    id="name"
                    type="text"
                    placeholder="Иван"
                  />
                </div>
                <div class="form__input">
                  <label class="input-label" for="address"
                    >Введите телефон</label
                  >
                  <input
                    class="input"
                    id="address"
                    type="text"
                    placeholder="+7 495 126-16-38"
                  />
                </div>

                <button type="submit" class="modal-button-advice">
                  Отрпавить
                </button>
              </form>
              <div class="modal__personal">
                <p class="personal-text">
                  Нажимая кнопку «Отправить», вы подтверждаете свое согласие на
                  обработку
                </p>
                <span class="personal-text blue">персональных данных</span>
              </div>
            </div>
          </div>
          <div class="modal__finish-advice">
            <div class="modal__finish-content-advice">
              <img
                class="modal__finish-content-img"
                src="../../images/check-circle.svg"
                alt=""
              />
              <span class="modal__finish-content-text"
                >Ваша заявка отправлена! <br />
                Мы свяжемся с вами в ближайшее время</span
              >
            </div>
          </div>
          <select class="services__list-tabs-select" id="tabs">
            <option
              class="list-item-tab-select"
              data-tab="#tab_1"
              value="tab_1"
            >
              Кровельные работы
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_2"
              value="tab_2"
            >
              Фасадные работы
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_3"
              value="tab_3"
            >
              Отделка и ремонт помещений
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_4"
              value="tab_4"
            >
              Демонтаж
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_5"
              value="tab_5"
            >
              Сети
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_6"
              value="tab_6"
            >
              Высотные работы
            </option>
            <option
              class="list-item-tab-select"
              data-tab="#tab_7"
              value="tab_7"
            >
              Обслуживание зданий и территорий
            </option>
          </select>
          <div id="tab_1" class="tabs__list-content">
            <h3 class="tab-title">Кровельные работы</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">ПВХ Мембрана</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/roofing.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Наплавляемая</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/roofing.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Профнастил</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/roofing.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Металлочерепица</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/roofing.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Фальцевая</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/roofing.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_2" class="tabs__list-content">
            <h3 class="tab-title">Фасадные работы</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Вентилируемый фасад</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/facade.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Мокрый фасад</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/facade.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Утепление фасада</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/facade.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Ремонт фасада</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/facade.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_3" class="tabs__list-content">
            <h3 class="tab-title">Отделка и ремонт помещений</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Отделка и ремонт помещений</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/networks.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_4" class="tabs__list-content">
            <h3 class="tab-title">Демонтаж</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Демонтаж</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="services/high-rise-work.html">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_5" class="tabs__list-content">
            <h3 class="tab-title">Сети</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Электромонтаж</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Слаботочные сети</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Водоснабжение</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_6" class="tabs__list-content">
            <h3 class="tab-title">Высотные работы</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Монтаж</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Ремонт швов</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Обработка поверхностей</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div id="tab_7" class="tabs__list-content">
            <h3 class="tab-title">Обслуживание зданий и территорий</h3>
            <ul class="services__list-tabs">
              <li class="tab-item">
                <p class="tab-item-title">Уборка и вывоз снега</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Чистка крыш от снега</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
              <li class="tab-item">
                <p class="tab-item-title">Спил деревьев</p>
                <div class="tab-end">
                  <span class="tab-item-price">1 500 ₽</span>
                  <button class="tab-item-button">
                    <a href="fasade/">Заказать услугу</a>
                  </button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
</main>

<?php get_footer(); ?>