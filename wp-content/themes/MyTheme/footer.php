
    <!-- site-footer -->
    <footer class="site-footer">
          
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
              <br>
              <p><?php bloginfo('name'); ?> - &copy; <?php echo date("F j, Y, g:i a"); ?></p>
          </div>

    </footer><!-- /site-footer -->

    </div> <!-- Container end -->
    
  <?php wp_footer();  ?>
</body>
</html>