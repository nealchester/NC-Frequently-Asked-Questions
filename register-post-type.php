<?php
if ( ! function_exists('nc_faq_post_type') ) {

  // Register Custom Post Type
  function nc_faq_post_type() {
  
    $labels = array(
      'name'                  => _x( 'FAQ', 'Post Type General Name', 'nc-framework' ),
      'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'nc-framework' ),
      'menu_name'             => __( 'FAQs', 'nc-framework' ),
      'name_admin_bar'        => __( 'FAQ', 'nc-framework' ),
      'archives'              => __( 'FAQs Archives', 'nc-framework' ),
      'attributes'            => __( 'FAQ Attributes', 'nc-framework' ),
      'parent_item_colon'     => __( 'Parent FAQ:', 'nc-framework' ),
      'all_items'             => __( 'All FAQs', 'nc-framework' ),
      'add_new_item'          => __( 'Add New FAQ', 'nc-framework' ),
      'add_new'               => __( 'Add New', 'nc-framework' ),
      'new_item'              => __( 'New FAQ', 'nc-framework' ),
      'edit_item'             => __( 'Edit FAQ', 'nc-framework' ),
      'update_item'           => __( 'Update FAQ', 'nc-framework' ),
      'view_item'             => __( 'View FAQ', 'nc-framework' ),
      'view_items'            => __( 'View FAQ', 'nc-framework' ),
      'search_items'          => __( 'Search FAQ', 'nc-framework' ),
      'not_found'             => __( 'Not found', 'nc-framework' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'nc-framework' ),
      'featured_image'        => __( 'Featured Image', 'nc-framework' ),
      'set_featured_image'    => __( 'Set featured image', 'nc-framework' ),
      'remove_featured_image' => __( 'Remove featured image', 'nc-framework' ),
      'use_featured_image'    => __( 'Use as featured image', 'nc-framework' ),
      'insert_into_item'      => __( 'Insert into FAQ', 'nc-framework' ),
      'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'nc-framework' ),
      'items_list'            => __( 'FAQs list', 'nc-framework' ),
      'items_list_navigation' => __( 'FAQs list navigation', 'nc-framework' ),
      'filter_items_list'     => __( 'Filter FAQs list', 'nc-framework' ),
    );
    $rewrite = array(
      'slug'                  => 'faqs',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
    );
    $args = array(
      'label'                 => __( 'FAQ', 'nc-framework' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-editor-help',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page',
      'show_in_rest'          => false,
    );
    register_post_type( 'nc_faqs', $args );
  
  }
  add_action( 'init', 'nc_faq_post_type', 0 );
  
  }