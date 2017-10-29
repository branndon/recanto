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
					<p class="main-tit"><strong>O que você vai ter?</strong></p>

					<?php
						if (get_the_content()) { the_content(); }
						else { echo '<p>Nenhum descrição encontrada.</p>'; }
					?>

					<h2>Informações</h2>

					<p><strong>Local:</strong> <?= the_field('local'); ?></p>
					<p><strong>Capacidade:</strong> <?= the_field('capacidade'); ?></p>
					<p><strong>Horários:</strong> <?= the_field('horarios'); ?></p>
					<p><strong>Duração:</strong> <?= the_field('duracao'); ?></p>
					<p><strong>Sócios:</strong> <?= the_field('socios'); ?></p>
					<p><strong>Não Sócios:</strong> <?= the_field('nao_socios'); ?></p>
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
