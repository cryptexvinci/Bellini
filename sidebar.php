<?php
/**
* The sidebar containing the main widget area.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package bellini
*/
if ( ! bellini_sidebar_active_right() ) { return;} ?>

<aside id="secondary" class="widget-area widget-area--right col-md-3 <?php bellini_sidebar_widget_class(); ?>" role="complementary" aria-label="Right Sidebar">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside><!-- #secondary -->