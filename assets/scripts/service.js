const tabsButton = document.querySelectorAll(".list-item-tab");
const tabsItems = document.querySelectorAll(".tabs__list-content");

document.querySelector("select").addEventListener("change", function () {
  document.querySelectorAll(".tabs__list-content").forEach((n, i) => {
    console.log(n);
    n.classList.toggle("active", i === this.selectedIndex);
  });
});
tabsButton.forEach((item) => {
  item.addEventListener("click", (event) => {
    const tabId = item.getAttribute("data-tab");
    const currentTab = document.querySelector(tabId);
    tabsButton.forEach((item) => {
      item.classList.remove("active");
    });

    tabsItems.forEach((item) => {
      item.classList.remove("active");
    });

    item.classList.add("active");
    currentTab.classList.add("active");
  });
});

document.querySelector(".list-item-tab").click();
