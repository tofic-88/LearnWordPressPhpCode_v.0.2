<?php 
  get_header();
 
      if ( $wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();?>

        <article class="post page">
          <?php 
          
          if(has_children() OR $post->post_parent > 0 ){   ?>

        <nav class="site-nav children-links clearfix">
                    <span class="parent-link"><a href="<?php get_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
                    <ul>
                              <?php    
                              $args = array(
                                'child_of' => get_top_ancestor_id(),
                                'title_li' => ''
                              );
                              wp_list_pages($args);   
                              ?>
                    </ul>
         </nav> <?php  } ?>

          <h2><?php the_title();?> | I am the page.php file</h2>
          <p><?php the_content(); ?></p> 
        </article>

        
        <?php  wp_reset_postdata();
       endwhile;

  else :
    echo 'No Content found!';
  endif;
?>

<?php
  get_footer();


?>


