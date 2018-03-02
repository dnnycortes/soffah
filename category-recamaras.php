<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div id="contenido">
		<div class="productos recamaras">
			<div class="main-width">
				<ul class="breadcrumb">
					<li><a href="">Productos / </a></li>
					<li>Recámaras</li>
				</ul>
				<div class="title">
					<h2>Recámaras</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon-title-recamaras.png">
				</div><!-- .title -->				
			</div><!-- .main-width -->
		</div><!-- .productos -->
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
					<?php if (dynamic_sidebar('contact-form')) : else : endif; ?>
				</div><!-- #contact-form -->
			</div><!-- .main-width -->
		</div><!-- #contacto -->
	</div><!-- #contenido -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>