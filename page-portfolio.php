<?php
/**
 * Template Name: Portfolio Page
 */

get_header(); ?>
<h1>page-portfolio.php</h1>
<!-- MAIN CONTENT
================================================== -->
<div class="container">
  <div class="row" id="primary">

    <div id="content" class="col-sm-12">

      <section class="main-content">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>

        <hr>

        <div class="row clearfix">

          <?php

            $loop = new WP_Query( array(
              'post_type' => 'portfolio',
              'orderby' => 'post_id',
              'order' => 'ASC'
            ));

          ?>

          <?php

            while( $loop->have_posts() ) : $loop->the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'portfolio' );

          ?>

          <?php endwhile; wp_reset_query(); ?>

        </div>
      </section>

    </div><!-- content -->

  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>
