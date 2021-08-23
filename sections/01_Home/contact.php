<?php if( have_rows('cta') ):
  while( have_rows('cta') ): the_row();

  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $button = get_sub_field('button');
  $member = get_sub_field('image')
  ?>

  <section id="contact" class="front-page" data-scroll-section>
    <div class="wrapper">
      <div class="grid">
        <div class="column" data-scroll data-scroll-speed="-0.5">
          <div class="contact">
            <div class="contact-wrapper">
              <h2 class="heading"><?php echo $title; ?></h2>

              <span class="large-text"><?php echo $text; ?></span>
            </div>

            <a class="button link" href="#">
              <div class="icon">
                <i class="fas fa-chevron-right"></i>
              </div>
              <span class="button-content"><?php echo $button; ?></span>
            </a>
          </div>
        </div>

        <div class="column" data-scroll data-scroll-speed="1.2">
          <div class="team-container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ressources/01_Team/erik.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
