<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();

?>
	
	<div class="_header-pages">
		<div class="container">
			<?php get_template_part('breadcrumb'); ?>
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>

	<main class="content">
		<div class="container">
			<div class="col-md-7">
				<h2>Formulário de contato</h2>
				<form>

					<div class="form-group">
						<label for="nome">Nome <span>(obrigatório)</span></label>
						<input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">E-mail <span>(obrigatório)</span></label>
						<input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
					</div>

					<div class="form-group col-md-4 col-sm-4">
						<label for="email">Telefone <span>(obrigatório)</span></label>
						<input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
					</div>
					<div class="form-group col-md-4 col-sm-4 padding">
						<label for="email">Setor do Clube <span>(obrigatório)</span></label>
						<select class="form-control">
							<option>Selecione</option>
							<option>Setor 1</option>
							<option>Setor 2</option>
						</select>
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<label for="email">Assunto <span>(obrigatório)</span></label>
						<select class="form-control">
							<option>Selecione</option>
							<option>Assunto 1</option>
							<option>Assunto 2</option>
						</select>
					</div>

					<div class="form-group">
						<label for="mensagem">Mensagem <span>(obrigatório)</span></label>
						<textarea class="form-control" id="mensagem"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar mensagem</button>
				</form>
			</div>


			<div class="col-md-5">
				<h2>Informações de contato</h2>
				<p>Caso prefira, utilize qualquer um dos números abaixo:</p>

				<div class="sobre">
					<div class="group">
						<div class="infos">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span>Secretaria / Eventos / Cobrança</span><br/>
							(21) 2274-1429<br/>
							(21) 3875-5986<br/>
							(21) 3875-6034<br/>
							(21) 3081-4078
						</div>
						<div class="infos">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<span>Envie um e-mail</span><br/>
							<a href="mailto:contato@clube17.com.br" target="_blank">contato@clube17.com.br</a>
						</div>
					</div>
				</div>
			</div>

			<?php
				while ( have_posts() ) { 
					the_post();
					the_content();
				}
			?>
		</div>
	</main>
<?php get_footer(); ?>
