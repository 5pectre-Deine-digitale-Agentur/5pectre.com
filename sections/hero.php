<section id="title" class="light-background">
    <div class="wrapper">
      <div class="subtitle">
        <div class="numbering">
          <span class="active" id="number_0">1</span>
          <span id="number_1">2</span>
          <span id="number_2">3</span>
          <span id="number_3">4</span>
          <div class="border"></div>
        </div>
        <span class="agency"> // Deine digitale Agentur</span>
      </div>
      <div class="text_0 heading">
        <h1>Einfach eine weitere Agentur</h1>
        <h1 class="highlight">Nur Besser</h1>
        <div class="button-container">
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
        </div>
      </div>
      <div class="text_1 heading">
        <h1>Wir sind die</h1>
        <h1 class="highlight2">bessere Wahl</h1>
        <div class="button-container">
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
        </div>
      </div>
      <div class="text_2 heading">
        <h1>Internet hier,</h1>
        <h1 class="highlight3">Internet da!</h1>
        <div class="button-container">
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
          <a class="button chat" href="mailto:support@5pectre.com">
            <div class="icon">
              <i class="fab fa-whatsapp classic"></i>
              <i class="fas fa-arrow-right hover"></i>
            </div>
            <p>Jetzt mit uns chatten!</p>
          </a>
        </div>
      </div>

    </div>
    <div class="header slider_img slide_0 slide" id="slide_1">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/team/Erik.png" alt="">
    </div>
    <div class="header slider_img slide_1 slide" id="slide_2">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/team/Roman.png" alt="">
    </div>
    <div class="header slider_img slide_2 slide" id="slide_3">
      <img src="<?php echo get_template_directory_uri();?>/img/assets/team/Schnabel.png" alt="">
    </div>
    <div class="controls">
      <div class="hero-cta">
        <a class="button chat" href="mailto:support@5pectre.com">
          <div class="icon">
            <i class="fab fa-whatsapp classic"></i>
            <i class="fas fa-arrow-right hover"></i>
          </div>
          <p>Jetzt mit uns chatten!</p>
        </a>
      </div>
      <div class="arrows">
        <div class="prev trigger"></div>
        <div class="next trigger"></div>
      </div>
    </div>
    <div class="mask"></div>
</section>

<script type="text/javascript">
// Hero Slider
let counter = 0;

document.querySelector('.next').addEventListener('click', ()=> {
  let slides = document.querySelectorAll('.slider_img');
  let n = slides.length;

  if (counter < n - 1){
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter+= 1;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  } else if (counter == n - 1) {
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter = 0;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  }
});

document.querySelector('.prev').addEventListener('click', ()=> {
  let slides = document.querySelectorAll('.slider_img');
  let n = slides.length;

  if (counter > 0){
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter-= 1;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  } else if (counter == 0) {
    anime({
      targets: ".mask",
      width: ["50%","100%","100%","50%"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    anime({
      targets: [".wrapper", ".cta", "nav", ".controls"],
      opacity: ["1","0","0","1"],
      translateY: ["0","10px","10px","0"],
      delay: 0,
      duration: 1500,
      easing: 'linear'
    });
    setTimeout(function(){
      document.querySelector('.slide_' + counter).style.display = "none";
      document.querySelector('.text_' + counter).style.display = "none";
      document.getElementById('number_' + counter).classList.remove('active');
      counter = n - 1;
      document.querySelector('.slide_' + counter).style.display = "block";
      document.querySelector('.text_' + counter).style.display = "block";
      document.getElementById('number_' + counter).classList.add('active');
    }, 1000);
  }
});
</script>
