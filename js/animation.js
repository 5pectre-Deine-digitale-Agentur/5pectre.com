window.addEventListener("scroll", function() {
  if(window.pageYOffset > 15) {
    anime({
      targets: [".navigation"],
      translateY: "-100px",
      duration: 200,
      easing: 'linear'
    });
  } else {
    anime({
      targets: [".navigation"],
      translateY: "0",
      duration: 200,
      easing: 'linear'
    });
  };
  // let par = document.querySelectorAll('.par');
  // let n =  par.length;
  // for (i = 0; i < n; i++){
  //   let box = par[i].getBoundingClientRect();
  //
  //   anime({
  //     targets: [".par"],
  //     translateY: -box.top,
  //     duration: 200,
  //     easing: 'linear'
  //   });
  // }
})

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
