<!DOCTYPE html>
<html lang="en">
<head>
<title>Control Art Del - Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Control Art Del">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<?php
		$pag_ativa = 'home';
		include "componentes/header.php";
	?>
	<!-- Hero Slider -->
	
	<div class="home">
		<div class="hero_slider_container">
			<div class="owl-carousel owl-theme hero_slider">

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image:url(images/main_slider_1.jpg)"></div>
					<div id="owl-container" class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<div class="bg_text_slider">
										<h1><span>Cultura</span> organizacional</h1>
										<p>A presença de arte no ambiente corporativo demonstra a preocupação das empresas com o bem-estar de seus colaboradores e clientes.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image:url(images/main_slider_2.jpg)"></div>
					<div id="owl-container" class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<div class="bg_text_slider">
										<h1><span>Por que</span> investir</h1>
										<h1>em <span>arte?</span></h1>
										<p>Usamos arte para tornar ambientes de trabalho mais inspiradores, motivadores e produtivos.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg" style="background-image:url(images/main_slider_3.jpg)"></div>
					<div id="owl-container" class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<div class="bg_text_slider">
										<h1><span>Identidade</span> corporativa</h1>
										<p>A arte pode ser usada como estratégia criativa para aumentar a exposição da marca e expressar seus valores.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Dots -->
			<div class="main_slider_dots">
				<div class="container">
					<div class="row">
						<div class="col">
							<ul id="main_slider_custom_dots" class="main_slider_custom_dots">
								<li class="main_slider_custom_dot active">01.</li>
								<li class="main_slider_custom_dot">02.</li>
								<li class="main_slider_custom_dot">03.</li>
							</ul>
						</div>
					</div>
				</div>		
			</div>

			<!-- Slider Dots -->
			<div class="main_slider_nav_left main_slider_nav">
				<i class="fas fa-chevron-left trans_300"></i>
			</div>

			<div class="main_slider_nav_right main_slider_nav">
				<i class="fas fa-chevron-right trans_300"></i>
			</div>

		</div>
	</div>

	<?php
		include "componentes/home_social.php";
	?>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row align-items-end">

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/artistas.svg" alt="">
						</div>
						<h3>Artistas</h3>
						<p>Estamos em busca constante para reunir muralistas nacionais de grande potencial artístico, com linhas de trabalho complementares.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/criacao.svg" alt="">
						</div>
						<h3>Criação</h3>
						<p>Nossa essência é construída em torno de um princípio básico: ajudar os artistas que representamos a serem criadores.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/solucoes.svg" alt="">
						</div>
						<h3>Soluções</h3>
						<p>Conseguimos antever soluções, antes mesmo do trabalho ser executado e saber se a sua ideia pode ser realizada dentro do prazo e orçamento desejados.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!-- About -->

	<div class="about prlx_parent">
		<!-- https://unsplash.com/@nativemello -->
		<div class="about_background prlx" style="background-image:url(images/rogerio1.jpg);">
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center section_title">
					<h2>Sobre nós<span>cad</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about_text">
						<p>Somos um estúdio criativo, focado em trabalhos de comunicação visual com o objetivo de transformar negócios e ambientes corporativos, agregando arte no dia a dia dos colaboradores e clientes, criando espaços dinâmicos e inspiradores.</p>

						<p>Nosso trabalho é criar conexões entre artistas talentosos e projetos que se identificam com eles.</p>

						<p>Tem uma ideia e gostaria de colocá-la nas paredes?<br>
						Ainda não sabe qual estilo artístico melhor se enquadra na identidade de sua marca?<br>
						Gostaria de trabalhar com um artista específico mas não sabe como chegar até ele?

						<p>Nossa equipe é multidisciplinar e está preparada para tirar suas ideias do papel.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>nosso time<span>cad</span></h2>
				</div>
			</div>
			<div class="team_row align-items-center justify-content-center">
			<?php

				$team_array = array(
					1 => array(
					'foto' => 'team_renatto.png',
					'cargo' => 'Consultor',
					'nome' => 'Renatto Arts',
					'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'),
					2 => array(
					'foto' => 'team_arthur.png',
					'cargo' => 'Consultor',
					'nome' => 'Arthur Uzum',
					'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'),
					3 => array(
					'foto' => 'team_victor.png',
					'cargo' => 'Consultor',
					'nome' => 'Victor',
					'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'),
					4 => array(
					'foto' => 'team_raquel.png',
					'cargo' => 'Projetos Especiais',
					'nome' => 'Raquel Ernesto',
					'descricao' => 'Publicitária, Consultora de Marketing e Sócia da Control Art Del.<br>Com forte vivência em agências de publicidade e no setor corporativo, meu foco é encontrar soluções criativas para tirar o seu projeto do papel e colocá-los nas paredes!')
				);

				$numbers = range(1, 4);
				shuffle($numbers);
				foreach ($numbers as $number) {
					echo '<!-- Team -->';
					echo '<div class="column">';
					echo '<!-- Post-->';
					echo '<div class="post-module">';
					echo '<!-- Thumbnail-->';
					echo '<div class="thumbnail">';
					echo '<img src="images/'.$team_array[$number]['foto'].'"/>';
					echo '</div>';
					echo '<!-- Post Content-->';
					echo '<div class="post-content">';
					echo '<div class="category">'.$team_array[$number]['cargo'].'</div>';
					echo '<h1 class="title">'.$team_array[$number]['nome'].'</h1>';
					echo '<p class="description">'.$team_array[$number]['descricao'].'</p>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
			?>
			</div>
		</div>
	</div>

	<!-- Dr. Craig Knight -->

	<div class="about quote prlx_parent">
		<!-- https://unsplash.com/@nativemello -->
		<div class="about_background prlx" style="background-image:url(images/sala_decorada.jpg); opacity: 0.5;">
		</div>
		<div class="container">
			<div class="row">
				<div class="about_text">
					<p class="stroke">“Se você enriquece um espaço, as pessoas se sentem muito mais felizes e trabalham melhor; uma maneira muito boa de fazer isso é usando arte.”</p>
					<div class="col-lg-6 offset-lg-6 sub_text">
						<p>Dr. Craig Knight estudou a psicologia dos ambientes de trabalho por 12 anos na Universidade de Exeter, e hoje lidera um grupo de pesquisa chamado Identity Realization (IDR).</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Clientes -->

	<div class="clients">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>nossos clientes<span>cad</span></h2>
				</div>
			</div>
			<div class="clients_row align-items-center justify-content-center text-center">

				<?php

					$directory = "images/clientes";
					$images = glob($directory . "/*");

					foreach($images as $image)
					{
					  echo '<div class="clients_item d-flex flex-column align-items-center justify-content-center text-center"><img src="'.$image.'" alt=""></div>';
					}

				?>
			</div>
		</div>
	</div>

	<!-- Processo -->

	<!-- <div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>processo de criação<span>cad</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="testimonials_container">
						<div class="testimonials_container_inner"></div>

						<!-- Processo Slider - ->

						<div class="owl-carousel owl-theme testimonials_slider">

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_connection.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">conexão</div>
									<p>Nós sabemos como é difícil escolher entre tantos artistas talentosos, então, nos deixe ajudar. Caso já saiba qual estilo de arte está procurando, ótimo! Caso não tenha ideia, sem problemas.</p>

									<p>Como um parceiro criativo, nós agregamos valor quando se trata de escolher o melhor pincel para o seu projeto.</p>

									<p><span class="test_quote">"Conseguimos antever soluções, antes mesmo do trabalho ser executado e saber se a sua ideia pode ser realizada dentro do tempo e orçamento desejados."</span></p>

									<p>Além disso trazer ideias para a mesa sempre ajuda muito na concepção do nosso trabalho. Nossos produtores irão revisar o projeto e recomendar artistas que se enquadram a ele.</p>
								</div>
							</div>

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_artists.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">artistas</div>

									<p>Os profissionais com quem trabalhamos são muito flexíveis, mesmo sabendo que cada um possui uma linguagem única.</p>

									<p>Nós separamos seus trabalhos principais e caso você não se identifique com nenhum dos projetos apresentados, podemos trazer à tona outros trabalhos não listados aqui.</p>

									<p>Temos um grande network do mundo da arte, para qualquer tipo de projeto.</p>

									<p><span class="test_quote">"Estamos em busca constante para reunir muralistas nacionais de grande potencial artístico, com linhas de trabalho complementares."</span></p> 

									<p>Assim, caso nenhum dos artistas que representamos consiga suprir sua necessidade, podemos encontrar o artista certo na sua medida.</p>

									<p>Depois que o artista for escolhido, abrimos seu portfolio e background completo e agendamos a reunião de briefing.</p>
								</div>
							</div>

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_value.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">valores</div>

									<p>Sim, nós amamos essa questão e vamos te explicar o porque. Toda vez que desenvolvemos um trabalho para uma empresa, significa que um artista será pago pelo seu talento e que nós estamos levando mais arte e personalidade ao mundo.</p>

									<p>Porém, nesse universo visual, não há como estipular valores fechados. Tudo vai depender de fatores como o tamanho do seu projeto, o artista escolhido, o local onde a arte será exposta, dentre outros.</p>

									<p><span class="test_quote">"Levamos cada detalhe em consideração e avaliamos baseado em valor agregado com o objetivo de que o fim seja vantajoso para as duas pontas."</span></p>

									<p><span class="test_quote">"É importante dizer que a nossa essência é construída em torno de um princípio básico: ajudar os artistas que representamos a serem criadores."</span></p>

									<p>Nosso trabalho junto com os artistas é entregar as mais surpreendentes intervenções que inspire criatividade e atinja os objetivos do projeto.</p>

									<p>Vamos estar de olho em novos talentos que tenham conexão com a sua empresa e sempre que um artista novo entrar para nosso time, vamos apresentar seu trabalho.</p>
								</div>
							</div>

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_briefing.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">briefing</div>

									<p>Após definirmos o artista, orçamento, tema e data da execução do trabalho, o nosso produtor vai "briefar" o artista de acordo com o que foi acordado em reunião.</p>

									<p>Essa parte, sem dúvidas, é a mais importante do processo porque nela o artista vai entender qual a intenção de comunicação e adaptar sua arte ao projeto criado.</p>

									<p>Nesse projeto, precisamos saber tudo que a empresa espera atingir com a comunicação visual.</p>

									<p><span class="test_quote">"A fase de briefing busca entender o impacto do trabalho, visando atingir o público e o resultado desejado."</span></p>

									<p><span class="test_quote">"A ideia não é focar no design da arte em si... Essa responsabilidade é do artista."</span></p>

									<p>Seu produtor vai te guiar através de nossa metodologia própria para entendermos exatamente sua expectativa.</p>
								</div>
							</div>

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_creation.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">criação</div>

									<p>Quando o projeto é iniciado, cada artista tem sua maneira de se preparar para o trabalho. Alguns preferem escrever suas ideias, outros preferem fazer um esboço da arte. De qualquer forma, cada artista vai apresentar seu rascunho antes do trabalho ser realizado.</p>

									<p><span class="test_quote">"A forma como cada artista desenvolve a ideia e a cultiva para chegar em um resultado final, é bastante particular."</span></p>

									<p><span class="test_quote">"Cada pessoa percorre um determinado roteiro, por assim dizer, a qual chamamos de processo de criação."</span></p>

									<p>Com esboço em mãos, o artista apresenta ao nosso produtor e ele vai avaliar se está de acordo com o briefing tratado em reunião antes de ser aprovado para o cliente.</p>

									<p>Juntos, os dois irão discutir soluções para o projeto e assim, sendo o mais assertivo possível para atender a necessidade da comunicação visual.</p>
								</div>
							</div>

							<!-- Processo Item - ->
							<div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
								<div class="testimonials_content">
									<div class="test_user_pic"><img src="images/process_postart.png" alt="https://unsplash.com/@michaeldam"></div>
									<div class="test_name">pós-arte</div>

									<p>Após dar cara nova ao seu ambiente, o projeto é concluído! Sua comunicação deve ser impactante e trazer resultados desejados. Essa parte é a mais gratificante, onde vemos os clientes e colaboradores satisfeitos.</p>

									<p>Nossa intenção é ser um parceiro criativo de longo prazo. Para manter essa relação viva e pulsante, estamos sempre por perto, trazendo novas ideias de comunicação visual indoor, fachadas e eventos pontuais para a sua empresa.</p>

									<p>Há sempre novos artistas e projetos da Control Art Del para renovar constantemente as suas inspirações.</p>

									<p><span class="test_quote">"É necessário entender que a comunicação visual é feita para atingir objetivos de curto e médio prazo, sendo assim, com a medida do tempo é crucial renovar a arte, buscando um novo engajamento e mantendo o local visualmente interessante."</span></p>

									<p>Nosso trabalho não para por aqui. Então, assim que soubermos o que você busca, através do processo de briefing conseguimos te entregar uma estimativa de investimento justa e precisa.</p>
								</div>
							</div>

						</div>

					</div>
				</div>

				<!-- Testimonials Slider Navigation - ->

				<div class="test_slider_nav test_slider_nav_left d-flex flex-column justify-content-center align-items-center trans_200">
					<i class="fas fa-chevron-left trans_200"></i>
				</div>

				<div class="test_slider_nav test_slider_nav_right d-flex flex-column justify-content-center align-items-center trans_200">
					<i class="fas fa-chevron-right trans_200"></i>
				</div>

			</div>
		</div>
	</div> -->

	<!-- Servicos -->

	<div class="services">
		<div class="services_background prlx" style="background-image:url(); opacity: 0.5;">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
					<h2>nossos serviços<span>cad</span></h2>
				</div>
			</div>
			<div class="row align-items-end">
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/consultoria.svg" alt="">
						</div>
						<h3>Consultoria</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/workshops.svg" alt="">
						</div>
						<h3>Workshops</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/eventos.svg" alt="">
						</div>
						<h3>Eventos</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/corporativo.svg" alt="">
						</div>
						<h3>Corporativo</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/icon_1.svg" alt="">
						</div>
						<h3>Varejo</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<!-- Features Item -->
				<div class="col-lg-4 features_col">
					<div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
						<!-- <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 	title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/produtos.svg" alt="">
						</div>
						<h3>Produtos</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
<script src="js/custom.js"></script>
</body>

</html>