<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Art Del - Contato</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project - Contact">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">
	
	<?php
		$pag_ativa = 'contato';
		include "componentes/header.php";
	?>

	<!-- Home -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
						<h1>Contato</h1>
						<span>fale conosco</span>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="home_social">
			<li><a href="https://www.facebook.com/Control-Art-Del-113762895987467/"><i class="fab fa-facebook-f trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
			<li><a href="https://www.instagram.com/controlartdel/"><i class="fab fa-instagram trans_300"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
		</ul>
	</div>

	<?php
		include "componentes/home_social.php";
	?>

	<!-- Contact Content -->

	<div class="contact_content">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<div class="contact_main_content">

						<div class="contact_subtitle">como podemos ajudar?</div>
						
						<!-- Contact Us Form -->
						<div class="contact_form_container">
							<form id="reply_form" action="post">
								<div>
									<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Nome" required="required" data-error="Nome é obrigatório.">
									<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="E-mail válido é obrigatório.">
									<input id="contact_form_subject" class="input_field contact_form_subject" type="text" placeholder="Assunto" required="required" data-error="Assunto é obrigatório.">
									<textarea id="contact_form_message" class="text_field contact_form_message" name="message"  placeholder="Mensagem" rows="4" required data-error="Escreva algo para nós!"></textarea>
								</div>
								<div>
									<button id="contact_form_submit" type="submit" class="contact_submit_btn trans_300" value="Submit">
										enviar<img src="images/arrow_right.svg" alt="">
									</button>
								</div>

							</form>
						</div>

					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="contact_sidebar">
						
						<!-- Contact Info -->
						<div class="sidebar_section">
							<div class="sidebar_contact_info">
								<div class="sidebar_title">informações</div>
								<ul>
									<li>Alameda dos Nhambiquaras, 1770
									<br>
									Conj. 1.102 - Moema, São Paulo - SP</li>
									<li>
										<a href="mailto:atendimento@controlartdel.com.br">
											atendimento@controlartdel.com.br
										</a>
									</li>
									<li>
										<a href="tel:5511988005196">
											+55 11 98800 5196
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map Container -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php

		include "componentes/newsletter.php";
		include "componentes/footer.php";

	?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>