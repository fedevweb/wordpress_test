<?php 
	
function page_style(){

	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/css/normalize.css');

	wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );

	wp_enqueue_style( 'style', get_stylesheet_uri());

	wp_enqueue_script('jquery');

	/* el parametro true, es para que se carguen los estilos en el footer  */
	wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.7', true );
}
	
add_action( 'wp_enqueue_scripts', 'page_style' );

/* Nueva navegacion */

register_nav_menus(
	array(
		'menu_principal' => 'Menu Principal',
		)
 );	
