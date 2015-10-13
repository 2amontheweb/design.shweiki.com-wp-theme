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
        <div class="row">
          <div class="col-sm-4 section contact-us">
            <h3>Contact Us</h3>
            <img style="width:80%;" src="<?php bloginfo('stylesheet_directory'); ?>/img/gmap.png" alt="GMap">
          </div><!-- .contact-us -->
          <div class="col-sm-4 section connect-with-us">
            <h3>Connect With Us</h3>
            <div class="row">
              <div class="col-xs-3">
                <a href="http://www.twitter.com">
                  <img style="max-width:60px;width:90%;display:block;margin: 0 auto;" src="<?php bloginfo('stylesheet_directory'); ?>/img/social/twitter.png" alt="GMap">
                </a>
              </div>
              <div class="col-xs-3">
                <a href="http://www.twitter.com">
                  <img style="max-width:60px;width:90%;display:block;margin: 0 auto;" src="<?php bloginfo('stylesheet_directory'); ?>/img/social/instagram.png" alt="GMap">
                </a>
              </div>
              <div class="col-xs-3">
                <a href="http://www.twitter.com">
                  <img style="max-width:60px;width:90%;display:block;margin: 0 auto;" src="<?php bloginfo('stylesheet_directory'); ?>/img/social/facebook.png" alt="GMap">
                </a>
              </div>
              <div class="col-xs-3">
                <a href="http://www.twitter.com">
                  <img style="max-width:60px;width:90%;display:block;margin: 0 auto;" src="<?php bloginfo('stylesheet_directory'); ?>/img/social/pinterest.png" alt="GMap">
                </a>
              </div>
            </div>
            <p>Stay in the loop on what's going on with <div>Shweiki Design &amp; Marketing</div></p>
          </div><!-- .connect-with-us -->
          <div class="col-sm-4 section get-our-updates">
            <h3>Get Our Updates</h3>
            <div class="inputs clearfix">
              <input type="text" style="width:70%;float:left;">
              <input type="submit" style="width:30%;">
            </div>
            <p>Sign up for our newsletter to find out about new updates.</p>
          </div><!-- .get-our-updates -->
        </div>
      </div><!-- container -->
    </footer>
  </div><!-- #page -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

</body>
</html>
