<?php 

function reerka_styles() {
     
    /** REGISTER css/screen.css **/
 

   	wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null );

    wp_enqueue_style( 'bootstrap_css' );
    
    wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'reset' );

         
    wp_register_style( 'root styles', get_stylesheet_uri(), array( 'reset' ) );

    wp_enqueue_style( 'root styles' );




}
add_action( 'wp_enqueue_scripts', 'reerka_styles' );


	function reerka_scripts(){
	wp_deregister_script('jquery');


	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
	wp_enqueue_script( 'jquery' );


	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'bootstrap_js' );


}

add_action( 'wp_enqueue_scripts', 'reerka_scripts' );
?>