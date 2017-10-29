<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="_header-pages">
			<div class="container">
				<?php get_template_part('breadcrumb'); ?>
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</div>

		<main id="content" class="content">
			<div class="container">

				<div class="main-content">
					<?php
						if (get_the_content()) { the_content(); }
						else { echo '<p>Nenhum descrição encontrada.</p>'; }
					?>

					<div class="atividades-list">
						<div class="lineR">
							<strong>Períodos de aulas</strong>
						</div>
						<div class="lineR">
							<?php
								if (get_field('periodos_de_aulas')) {
									the_field('periodos_de_aulas');
								} else {
									echo 'Nenhuma informação cadastrada.';
								}
							?>
						</div>
					</div>
					<p class="duracaoAula">A duração da aula em média de 50 minutos a 1 hora.<br/> Para maiores informações, entre em contato.</p>
				</div>

				<center>
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'full' );
						}
					?>
				</center>
			</div>
		</main>
	<?php endwhile; ?>

<?php get_footer(); ?>
