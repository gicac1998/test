<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

//PEOPLE POST TYPE
function people_post_type () {
  $labels = array (
    'name'                => 'People',
    'singular_name'       => 'Person',
    'add_new'             => 'Add Person',
    'all_items'           => 'People',
    'add_new_item'        => 'Add Person',
    'edit_item'           => 'New Person',
    'view_item'           => 'View Item',
    'search_item'         => 'Search People',
    'not_found'           => 'No items found',
    'not_found_in_trast'  => 'No person found in trash',
    'parent_item_colon'   => 'Parent Item'
  );
  $support = array(
    'title',
    'editor',
    'excerpt',
    'thumbnail',
    'revisions',
    'thumbnail'
  );
  $args = array (
    'labels'              => $labels,
    'public'              => true,
    'has_archive'         => true,
    'menu_icon'           => 'dashicons-admin-users',
    'publicly_queryable'  => true,
    'query_var'           => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'supports'             => $support,
    'taxonomies'          => array('category','post_tag'),
    'menu_position'       => 5,
    'exclude_from_search' => false
  );
  register_post_type('people', $args);
}
add_action('init', 'people_post_type');

/*
	==========================================
	 Sidebar function
	==========================================
*/
function sidebar_people() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

}
add_action('widgets_init','sidebar_people');
