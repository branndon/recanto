<?php get_header(); ?>

	<div class="_about">
		<div class="container">
			<div class="col-sm-4 col-md-4">
				<h2 class="tit-section visible-xs">O Clube dos Macacos</h2>
				<div class="about-container"></div>
			</div>
			<div class="col-sm-8 col-md-8">
				<h2 class="tit-section hidden-xs">O Clube dos Macacos</h2>
				<h3 class="tit">O Clube 17, também denominado Clube dos Macacos, nome originário do Rio dos Macacos</h3>
				<p>O Clube 17, também denominado Clube dos Macacos, nome originário do rio dos Macacos que nasce na Floresta da Tijuca e banha os fundos da área do Clube, foi fundado em 22/09/64, por um grupo de engenheiros dirigentes da CEDAG – Companhia Estadual de Águas da Guanabara, com o objetivo de concentrar as equipes de manutenção e reparos emergenciais nesta Cidade.</p>
				<a href="<?php bloginfo( 'siteurl' ); ?>/sobre"><span>></span> Mais informações</a>
			</div>
		</div>
	</div>

	<div class="_posts">
		<div class="container">
			<?php lista_noticias(); ?>
		</div>
	</div>

	<div class="_enquete">
		<div class="container">
			<center>
				<h3>Participe da nossa enquete</h3>
				<p>Ajude o <strong>Clube 17</strong> a melhorar sua infraestrutura e seus serviços, participando das enquentes!</p>

				<?= do_shortcode('[yop_poll id="1"]') ?>

				<div class="clear"></div>
				<a href="#" class="resultados">Ver resultados</a>
			</center>

			<div class="btns">
				<a href="<?php bloginfo( 'siteurl' ); ?>/locacoes">Locações <i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<a href="<?php bloginfo( 'siteurl' ); ?>/atividades" class="active">Atividades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

<?php get_footer();
