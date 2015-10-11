<?php
/**
 * Template Name: Portfolio Page
 */

get_header(); ?>

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

            $portfolio_image   = get_field('portfolio_item_image');
            // $resource_url     = get_field('resource_url');
            // $add_button       = get_field('add_button');
            // $button_text      = get_field('button_text');

          ?>
            <div class="resource col-sm-6">
              <img src="<?php echo $portfolio_image[url]; ?>" alt="<?php echo $portfolio_image[alt]; ?>">
              <?php the_post_thumbnail(); ?>
              <h3><a href="<?php echo $portfolio_url; ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </div>

          <?php endwhile; wp_reset_query(); ?>

        </div>
      </section>

    </div><!-- content -->

  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>
