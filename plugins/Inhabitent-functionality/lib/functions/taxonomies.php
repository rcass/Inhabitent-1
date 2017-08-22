<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function Inhabitent_tax_product_type() {
  
    $labels = array(
      'name'                       => 'Product types',
      'singular_name'              => 'Product type',
      'menu_name'                  => 'Product types',
      'all_items'                  => 'All product types',
      'parent_item'                => 'Parent product types',
      'parent_item_colon'          => 'Parent product types:',
      'new_item_name'              => 'New products type Name',
      'add_new_item'               => 'Add New product type',
      'edit_item'                  => 'Edit product types',
      'update_item'                => 'Update product types',
      'view_item'                  => 'View product types',
      'separate_items_with_commas' => 'Separate product types with commas',
      'add_or_remove_items'        => 'Add or remove product types',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular product types',
      'search_items'               => 'Search product types',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No product types',
      'items_list'                 => 'product types list',
      'items_list_navigation'      => 'product types list navigation',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    );
    register_taxonomy( 'product-type', array( 'product' ), $args );
  
  }
  add_action( 'init', 'Inhabitent_tax_product_type', 0 );