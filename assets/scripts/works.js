const sliders = document.querySelectorAll(".card__slider");
const controlls = document.querySelectorAll(".controlls");

function show(slider, index) {
  const images = slider.querySelectorAll(".slider-img");
  images.forEach((image) => {
    image.classList.remove("active");
  });
  images[index].classList.add("active");
}

controlls.forEach((item) => {
  item.addEventListener("click", (e) => {
    const sliderId = e.target.getAttribute("data-slide");
    console.log(sliderId);
    const slider = document.querySelector(sliderId);
    if (slider) {
      const images = slider.querySelectorAll(".slider-img");
      const currentIndex = Array.from(images).findIndex((image) =>
        image.classList.contains("active"),
      );

      if (e.target.classList.contains("prev")) {
        let index = currentIndex - 1;
        if (index < 0) {
          index = images.length - 1;
        }
        show(slider, index);
      } else if (e.target.classList.contains("next")) {
        let index = currentIndex + 1;
        if (index >= images.length) {
          index = 0;
        }
        show(slider, index);
      }
    }
  });
});

sliders.forEach((slider) => {
  const images = slider.querySelectorAll(".slider-img");
  show(slider, 0);
});
