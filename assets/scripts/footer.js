const modalFooter = document.querySelector(".modal__footer");

document.querySelector(".contacts-call").addEventListener("click", (e) => {
  e.preventDefault();
  modalFooter.classList.add("visible");
});

modalFooter.addEventListener("click", (e) => {
  e.preventDefault();
  if (e.target === modalFooter) {
    modalFooter.classList.remove("visible");
  }
});

document
  .querySelector(".modal-button-footer")
  .addEventListener("click", (e) => {
    document.querySelector(".modal__finish-footer").classList.add("visible");
  });
document
  .querySelector(".modal__finish-footer")
  .addEventListener("click", (e) => {
    if (e.target === document.querySelector(".modal__finish-footer")) {
      document
        .querySelector(".modal__finish-footer")
        .classList.remove("visible");
    }
  });
