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
