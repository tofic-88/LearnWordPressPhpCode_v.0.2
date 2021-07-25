<?php 

/*
Template Name: Special Layout
*/

  get_header();
 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">

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



    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>


<?php

get_footer();

?>