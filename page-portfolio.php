<?php
/**
 * Template Name: Portfolio Page
 */

get_header(); ?>

<!-- MAIN CONTENT
================================================== -->
<div class="page page-portfolio">
  <div class="container">
    <main id="content" class="row">

      <?php

        while ( have_posts() ) : the_post();
          the_content();
        endwhile;

        $loop = new WP_Query( array(
          'post_type' => 'portfolio',
          'orderby' => 'post_id',
          'order' => 'ASC'
        ));

        while( $loop->have_posts() ) : $loop->the_post();
          get_template_part( 'template-parts/content', 'portfolio' );
        endwhile; wp_reset_query();

      ?>

    </main><!-- #content -->
  </div><!-- container -->
</div><!-- .portfolio-page -->
<?php get_footer(); ?>
