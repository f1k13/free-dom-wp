document.querySelector(".list-item-link-nav").addEventListener("click", (e) => {
  e.preventDefault();
  document.querySelector(".list-item__sublist").classList.toggle("visible");
});
const buttonOpenList = document.querySelector(".path__list-item-open");

buttonOpenList.addEventListener("click", (e) => {
  e.preventDefault();
  document.querySelector(".list-item__sublist").classList.toggle("visible");
});
