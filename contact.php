<?php

get_header(); ?>

	<section id="contact">
		<div class="map"></div>
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

<?php
include 'sections/preload.php';
?>

<script type="text/javascript">
let map;

function initMap() {
  map = new google.maps.Map(document.querySelector(".map"), {
    center: { lat: 53.79416237935197, lng: 9.777104309519318 },
    zoom: 16,
    mapId: 'f9c10aa0eee63d5c',
    disableDefaultUI: true,
  });

  // The marker
    var marker = new google.maps.Marker({
      position: { lat: 53.79416237935197, lng: 9.777104309519318 },
      map: map,
      icon: 'http://5pectre.local/wp-content/uploads/2021/03/maps-1-e1615285591323.png'
    });
};

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHW7szU1m46tBN0PnFcTcxNB3oAkd8a7s&map_ids=f9c10aa0eee63d5c&callback=initMap&libraries=&v=weekly" charset="utf-8"></script>

<?php get_footer(); ?>
