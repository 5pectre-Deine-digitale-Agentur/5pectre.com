jQuery(document).ready(function() {
  anime({
    targets: "#loader_logo",
    opacity: ["0","1","1","0"],
    duration: 2000,
    easing: 'linear'
  });
  anime({
    targets: "#preloader",
    width: ["100%", "0"],
    duration: 1000,
    delay: 2500,
    easing: 'linear'
  });
});
