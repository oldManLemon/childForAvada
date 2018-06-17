<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


/* add_action( 'admin_init', 'debug_admin_menu' ); */

/* function debug_admin_menu() {

	echo '<pre style="padding:200px;">' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
	//Style only to save deleting a node every time you want to look at output
}
 */
function remove_elastic(){
	remove_menu_page('Elastic Slider');
	remove_menu_page('edit.php?post_type=themefusion_elastic');
	//Located in array [100] of admin_menu, no luck removing that way 
	remove_menu_page('Fusion Slider');
	remove_menu_page('edit.php?post_type=slide');

}
add_action( 'admin_menu', 'remove_elastic');