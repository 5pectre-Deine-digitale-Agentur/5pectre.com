anime({
  targets: [".wrapper", ".cta", "nav", ".controls"],
  opacity: ["0","1"],
  translateY: ["10px", "0"],
  delay: 3600,
  duration: 300,
  easing: 'linear'
});

anime({
  targets: ".border",
  width: "100%",
  delay: 4600,
  duration: 300,
  easing: 'linear'
});

anime({
  targets: ['.numbering span', '.agency'],
  opacity: ["0","1"],
  delay: function(el, i, l) {
    return 5000 + (i * 150);
  }
});

// Portfolio Slider
// let counter = 1;
// document.querySelector('.next').addEventListener('click', ()=>{
//   let slides = document.querySelectorAll('.slider_img');
//   let n = slides.length;
//
//   let content = document.querySelectorAll('.portfolio_item');
//
//   let titles = document.querySelectorAll('.slide_title');
//   let m = titles.length;
//
//   let numbers = document.querySelectorAll('.numbering span');
//   let l = numbers.length;
//
//   if (counter < n) {
//     counter += 1;
//     for(x=0;x<l;x++) {
//       numbers[x].classList.remove('active');
//     }
//     document.getElementById('number_' + counter).classList.add('active');
//     anime({
//       targets: [".slide_title_" + (counter - 1), ".cta", "nav", ".controls"],
//       translateY: ["0", "10px"],
//       opacity: ["1","0"],
//       duration: 500,
//       easing: 'linear'
//     })
//
//     anime({
//       targets: ".mask",
//       width: ["50%","100%","100%","50%"],
//       delay: 500,
//       duration: 1000,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: [".slide_title_" + counter, ".cta", "nav", ".controls"],
//       opacity: ["0","1"],
//       translateY: ["10px", "0"],
//       delay: 1500,
//       duration: 300,
//       easing: 'linear'
//     });
//
//   setTimeout(function(){
//     for(i=0;i<n;i++) {
//       slides[i].style.zIndex = "0";
//       content[i].style.display = "none";
//     }
//
//     for(j=0;j<m;j++) {
//       titles[j].style.display = "none";
//     }
//
//     document.querySelector('.slide_title_' + counter).style.display = "block";
//     document.getElementById('slide_' + counter).style.zIndex = 5;
//     document.querySelector('.portfolio_item_' + counter).style.display = "flex";
//   }, 1000);
//
//
// } else if ( counter = n) {
//     counter = 1
//
//     anime({
//       targets: [".slide_title_" + n, ".cta", "nav", ".controls"],
//       translateY: ["0", "10px"],
//       opacity: ["1","0"],
//       duration: 500,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: ".mask",
//       width: ["50%","100%","100%","50%"],
//       delay: 500,
//       duration: 1000,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: [".slide_title_" + counter, ".cta", "nav", ".controls"],
//       opacity: ["0","1"],
//       translateY: ["10px", "0"],
//       delay: 1500,
//       duration: 300,
//       easing: 'linear'
//     });
//
//     setTimeout(function(){
//       for(i=0;i<n;i++) {
//         slides[i].style.zIndex = "0";
//       }
//       for(i=0;i<m;i++) {
//         titles[i].style.display = "none";
//       }
//       for(i=0;i<l;i++) {
//         numbers[i].classList.remove('active');
//       }
//       document.getElementById('number_' + counter).classList.add('active');
//       document.querySelector('.slide_title_' + counter).style.display = "block";
//       document.getElementById('slide_' + counter).style.zIndex = 5;
//     }, 1000);
//   }
// });
//
// document.querySelector('.prev').addEventListener('click', ()=>{
//   let slides = document.querySelectorAll('.slider_img');
//   let n = slides.length;
//
//   let content = document.querySelectorAll('.portfolio_item');
//
//   let titles = document.querySelectorAll('.slide_title');
//   let m = titles.length;
//
//   let numbers = document.querySelectorAll('.numbering span');
//   let l = numbers.length;
//
//   if (counter < n) {
//     counter += 1;
//     for(x=0;x<l;x++) {
//       numbers[x].classList.remove('active');
//     }
//     document.getElementById('number_' + counter).classList.add('active');
//     anime({
//       targets: [".slide_title_" + (counter - 1), ".cta", "nav", ".controls"],
//       translateY: ["0", "10px"],
//       opacity: ["1","0"],
//       duration: 500,
//       easing: 'linear'
//     })
//
//     anime({
//       targets: ".mask",
//       width: ["50%","100%","100%","50%"],
//       delay: 500,
//       duration: 1000,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: [".slide_title_" + counter, ".cta", "nav", ".controls"],
//       opacity: ["0","1"],
//       translateY: ["10px", "0"],
//       delay: 1500,
//       duration: 300,
//       easing: 'linear'
//     });
//
//   setTimeout(function(){
//     for(i=0;i<n;i++) {
//       slides[i].style.zIndex = "0";
//       content[i].style.display = "none";
//     }
//
//     for(j=0;j<m;j++) {
//       titles[j].style.display = "none";
//     }
//
//     document.querySelector('.slide_title_' + counter).style.display = "block";
//     document.getElementById('slide_' + counter).style.zIndex = 5;
//     document.querySelector('.portfolio_item_' + counter).style.display = "flex";
//   }, 1000);
//
//
// } else if ( counter = n) {
//     counter = 1
//
//     anime({
//       targets: [".slide_title_" + n, ".cta", "nav", ".controls"],
//       translateY: ["0", "10px"],
//       opacity: ["1","0"],
//       duration: 500,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: ".mask",
//       width: ["50%","100%","100%","50%"],
//       delay: 500,
//       duration: 1000,
//       easing: 'linear'
//     });
//
//     anime({
//       targets: [".slide_title_" + counter, ".cta", "nav", ".controls"],
//       opacity: ["0","1"],
//       translateY: ["10px", "0"],
//       delay: 1500,
//       duration: 300,
//       easing: 'linear'
//     });
//
//     setTimeout(function(){
//       for(i=0;i<n;i++) {
//         slides[i].style.zIndex = "0";
//       }
//       for(i=0;i<m;i++) {
//         titles[i].style.display = "none";
//       }
//       for(i=0;i<l;i++) {
//         numbers[i].classList.remove('active');
//       }
//       document.getElementById('number_' + counter).classList.add('active');
//       document.querySelector('.slide_title_' + counter).style.display = "block";
//       document.getElementById('slide_' + counter).style.zIndex = 5;
//     }, 1000);
//   }
// });
