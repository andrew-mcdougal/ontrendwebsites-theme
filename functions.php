<?php

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
/**
 * Proper way to enqueue scripts and styles
 */
function load_custom_script() {
    
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.0.0.js' );
    wp_enqueue_script( 'svg', get_stylesheet_directory_uri() . '/js/snap.svg-min.js');
    
    //wp_enqueue_script( 'classie', get_stylesheet_directory_uri() . '/js/classie.js');
    //wp_enqueue_script( 'bubble-menu', get_stylesheet_directory_uri() . '/js/main4.js');
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );

    
    wp_enqueue_style( 'ontrend-styles', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'menu-bubble', get_stylesheet_directory_uri() . '/css/menu_bubble.css' );
    wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
}

add_action( 'wp_enqueue_scripts', 'load_custom_script' );








// ADD MENU ABILITY
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>