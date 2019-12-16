<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package bellini
 */



/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */

if ( class_exists( 'Jetpack' ) ) :

	if ( ! function_exists( 'bellini_jetpack_setup' ) ) {
		function bellini_jetpack_setup() {

			if(Jetpack::is_module_active( 'infinite-scroll' )):
				add_theme_support( 'infinite-scroll', array(
					'container' => 'content',
					'render'    => 'bellini_infinite_scroll_render',
					'footer'    => 'page',
				) );
			endif;

			add_theme_support( 'jetpack-responsive-videos' );
			/*
			 * Let JetPack manage the site logo.
			 * By adding theme support, we declare that this theme does use the default
			 * JetPack Site Logo functionality, if the module is activated.
			 *
			 * See: http://jetpack.me/support/site-logo/
			 */
			add_theme_support( 'site-logo', array( 'size' => 'full' ) );
			add_theme_support( 'jetpack-portfolio' );
		}
	}

	add_action( 'after_setup_theme', 'bellini_jetpack_setup' );

	if ( ! function_exists( 'bellini_dequeue_jetpack_devicepx' ) ) {
		function bellini_dequeue_jetpack_devicepx() {
		    wp_dequeue_script( 'devicepx' );
		}
	}

	add_action( 'wp_enqueue_scripts', 'bellini_dequeue_jetpack_devicepx' );

endif;

if ( ! function_exists( 'bellini_infinite_scroll_render' ) ) {
	function bellini_infinite_scroll_render() {
		get_template_part( 'template-parts/content-lb-1');
	}
}