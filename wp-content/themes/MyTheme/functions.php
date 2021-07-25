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
