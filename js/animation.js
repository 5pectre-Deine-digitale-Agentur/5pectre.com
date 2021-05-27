// LocomotiveScroll

gsap.registerPlugin(ScrollTrigger);

const pageContainer = document.querySelector('[data-scroll-container]');

/* SMOOTH SCROLL */
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true
});

//Trigger
let navTrigger = document.querySelector(".menu-link");
let burger = document.querySelector('.ham');
navTrigger.addEventListener("click",()=>{
  if (document.querySelector('.ham.hamRotate').classList.contains('active')) {
    document.getElementById('main-nav').classList.add('toggled');
  } else {
    document.getElementById('main-nav').classList.remove('toggled');
    document.getElementById('work').classList.remove('toggled');
  }
})
let workTrigger=document.querySelector(".work-link");
workTrigger.addEventListener("click",()=>{
  document.querySelector("#work").classList.toggle("toggled");
  if (document.querySelector('.ham.hamRotate').classList.contains('active')) {
    document.querySelector('.ham.hamRotate').classList.remove('active');
  } else {
    document.querySelector('.ham.hamRotate').classList.add('active');
  }
})

// TeamSlider
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

//Accordeon

let item = document.querySelectorAll('.skill-container');
let n = item.length

item.forEach((item, i) => {
  item.addEventListener('click', ()=> {
    item.classList.toggle('active');
  })
});
