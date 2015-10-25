<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shweiki_Design
 */

get_header(); ?>
  <div class="page single">
    <div class="container">
      <main id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>


          <?php $post_format = get_post_format() ? get_post_format() : 'single'; ?>
          <?php get_template_part( 'template-parts/content', $post_format ); ?>

          <div class="row">
            <div class="col-sm-6">

              <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
              ?>

            </div>
          </div>

        <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div>
  </div><!-- #primary -->
<?php get_footer(); ?>

