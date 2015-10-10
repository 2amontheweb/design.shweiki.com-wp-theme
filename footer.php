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
    <footer>
      <div class="container">
        <div class="col-sm-3">
          <!-- <p><a href="/"><img src="<?#php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Bootstrap to WordPress"></a></p> -->
        </div><!-- end col -->
        <div class="col-sm-6">

          <?php
              wp_nav_menu( array(

                'theme_location' => 'header',
                'container'       => 'nav',
                'menu_class'        => 'list-unstyled list-inline'

              ) );
            ?>

        </div><!-- end col -->
        <div class="col-sm-3">
          <p class="pull-right"><?php echo bloginfo('name') ?> &copy; <?php echo date('Y') ?> <?php the_author_link(); ?></p>
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div><!-- end col -->
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
