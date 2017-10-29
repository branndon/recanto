<?php get_header(); ?>
	
	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1><?php echo get_cat_name($wp_query->get_queried_object_id()); ?></h1>
		</div>
	</div>

	<main class="content">
		<div class="container">
			<div class="_posts">
				<div class="container">

					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="box col-md-3" style="background:url(<?php  echo get_the_post_thumbnail_url(get_the_ID(), "list");?>" >
								<a href="<?php the_permalink(); ?>" class="linkPost">
									<div class="hover" href="<?php the_permalink(); ?>">
										<span></span>
									</div>
									<a href="<?php the_permalink(); ?>">
										<?php the_date('d.m.Y', '<span class="date">', '</span>'); ?>
										<p class="desc"><?php echo get_the_title(); ?></p>
									</a>
								</a>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<p class="center">Nenhum post encontrado.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="clear"></div>

		<center>
			<a href="#" class="link-def">Mais notícias</a>
		</center>
	</main>
<?php get_footer(); ?>
