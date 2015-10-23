<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shweiki_Design
 */

?>
<div class="row">
  <div class="col-sm-8">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-image">
            <?php the_post_thumbnail(); ?>
          </div><!-- .post-image -->
        <?php endif; ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
          Posted on <time><?php the_date(); ?></time>
        </div><!-- .entry-meta -->
      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php the_content(); ?>
        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shweiki-design' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->

      <footer class="entry-footer">
        <?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
      </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
  </div>
  <div class="col-sm-4">
    <aside>
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>
