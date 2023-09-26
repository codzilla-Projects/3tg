<?php
add_action( 'init', 'sh_custom_post_types' );
/**********************
** create CPT Types
**********************/
function sh_custom_post_types() {
	
 $cpts = [
    array(
        'single'   => 'Slide',
        'plural'   => 'Slides',
        'cptname'  => 'slide',
        'icon'     => 'dashicons-images-alt2',
        'position' => 5
        ),
    array(
        'single'   => 'Solution',
        'plural'   => 'Solutions',
        'cptname'  => 'solution',
        'icon'     => 'dashicons-money',
        'position' => 6
        ),
    array(
        'single'   => 'History',
        'plural'   => 'Histories',
        'cptname'  => 'history',
        'icon'     => 'dashicons-calendar-alt',
        'position' => 7
        ),
    array(
        'single'   => 'Partner',
        'plural'   => 'Partners',
        'cptname'  => 'partner',
        'icon'     => 'dashicons-groups',
        'position' => 8
        ),    
    array(
        'single'   => 'Testimonial',
        'plural'   => 'Testimonials',
        'cptname'  => 'testimonial',
        'icon'     => 'dashicons-heart',
        'position' => 9
        ),
 ];
 foreach ($cpts as $cpt) {

     $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'flyit-textdomain' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'flyit-textdomain' ),
        'menu_name'             => __( $cpt['plural'], 'flyit-textdomain' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'flyit-textdomain' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'flyit-textdomain' ),
        'add_new'               => __( 'Add New', 'flyit-textdomain' ),
        'new_item'              => __( 'New '.$cpt['single'], 'flyit-textdomain' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'flyit-textdomain' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'flyit-textdomain' ),
        'view_item'             => __( 'View '.$cpt['single'], 'flyit-textdomain' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'flyit-textdomain' ),
        'not_found'             => __( 'Not found', 'flyit-textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'flyit-textdomain' ),
        'featured_image'        => __( 'Featured Image', 'flyit-textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'flyit-textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'flyit-textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'flyit-textdomain' ),
      );
      $args = array(
        'label'                 => __( $cpt['plural'], 'flyit-textdomain' ),
        'description'           => __( $cpt['plural'].' Description', 'flyit-textdomain' ),
        'labels'                => $labels,
        'supports'              => array("title","editor","thumbnail","excerpt"),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
      );
    
    // Register Custom Post Type>
	register_post_type( $cpt['cptname'], $args );

    }   

}

/********************
Add Date Meta Box To slides
********************/
function sh_add_slide_meta_data() {
    add_meta_box( "slide_data","Slide Button Data" , "sh_slide_data_callback", "slide", "normal" );
}
add_action( 'add_meta_boxes', 'sh_add_slide_meta_data' );

/* Display the post meta box. */
function sh_slide_data_callback( $object, $box ) { 

    $btn_text = esc_attr( get_post_meta( $object->ID, 'sh_btn_text', true ) );
    $btn_val = esc_attr( get_post_meta( $object->ID, 'sh_btn_val', true ) );
?>
    <div class="form-group">
        <label for="sh_btn_text">Button Text : </label><br>
        <input type="text"  name="sh_btn_text" class="form-control full-wdith" value="<?php echo $btn_text; ?>" style="margin:10px;width:60%;padding:10px;"><br>
    </div>
    <div class="form-group">
        <label for="sh_btn_val">Button link : </label><br>
        <input type="text"  name="sh_btn_val" class="form-control full-wdith" value="<?php echo $btn_val; ?>" style="margin:10px;width:60%;padding:10px;"><br>
    </div>
<?php
}

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'sh_save_bazy_meta', 10, 2 );
function sh_save_bazy_meta($post_id){
    
    if( isset($_POST['sh_btn_text']) ){
        update_post_meta($post_id, 'sh_btn_text', $_POST['sh_btn_text']);
    }
    else
        delete_post_meta($post_id,'sh_btn_text');

    if( isset($_POST['sh_btn_val']) ){
        update_post_meta($post_id, 'sh_btn_val', $_POST['sh_btn_val']);
    }
    else
        delete_post_meta($post_id,'sh_btn_val');
}





/* Meta box setup function. */
function ha_add_year_meta_box() {
    add_meta_box( "history_date","History Year" , "ha_year_date_callback", "history", "normal" );
}
add_action( 'add_meta_boxes', 'ha_add_year_meta_box' );




/* Display the post meta box. */
function ha_year_date_callback( $post ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'icon_post_class_nonce' ); ?>

  <p>
    <label for="history_date"><?php _e( "Add Year to history cpt.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="number" name="history_date" id="history_date" value="<?php echo esc_attr( get_post_meta( $post->ID, 'history_date', true ) ); ?>" size="120" />
  </p>
<?php }

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'year_save_post_class_meta', 10, 2 );

function year_save_post_class_meta($post_id){
    
    if( isset($_POST['history_date']) ){
        update_post_meta($post_id, 'history_date', $_POST['history_date']);
    }
    else
        delete_post_meta($post_id,'history_date');
}