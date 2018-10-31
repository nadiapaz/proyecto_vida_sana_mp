<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();



/*registando los estilos*/

wp_register_style('bootstrap', get_theme_file_uri('/assets/vendor/css/bootstrap.min.css'), null, null, 'screen');
wp_register_style('fontawesome', get_theme_file_uri('/assets/vendor/css/fontawesome.css'), null, null, 'sreen');
wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, $theme_data->get('Version'), 'screen');

 wp_enqueue_style('bootstrap');
 wp_enqueue_style('fontawesome');
 wp_enqueue_style('style');

 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();
    
    /* Deregister Scripts */
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );


/*registrando js*/
/* Registrando scripts */

wp_register_script('jquery', get_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, null, true);
wp_register_script('jquery-migrate', get_theme_file_uri('/assets/vendor/jquery/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
wp_register_script('jqueryeasing', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.js'), array('jquery-migrate'), '1.3', true);
wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jquery-migrate'), '4.1.3', true);
wp_register_script('scripts', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jquery-migrate'), null, null, true);

 /* Estilos en cola */
 wp_enqueue_script('jquery');
 wp_enqueue_script('jquery-migrate');
 wp_enqueue_script('jqueryeasing');
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('scripts');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

/*registro de menú*/

function menus_setup() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
      )
  );
}

add_action( 'after_setup_theme', 'menus_setup');

/*logo personalizable*/

function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );

/*desactivar error functions.php Notice: ob_end_flush(): failed to send buffer of zlib output compression (1) in*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

if ( ! function_exists('noticia_post_type') ) {

// Register Custom Post Type
function noticia_post_type() {

  $labels = array(
    'name'                  => _x( 'noticias', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'noticia', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'noticias', 'text_domain' ),
    'name_admin_bar'        => __( 'noticias', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'noticia', 'text_domain' ),
    'description'           => __( 'informacion vida sana', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-links',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'noticia', $args );

}
add_action( 'init', 'noticia_post_type', 0 );

}

if ( ! function_exists('noticia2_post_type') ) {

// Register Custom Post Type
function noticia2_post_type() {

  $labels = array(
    'name'                  => _x( 'noticias2', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'noticia', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'noticias2', 'text_domain' ),
    'name_admin_bar'        => __( 'noticias2', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'noticia2', 'text_domain' ),
    'description'           => __( 'informacion vida sana', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-links',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'noticia2', $args );

}
add_action( 'init', 'noticia2_post_type', 0 );

}

if ( ! function_exists('noticia3_post_type') ) {

// Register Custom Post Type
function noticia3_post_type() {

  $labels = array(
    'name'                  => _x( 'noticias3', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'noticia', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'noticias3', 'text_domain' ),
    'name_admin_bar'        => __( 'noticias3', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'noticia3', 'text_domain' ),
    'description'           => __( 'informacion vida sana', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-links',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'noticia3', $args );

}
add_action( 'init', 'noticia3_post_type', 0 );

}

//registrando tamaños de imagenes

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'    => __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'            => __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'  => __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'  => __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );
  }

  if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 500, 339, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }

function dl_widgets() {
    register_sidebar( array(
        'name' => 'widget footer',
        'id' => 'widget_footer'
    ));

    register_sidebar( array(
        'name' => 'barra lateral',
        'id' => 'sidebar-widget',
        'before_widget' => '<div  id="%1$s" class="widget %2$s" mt-4',
        'after_widget' => '</div>',  
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',

    ));
}

add_action('widgets_init', 'dl_widgets');

?>