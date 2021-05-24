<section id="project">
  <div class="wrapper">
    <div class="grid">
      <div class="left project-info" id="fixed-target">
        <div class="sticky-container" data-scroll data-scroll-sticky data-scroll-target="#fixed-target">

          <?php if( have_rows('info') ): ?>
            <?php while( have_rows('info') ): the_row(); ?>

              <div class="content">
                <div class="meta"><?php echo the_sub_field('client');?></div>
                <h1><?php echo the_sub_field('punchline');?></h1>
                <div class="role">
                  <div class="meta">Role</div>
                  <ul>
                    <?php if( have_rows('roles') ): ?>
                      <?php while( have_rows('roles') ): the_row(); ?>
                        <li><h5><?php echo the_sub_field('role');?></h5></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
                <div class="link">
                  <div class="meta">Status</div>
                  <h5><a href="<?php echo the_sub_field('link');?>">enova-elektrotechnik.de</a></h5>
                </div>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
      <div class="right project-mockups">
        <?php if( have_rows('mockups') ): ?>
          <?php while( have_rows('mockups') ): the_row(); ?>

            <img src="<?php echo the_sub_field('mockup');?>" alt="">

          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
