<?php
/**
 * Template part for displaying portfolio content in page-portfolio.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shweiki_Design
 */

$portfolio_image   = get_field('portfolio_item_image');
?>
<div class="resource col-sm-6">
  <a href="<?php echo esc_url( get_permalink() ); ?>">
    <img src="<?php echo $portfolio_image[url]; ?>" alt="<?php echo $portfolio_image[alt]; ?>">
  </a>
  <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
  <p><?php the_excerpt(); ?></p>
</div>
