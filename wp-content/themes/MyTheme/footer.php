
    <!-- site-footer -->
    <footer class="site-footer">

            <!-- footer widgets -->
            <div class="myclass-footer-widgets-container clearfix">

                            <!-- footer widget column 1-->
                                <div class="myclass-footer-widget-column">
                                    <?php dynamic_sidebar('footer1'); ?>
                                </div>

                            <!-- footer widget column 2-->
                                <div class="myclass-footer-widget-column">
                                    <?php dynamic_sidebar('footer2'); ?>
                                </div>

                            <!-- footer widget column 3-->
                                <div class="myclass-footer-widget-column">
                                    <?php dynamic_sidebar('footer3'); ?>
                                </div>
                                
                            <!-- footer widget column 4-->
                                <div class="myclass-footer-widget-column">
                                    <?php dynamic_sidebar('footer4'); ?>
                                </div>
             </div>

            
            <div class="container p-3 my-3 bg-dark text-white">

                              <!-- footer menu -->         
                              <nav class="site-nav">
                                    <?php
                                      $args = array(
                                        'theme_location' => 'footer'
                                      );
                                      wp_nav_menu( $args );  
                                    ?>
                              </nav>
                              
                              <br><p><?php bloginfo('name'); ?> - &copy; <?php echo date("F j, Y, g:i a"); ?></p>

            </div>

    </footer><!-- /site-footer -->

    </div> <!-- Container end -->
    
  <?php wp_footer();  ?>
</body>
</html>