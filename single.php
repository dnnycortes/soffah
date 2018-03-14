<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<?php
	$productos = get_cat_ID( 'Productos' ); $productos_link = get_category_link( $productos );
	$sillones = get_cat_ID( 'Sillones' ); $sillones_link = get_category_link( $sillones );
?>
<div id="wrapper">
	<div id="contenido" class="single-product">
		<div class="main-width">
			<ul class="breadcrumb">
				<li><a href="<?php echo esc_url( $productos_link ); ?>">Productos / </a></li>
				<li><a href="<?php echo esc_url( $sillones_link ); ?>">Sillones</a></li>
			</ul>			
			<div class="main-content">
				<!--EMPIEZA EL LOOP-->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="info">
						<h2><?php the_title(); ?></h2>
						<p><?php echo get_post_meta($post->ID, 'descripcion-producto', true); ?></p>
						<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'size-product'); endif; ?>
					</div><!-- .info -->
					<div class="gallery">
						<div class="main-img">
							<img src="">
							<!-- < //? //php the_post_thumbnail(); ?> -->
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
					<?php if (dynamic_sidebar('contact-form')) : else : endif; ?>
				</div><!-- #contact-form -->
			</div><!-- .main-width -->
		</div><!-- #contacto -->
	</div><!-- #contenido -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>