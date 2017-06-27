<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div id="contenido">
		<div class="sillones">
			<div class="main-width">
				<ul class="breadcrumb">
					<li><a href="">Productos / </a></li>
					<li><a href="">Tapicería /</a></li>
					<li>Sillones</li>
				</ul>
				<div class="title">
					<h2>Sillones</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-title-sillones.png">
				</div><!-- .title -->				
			</div><!-- .main-width -->
		</div><!-- .sillones -->
		<div class="products-catalogue">
			<div class="main-width">
				<a class="product-thumb" href="javascript:void(0);">
					<h2>Señorial I</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/senorial.jpg">
				</a><!-- .product-thumb -->
				<a class="product-thumb" href="javascript:void(0);">
					<h2>Vallarta</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/vallarta.jpg">
				</a><!-- .product-thumb -->
				<a class="product-thumb" href="javascript:void(0);">
					<h2>Vallarta</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/vallarta.jpg">
				</a><!-- .product-thumb -->
			</div><!-- .main-width -->
		</div><!-- .products-catalogue -->
		<div id="contacto">
			<div class="main-width">
				<h2>Contacto</h2>
				<div id="contact-form">
					<?php wd_form_maker(7, "embedded"); ?>
				</div><!-- #contact-form -->
			</div><!-- .main-width -->
		</div><!-- #contacto -->
	</div><!-- #contenido -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>