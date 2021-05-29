<?php if( have_rows('skillz') ):
  while( have_rows('skillz') ): the_row();?>

  <?php $skill = have_rows('skill');
   if( get_sub_field('titel') or !empty( $skill )): ?>

<section id="skillz" class="agency">
  <div class="wrapper">

<!-- Funktioniert hier auch nicht, ich weiß nicht was los ist. -->

    <?php if( get_sub_field('titel') ): ?>

      <div class="skill-title">
        <h2 class="heading"><?php echo get_sub_field('titel') ?></h2>
      </div>

    <?php endif; ?>

    <?php if( have_rows('skill') ):
      while( have_rows('skill') ): the_row();?>

      <?php if( get_sub_field('titel') or get_sub_field('text')): ?>

        <div class="skill-row">
          <div class="skill-container accordeon">
            <div class="skill-preview">
              <h3 class="heading"><?php echo get_sub_field('titel') ?></h3>
            </div>
            <div class="skill-content">
              <span class="large-text"><?php echo get_sub_field('text') ?></span>
            </div>
          </div>
          <div class="show-more">
            <div class="icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
        </div>

      <?php endif; ?>
      <?php endwhile; ?>
      <?php endif; ?>

    <!-- <div class="skill-row">
      <div class="skill-container accordeon">
        <div class="skill-preview">
          <h3 class="heading">.. du eine App, Software oder Webseite Entwicklen möchtest</h3>
        </div>
        <div class="skill-content">
          <span class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
      <div class="show-more">
        <div class="icon">
          <i class="fas fa-chevron-down"></i>
        </div>
      </div>
    </div> -->
    <div class="skill-row">
      <div class="skill-container accordeon">
        <div class="skill-preview">
          <h3 class="heading">.. dein Onlineshop den gewissen Kick genötigt</h3>
        </div>
        <div class="skill-content">
          <span class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
      <div class="show-more">
        <div class="icon">
          <i class="fas fa-chevron-down"></i>
        </div>
      </div>
    </div>
    <div class="skill-row">
      <div class="skill-container accordeon">
        <div class="skill-preview">
          <h3 class="heading">.. du mit Social-Media Mitarbeiter anwerben möchtest</h3>
        </div>
        <div class="skill-content">
          <span class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
      <div class="show-more">
        <div class="icon">
          <i class="fas fa-chevron-down"></i>
        </div>
      </div>
    </div>
    <div class="skill-row">
      <div class="skill-container accordeon">
        <div class="skill-preview">
          <h3 class="heading">.. du ein System benötigst um Online an neue Kunden ran zu kommen.</h3>
        </div>
        <div class="skill-content">
          <span class="large-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
      </div>
      <div class="show-more">
        <div class="icon">
          <i class="fas fa-chevron-down"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
