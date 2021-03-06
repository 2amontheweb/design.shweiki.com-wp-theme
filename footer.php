<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

    <?php wp_footer(); ?>

    <!-- FOOTER
    ================================================== -->
    <footer class="site-footer">
      <div class="container">
        <div class="footer-wrapper">
          <div class="row">
            <div class="col-sm-4 section footer-left">
              <?php dynamic_sidebar( 'footer-left' ); ?>
            </div><!-- .contact-us -->
            <div class="col-sm-4 section footer-middle">
              <h3 class="section-title">Connect With Us</h3>
              <div class="row">
                <div class="col-xs-3">
                  <a href="https://twitter.com/shweikimedia" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/twitter.png" alt="GMap">
                  </a>
                </div>
                <div class="col-xs-3">
                  <a href="https://instagram.com/shweikimedia/" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/instagram.png" alt="GMap">
                  </a>
                </div>
                <div class="col-xs-3">
                  <a href="https://www.facebook.com/shweikimedia" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/facebook.png" alt="GMap">
                  </a>
                </div>
                <div class="col-xs-3">
                  <a href="https://www.pinterest.com/shweikimedia/" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/pinterest.png" alt="GMap">
                  </a>
                </div>
              </div>
              <p>Stay in the loop on what's going on with <span>Shweiki Design &amp; Marketing</span></p>
            </div><!-- .connect-with-us -->
            <div class="col-sm-4 section footer-right">
              <?php dynamic_sidebar( 'footer-right' ); ?>
            </div><!-- .get-our-updates -->
          </div>
        </div>
      </div><!-- container -->
    </footer>
  </div><!-- #page -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <!-- // <script src="<#?php bloginfo('template_directory') ?>/js/jquery-2.1.1.min.js"></script> -->
  <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

</body>
</html>
