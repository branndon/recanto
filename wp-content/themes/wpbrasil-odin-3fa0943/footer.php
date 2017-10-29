<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
	
	<div class="clear"></div>

	<?php if (is_home() || is_page('sobre') || is_singular('locacoes')) : ?>
		<div class="_duvidas">
			<div class="container">
				<h2 class="tit-border">Tire suas dúvidas</h2>
				<p class="desc">Fale com o Clube 17</p>
				<div class="col-md-6">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>
						Telefone de contato<br/>
						<a href="tel:(21) 2274-1429" target="_blank" title="(21) 2274-1429">(21) 2274-1429</a>
					</p>
				</div>
				<div class="col-md-6">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>
						Envie um e-mail<br/>
						<a href="mailto:contato@clube17.com.br" target="_blank" title="contato@clube17.com.br">contato@clube17.com.br</a>
					</p>
				</div>
			</div>
		</div>

		<div class="_mapa">
			<div class="localizacao">
				<h3>Onde estamos</h3>
				<p>Rua Pacheco Leão, 2038 - Jardim Botânico,<br/> Rio de Janeiro - RJ, 22460-030</p>
				<p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
			</div>
			<div id="map"></div>
		</div>
	<?php endif; ?>

	<?php if (is_page('contato')) : ?>
		<div class="_mapa">
			<div class="localizacao">
				<h3>Onde estamos</h3>
				<p>Rua Pacheco Leão, 2038 - Jardim Botânico,<br/> Rio de Janeiro - RJ, 22460-030</p>
				<p><i class="fa fa-map-marker" aria-hidden="true"></i></p>
			</div>
			<div id="map"></div>
		</div>
	<?php endif; ?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<p class="copy">&copy; <?php echo date( 'Y' ); ?> - <?php _e( 'Clube dos Macacos', 'odin' ); ?></p>
			<nav>
				<ul>
					<?php 
						$menuParameters = array(
							'menu'				=> 'menu-footer',
							'container'       	=> false,
							'echo'            	=> false,
							'depth'           	=> 0,
						);
						echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
					?>
				</ul>
			</nav>

			<div class="clear"></div>

			<a href="https://aido.com.br/" target="_blank" class="logo-empresa" title="Aido"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-empresa.png" alt="Aido" title="Aido" /></a>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
