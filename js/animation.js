// LocomotiveScroll
gsap.registerPlugin(ScrollTrigger);
const pageContainer = document.querySelector('[data-scroll-container]');
const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true
});

function work(){
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
}
let workTrigger=document.querySelector(".work-link");
workTrigger.addEventListener("click",()=>{
  work();
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

// Accordeon
let item = document.querySelectorAll('.accordeon');

item.forEach((item, i) => {
  item.addEventListener('click', ()=> {
    item.classList.toggle('active');
  })
});
