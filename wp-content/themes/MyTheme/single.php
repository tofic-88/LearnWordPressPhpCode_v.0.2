<?php 
  get_header();
  /*$wp_query = new WP_Query('posts_per_page=5&orderby=title');*/
                      if ( have_posts()) :
                        while (have_posts()) : the_post();?>
                              <article class="post">
                                <h2><?php the_title();?> | I am the single.php file</h2>
                                <p><?php the_content(); ?></p> 
                              </article>
                        <?php  wp_reset_postdata();
                      endwhile;
                  else :
                    echo 'No Content found!';
                  endif; 
  get_footer();
?>


