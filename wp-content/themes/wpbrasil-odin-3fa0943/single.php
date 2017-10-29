<?php get_header(); ?>
<?php
	$category = get_the_category();
	$firstCategory = $category[0]->cat_name;
?>
	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1><?php echo $firstCategory; ?></h1>
		</div>
	</div>

	<?php while ( have_posts() ) : the_post(); ?>
		<main id="content" class="content">
			<div class="container">
				<?php the_date('d.m.Y', '<p class="date">', '</p>'); ?>
				<h1><?= get_the_title(); ?></h1>

				<?php
					if (get_the_content()) {
						the_content();
					} else {
						echo '<p>Nenhuma conteúdo encontrado.</p>';
					}
				?>

				<div class="footer-btns">
					<a href="<?php bloginfo( 'siteurl' ); ?>/noticias"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
					<div class="share">
						<a>Compartilhe:</a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink(); ?>" target="_new" class="facebook">Facebook</a>
						<a href="whatsapp://send?text=<?= get_the_title(); echo ' - ' . get_the_permalink(); ?>" target="_new" class="whatsApp"></a>
					</div>
				</div>
			</div>
		</main>
	<?php endwhile; ?>

<?php get_footer();
