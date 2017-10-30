<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div id="contenido">
		<div class="sillones libreros">
			<div class="main-width">
				<ul class="breadcrumb">
					<li><a href="">Productos / </a></li>
					<li><a href="">Tapicería /</a></li>
					<li>Libreros</li>
				</ul>
				<div class="title">
					<h2>Libreros</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-title-libreros.png">
				</div><!-- .title -->				
			</div><!-- .main-width -->
		</div><!-- .sillones -->
		<div class="products-catalogue">
			<div class="main-width">
				<!--EMPIEZA EL LOOP-->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<a class="product-thumb" href="javascript:void(0);">
						<h2><?php the_title(); ?> </h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/products/sillones/senorial.jpg">
					</a>
				<?php endwhile; else: ?>
					<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
				<?php endif; ?>
				<!--TERMINA EL LOOP-->
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