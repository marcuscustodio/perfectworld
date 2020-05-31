<?php

//chamar a tag title
function pwtheme_render_title(){
	add_theme_support('title-tag');

    add_theme_support( 'post-formats', array('link', 'quote '));

}
add_action('after_setup_theme', 'pwtheme_render_title');

if(!function_exists('_wp_render_title_tag')) {
	function tripularte_render_title(){
		?>
		<title><?php wp_title('|', true, 'right')?></title>
		<?php
	}
	add_action('wp_head', 'pwtheme_render_title');
}

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//suporte a thumbnails
add_theme_support( 'post-thumbnails' );

//menu header
function register_menu_header() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_menu_header' );


  function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');






   //menu footer
   function register_menu_footer() {
    register_nav_menu('footer-menu',__( 'footer Menu' ));
  }
  add_action( 'init', 'register_menu_footer' );


     //menu suporte
     function register_menu_suporte() {
        register_nav_menu('suporte-menu',__( 'suporte Menu' ));
      }
      add_action( 'init', 'register_menu_suporte' );


/*adcionar logo ao thema*/
add_theme_support('custom-logo');


function pine_add_page_slug_body_class( $classes ) {
    global $post;
    
    if ( isset( $post ) ) {
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'pine_add_page_slug_body_class' );





//Montarias post type

register_post_type('montarias',
array(
    'labels' => array(
        'name' => __('Montarias'),
        'singular_name' => __('montaria')
    ),
    'supports' => array(
        'title', 'editor', 'thumbnail'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-image-filter',
    'rewrite' => array('slug' => 'montarias'),
));

//voos post type voos

register_post_type('voos',
array(
    'labels' => array(
        'name' => __('Voos'),
        'singular_name' => __('voo')
    ),
    'supports' => array(
        'title', 'editor', 'thumbnail'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-buddicons-replies',
    'rewrite' => array('slug' => 'voos'),
));

//voos post type voos

register_post_type('videos',
array(
    'labels' => array(
        'name' => __('Vídeos'),
        'singular_name' => __('video')
    ),
    'supports' => array(
        'title', 'editor', 'thumbnail'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-video-alt3',
    'rewrite' => array('slug' => 'videos'),
));





function ms_setup() {
    add_image_size( 'thumb-galerias', 225, 126, true );
    add_image_size( 'thumb-posts', 175,98, true );
    add_image_size( 'destaque', 730,410, true );
    }
    add_action( 'after_setup_theme', 'ms_setup' );


?>