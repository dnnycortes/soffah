<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div class="main-slider">
	<div class="slider-widget"><?php wowslider(4); ?></div>
	<h2>Bienvenido</h2>
	<a href="#btn-scroll" class="btn-scroll" id="btn-scroll">Scroll</a>
</div><!-- .main-slider -->
<div class="divider home"></div>

<div id="wrapper">
	<div id="contenido">
		<!--EMPIEZA EL LOOP-->
			<div class="home-products">
				<div class="productos-menu">
					<h2><?php $cat = get_term_by( 'slug', 'productos', 'category'); echo $cat->name; ?></h2>
					<?php wp_nav_menu(array('theme_location' => 'productos'));?>
				</div>
				<div class="product tapiceria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-tapiceria.jpg">
				</div><!-- .product -->
				<div class="product carpinteria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-carpinteria.jpg">
				</div><!-- .product -->
				<div class="product superficie">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-superficie.jpg">
				</div><!-- .product -->
			</div><!-- .home-products -->
			<div class="home-pasion">
				<div class="main-width">
					<h2>Pasión</h2>
					<p>En Soffah nos encanta lo que fabricamos y lo hacemos con pasión. Sumando nuestra experiencia y los materiales que ocupamos ofrecemos productos de excelente calidad.</p>
				</div><!-- .main-width -->
			</div><!-- .home-pasion -->
			<div class="home-proyectos">
				<div class="main-width">
					<h2>Proyectos</h2>
					<p>Realizamos proyectos especiales y a la medida como pueden ser: lobbys, cafés, restaurantes, oficinas, etc.</p>
				</div><!-- .main-width -->
			</div><!-- .home-proyectos -->
			<div id="contacto">
				<div class="main-width">
					<h2>Contacto</h2>
					<div id="contact-form">
						<?php if (dynamic_sidebar('contact-form')) : else : endif; ?>
					</div><!-- #contact-form -->
				</div><!-- .main-width -->
			</div><!-- #contacto -->
		<!--TERMINA EL LOOP-->
	</div><!-- #contenido -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>