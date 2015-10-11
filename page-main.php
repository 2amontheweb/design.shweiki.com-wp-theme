<?php
/**
 * Template Name: Main Page
 */

get_header(); ?>

  <!-- MAIN CONTENT
================================================== -->
<div class="container page">
  <div class="row" id="primary">

    <div id="content" class="col-sm-12">

      <section class="main-content">

        <?php while ( have_posts() ) : the_post();  ?>

        <?php the_content(); ?>

        <?php endwhile; ?>

      </section>

    </div><!-- content -->

  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>
