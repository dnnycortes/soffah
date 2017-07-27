<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div id="contenido" class="single-product">
		<div class="main-width">
			<ul class="breadcrumb">
				<li><a href="">Productos / </a></li>
				<li><a href="">Tapicería /</a></li>
				<li>Sillones</li>
			</ul>			
			<div class="main-content">
				<!--EMPIEZA EL LOOP-->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="info">
						<h2><?php the_title(); ?></h2>
						<p>Texto simulado de la descripción del producto, materiales, etc.</p>
						<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/senorial-medidas.png">
					</div><!-- .info -->
					<div class="gallery">
						<div class="main-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/senorial.jpg">
						</div>
						<!-- Gallery here at the content -->
						<?php the_content(); ?>
					</div><!-- .gallery -->
				<?php endwhile; else: ?>
					<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
				<?php endif; ?>
				<!--TERMINA EL LOOP-->
			</div><!-- .main-content -->
		</div><!-- .main-width -->



		
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