<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package bellini
 */
get_header();?>

	<main role="main">

		<?php

			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked bellini_static_slider                  - 10
			 * @hooked bellini_feature_blocks                 - 20
			 * @hooked bellini_woo_product_category           - 30
			 * @hooked bellini_woo_product_newly_arrived      - 40
			 * @hooked bellini_woo_product_featured           - 50
			 * @hooked bellini_front_blog_posts               - 60
			 * @hooked bellini_frontpage_text_field_shortcode - 70
			 */

			do_action( 'homepage' );

		?>
	</main>
<?php
get_footer();