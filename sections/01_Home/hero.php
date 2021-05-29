<?php if( have_rows('hero') ):
  while( have_rows('hero') ): the_row();

  $punchline = get_sub_field('punchline');
  $mission = get_sub_field('mission');
  ?>
  <section id="hero" class="front-page">
    <div class="wrapper">
      <div class="title">
        <h1 class="heading"><?php echo $punchline ?></h1>
      </div>
      <div class="mission">
        <span class="large-text"><?php echo $mission ?></span>
      </div>
    </div>
    <div class="hero-image">
      <img src="https://images.pexels.com/photos/2373356/pexels-photo-2373356.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>
