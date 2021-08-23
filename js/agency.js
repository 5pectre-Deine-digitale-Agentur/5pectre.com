// // TeamSlider
const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 0.8; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;

  //Add Parallax
  const img = document.querySelectorAll('.img');
  const n = img.length;

  for (i = 0; i < n; i++){
    let position = i * 432;
    let width = window.innerWidth;
    let offset = 50;
    let current = offset + position/width - walk/50;
    img[i].style.transform = "translate3d(-" + current + "%,0,-500px)";
  }
});
