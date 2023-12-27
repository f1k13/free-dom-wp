const buttonOpenModalAdvice = document.querySelector(".list-item-button");
const modalAdvice = document.querySelector(".modal__advice");
const modalAdviceFinish = document.querySelector(".modal__advice-finish");

buttonOpenModalAdvice.addEventListener("click", () => {
  modalAdvice.classList.add("visible");
});

modalAdvice.addEventListener("click", (e) => {
  if (e.target === modalAdvice) {
    modalAdvice.classList.remove("visible");
  }
});

modalAdviceFinish.addEventListener("click", (e) => {
  if (e.target === modalAdviceFinish) {
    modalAdviceFinish.classList.remove("visible");
  }
});
const buttonSubmitModalAdvice = document.querySelector(".modal-button-advice");

buttonSubmitModalAdvice.addEventListener("click", (e) => {
  e.preventDefault();
  modalAdviceFinish.classList.add("visible");
});
