<section id="contact">
  <div class="map" id="map">
  </div>
  <div class="wrapper grid">
    <div class="contact-button">
      <a class="button phone" href="tel:040 237 24 33 302">
        <div class="icon">
          <i class="fas fa-headset classic"></i>
          <i class="fas fa-arrow-right hover"></i>
        </div>
        <p>einfach anrufen!</p>
      </a>
      <a class="button mail" href="mailto:support@5pectre.com">
        <div class="icon">
          <i class="fas fa-at classic"></i>
          <i class="fas fa-arrow-right hover"></i>
        </div>
        <p>E-Mail schreiben</p>
      </a>
      <a class="button chat" href="mailto:support@5pectre.com">
        <div class="icon">
          <i class="fab fa-whatsapp classic"></i>
          <i class="fas fa-arrow-right hover"></i>
        </div>
        <p>Jetzt mit uns chatten!</p>
      </a>
    </div>
    <div class="adress">
      <img src="<?php echo get_template_directory_uri();?>/img/logos/logo.svg" alt="">
      <p><strong>5pectre UG (haftungsbeschränkt)</strong><br>Am Wasserwerk 2<br>25355 Barmstedt</p>
      <div class="imprint">
        <?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>
      </div>
    </div>
  </div>
</section>
