<?php

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

add_action( 'widgets_init', 'bellini_widgets_init' );

if ( ! function_exists( 'bellini_widgets_init' ) ) {
	function bellini_widgets_init() {

		register_sidebar( array(
			'name'          => esc_html__( 'Right Sidebar', 'bellini' ),
			'id'            => 'sidebar-right',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="element-title widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Left Sidebar', 'bellini' ),
			'id'            => 'sidebar-left',
			'description'   => esc_html__( 'These widgets will be only visible in Blog Page Template, Archive pages','bellini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="element-title widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Blog Sidebar Right', 'bellini' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'These widgets will be only visible in Blog Page Template, Archive pages','bellini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="element-title widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widgets', 'bellini' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'You can change the Footer Widget Column count from Customize - Layout - Layout Footer','bellini' ),
			'before_widget' => apply_filters('bellini_widget_footer_column','<section id="%1$s" class="widget__footer col-md-3 %2$s">'),
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="element-title widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'WooCommerce Widgets', 'bellini' ),
			'id'            => 'sidebar-woo-sidebar',
			'description'   => esc_html__( 'These widgets will be only visible in WooCommerce Pages','bellini' ),
			'before_widget' => '<section id="%1$s" class="widget__after__content col-md-12 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="element-title widget-title">',
			'after_title'   => '</h2>',
		) );

	}
}