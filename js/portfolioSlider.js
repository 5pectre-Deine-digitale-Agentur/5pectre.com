document.getElementById('slider').addEventListener('mouseover',()=>{
	document.querySelector('.cursor-dot').classList.add('move-side');
});

document.getElementById('slider').addEventListener('mouseout',()=>{
	document.querySelector('.cursor-dot').classList.remove('move-side');
});
