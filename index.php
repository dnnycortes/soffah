<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<?php wowslider(3); ?>

<div id="wrapper">
	<div id="contenido">
		<!--EMPIEZA EL LOOP-->
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="entry">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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