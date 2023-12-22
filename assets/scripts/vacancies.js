const vacanciesButtonOpen = document.querySelectorAll(".vacancies-item-button");
const modalVacancies = document.querySelector(".modal__vacancies");
vacanciesButtonOpen.forEach((item) => {
  item.addEventListener("click", () => {
    modalVacancies.classList.add("visible");
  });
});

modalVacancies.addEventListener("click", (event) => {
  if (event.target === modalVacancies) {
    modalVacancies.classList.remove("visible");
  }
});