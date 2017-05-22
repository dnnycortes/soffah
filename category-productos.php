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
			</div><!-- .main-width -->
		</div><!-- .subcategory -->
		<div class="subcategory carpinteria">
			<div class="main-width">
				<h2>Carpintería</h2>
			</div><!-- .main-width -->
		</div><!-- .subcategory -->
		<div class="subcategory superficie">
			<div class="main-width">
				<h2>Superficie sólida</h2>
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