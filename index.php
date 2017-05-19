<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="main-slider">
	<div class="slider-widget"><?php wowslider(3); ?></div>
	<h2>Bienvenido</h2>
	<a href="#btn-scroll" class="btn-scroll" id="btn-scroll">Scroll</a>
</div><!-- .main-slider -->

<div id="wrapper">
	<div id="contenido">
		<!--EMPIEZA EL LOOP-->
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="home-products">
				<h2><?php echo get_cat_name(2);?></h2>
				<div class="product tapiceria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-tapiceria.jpg">
					<h3><?php echo get_cat_name(3);?></h3>
				</div><!-- .product -->
				<div class="product carpinteria">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-carpinteria.jpg">
					<h3><?php echo get_cat_name(4);?></h3>
				</div><!-- .product -->
				<div class="product superficie">
					<img src="<?php echo get_template_directory_uri(); ?>/images/productos-superficie.jpg">
					<h3><?php echo get_cat_name(5);?></h3>
				</div><!-- .product -->
			</div><!-- .home-products -->
			<div class="entry">
				<h2><a href="<?php the_permalink(); ?>"></a></h2>
				<div class="entry-body">
					<?php the_content(); ?>
				</div>
			</div>	
		<?php endwhile; else: ?>
			<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
		<?php endif; ?>
		<!--TERMINA EL LOOP-->
	</div><!-- #contenido -->
	
	<aside id="asidePrincipal">
		<?php if (dynamic_sidebar('sidebar-widgets')) : else : endif; ?>
	</aside><!-- #asidePrincipal -->
	
</div><!-- #wrapper -->
<?php get_footer(); ?>