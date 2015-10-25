<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shweiki_Design
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-image">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
          <?php the_post_thumbnail(); ?>
        </a>
      </div><!-- post-image -->
    <?php endif; ?>
    <div class="entry-title-container">
      <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
      <?php edit_post_link( 'Edit', '<div class="edit-link"><i class="fa fa-pencil"></i>', '</div>' ); ?>
    </div>

    <?php if ( 'post' === get_post_type() ) : ?>

      <div class="post-details">
        <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
      </div><!-- post-details -->

    <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="post-excerpt">
    <?php the_excerpt(); ?>
  </div><!-- post-excerpt -->

  <footer class="entry-footer">
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
