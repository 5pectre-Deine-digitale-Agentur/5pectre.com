<?php
/* 		Template Name: Contact

	* 	TODO: ACF einbinden
	*		TODO: AOS-Animationen erstellen

*/
get_header(); ?>

	<section id="contact" class="light-background">
		<div class="wrapper">
			<h1>Lass uns
				<h1 class="highlight">Gemeinsam durchstarten!</h1>
			</h1>

			<a class="cta phone" href="tel:040 237 24 33 302">
				<div class="icon">

				</div>
				<p>040 237 24 33 302</p>
			</a>
			<a class="cta mail" href="mailto:support@5pectre.com">
				<div class="icon">

				</div>
				<p>support@5pectre.com</p>
			</a>
			<a class="cta mail" href="mailto:support@5pectre.com">
				<div class="icon">

				</div>
				<p>Jetzt mit uns chatten!</p>
			</a>
		</div>
		<div class="header slider_img slide">
			<img src="<?php echo get_template_directory_uri();?>/img/assets/1.jpg" alt="">
		</div>
		<div class="cta">
			<div class="icon">

			</div>
			<p>Sende uns eine Mail, um unsere vielen weiteren Projekte zu erleben</p>
		</div>
	</section>

	<script type="text/javascript">
		document.querySelector('.menu').style.background = "#000";
		document.querySelector('.menu').style.padding = "20px 30px";
	</script>

	<!-- <script>
  window.watsonAssistantChatOptions = {
      integrationID: "01dedea3-eb24-4e06-ab9a-7a75bacfe714", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "c1bf530c-066b-4925-ba9a-522cd2d513a6", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script> -->

<?php get_footer(); ?>
