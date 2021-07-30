<?php 

/*
Template Name: Special Layout
*/

  get_header();
 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-9">

    <?php

    if ( $wp_query->have_posts()) :
                        while ($wp_query->have_posts()) : $wp_query->the_post();?>


                              <article class="post">
                                <h2><?php the_title();?>: I am using Special Layout</h2>
                                <p><?php the_content(); ?></p> 
                              </article>

                              
                        <?php  wp_reset_postdata();
                      endwhile;
                  else :
                    echo 'No Content found!';
                  endif; ?>




    </div>



    <div class="col-sm-3">
      <?php dynamic_sidebar('sidebar1'); ?>
    </div>
  </div>
</div>


<?php

get_footer();

?>