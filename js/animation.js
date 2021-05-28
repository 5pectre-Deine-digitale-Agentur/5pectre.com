// LocomotiveScroll
gsap.registerPlugin(ScrollTrigger);
const pageContainer = document.querySelector('[data-scroll-container]');
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true
});

// Navigation
window.addEventListener("scroll", function() {
  if(window.pageYOffset > 15) {
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(-50px)";
    document.querySelector('.navigation').style.opacity = "0";
  } else {
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(0)";
    document.querySelector('.navigation').style.opacity = "1";
  };
});

//Trigger
let navTrigger = document.querySelector(".menu-link");
let burger = document.querySelector('.ham');
navTrigger.addEventListener("click",()=>{
  if (document.querySelector('.ham.hamRotate').classList.contains('active')) {
    document.getElementById('main-nav').classList.add('toggled');
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(-50px)";
    document.querySelector('.navigation').style.opacity = "0";
  } else {
    document.getElementById('main-nav').classList.remove('toggled');
    document.getElementById('work').classList.remove('toggled');
    document.getElementById('moin').classList.remove('toggled');
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(0)";
    document.querySelector('.navigation').style.opacity = "1";
  }
})
let workTrigger=document.querySelector(".work-link");
workTrigger.addEventListener("click",()=>{

  document.querySelector("#work").classList.toggle("toggled");
  if (document.querySelector('.ham.hamRotate').classList.contains('active')) {
    document.querySelector('.ham.hamRotate').classList.remove('active');
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(0)";
    document.querySelector('.navigation').style.opacity = "1";
  } else {
    document.querySelector('.ham.hamRotate').classList.add('active');
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(-50px)";
    document.querySelector('.navigation').style.opacity = "0";
  }
})
let moinTrigger=document.querySelector(".moin-link");
moinTrigger.addEventListener("click",()=>{

  document.querySelector("#moin").classList.toggle("toggled");
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

// Accordeon
let item = document.querySelectorAll('.accordeon');

item.forEach((item, i) => {
  item.addEventListener('click', ()=> {
    item.classList.toggle('active');
  })
});
