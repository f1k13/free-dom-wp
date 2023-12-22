let slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
  let slides = document.getElementsByClassName("myslide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (let slide of slides) {
    slide.style.display = "none";
  }
  slides[slideIndex - 1].style.display = "flex";
}
let timer = 0;
makeTimer();
function makeTimer() {
  clearInterval(timer);
  timer = setInterval(function () {
    slideIndex++;
    showSlides(slideIndex);
  }, 3000);
}

let seconds = 5;
setInterval(() => {
  seconds = seconds - 1;
  if (!seconds) seconds = 5;
}, 1000);
