let navTrigger = document.querySelector('.menu-link');

navTrigger.addEventListener("click", ()=>{
	const nav = document.getElementById('main-nav');
	nav.classList.toggle('toggled');
});

window.onload = function(){
  let page = document.querySelector('body').classList.value;
  let items = document.querySelectorAll('.menu-item a');
  let n = items.length;

  for ( i = 0; i < n; i++) {
    if (items[i].innerHTML == page) {
      items[i].classList.toggle('active');
    }
  }
}

// Sitechange
const navi = document.querySelectorAll('.menu-item a');
const y = navi.length;

for (i = 0; i < y; i++){
  let url = navi[i].innerHTML;

  navi[i].addEventListener('click', function() {
    anime({
      targets: [".cta", "nav", ".controls", ".wrapper"],
      translateY: ["0", "10px"],
      opacity: ["1","0"],
      duration: 500,
      easing: 'linear'
    });

    anime({
      targets: "#preloader",
      width: ["0","100%"],
      delay: 500,
      duration: 1000,
      easing: 'linear'
    });

    if (url === "Home"){
      setTimeout(function(){
        window.location.assign("http://5pectre.local/");
      }, 1100);
    } else {
    setTimeout(function(){
      window.location.assign("http://5pectre.local/" + url + "/");
    }, 1100);
  }
});
}
