const buttonOpen = document.querySelectorAll(".main__services-card-button");
const modalSeller = document.querySelector(".modal__seller");
const serviceChoosingText = document.querySelector(".input-text");
const buttonSubmitModalSeller = document.querySelector(".modal-button-seller");
const modalFinishSeller = document.querySelector(".modal__seller-finish");
buttonOpen.forEach((item) => {
  item.addEventListener("click", (e) => {
    if (!modalSeller.classList.contains("visible")) {
      modalSeller.classList.add("visible");
      serviceChoosingText.textContent = item.getAttribute("data-service");
    } else {
      modalSeller.classList.remove("visible");
    }
  });
});

buttonSubmitModalSeller.addEventListener("click", (e) => {
  e.preventDefault();
  console.log(e);
  modalFinishSeller.classList.add("visible");
});
modalSeller.addEventListener("click", (e) => {
  if (e.target === modalSeller) {
    modalSeller.classList.remove("visible");
  }
});

modalFinishSeller.addEventListener("click", (e) => {
  if (e.target === modalFinishSeller) {
    modalFinishSeller.classList.remove("visible");
  }
});
