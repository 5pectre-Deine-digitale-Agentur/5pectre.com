<?php if( have_rows('portfolio') ):
  while( have_rows('portfolio') ): the_row();?>

<?php if( get_sub_field('text')): ?>

<section id="portfolio" class="front-page">
  <div class="wrapper">
    <div class="grid">
        <!-- BEGIN item -->

        <?php if( have_rows('item') ):
          while( have_rows('item') ): the_row();?>

          <?php if( get_sub_field('titel') or get_sub_field('text') or get_sub_field('link') or get_sub_field('image') or get_sub_field('datum')): ?>

        <a href="<?php echo get_sub_field('link') ?>" class="item item_v">
            <div class="item__image">

              <?php $image = get_sub_field('image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php endif; ?>

              <?php if( get_sub_field('datum') ): ?>
              <div class="item__meta"><?php echo get_sub_field('datum') ?></div>
              <?php endif; ?>

            </div>
            <?php if( get_sub_field('titel') ): ?>
              <h3 class="item__title heading"><?php echo get_sub_field('titel') ?></h2>
            <?php endif; ?>

            <?php if( get_sub_field('text') ): ?>
              <p><?php echo get_sub_field('text') ?></p>
            <?php endif; ?>
        </a>
      <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

      <!-- <a href="https://www.livescience.com/octopuses-punch-fish.html" class="item item_v">
          <div class="item__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
              <div class="item__meta">December 23, 2020</div>
          </div>

          <h3 class="item__title heading">Octopus punches fish in the head (just because it can)</h2>
          <p>Octopuses sometimes partner with fish to hunt, but the partnership comes with risks (for the fish, that is).</p>
      </a> -->
        <!-- END item -->
        <!-- <a href="https://www.livescience.com/balloon-like-comb-jelly-discovered-puerto-rico.html" class="item item_h">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
                <div class="item__meta">December 01, 2020</div>
            </div>

            <h3 class="item__title heading">Newfound marine blob looks like 'party balloon' with two strings, scientists say</h3>
            <p>This is the first species NOAA scientists have ever discovered from video footage alone.</p>
        </a>
        <a href="https://www.livescience.com/balloon-like-comb-jelly-discovered-puerto-rico.html" class="item item_h">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
                <div class="item__meta">December 01, 2020</div>
            </div>

            <h3 class="item__title heading">Newfound marine blob looks like 'party balloon' with two strings, scientists say</h3>
            <p>This is the first species NOAA scientists have ever discovered from video footage alone.</p>
        </a>
        <a href="https://www.livescience.com/octopuses-punch-fish.html" class="item item_v">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/background.png" alt="">
                <div class="item__meta">December 23, 2020</div>
            </div>

            <h3 class="item__title heading">Octopus punches fish in the head (just because it can)</h2>
            <p>Octopuses sometimes partner with fish to hunt, but the partnership comes with risks (for the fish, that is).</p>
        </a> -->
        <!-- END item -->
      </div>
    <div class="portfolio">

      <?php if( get_sub_field('text') ): ?>
        <div class="text-wrapper">
            <span class="large-text"><?php echo get_sub_field('text') ?></span>
        </div>
      <?php endif; ?>

      <a class="button" href="#">
        <div class="icon">
          <i class="fas fa-angle-right"></i>
          <span class="overflow">Button</span>
        </div>
        <span class="button-content">Button</span>
      </a>
    </div>
  </div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
