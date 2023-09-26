<?php 

function ha_scripts_styles() {
    
    
if ( is_rtl() ) {
	    
		wp_enqueue_style( '3tg-rtl', get_stylesheet_directory_uri() . '/rtl.css', array($parent_style), wp_get_theme()->get( 'Version' ) );
	}
    
    
    
    
 /* Vendor CSS */
    wp_enqueue_style( 'bootstrap-css', SH_URL . 'assets/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome-css', SH_URL . 'assets/vendor/fontawesome-free/css/all.min.css' );
    wp_enqueue_style( 'animate-css', SH_URL . 'assets/vendor/animate/animate.min.css' );
    wp_enqueue_style( 'simple-line-icons-css', SH_URL . 'assets/vendor/simple-line-icons/css/simple-line-icons.min.css' );
    wp_enqueue_style( 'owl.carousel-css', SH_URL . 'assets/vendor/owl.carousel/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.theme-css', SH_URL . 'assets/vendor/owl.carousel/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'magnific-popup-css', SH_URL . 'assets/vendor/magnific-popup/magnific-popup.min.css' );
    
 /* Theme CSS  */
    wp_enqueue_style( 'theme-css', SH_URL . 'assets/css/theme.css' );
    wp_enqueue_style( 'theme-elements-css', SH_URL . 'assets/css/theme-elements.css' );
    wp_enqueue_style( 'theme-blog-css', SH_URL . 'assets/css/theme-blog.css' );
    wp_enqueue_style( 'theme-shop-css', SH_URL . 'assets/css/theme-shop.css' );
        
 /* Current Page CSS  */
    wp_enqueue_style( 'ha-settings-css', SH_URL . 'assets/vendor/rs-plugin/css/settings.css' );
    wp_enqueue_style( 'ha-layers-css', SH_URL . 'assets/vendor/rs-plugin/css/layers.css' );
    wp_enqueue_style( 'ha-navigation-css', SH_URL . 'assets/vendor/rs-plugin/css/navigation.css' );
    wp_enqueue_style( 'ha-component-css', SH_URL . 'assets/vendor/circle-flip-slideshow/css/component.css' );
    
/* Skin CSS  */
    wp_enqueue_style( 'ha-skin-default-css', SH_URL . 'assets/css/skins/default.css' );    
    
        
/*  Theme Custom CSS  */
    wp_enqueue_style( 'ha-custom-css', SH_URL . 'assets/css/custom.css' );  
      
/*   Head Libs */
    wp_enqueue_script( 'ha-modernizr-js', SH_URL .'assets/vendor/modernizr/modernizr.min.js', array() ,false, true );
    
    
//    
///*   Vendor */
//    wp_enqueue_script( 'jquery-js', SH_URL .'assets/vendor/jquery/jquery.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.appear-js', SH_URL .'assets/vendor/jquery.appear/jquery.appear.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.easing-js', SH_URL .'assets/vendor/jquery.easing/jquery.easing.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.cookie-js', SH_URL .'assets/vendor/jquery.cookie/jquery.cookie.min.js', array() ,false, false );  
//    wp_enqueue_script( 'popper-js', SH_URL .'assets/vendor/popper/umd/popper.min.js', array() ,false, false );
//    wp_enqueue_script( 'bootstrap-js', SH_URL .'assets/vendor/bootstrap/js/bootstrap.min.js', array() ,false, false );
//    wp_enqueue_script( 'ha-common-js', SH_URL .'assets/vendor/common/common.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.validation-js', SH_URL .'assets/vendor/jquery.validation/jquery.validate.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.easy-pie-chart', SH_URL .'assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.gmap', SH_URL .'assets/vendor/jquery.gmap/jquery.gmap.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.lazyload-js', SH_URL .'assets/vendor/jquery.lazyload/jquery.lazyload.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.isotope', SH_URL .'assets/vendor/isotope/jquery.isotope.min.js', array() ,false, false );
//    wp_enqueue_script( 'owl.carousel-js', SH_URL .'assets/vendor/owl.carousel/owl.carousel.min.js', array() ,false, false );
//    wp_enqueue_script( 'magnific-popup-js', SH_URL .'assets/vendor/magnific-popup/jquery.magnific-popup.min.js', array() ,false, false );
//    wp_enqueue_script( 'jquery.vide-js', SH_URL .'assets/vendor/vide/jquery.vide.min.js', array() ,false, false );
//    wp_enqueue_script( 'ha-vivus-js', SH_URL .'assets/vendor/vivus/vivus.min.js', array() ,false, false );
//       
//    
//    
// /*   Theme Base, Components and Settings */
//   wp_enqueue_script( 'ha-theme-js', SH_URL .'assets/js/theme.js', array() ,false, false );
//        
//    /*   Current Page Vendor and Views  */
//   wp_enqueue_script( 'ha-jquery.themepunch.tools-js', SH_URL .'assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array() ,false, false );
//   wp_enqueue_script( 'ha-themepunch.revolution-js', SH_URL .'assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array() ,false, false );
//
//      
// /*   Current Page Vendor and Views */
//   wp_enqueue_script( 'ha-view.contact-js', SH_URL .'assets/js/views/view.contact.js', array() ,false, false );
//        
//  /*   Current Page Vendor and Views */
//   wp_enqueue_script( 'ha-custom-js', SH_URL .'assets/js/custom.js', array() ,false, false );
//    
//    /*   Current Page Vendor and Views */
//   wp_enqueue_script( 'ha-theme.init-js', SH_URL .'assets/js/theme.init.js', array() ,false, false );
//        
//
//       
//
//       
    
     
/*  wp_enqueue_style( 'main-style', SH_URL . '/assets/css/style.css' );
  wp_enqueue_style( 'res-style', SH_URL . 'assets/css/style-res.css' );

  wp_enqueue_script( 'jquery-js', SH_URL .'/assets/js/jquery-2.2.2.min.js', array() ,false, false );
  wp_enqueue_script( 'bootstrap-js', SH_URL .'/assets/js/bootstrap.min.js', array() ,false, false );
  wp_enqueue_script( 'aos-js', SH_URL .'/assets/js/aos.js', array() ,false, false );
  wp_enqueue_script( 'owl-js', SH_URL .'/assets/js/owl.carousel.min.js', array() ,false, false );
  wp_enqueue_script( 'main-js', SH_URL .'/assets/js/script.js', array() ,false, false );*/

}
add_action( 'wp_enqueue_scripts', 'ha_scripts_styles' );


function sh_admin_scripts_styles($hook) {

	wp_enqueue_style( 'sh-main', SH_URL . 'assets/admin/css/main-style.css');

	$sh_pages = ['toplevel_page_content-area','bazy-options_page_home-page-content','bazy-options_page_products-page-content','bazy-options_page_platform-page-content','bazy-options_page_about-page-content','bazy-options_page_contact-page-content','bazy-options_page_partners-page-content','bazy-options_page_sales-page-content','bazy-options_page_news-page-content','bazy-options_page_industries-page-content'];

	if( in_array($hook, $sh_pages) ) {
		wp_enqueue_style( 'sh-bootsrtap', SH_URL . 'assets/admin/css/bootstrap.min.css');
		wp_enqueue_style( 'sh-style', SH_URL . 'assets/admin/css/style.css');
		wp_enqueue_script( 'sh-bootsrtap', SH_URL .'assets/admin/js/bootstrap.min.js', array() ,false, true );
		wp_enqueue_script( 'sh-script', SH_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
	if( $hook == 'edit-tags.php' || $hook == 'term.php'){
		wp_enqueue_media();
	}
}
 
add_action('admin_enqueue_scripts', 'sh_admin_scripts_styles');
