gsap.registerPlugin(ScrollTrigger);const pageContainer=document.querySelector("[data-scroll-container]"),scroller=new LocomotiveScroll({el:pageContainer,smooth:!0});let navTrigger=document.querySelector(".menu-link"),burger=document.querySelector(".ham");navTrigger.addEventListener("click",(()=>{document.querySelector(".ham.hamRotate").classList.contains("active")?document.getElementById("main-nav").classList.add("toggled"):(document.getElementById("main-nav").classList.remove("toggled"),document.getElementById("work").classList.remove("toggled"))}));let workTrigger=document.querySelector(".work-link");workTrigger.addEventListener("click",(()=>{document.querySelector("#work").classList.toggle("toggled"),document.querySelector(".ham.hamRotate").classList.contains("active")?document.querySelector(".ham.hamRotate").classList.remove("active"):document.querySelector(".ham.hamRotate").classList.add("active")}));const slider=document.querySelector(".items");let startX,scrollLeft,isDown=!1;slider.addEventListener("mousedown",(e=>{isDown=!0,slider.classList.add("active"),startX=e.pageX-slider.offsetLeft,scrollLeft=slider.scrollLeft})),slider.addEventListener("mouseleave",(()=>{isDown=!1,slider.classList.remove("active")})),slider.addEventListener("mouseup",(()=>{isDown=!1,slider.classList.remove("active")})),slider.addEventListener("mousemove",(e=>{if(!isDown)return;e.preventDefault();const t=.8*(e.pageX-slider.offsetLeft-startX);slider.scrollLeft=scrollLeft-t;const r=document.querySelectorAll(".img"),s=r.length;for(i=0;i<s;i++){let e=50+432*i/window.innerWidth-t/50;r[i].style.transform="translate3d(-"+e+"%,0,-500px)"}}));let item=document.querySelectorAll(".skill-container"),n=item.length;item.forEach(((e,t)=>{e.addEventListener("click",(()=>{e.classList.toggle("active")}))}));