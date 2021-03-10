jQuery(document).ready(function() {
  anime({
    targets: "#loader_logo",
    opacity: ["0","1","1","0"],
    duration: 2000,
    easing: 'linear'
  });
  anime({
    targets: "#preloader",
    width: "0",
    left: "-100%",
    duration: 10000,
    delay: 2500
  });
});
