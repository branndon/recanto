<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- FONTES -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Swipper -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!-- less -->
	<?php wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/css/style.less' ); ?>

	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
	<script src="http://maps.google.com/maps/api/js?&key=AIzaSyBMWuoZXh9S-c3wI2OfnAOgx_OoY8XJwPw&callback=initMap"
    async defer></script>
    <script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<!-- header -->
	<header id="header" role="banner">
		<div class="container">
			<div class="col-xs-2 col-sm-2 col-md-2">
				<a href="<?php bloginfo( 'siteurl' ); ?>" class="logoLink">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
				</a>
			</div>
			<div class="col-xs-10 col-sm-10 col-md-10">
				<div class="menu-sup">
					<p class="info">Reservas Cel / <i class="fa fa-whatsapp" aria-hidden="true"></i> +55 (11) 0000-0000</p>
					<a class="pages reserva" href="<?php bloginfo( 'siteurl' ); ?>/faca-sua-reserva">Faça sua reserva</a>
					<a class="pages doIt" href="<?php bloginfo( 'siteurl' ); ?>/do-it">Do it yourself</a>
					<a class="social facebook" href="https://www.facebook.com/recanto4estacoes/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class="social twitter" href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class="social instagram" href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a class="social youtube" href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>

				<div class="clear"></div>

				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php 
							$defaults = array(
								'menu'            => 'menu-header',
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'bs-example-navbar-collapse-1',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							$menuParameters = array(
								'menu'				=> 'menu-header',
								'container'       	=> false,
								'echo'            	=> false,
								'depth'           	=> 0,
							);
							
							// callmenu
							wp_nav_menu($defaults);
						?>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<!-- Slider -->
	<?php
		if (is_home()){
			main_slider();
		}
	?>




