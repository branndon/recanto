<?php get_header(); ?>

	<div class="_boxes conceito-1" id="conceito">
		<div class="container">
			<?php lista_home_boxes("um-recanto-para-apaixonados-pelo-ar-puro-lazer-e-descanso", false); ?>

			<!-- <div class="col-sm-6 col-md-6 bg">
			</div>
			<div class="col-sm-6 col-md-6 text">
				<h2 class="title">Um recanto para apaixonados pelo ar puro, lazer e descanso.</h2>
				<p>Aqui é o lugar para esquecer a correria do dia a dia e se conectar com a natureza.</p>
				<p>Apaixonados por viagens e novas aventuras, terá a sua disposição piscina aquecida adulto e infantil, bar molhado, churrasqueiras, quadra de futebol, área de jogos com diversão eletrônica vintage e atual com plataformas playstation e xbox one, mesa redonda para carteado, salão de festas para todo tipo de evento, estacionamento e Wi-Fi nas áreas externas grátis, <strong>e o melhor de tudo, uma vista privilegiada das montanhas.</strong></p>
			</div> -->
		</div>
	</div>

	<div class="_boxes _gallery conceito-2">
		<div class="container">
			<?php lista_home_boxes("um-lugar-para-voce-se-sentir-em-casa-do-it-yourself", true); ?>
			<!-- <div class="col-sm-6 col-md-6 text">
				<h2 class="title">Um lugar para você se sentir em casa ( Do it Yourself ).</h2>
				<p>Nossos exclusivos chalés foram pensados para que você e sua família tenham momentos de conforto e descanso para até 05 pessoas em 2 andares, para você tirar o maior proveito no <strong>sistema Do It Yourself “Faça Você Mesmo”</strong> com sofás, mesas, camas box, frigobar, cooktop, TV via satélite e banheiro privativo.</p>
			</div>
			<div class="col-sm-6 col-md-6 bg">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<div class="_boxes _gallery conceito-3">
		<div class="container">
			<?php lista_home_boxes("um-espaco-para-todos", true); ?>
			<!-- <div class="col-sm-6 col-md-6 bg">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
						<div class="swiper-slide"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 text">
				<h2 class="title">Um espaço para todos.</h2>
				<p>Montamos um espaço com conceito diferente de tudo o que você já viu. Nosso recanto foi idealizado para oferecer uma estrutura completa de sítio para você no sistema ( DIY ). Criamos um espaço com personalidade para encontro de <strong>amigos, famílias, casais, treinamentos corporativos, eventos religiosos e o que você imaginar.</strong> Somos um espaço de multiserviços a sua disposição para ser do seu jeito. Perfeito e diferente né?</p>

				<p class="text-right">Recanto 4 Estações,<br/>
				Seja muito bem-vindo!</p>
			</div> -->
		</div>
	</div>

	<!-- full banner -->
	<div class="_full-banner"></div>

	<!-- depoimentos -->
	<div class="_depoimentos">
		<div class="container">
			<h3>O que nossos amigos dizem</h3>
			<div class="swiper-container depoimentos">
				<div class="swiper-wrapper">
					<?php lista_depoimentos(); ?>
					<!-- <div class="swiper-slide">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<span>renato FB</span>
					</div> -->
				</div>
			</div>
		</div>
	</div>

	<!-- maps -->
	<div class="_maps" id="localizacao">
		<!-- <div class="container">
			<h2 class="tit-def">Entre em Contato com o recanto 4 estações</h2>
		</div> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d772.1631171146745!2d-46.19555605712933!3d-23.206294054892208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzIyLjciUyA0NsKwMTEnNDEuNyJX!5e0!3m2!1spt-BR!2sbr!4v1510338182366" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<!-- contato -->
	<div class="_contact">
		<div class="container">
			<div class="col-sm-6 col-md-6">
				<h2 class="tit-def">Contate-nos</h2>
				<p>Seja bem-vindo. Este é o seu espaço para receber promoções e tirar dúvidas. Fale com a gente!</p>
				<form id="contato">

					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" placeholder="Seu nome completo">
					</div>

					<div class="form-group col-md-6 col-sm-6 mail-field">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" id="email" placeholder="Seu e-mail">
					</div>

					<div class="form-group col-md-6 col-sm-6">
						<label for="telefone">Telefone</label>
						<input type="text" class="form-control" id="telefone" placeholder="Seu telefone">
					</div>
					<div class="form-group">
						<label for="assunto">Assunto</label>
						<input type="text" class="form-control" id="assunto" placeholder="Assunto">
					</div>

					<div class="form-group">
						<label for="mensagem">Mensagem</label>
						<textarea class="form-control" id="mensagem" placeholder="Digite aqui sua mensagem"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar mensagem</button>
				</form>
			</div>

			<div class="col-sm-6 col-md-6">
				<h2 class="tit-def">Localização</h2>
				<p>O Recanto está apenas há 1 hora da cidade de São Paulo, SP.</p>
				<div class="maps_marker"></div>
			</div>

		</div>
	</div>

<?php get_footer();
