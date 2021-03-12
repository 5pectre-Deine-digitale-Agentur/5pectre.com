  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/cards.css">


<div class="cont" id="slider">
  <div class="slider"></div>
  <div data-target="right "class="side-nav side-nav--right"></div>
  <div data-target="left" class="side-nav side-nav--left"></div>
</div>

<?php if( have_rows('portfolio') ): ?>
  <?php $num = 1;?>
  <?php while( have_rows('portfolio') ): the_row(); ?>

  <div class="portfolio__content nav__slide--<?php echo $num;?>">
    <section class="portfolio-item portfolio_item_1" id="about" style="will-change: display; display: flex">
      <div class="wrapper">
        <div class="about grid">
          <div class="left-col">
            <h3>Test1</h3>
    				<ul class="duty-list">
    					<li>Art Direction</li>
    					<li>Webdesign</li>
    					<li>User Experience</li>
    					<li>Graphic Design</li>
    					<li>Developement</li>
    				</ul>
    				<h3>Datum</h3>
    				<ul class="duty-list">
    					<li>01.01.2021</li>
    				</ul>
    				<h3>Status</h3>
    				<ul class="duty-list">
    					<li>Online</li>
    				</ul>
          </div>
          <div class="right-col">
            <span>
    					Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen. Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen. Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen. Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen.<br><br>
    					Lorem Ipsum dolor sit met ist nur ein Dummytext, den sich irgendwer als Platzhalter überlegt hatte. Man nutzt diesen als Platzhalter zur Bemessung von typografischen Räumen.
    				</span>
          </div>
        </div>
      </div>
    </section>
    <section id="mockups">
    	<div class="wrapper">
        <?php if( have_rows('project_gallery') ): ?>
          <?php while( have_rows('project_gallery') ): the_row(); ?>
            <img class="portfolio-img" src="<?php echo the_sub_field('image');?>" alt="">
          <?php endwhile; ?>
        <?php endif; ?>
    	</div>
    </section>
  </div>

  <?php $num++; endwhile; ?>
<?php endif; ?>

<script type="text/javascript">
jQuery(document).ready(function() {
  const $cont = jQuery('.cont');
  const $slider = jQuery('.slider');
  const winW = jQuery(window).width();
  const animSpd = 750; // Change also in CSS
  const distOfLetGo = winW * 0.2;
  let curSlide = 1;
  let animation = false;
  let autoScrollVar = true;
  let diff = 0;

  // Generating slides
  let arrCities = [
    <?php if( have_rows('portfolio') ): ?>
      <?php while( have_rows('portfolio') ): the_row(); ?>
        "<?php echo the_sub_field('project_title');?>",
      <?php endwhile; ?>
    <?php endif; ?>
  ]; // Change number of slides in CSS also
  let clientMockups = [
    <?php if( have_rows('portfolio') ): ?>
      <?php while( have_rows('portfolio') ): the_row(); ?>
        "<?php echo the_sub_field('project_mockup');?>",
      <?php endwhile; ?>
    <?php endif; ?>
  ];
  let clientLogo = [
    <?php if( have_rows('portfolio') ): ?>
      <?php while( have_rows('portfolio') ): the_row(); ?>
        "<?php echo the_sub_field('client_logo');?>",
      <?php endwhile; ?>
    <?php endif; ?>
  ];
  let numOfCities = arrCities.length;
  let arrCitiesDivided = [];

  arrCities.map((city) => {
    let length = city.length;
    let letters = Math.floor(length / 4);
    let exp = new RegExp(".{1," + letters + "}", "g");

    arrCitiesDivided.push(city.match(exp));
  });

  let generateSlide = function(city) {
    let frag1 = jQuery(document.createDocumentFragment());
    let frag2 = jQuery(document.createDocumentFragment());
    const numSlide = arrCities.indexOf(arrCities[city]) + 1;
    const indexSlide = arrCities.indexOf(arrCities[city]);
    const firstLetter = arrCitiesDivided[city][0].charAt(0);

    const $slide =
      jQuery(`<div data-target="${numSlide}" class="slide slide--${numSlide}">
        <div class="slide__text-wrapper slide--${numSlide}__text-wrapper"></div>
      </div>`);

    const letter =
      jQuery(`<div class="slide__letter slide--${numSlide}__letter">
        <img src="` + clientMockups[indexSlide] + `" class="frame">
      </div>`);

      const text =
        jQuery(`<div class="slide__logo">
          <img src="<?php echo get_template_directory_uri();?>/img/logos/logo.svg" alt="" class="5pectre-logo">
          <div class="x"></div>
          <img src="` + clientLogo[indexSlide] + `" class="client-logo">
        </div>`);
      frag1.append(text);


    const navSlide = jQuery(`<li data-target="jQuery{numSlide}" class="nav__slide nav__slide--${numSlide}"></li>`);
    frag2.append(navSlide);

    $slide.find(`.slide--${numSlide}__text-wrapper`).append(letter).append(frag1);
    $slider.append($slide);

    if (arrCities[city].length <= 4) {
      jQuery('.slide--' + numSlide).find('.slide__text').css("font-size", "12vw");
    }
  };

  for (let i = 0, length = numOfCities; i < length; i++) {
    generateSlide(i);
  }

  jQuery('.nav__slide--1').addClass('nav-active');

  // Navigation
  function bullets(dir) {
    jQuery('.nav__slide--' + curSlide).removeClass('nav-active');
    jQuery('.nav__slide--' + dir).addClass('nav-active');
  }

  function timeout() {
    animation = false;
  }

  function pagination(direction) {
    animation = true;
    diff = 0;
    $slider.addClass('animation');
    $slider.css({
      'transform': 'translate3d(-' + ((curSlide - direction) * 100) + '%, 0, 0)'
    });

    $slider.find('.slide__darkbg').css({
      'transform': 'translate3d(' + ((curSlide - direction) * 50) + '%, 0, 0)'
    });

    $slider.find('.slide__letter').css({
      'transform': 'translate3d(0, 0, 0)',
    });

    $slider.find('.slide__text').css({
      'transform': 'translate3d(0, 0, 0)'
    });
  }

  function navigateRight() {
    if (!autoScrollVar) return;
    if (curSlide >= numOfCities) return;
    pagination(0);
    setTimeout(timeout, animSpd);
    bullets(curSlide + 1);
    curSlide++;
  }

  function navigateLeft() {
    if (curSlide <= 1) return;
    pagination(2);
    setTimeout(timeout, animSpd);
    bullets(curSlide - 1);
    curSlide--;
  }

  function toDefault() {
    pagination(1);
    setTimeout(timeout, animSpd);
  }

  // Events
  jQuery(document).on('mousedown touchstart', '.slide', function(e) {
    if (animation) return;
    let target = +jQuery(this).attr('data-target');
    let startX = e.pageX || e.originalEvent.touches[0].pageX;
    $slider.removeClass('animation');

    jQuery(document).on('mousemove touchmove', function(e) {
      let x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = startX - x;
      if (target === 1 && diff < 0 || target === numOfCities && diff > 0) return;

      $slider.css({
        'transform': 'translate3d(-' + ((curSlide - 1) * 100 + (diff / 30)) + '%, 0, 0)'
      });

      $slider.find('.slide__darkbg').css({
        'transform': 'translate3d(' + ((curSlide - 1) * 50 + (diff / 60)) + '%, 0, 0)'
      });

      $slider.find('.slide__letter').css({
        'transform': 'translate3d(' + (diff / 60) + 'vw, 0, 0)',
      });

      $slider.find('.slide__text').css({
        'transform': 'translate3d(' + (diff / 15) + 'px, 0, 0)'
      });
    })
  })

  jQuery(document).on('mouseup touchend', function(e) {
    jQuery(document).off('mousemove touchmove');

    if (animation) return;

    if (diff >= distOfLetGo) {
      navigateRight();
    } else if (diff <= -distOfLetGo) {
      navigateLeft();
    } else {
      toDefault();
    }
  });

  jQuery(document).on('click', '.nav__slide:not(.nav-active)', function() {
    let target = +jQuery(this).attr('data-target');
    bullets(target);
    curSlide = target;
    pagination(1);
  });

  jQuery(document).on('click', '.side-nav', function() {
    let target = jQuery(this).attr('data-target');

    if (target === 'right') navigateRight();
    if (target === 'left') navigateLeft();
  });

  jQuery(document).on('keydown', function(e) {
    if (e.which === 39) navigateRight();
    if (e.which === 37) navigateLeft();
  });
});
</script>
