<?php 

function my_custom_post_gallery() {
  $labels = array(
    'name'               => _x( 'Galleries', 'post type general name' ),
    'singular_name'      => _x( 'Gallery', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'gallery' ),
    'add_new_item'       => __( 'Add New gallery' ),
    'edit_item'          => __( 'Edit gallery' ),
    'new_item'           => __( 'New gallery' ),
    'all_items'          => __( 'All galleries' ),
    'view_item'          => __( 'View gallery' ),
    'search_items'       => __( 'Search galleries' ),
    'not_found'          => __( 'No galleries found' ),
    'not_found_in_trash' => __( 'No galleries found in the Trash' ), 
    'parent_item_colon'  => '’',
    'menu_name'          => 'Galleries'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Galleries and gallery specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title' ),
    'has_archive'   => true,
  );
  register_post_type( 'gallery', $args ); 
}
add_action( 'init', 'my_custom_post_gallery' ); 