const buttonHeader = document.querySelector(".header__content-left-button");
const buttonSales = document.querySelector(".button-sales");
const modal = document.querySelector(".modal");
const inputTelephone = document.querySelector("#telephone");
const buttonSubmit = document.querySelector(".modal-button");
const modalFinish = document.querySelector(".modal__finish");
const burgerOpen = document.querySelector(".burger__menu");

burgerOpen.addEventListener("click", (e) => {
  document.querySelector(".header__nav").classList.toggle("active");
  document.querySelector(".header__navbar").classList.toggle("active");
  document.querySelector(".nav__burger").classList.toggle("active");
});

buttonSubmit.addEventListener("click", (e) => {
  e.preventDefault();

  if (!inputTelephone.value) {
    alert("Поле телефон не может быть пустым");
  } else {
    modalFinish.classList.add("visible");
  }
});

const modalOpenMain = () => {
  if (!modal.classList.contains("visible")) {
    modal.classList.add("visible");
  } else {
    modal.classList.remove("visible");
  }
};

buttonSales.addEventListener("click", () => modalOpenMain());

buttonHeader.addEventListener("click", () => modalOpenMain());

const closeOnOutsideClickModalMain = (event) => {
  if (event.target === modal) {
    modal.classList.remove("visible");
  }
};

const closeOnOutsideClickModalFinish = (event) => {
  if (event.target === modalFinish) {
    modalFinish.classList.remove("visible");
  }
};

modal.addEventListener("click", closeOnOutsideClickModalMain);

modalFinish.addEventListener("click", closeOnOutsideClickModalFinish);
