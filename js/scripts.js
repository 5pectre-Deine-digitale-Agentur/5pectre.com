jQuery(document).ready(function() {
  anime({
    targets: "#loader_logo",
    opacity: "0",
    duration: 300,
    delay: 1000,
    easing: 'linear'
  });

  anime({
    targets: "#preloader",
    width: "0",
    left: "-100%",
    duration: 10000,
    delay: 1500
  });
});
