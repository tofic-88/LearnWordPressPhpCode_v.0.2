<?php 

/*Loading style.css stylesheet file */
function mytheme_files() { 

  wp_enqueue_style( 'bootstrap4', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' ); /* Including our local Bootstrap 4 */
  wp_enqueue_style( 'style', get_stylesheet_uri()); /* Including own principal CSS */

} 

add_action( 'wp_enqueue_scripts', 'mytheme_files' );


// Navigation Menus: from here we save both location on Wordpress
register_nav_menus( array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu'),
));

/* Get top ancestor ID function */
function get_top_ancestor_id(){

  global $post;

  if($post->post_parent){
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      return $ancestors[0];
  }return $post->ID;

}

/* Does page have children? */
function has_children(){
  global $post;
  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}


// Add our Widget location option
function mytheme_widgets_init() {

// Add our Widget location Sidebar
register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar1'
  ) );

// Add our Widget location footer column 1
register_sidebar( array(
      'name'          => 'Footer Column 1',
      'id'            => 'footer1'
) );

// Add our Widget location footer column 2
register_sidebar( array(
      'name'          => 'Footer Column 2',
      'id'            => 'footer2'
) );

// Add our Widget location footer column 3
register_sidebar( array(
      'name'          => 'Footer Column 3',
      'id'            => 'footer3'
) );

// Add our Widget location footer column 4
register_sidebar( array(
      'name'          => 'Footer Column 4',
      'id'            => 'footer4'
) );

}

add_action( 'widgets_init', 'mytheme_widgets_init' );

