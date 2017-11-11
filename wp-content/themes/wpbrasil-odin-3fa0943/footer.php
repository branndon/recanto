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
	
	<div class="_reservas">
		<div class="container">
			<div class="reserve col-md-4">
				<h3>Faça sua Reserva</h3><br/>
				<h3>Entre em Contato</h3>

				<p>Digite o seu e-mail abaixo e receba<br/>
				descontos em diárias.</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="email_reserve" placeholder="Digite o seu e-mail">
						<button>OK</button>
					</div>
				</form>
			</div>
			<div class="media col-md-8">
				<div class="box _social"></div>
				<div class="box _facebook">
					<div class="fb-page" data-href="https://www.facebook.com/recanto4estacoes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="clear"></div>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<p><?php echo date( 'Y' ); ?> Recanto 4 Estações Igaratá. Todos os direitos reservados. Desenvolvido por <a href="https://spark.adobe.com/page/3KeAJ/" target="_blank" title="RB Comunicação">RB Comunicação.</a></p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
