var follow = document.querySelector('.follower');
var cur = document.querySelector('.cursor');

gsap.set('.follower',{xPercent:-50,yPercent:-50});
gsap.set('.cursor',{xPercent:-50,yPercent:-50});

window.addEventListener('mousemove',e => {
    gsap.to(cur,0.01,{x:e.clientX,y:e.clientY});
    gsap.to(follow,0.3,{x:e.clientX,y:e.clientY});
});
