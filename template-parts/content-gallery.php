<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shweiki_Design
 */

$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$pinterest_username = get_field('pinterest_username');
$instagram_username = get_field('instagram_username');
$website_url = get_field('website_url');

?>

<div class="page content-gallery">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
      <?php the_content(); ?>
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap2wordpress' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <div class="row">
        <div class="col-sm-8">
          <?php if ($website_url) : ?>
            <div class="website-link">
              <a href="<?php echo $website_url; ?>">View Our Website</a>
            </div>
          <?php endif; ?>

          <div class="social-links">
            <?php if ($twitter_username) : ?>
              <a href="http://www.twitter.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/twitter.png" alt="Twitter">
              </a>
            <?php endif; ?>

            <?php if ($instagram_username) : ?>
              <a href="http://www.twitter.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/instagram.png" alt="GMap">
              </a>
            <?php endif; ?>

            <?php if ($facebook_username) : ?>
              <a href="http://www.twitter.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/facebook.png" alt="GMap">
              </a>
            <?php endif; ?>

            <?php if ($pinterest_username) : ?>
              <a href="http://www.twitter.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/pinterest.png" alt="GMap">
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->
</div><!-- .content-gallery -->
