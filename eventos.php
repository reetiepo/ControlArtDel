<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130647701-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>
<title>Control Art Del - Eventos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Control Art Del">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>

<body>

<div class="super_container">
	
	<?php
		$pag_ativa = 'eventos';
		include "componentes/header.php";
	?>

	<!-- Home -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<?php
			$bg = rand(1,3);
			echo '<div class="home_background prlx" style="background-image:url(images/background'.$bg.'.jpg)"></div>';
		?>

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
						<h1>Eventos</h1>
						<span>Fique por dentro da nossa agenda</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include "componentes/home_social.php";
	?>

	<!-- Eventos -->
	
	<div class="event">
		<div class="container">
			<div class="event_title">eventos futuros</div>
			<div class="team_row align-items-center justify-content-center">
			    <div class="column">
			        <!-- Post-->
			        <div class="post-module">
			            <!-- Thumbnail-->
			            <div class="thumbnail">
			                <div class="date">
			                    <div class="day">8</div>
			                    <div class="month">Dez</div>
			                </div><img src="images/blog_1.jpg" />
			            </div>
			            <!-- Post Content-->
			            <div class="post-content">
			                <!-- <div class="category">Photos</div> -->
			                <h1 class="title">Arte no Baixo</h1>
			                <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
			                <a href="blog_post.php"><div class="post-meta"><i class="fa fa-info-circle trans_300" aria-hidden="true"></i> mais informações</div></a>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="event past">
		<div class="container">
			<div class="event_title">eventos passados</div>
			<div class="team_row align-items-center justify-content-center">
			    <div class="column">
			        <!-- Post-->
			        <div class="post-module">
			            <!-- Thumbnail-->
			            <div class="thumbnail">
			                <div class="date">
			                    <div class="day">31</div>
			                    <div class="month">Out</div>
			                </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
			            </div>
			            <!-- Post Content-->
			            <div class="post-content">
			                <!-- <div class="category">Photos</div> -->
			                <h1 class="title">City Lights in New York</h1>
			                <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
			                <a href="blog_post.php"><div class="post-meta"><i class="fa fa-info-circle trans_300" aria-hidden="true"></i> mais informações</div></a>
			                <a href="galeria.php"><div class="post-meta"><i class="fa fa-camera trans_300" aria-hidden="true"></i> veja as fotos</div></a>
			            </div>
			        </div>
			    </div>
			    <div class="column">
			        <!-- Post-->
			        <div class="post-module">
			            <!-- Thumbnail-->
			            <div class="thumbnail">
			                <div class="date">
			                    <div class="day">27</div>
			                    <div class="month">Mar</div>
			                </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
			            </div>
			            <!-- Post Content-->
			            <div class="post-content">
			                <!-- <div class="category">Photos</div> -->
			                <h1 class="title">City Lights in New York</h1>
			                <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
			                <a href="blog_post.php"><div class="post-meta"><i class="fa fa-info-circle trans_300" aria-hidden="true"></i> mais informações</div></a>
			                <a href="galeria.php"><div class="post-meta"><i class="fa fa-camera trans_300" aria-hidden="true"></i> veja as fotos</div></a>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>
</body>

</html>