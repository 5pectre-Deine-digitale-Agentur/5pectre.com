// Hero Slider
let counter = 0;

document.querySelector('.next').addEventListener('click', ()=> {
  let slides = document.querySelectorAll('.slider_img');
  let n = slides.length;

  if (counter < n - 1){
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.card_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter+= 1;
      document.querySelector('.card_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  } else if (counter == n - 1) {
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.card_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter = 0;
      document.querySelector('.card_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  }
});

document.querySelector('.prev').addEventListener('click', ()=> {
  let slides = document.querySelectorAll('.slider_img');
  let n = slides.length;

  if (counter > 0){
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter-= 1;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  } else if (counter == 0) {
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter = n - 1;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  }
});
