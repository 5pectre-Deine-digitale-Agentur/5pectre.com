document.getElementById('slider').addEventListener('mouseover',()=>{
	document.querySelector('.cursor-dot').classList.add('move-side');
});

document.getElementById('slider').addEventListener('mouseout',()=>{
	document.querySelector('.cursor-dot').classList.remove('move-side');
});

window.addEventListener("scroll", function() {
  if(window.pageYOffset > 15) {
    document.querySelector('.drag').style.transition = "0.5s";
    document.querySelector('.drag').style.transform = "translateY(-50px)";
    document.querySelector('.drag').style.opacity = "0";
  } else {
    document.querySelector('.drag').style.transition = "0.5s";
    document.querySelector('.drag').style.transform = "translateY(0)";
    document.querySelector('.drag').style.opacity = "1";
  };
});
