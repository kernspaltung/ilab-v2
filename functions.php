<?php

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support('post-thumbnails');

// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );

function dependencias() {
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
  wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
  wp_enqueue_style( 'fullpage-css', get_stylesheet_directory_uri() . '/bower_components/fullpage.js/dist/jquery.fullpage.css');
  wp_enqueue_style( 'js_utils-css', get_stylesheet_directory_uri() . '/submodulos/js_utils/dist/stylesheet/js_utils.css');
  wp_enqueue_style( 'wp-styles', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style( 'app-styles', get_stylesheet_directory_uri() . '/css/app.css');
  //
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js' );
  wp_enqueue_script( 'what-input', get_stylesheet_directory_uri() . '/bower_components/what-input/dist/what-input.js' );
  wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js' );
  wp_enqueue_script( 'fullpage', get_stylesheet_directory_uri() . '/bower_components/fullpage.js/dist/jquery.fullpage.js', array('jquery'));
  wp_enqueue_script( 'sticky-kit', get_stylesheet_directory_uri() . '/bower_components/sticky-kit/jquery.sticky-kit.min.js', array('jquery'));
  wp_enqueue_script( 'slick-carousel', get_stylesheet_directory_uri() .'/bower_components/slick-carousel/slick/slick.js', array('jquery') );
  wp_enqueue_script( 'imgLiquid', get_stylesheet_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  wp_enqueue_script( 'vivus-js', get_stylesheet_directory_uri() . '/bower_components/vivus/dist/vivus.js' );
  wp_enqueue_script( 'js_utils', get_stylesheet_directory_uri() . '/submodulos/js_utils/dist/js/js_utils.js', array('jquery') );
  wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js', array('jquery') );

  // wp_localize_script('app-master','ajax',array('ajax_url'=> admin_url( 'admin-ajax.php' )));

}

function registro_menu() {
  register_nav_menu('menu-paginas'  ,__( 'Menú Header Páginas' ));
  register_nav_menu('menu-about'  ,__( 'Menú Página Nosotros' ));
  register_nav_menu('menu-bootcamp'  ,__( 'Menú Página Bootcamp' ));
  register_nav_menu('menu-incuba'  ,__( 'Menú Página Incuba' ));
  register_nav_menu('menu-aliados'  ,__( 'Menú Página Aliados' ));
  register_nav_menu('menu-startups'  ,__( 'Menú Página Startups' ));
  register_nav_menu('menu-eventos'  ,__( 'Menú Página Eventos' ));
  register_nav_menu('menu-ac'  ,__( 'Menú Página AC' ));

}
add_action( 'init', 'registro_menu' );

//paginas
function page_id($id) {

   return array( 'page_id' => $id );

}
//cpts
function cpt($cpt_slug) {

   return array( 'post_type' => $cpt_slug );

}
//menus para paginas
function menu_paginas($lugar = '', $ul_ID = '' ) {
  wp_nav_menu( array( 'theme_location' => $lugar, 'menu_id' => $ul_ID, 'container' => '', 'menu_class' => 'menu-page columns text-center p-1' ));

}
//delimita extracto
function excerpt($limit) {
   $excerpt = explode(' ', get_the_excerpt(), $limit);
   if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'.';
   } else {
      $excerpt = implode(" ",$excerpt);
   }
   $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
   return $excerpt;
}




//
//
// add_action( 'wp_ajax_get_service', 'get_service' );
// add_action( 'wp_ajax_nopriv_get_service', 'get_service' );
//
// function get_service() {
//
//    $response = array();
//
//    if( isset($_GET['id'])) {
//
//       $id = $_GET['id'];
//       $post = get_post( $id );
//
//       $title = get_the_title($id);
//       $image = get_the_post_thumbnail($id);
//       $content = apply_filters('the_content',$post->post_content);
//
//       $response = array(
//          'title' => $title,
//          'image' => $image,
//          'description' => $content,
//       );
//
//    }
//
//
// 	wp_die( json_encode( $response ) );
//
// }
