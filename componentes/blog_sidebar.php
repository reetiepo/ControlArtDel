<!-- Sidebar -->
<div class="col-lg-4">
	<div class="blog_sidebar">
		
		<!-- Search -->
		<div class="sidebar_section">
			<div class="sidebar_search">
				<form action="post">
					<div id="search_form" class="search_form">
						<input id="blog_search" type="search" placeholder="enter keywords" required="required" data-error="Valid keywords required.">
						<button id="search_submit" type="submit" class="search_submit_btn trans_300" value="Submit">
							<img src="images/search.png" alt="">
						</button>
					</div>
				</form>
			</div>
		</div>
		
		<!-- Recent Posts -->
		<div class="sidebar_section">
			<div class="sidebar_recent">
				<div class="sidebar_title">posts recentes</div>

				<!-- Recent Post -->
				<div class="recent_post d-flex flex-row justify-content-start">
					<div class="recent_post_image">
						<a href="blog_post.php"><img src="images/blog_1.jpg" alt=""></a>
					</div>
					<div class="recent_post_content">
						<h4 class="recent_post_title"><a href="blog_post.php">Evento - Arte no Baixo</a></h4>
						<span class="recent_post_date">novembro 25, 2018</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Categories -->
		<div class="sidebar_section">
			<div class="sidebar_categories">
				<div class="sidebar_title">categorias</div>
				<ul>
					<li><a href="#">eventos</a></li>
				</ul>

			</div>
		</div>

		<!-- Notícias -->
		<div class="sidebar_section">
			<div class="sidebar_noticias">
				<div class="sidebar_title">notícias</div>
				<ul>
					<li>
						<a href="http://jornalfolk.com.br/site/ler?id=2748&fbclid=IwAR3hD6E3VtL6JkSkTkCGqxZ7K1wHvVdlCQUiAFKS28Ny5VFOg0MdGZ1Bi8s" target="_blank">Intervenção artística promete transformar a região do Baixo Jardins em atelier a céu aberto</a>
						<span>Jornal Folk</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Flickr -->

		<div class="sidebar_section">
			<div class="sidebar_flickr">
				<div class="sidebar_title">Galeria</div>
				<!-- 
				Possible values: http://petejank.github.io/js-flickr-gallery/#documentation
				Get tags for data-tags from https://www.flickr.com/photos/tags 
				-->
				<div class="flickr_gallery" data-toggle="jsfg" data-per-page="6" data-user-id="114081595@N06"></div>
				
				<a href="galeria.php" class="blog_post_link">ver mais fotos
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
					<polygon id="arrow_poly_1" class="arrow_poly" fill="#e02689" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>