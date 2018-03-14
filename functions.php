<?php 

/* Añade la clase del slug al body siempre*/
function add_slug_body_class($classes) {
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/* Área de widget*/
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'Area de Widget',
		'before_widget' => '<div id="one" class="two">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
	register_sidebar(array(
		'name' => 'Sidebar Widgets Secundario',
		'id'   => 'sidebar-widgets-secundario',
		'description'   => 'Area de Widget',
		'before_widget' => '<div id="one" class="two">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	register_sidebar(array(
		'name' => 'Contacto',
		'id'   => 'contact-form',
		'description'   => 'Area de Widget',
		'before_widget' => '<div id="one" class="two">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}

/* Registra los menus del sitio */
register_nav_menus( array(
	'primary' => 'Menu Principal',
	'secondary' => 'Menu Servicios',
	'productos' => 'Menu Productos'
) );

/* Registra los javascripts del sitio */
function my_scripts_method() {
	wp_enqueue_script(
		'jquery-tools',
		get_stylesheet_directory_uri() . '/js/jqueryTools.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/custom.js',
		array( 'jquery' )
	);
	wp_enqueue_style(
		'reset',
		get_stylesheet_directory_uri() . '/css/reset.css'
	);
	wp_enqueue_style(
		'main',
		get_stylesheet_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'responsive-style',
		get_stylesheet_directory_uri() . '/css/estilosResponsive.css'
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

/* Añade soporte para formas de búsqueda en html5 */
add_theme_support( 'html5', array( 'search-form' ) );

/* Añade soporte para poner imagen de fondo personalizada */
add_theme_support( 'custom-background' );

/* Añade soporte para poner imágenes principales a los posts */
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Cambia las dimensiones del thumbnail del listado por categoría
	add_image_size( 'size-product', 326, 9999 ); // 326 pixels width (and unlimited height)
	add_image_size( 'thumbnail-product', 300, 999 ); 
}

/* Añade Multiple Image Thumbnail Templates */
if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
		'label' => 'Producto medidas',
		'id' => 'size-product',
		'post_type' => 'post'
	));
	new MultiPostThumbnails(array(
		'label' => 'Producto thumbnail',
		'id' => 'thumbnail-product',
		'post_type' => 'post'
	));
}

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);


?>