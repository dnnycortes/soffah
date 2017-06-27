<?php
/**
 * La cabecera del tema
 *
 * Muestra todas las etiquetas meta necesarias para que el tema funcione
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<!-- Hace que la barra de status aparezca negra con texto blanco. -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Deshabilita la detección automática de números de teléfono. -->
	<meta name="format-detection" content="telephone=no">
	
	<!-- Pone el sitio en el tamaño que debe ser y evita que el usuario pueda hacer zoom en la página. -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- Iconos para el navegador-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icono.ico">
	<link rel="bookmark" href="<?php echo get_template_directory_uri(); ?>/images/icono.ico">
	
	<!-- Iconos para ipad e iphone -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-144x144-precomposed.png">
		
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
</head>
<body <?php body_class($class); ?> class="loading">
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<header id="main-header">
	<div class="main-width">
		<nav id="main-nav">
			<a href="javascript:void(0);" class="menu-toggle">Menu</a>
		</nav><!-- #main-nav -->
		<h1>
			<p>Fábrica de muebles de alta calidad para hogares y negocios</p>
			<a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<div class="contact-us">
			<!--<div class="social">
				<a href="javascript:void(0);" class="facebook">Facebook</a>
				<a href="javascript:void(0);" class="instagram">Instagram</a>
			</div> --> <!-- .social -->
			<br><br>
			<p>Llámanos +52 (55) 9000 3803</p>
		</div><!-- .contact-us -->
	</div><!-- .main-width -->
</header><!-- #main-header -->
<div class="main-menu">
	<a href="javascript:void(0);" class="btn-close">Cerrar</a>
	<br class="clear">
	<?php wp_nav_menu(array('theme_location' => 'primary'));?>
</div><!-- .main-menu -->

