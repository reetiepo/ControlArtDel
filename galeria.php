<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Art Del - Galeria</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project - Services">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/services_styles.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">

</head>

<body>

<div class="super_container">
		
	<?php
		$pag_ativa = 'galeria';
		include "componentes/header.php";
	?>

	<!-- Page Top -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<!-- <div class="page_top_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/services_parallax.jpg"></div> -->
		<div class="home_background prlx" style="background-image:url(images/services_parallax.jpg)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
						<h1>Galeria</h1>
						<span>venha conhecer nossa arte</span>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php
		include "componentes/home_social.php";
	?>

	<!-- Gallery -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div id="section_galleries" class="sidebar_section">
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
<script src="plugins/parallax.js-1.5.0/parallax.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/gallery_custom.js"></script>

</body>

</html>