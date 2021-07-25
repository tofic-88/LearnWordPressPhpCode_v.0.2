<?php 
  get_header();

  $wp_query = new WP_Query('posts_per_page=5');

               ?>   <div class="flex-container">
                        <div class="left-column">


                              <?php    if ( $wp_query->have_posts()) :
                                  while ($wp_query->have_posts()) : $wp_query->the_post();?>

                                        <article class="post">
                                          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                                          <i><?php the_date(); ?></i>
                                          <p><?php the_excerpt(); ?></p> 
                                        </article>

                                  <?php  wp_reset_postdata();
                                endwhile;

                                else :
                                  echo 'No Content found!';
                                endif; ?>

                        </div>

                        <div class="middle-column">

                               <?php    if ( $wp_query->have_posts()) :
                                  while ($wp_query->have_posts()) : $wp_query->the_post();?>

                                        <article class="post">
                                          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                                          <i><?php the_date(); ?></i>
                                          <p><?php the_excerpt(); ?></p> 
                                        </article>

                                  <?php  wp_reset_postdata();
                                endwhile;

                                else :
                                  echo 'No Content found!';
                                endif; ?>


                        </div>

                        <div class="right-column">
                              <h2>Last posts:</h2><br>
                              <?php    if ( $wp_query->have_posts()) :
                                  while ($wp_query->have_posts()) : $wp_query->the_post();?>

                                        <article class="post">
                                          <h3><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>
                                          <i><?php the_date(); ?></i>
                            
                                        </article>

                                  <?php  wp_reset_postdata();
                                endwhile;

                                else :
                                  echo 'No Content found!';
                                endif; ?>

                        </div>

                      </div>

 <?php get_footer();
?>


