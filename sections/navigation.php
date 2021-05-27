<nav>
  <div class="wrapper">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/stamp.svg" alt="">
        <p class="menu-link">
          <svg class="ham hamRotate" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
            <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
          </svg>
        </p>
    </div>
    <div class="navigation">
      <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
    </div>
    <div class="notice">
      <p>Deine digitale<br>Agentur</p>
    </div>
  </div>
</nav>

<div class="nav" id="main-nav">
  <div class="grid">
    <div class="left-nav">
      <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
    </div>
    <div class="right-nav">
      <div class="imprint">
        <h5>Location</h5>
        <p>Am Wasserwerk 2<br>25355 Barmstedt</p>
        <div class="imprint-menu">
          <ul>
            <li><a href="#">Skillz</a></li>
            <li><a href="#">Projektanfrage</a></li>
            <li><a href="#">Partner</a></li>
            <li><a href="#" class="active">Jetzt transformieren</a></li>
            <li><a href="#">Karriere</a></li>
          </ul>
        </div>
        <div class="imprint-nav">
          <?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript">
  window.onload = function(){
    let page = document.querySelector('body').classList.value;
    let items = document.querySelectorAll('.menu-item a');
    let n = items.length;

    console.log(page);

    for ( i = 0; i < n; i++) {
      console.log(i);
      if (items[i].innerHTML == page) {
        console.log("true");
        items[i].classList.toggle('active');
      }
    }
  }
</script> -->
