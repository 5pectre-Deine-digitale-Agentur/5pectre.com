gsap.registerPlugin(ScrollTrigger);const pageContainer=document.querySelector("[data-scroll-container]"),scroller=new LocomotiveScroll({el:pageContainer,smooth:!0});function work(){document.querySelector("#work").classList.toggle("toggled"),document.querySelector(".ham.hamRotate").classList.contains("active")?(document.querySelector(".ham.hamRotate").classList.remove("active"),document.querySelector(".navigation").style.transition="0.5s",document.querySelector(".navigation").style.transform="translateY(0)",document.querySelector(".navigation").style.opacity="1"):(document.querySelector(".ham.hamRotate").classList.add("active"),document.querySelector(".navigation").style.transition="0.5s",document.querySelector(".navigation").style.transform="translateY(-50px)",document.querySelector(".navigation").style.opacity="0")}let workTrigger=document.querySelector(".work-link");workTrigger.addEventListener("click",(()=>{work()}));let moinTrigger=document.querySelector(".moin-link");moinTrigger.addEventListener("click",(()=>{document.querySelector("#moin").classList.toggle("toggled"),document.querySelector(".ham.hamRotate").classList.contains("active")?document.querySelector(".ham.hamRotate").classList.remove("active"):document.querySelector(".ham.hamRotate").classList.add("active")}));let item=document.querySelectorAll(".accordeon");item.forEach(((e,t)=>{e.addEventListener("click",(()=>{e.classList.toggle("active")}))}));