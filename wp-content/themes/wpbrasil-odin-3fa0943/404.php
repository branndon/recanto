<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1>Notícias</h1>
		</div>
	</div>

	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
		<div class="page-content">
			<h2>404</h2>
			<p>Página não encontrada!</p>
		</div>

		<a href="<?php bloginfo( 'siteurl' ); ?>" class="link-def">Voltar ao início</a>
	</main>

<?php get_footer(); ?>
