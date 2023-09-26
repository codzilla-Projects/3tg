<?php 
error_reporting(1);
define('SH_ROOT', get_template_directory() . '/');
define('SH_URL', get_template_directory_uri() . '/');
define('SH_ADMIN', admin_url());
define('SH_LANG', get_locale());
add_theme_support( 'post-thumbnails' );

require_once ( SH_ROOT . 'lib/theme_initialization.php');
require_once ( SH_ROOT . 'lib/enqueue_scripts.php');
require_once ( SH_ROOT . 'lib/ajax_functions.php');
require_once ( SH_ROOT . 'lib/sh_functions.php');

function sh_load_theme_textdomain() {
    load_theme_textdomain( 'puffer', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sh_load_theme_textdomain' );



//if( SH_LANG === 'ar' ){
//    wp_enqueue_style( 'ar-font', 'https://fonts.googleapis.com/css?family=Cairo&display=swap' );
//    wp_enqueue_style( 'ar-style', SH_URL . 'assets/style-ar.css' );
//  }else{
//    wp_enqueue_style( 'en-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );
//  }