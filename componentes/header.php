<!-- Header -->

<header class="header d-flex flex-row justify-content-end align-items-center">

	<!-- Logo -->
	<div class="logo_container mr-auto">
		<div class="logo">
			<!-- <a href="#"><span>z</span>zeta<span>.</span></a> -->
			<a href="index.php"><img src="images/cad_logo.png" alt="Control ART Del" width="150"></a>
		</div>
	</div>

	<!-- Main Navigation -->
	<nav class="main_nav justify-self-end">
		<ul class="nav_items">
			<li class="<?php echo ($pag_ativa == 'home') ? 'active' : ''; ?>">
				<a href="index.php"><span>home</span></a></li>
			<li class="<?php echo ($pag_ativa == 'galeria') ? 'active' : ''; ?>">
				<a href="galeria.php"><span>galeria</span></a></li>
			<li class="<?php echo ($pag_ativa == 'eventos') ? 'active' : ''; ?>">
				<a href="eventos.php"><span>eventos</span></a></li>
			<li class="<?php echo ($pag_ativa == 'blog') ? 'active' : ''; ?>">
				<a href="blog.php"><span>blog</span></a></li>
			<li class="<?php echo ($pag_ativa == 'contato') ? 'active' : ''; ?>">
				<a href="contato.php"><span>contato</span></a></li>
		</ul>
	</nav>

	<!-- Hamburger -->
	<div class="hamburger_container">
		<span class="hamburger_text">Menu</span>
		<span class="hamburger_icon"></span>
	</div>

</header>

<!-- Menu -->

<div class="fs_menu_overlay"></div>
<div class="fs_menu_container">
	<div class="fs_menu_shapes"><img src="images/menu_shapes.png" alt=""></div>
	<nav class="fs_menu_nav">
		<ul class="fs_menu_list">
			<li><a href="index.php"><span><span>H</span>Home</span></a></li>
			<li><a href="galeria.php"><span><span>G</span>Galeria</span></a></li>
			<li><a href="eventos.php"><span><span>E</span>Eventos</span></a></li>
			<li><a href="blog.php"><span><span>B</span>Blog</span></a></li>
			<li><a href="contato.php"><span><span>C</span>Contato</span></a></li>
		</ul>
	</nav>
	<div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="fs_social">
			<li><a href="https://www.facebook.com/Control-Art-Del-113762895987467/" target="_blank"><i class="fab fa-facebook-f trans_300"></i></a></li>
			<!-- <li><a href="#" target="_blank"><i class="fab fa-twitter trans_300"></i></a></li> -->
			<li><a href="https://www.instagram.com/controlartdel/" target="_blank"><i class="fab fa-instagram trans_300"></i></a></li>
			<!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin-in trans_300"></i></a></li> -->
		</ul>
	</div>
</div>