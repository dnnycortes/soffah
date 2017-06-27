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
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="home-products">
				<h2><?php
					$cat = get_term_by( 'slug', 'productos', 'category');
					echo $cat->name;
					?></h2>
				<div class="product tapiceria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-tapiceria.jpg">
					<h3><?php
					$cat = get_term_by( 'slug', 'tapiceria', 'category');
					echo $cat->name;
					?></h3>
				</div><!-- .product -->
				<div class="product carpinteria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-carpinteria.jpg">
					<h3><?php
					$cat = get_term_by( 'slug', 'carpinteria', 'category');
					echo $cat->name;
					?></h3>
				</div><!-- .product -->
				<div class="product superficie">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-superficie.jpg">
					<h3><?php
					$cat = get_term_by( 'slug', 'superficie-solida', 'category');
					echo $cat->name;
					?></h3>
				</div><!-- .product -->
			</div><!-- .home-products -->
			<div class="home-pasion">
				<div class="main-width">
					<h2>Pasión</h2>
				</div><!-- .main-width -->
			</div><!-- .home-pasion -->
			<div class="home-proyectos">
				<div class="main-width">
					<h2>Proyectos</h2>
				</div><!-- .main-width -->
			</div><!-- .home-proyectos -->
			<div id="contacto">
				<div class="main-width">
					<h2>Contacto</h2>
					<div id="contact-form">
						<?php wd_form_maker(7, "embedded"); ?>
					</div><!-- #contact-form -->
				</div><!-- .main-width -->
			</div><!-- #contacto -->
		<?php endwhile; else: ?>
			<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
		<?php endif; ?>
		<!--TERMINA EL LOOP-->
	</div><!-- #contenido -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>