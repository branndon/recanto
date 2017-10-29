<?php get_header(); ?>
	
	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1><?php echo post_type_archive_title(); ?></h1>
		</div>
	</div>

	<main class="content">
		<div class="container">
			<div class="_posts">
				<div class="container">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="box col-md-4">
								<a href="<?php the_permalink(); ?>" class="linkImg">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="imgPost" style="background: url(<?php the_post_thumbnail_url(); ?>) top center no-repeat; background-size: cover;"></div>
									<?php else : ?>
										<div class="imgPost"></div>
									<?php endif; ?>
								</a>

								<h2 class="tit"><?php echo get_the_title(); ?></h2>

								<?php if (get_the_content()) : ?>
									<p class="desc"><?php echo wp_strip_all_tags( mb_strimwidth(get_the_content(), 0, 140, '...') ); ?></p>
								<?php else : ?>
									<p class="desc">Nenhuma descrição encontrada.</p>
								<?php endif; ?>

								<a href="<?php the_permalink(); ?>">Mais informações</a>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<p class="center">Nenhum post encontrado.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</main>
<?php get_footer(); ?>
