<?php
/*    STARTSEITE
  *   Template Name: Agency
  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentieren
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

<section id="title" class="light-background">
    <div class="wrapper">
      <h1>Einfach eine weitere Agentur
        <h1 class="highlight">Nur Besser</h1>
      </h1>
      <p class="desc">
        Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen.
      </p>
    </div>
    <div class="header slider_img slide">
      <img src="<?php echo get_template_directory_uri();?>/img/team/Erik.png" alt="">
    </div>
    <a href="#about" class="scroll">
      <span class="uppercase">SCROLL</span>
    </a>
    <div class="cta">
      <div class="icon">

      </div>
      <p>Sende uns eine Mail, um unsere vielen weiteren Projekte zu erleben</p>
    </div>
</section>

<section id="about">
  <div class="wrapper">
    <div class="about grid">
      <div class="left-col">
        <h4>Was macht uns Besser?</h4>
      </div>
      <div class="right-col">
        <h2>Wir kreieren Erlebnisse in der digitalen Welt, die Deine Ziele für dich erreichen.</h2>
        <p class="desc">
          Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="process">
  <div class="wrapper">
    <h2>Der Prozess zu Deinem Erfolg</h2>
    <div class="process grid">
      <div class="left-col">
        <ul>
          <li><h5 class="light">01 Entdecken</h5></li>
          <li>
            <h5 class="light">02 Recherche</h5>
          </li>
          <li>
            <h5 class="light">03 Entwicklung</h5>
          </li>
          <li>
            <h5 class="light">04 Start</h5>
          </li>
          <li>
            <h5 class="light">05 Resultate</h5>
          </li>
        </ul>
      </div>
      <div class="center-col">
        <div class="cont">
          <h4 class="light">Entdecken <span class="big-num">01</span></h4>
          <p>Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen. Und noch etwas blabla</p>
        </div>
      </div>
      <div class="right-col" id="canvas">

      </div>
    </div>
  </div>
</section>

<section id="team">
  <div class="grid-container">
    <main class="grid-item main">
      <div class="items">
        <div class="item item1">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Erik.png" alt="">
          <div class="data">
            <span class="highlight">Erik</span>
            <span>Geschäftsführer</span>
          </div>
        </div>
        <div class="item item2">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Roman.png" alt="">
          <div class="data">
            <span class="highlight">Roman</span>
            <span>Entwickler</span>
          </div>
        </div>
        <div class="item item3">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Schnabel.png" alt="">
          <div class="data">
            <span class="highlight">Schnabel</span>
            <span>Entwickler</span>
          </div>
        </div>
        <div class="item item4">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Erik.png" alt="">
          <div class="data">
            <span class="highlight">Erik</span>
            <span>Geschäftsführer</span>
          </div>
        </div>
        <div class="item item5">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Roman.png" alt="">
          <div class="data">
            <span class="highlight">Roman</span>
            <span>Entwickler</span>
          </div>
        </div>
        <div class="item item6">
          <img class="img" src="<?php echo get_template_directory_uri();?>/img/team/Schnabel.png" alt="">
          <div class="data">
            <span class="highlight">Schnabel</span>
            <span>Entwickler</span>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div class="special-title">
    <h2>Dein Team</h2>
  </div>
</section>

<section id="clients">
  <div class="wrapper">
    <div class="clients grid">
      <div class="left-col">
        <h4>Unsere Kunden</h4>
      </div>
      <div class="right-col">
        <h2>Grenzen sind sowas von letztes Jahrhundert.<br>Deshalb haben wir keine</h2>
        <p class="desc">
          Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen.
        </p>
      </div>
    </div>
    <div class="clients list">
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
      <div class="client">
        <img src="<?php echo get_template_directory_uri();?>/img/logo/basic.svg" alt="">
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 0.8; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;

  //Add Parallax
  const img = document.querySelectorAll('.img');
  const n = img.length;

  for (i = 0; i < n; i++){
    let position = i * 432;
    let width = window.innerWidth;
    let offset = 50;
    let current = offset + position/width - walk/50;
    img[i].style.transform = "translate3d(-" + current + "%,-50%,-500px)";
  }
  console.log(scrollLeft);
});
</script>

<?php get_footer(); ?>
