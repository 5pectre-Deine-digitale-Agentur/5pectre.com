window.addEventListener("scroll", function() {
  if(window.pageYOffset > 15) {
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(-50px)";
    document.querySelector('.navigation').style.opacity = "0";
    document.querySelector('.scroll').style.transition = "0.5s";
    document.querySelector('.scroll').style.transform = "translateY(-300%) rotate(-90deg)";
    document.querySelector('.scroll').style.opacity = "0";
    document.querySelector('.hero-cta').style.transition = "0.5s";
    document.querySelector('.hero-cta').style.transform = "translateY(-50px)";
    document.querySelector('.hero-cta').style.opacity = "0";
  } else {
    document.querySelector('.navigation').style.transition = "0.5s";
    document.querySelector('.navigation').style.transform = "translateY(0)";
    document.querySelector('.navigation').style.opacity = "1";
    document.querySelector('.scroll').style.transition = "0.5s";
    document.querySelector('.scroll').style.transform = "translateY(-50%) rotate(-90deg)";
    document.querySelector('.scroll').style.opacity = "1";
    document.querySelector('.hero-cta').style.transition = "0.5s";
    document.querySelector('.hero-cta').style.transform = "translateY(0)";
    document.querySelector('.hero-cta').style.opacity = "1";
  };
});

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
