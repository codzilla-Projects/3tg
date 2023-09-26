<?php 
function sh_register_custom_menu_pages() {
    add_menu_page(
        'Bazy Options',
        'Bazy Options',
        'manage_options',
        'content-area',
        'main_content_area_callback',
        SH_URL.'/assets/images/faveicon.png',
        2
       	);    
    add_submenu_page(
        'content-area',
        'Home Page',
        'Home Page',
        'manage_options',
        'home-page-content',
        'home_page_content_callback'
    );    
    add_submenu_page(
        'content-area',
        'Products Page',
        'Products Page',
        'manage_options',
        'products-page-content',
        'products_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'Platform Page',
        'Platform Page',
        'manage_options',
        'platform-page-content',
        'platform_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'About Page',
        'About Page',
        'manage_options',
        'about-page-content',
        'about_page_content_callback'
    );    
    add_submenu_page(
        'content-area',
        'Contact Page',
        'Contact Page',
        'manage_options',
        'contact-page-content',
        'contact_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'Clients Page',
        'Clients Page',
        'manage_options',
        'partners-page-content',
        'partners_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'Sales Page',
        'Sales Page',
        'manage_options',
        'sales-page-content',
        'sales_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'News Page',
        'News Page',
        'manage_options',
        'news-page-content',
        'news_page_content_callback'
    );
    add_submenu_page(
        'content-area',
        'Industries Page',
        'Industries Page',
        'manage_options',
        'industries-page-content',
        'industries_page_content_callback'
    );

}
add_action( 'admin_menu', 'sh_register_custom_menu_pages' );
require_once ( SH_ROOT . 'custom fields/bazy_options.php');
require_once ( SH_ROOT . 'custom fields/home_page_content.php');
require_once ( SH_ROOT . 'custom fields/products_page_content.php');
require_once ( SH_ROOT . 'custom fields/platform_page_content.php');
require_once ( SH_ROOT . 'custom fields/about_page_content.php');
require_once ( SH_ROOT . 'custom fields/contact_page_content.php');
require_once ( SH_ROOT . 'custom fields/clients_page_content.php');
require_once ( SH_ROOT . 'custom fields/sales_page_content.php');
require_once ( SH_ROOT . 'custom fields/news_page_content.php');
require_once ( SH_ROOT . 'custom fields/industries_page_content.php');

// stop wordpress removing div and span tags
function sh_tiny_mce_fix( $init )
{
    $init['extended_valid_elements'] = 'div[*],span[*]';
    $init["forced_root_block"] = false;
    $init["force_br_newlines"] = true;
    $init["force_p_newlines"] = false;
    $init["convert_newlines_to_brs"] = true;
    return $init;
}
add_filter( 'tiny_mce_before_init', 'sh_tiny_mce_fix' );
/*remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
*/
function sh_get_img($img_src,$attachment_id,$classes){
    $attrs = 'title="'.get_the_title($attachment_id).'" alt="'.get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ).'"';
    return '<img src="'.$img_src.'" '.$attrs.' class="'.$classes.'">';
}

function sh_get_all_slides(){
    $args = array(
        'post_type'       => 'slide',
        'post_status'     => 'publish',
        'posts_per_page'  => -1,
        'orderby'         => 'date',
        'order'           => 'ASC',
    );
    return $slides = new WP_Query( $args );
}

function sh_get_posts($no){
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'DESC',
    );
    return $posts = new WP_Query( $args );    
}

function ha_get_histories($no){
    $args = array(
        'post_type'       => 'history',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'DESC',
    );
    return $histories = new WP_Query( $args );    
}
function sh_get_partners($no){
    $args = array(
        'post_type'       => 'partner',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'ASC',
    );
    return $partners = new WP_Query( $args );    
}

function sh_get_testimonials($no){
    $args = array(
        'post_type'       => 'testimonial',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'ASC',
    );
    return $testimonials = new WP_Query( $args );    
}

register_nav_menus(
    array(
    'top-menu'                => __( 'Top Menu' ),
    'main-menu'               => __( 'Main Menu' ),
    'footer-menu'             => __( 'Footer Menu' ),
   
    )
);
function sh_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Footer 1 Widget Area',
        'id'            => 'footer-first-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) ); 
    register_sidebar( array(
        'name'          => 'Footer 2 Widget Area',
        'id'            => 'footer-second-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) ); 
    register_sidebar( array(
        'name'          => 'Footer 3 Widget Area',
        'id'            => 'footer-third-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
     
    register_sidebar( array(
        'name'          => 'Footer 4 Widget Area',
        'id'            => 'footer-fourth-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
 
}
add_action( 'widgets_init', 'sh_widgets_init' );
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('sh_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        p#nav>a{
            display: none;
        }
        .login form{
            background: #164688!important;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: #d52938;
            border-color: #b2293a;
        }
    </style>
<?php }

function remove_wp_logo($wp_admin_bar) {
  $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);

function change_footer_admin() {
  echo '<span id="footer-thankyou"><a href="http://www.shwkyfareed.com/" target="_blank">shwky fareed</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');

function sh_tinymce_fix( $init )
{
    // html elements being stripped
    $init['extended_valid_elements'] = ['div[*]','h5','h4','h3','h2','h1','h6','p'];

    // pass back to wordpress
    return $init;
}
add_filter('tiny_mce_before_init', 'sh_tiny_mce_fix');