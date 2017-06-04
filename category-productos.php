<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div id="contenido">
		<div class="subcategory tapiceria">
			<div class="main-width">
				<h3>Productos /</h3>
				<h2>Tapicería</h2>
				<div class="product">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-sillones.png">
					<p>Sillones</p>
				</div><!-- .product -->
				<div class="product loveseats">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-loveseats.png">
					<p>Love Seats</p>
				</div><!-- .product -->
				<div class="product sofas">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-sofas.png">
					<p>Sofas</p>
				</div><!-- .product -->
				<div class="product salas">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-salas.png">
					<p>Salas</p>
				</div><!-- .product -->
				<div class="product cabeceras">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-cabeceras.png">
					<p>Cabeceras</p>
				</div><!-- .product -->
				<div class="product taburetes">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tapiceria-taburetes.png">
					<p>Taburetes</p>
				</div><!-- .product -->
			</div><!-- .main-width -->
		</div><!-- .subcategory -->
		<div class="subcategory carpinteria">
			<div class="main-width">
				<h2>Carpintería</h2>
				<div class="product libreros">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carpinteria-libreros.png">
					<p>Libreros</p>
				</div><!-- .product -->
				<div class="product mesas">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carpinteria-mesas.png">
					<p>Mesas para sala</p>
				</div><!-- .product -->
				<div class="product recamaras">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carpinteria-recamaras.png">
					<p>Recámaras</p>
				</div><!-- .product -->
			</div><!-- .main-width -->
		</div><!-- .subcategory -->
		<div class="subcategory superficie">
			<div class="main-width">
				<h2>Superficie sólida</h2>
				<div class="product mesas">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carpinteria-mesas.png">
					<p>Mesas para sala</p>
				</div><!-- .product -->
				<div class="product recamaras">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carpinteria-recamaras.png">
					<p>Recámaras</p>
				</div><!-- .product -->
			</div><!-- .main-width -->
		</div><!-- .subcategory -->
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