<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shweiki_Design
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>
<h1>sidebar.php</h1>
<div id="secondary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
