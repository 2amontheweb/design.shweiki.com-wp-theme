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
          <div>
            <?php echo $twitter_username; ?>
            <?php echo $facebook_username; ?>
            <?php echo $pinterest_username; ?>
            <?php echo $instagram_username; ?>
            <?php echo $website_url; ?>
          </div>
        </div>
      </div>
      <?#php
#        edit_post_link(
#          sprintf(
#            /* translators: %s: Name of current post */
#            esc_html__( 'Edit %s', 'bootstrap2wordpress' ),
#            the_title( '<span class="screen-reader-text">"', '"</span>', false )
#          ),
#          '<span class="edit-link">',
#          '</span>'
#        );
#      ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->
</div><!-- .content-gallery -->
