<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Art Del - Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project - Blog">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>

<body>

<div class="super_container">
	
	<?php
		$pag_ativa = 'blog';
		include "componentes/header.php";
	?>

	<!-- Page Top -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<div class="home_background prlx" style="background-image:url(images/services_parallax.jpg)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
						<h1>Blog</h1>
						<span>Notícias e conteúdos sobre o mundo da arte</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include "componentes/home_social.php";
	?>

	<!-- Blog Content -->

	<div class="blog_content">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<div class="blog_main_content">
						
						<!-- Blog Post -->
						<article class="blog_post">
							<div class="blog_post_image">
								<div class="blog_post_image_background" style="background-image:url(images/blog_1.jpg)"></div>
							</div>
							<div class="date_box d-flex flex-column align-items-center justify-content-center">
								<span>25 NOV 2018</span>
							</div>
							<h3 class="blog_post_title"><a href="blog_post.php">Evento - Arte no Baixo</a></h3>
							<div class="blog_post_meta">
								<span class="blog_post_author">por Raquel Ernesto</span>
								<span class="blog_post_category">eventos</span>
								<span class="blog_post_comments">2 comentários</span>
							</div>
							<div class="blog_post_text">
								<p>Iniciativa da Control Art Del e da Associação de Comércio do Jardins, o evento ARTE NO BAIXO promove um final de semana com artistas brasileiros para intervenção artística em mais de 100 postes do baixo Jardins, espalhados pelas ruas do bairro.</p> 

								<p>Com um evento voltado para a arte de rua e cultura, nos dias 01 e 02 de Dezembro apresentamos às ruas...</p>
							</div>
							<a href="blog_post.php" class="blog_post_link">read more
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
								<polygon id="arrow_poly_1" class="arrow_poly" fill="#e02689" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "/>
								</svg>
							</a>
						</article>

					</div>

					<div class="blog_nav">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
				</div>

				<?php
					include "componentes/blog_sidebar.php";
				?>
				
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
<script src="plugins/js-flickr-gallery-1.24/js-flickr-gallery.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script>
</body>

</html>