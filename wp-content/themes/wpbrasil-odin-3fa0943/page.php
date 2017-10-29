<?php get_header(); ?>
	
	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>

	<main class="content">
		<div class="container">
			<?php
				while ( have_posts() ) { 
					the_post();
					the_content();
				}
			?>

			<div class="clear"></div>

			<?php if ( is_page('sobre') ) : ?>
				<center>
					<div class="link-locacoes">
						<a href="<?php bloginfo( 'siteurl' ); ?>/locacoes">Locações <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						<a href="<?php bloginfo( 'siteurl' ); ?>/atividades" class="active">Atividades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>
				</center>
			<?php endif; ?>
		</div>
	</main>
<?php get_footer(); ?>
