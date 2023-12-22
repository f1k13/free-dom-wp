const buttonContactors = document.querySelector(".contractors-button");
const modalApplication = document.querySelector(".modal__application");
const modalSupplier = document.querySelector(".modal__supplier");
const buttonSupplier = document.querySelector(".supplier-button");
const modalFinishApp = document.querySelector(".modal__finish-application");
const modalFinishSupplier = document.querySelector(".modal__finish-supplier");

const buttonFinishApp = document.querySelector(".modal-button-application");

const buttonFinishSupplier = document.querySelector(".modal-button-supplier");

buttonFinishApp.addEventListener("click", (e) => {
  e.preventDefault();
  modalFinishApp.classList.add("visible");
});
buttonFinishSupplier.addEventListener("click", (e) => {
  e.preventDefault();
  modalFinishSupplier.classList.add("visible");
});
const modalOpen = (modal) => {
  if (!modal.classList.contains("visible")) {
    modal.classList.add("visible");
  } else {
    modal.classList.remove("visible");
  }
};

buttonContactors.addEventListener("click", () => modalOpen(modalApplication));
buttonSupplier.addEventListener("click", () => modalOpen(modalSupplier));

const closeOnOutsideClickModal = (event) => {
  if (event.target === modalApplication) {
    modalApplication.classList.remove("visible");
  }
};
const closeOnOutsideClickModalSupplier = (event) => {
  if (event.target === modalSupplier) {
    modalSupplier.classList.remove("visible");
  }
};

const closeOnOutsideClickModalFinishApplication = (event) => {
  if (event.target === modalFinishApp) {
    modalFinishApp.classList.remove("visible");
  }
};

const closeOnOutsideClickModalFinishSupplier = (event) => {
  if (event.target === modalFinishSupplier) {
    modalFinishSupplier.classList.remove("visible");
  }
};

modalApplication.addEventListener("click", closeOnOutsideClickModal);

modalSupplier.addEventListener("click", closeOnOutsideClickModalSupplier);

modalFinishApp.addEventListener(
  "click",
  closeOnOutsideClickModalFinishApplication,
);

modalFinishSupplier.addEventListener(
  "click",
  closeOnOutsideClickModalFinishSupplier,
);
