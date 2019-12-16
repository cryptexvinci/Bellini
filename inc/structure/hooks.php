<?php
/**
 * bellini hooks
 *
 * @package bellini
 */
global $bellini;
/**
 * Homepage
 * @see  bellini_static_slider
 * @see  bellini_woo_product_category
 * @see  bellini_woo_product_newly_arrived
 * @see  bellini_woo_product_featured
 * @see  bellini_front_blog_posts
 */
add_action( 'bellini_header', 'bellini_core_header',		   		10 );

add_action( 'homepage', 'bellini_static_slider',		   			10 );
add_action( 'homepage', 'bellini_feature_blocks',		   			20 );
add_action( 'homepage', 'bellini_woo_product_category',				30 );
add_action( 'homepage', 'bellini_woo_product_newly_arrived',		40 );
add_action( 'homepage', 'bellini_woo_product_featured',				50 );
add_action( 'homepage', 'bellini_front_blog_posts',		    		60 );
add_action( 'homepage', 'bellini_frontpage_text_field_shortcode',	70 );
add_action( 'homepage', 'bellini_front_default_page_content',		110 );


if( $bellini['bellini_show_frontpage_slider_pages'] == true ) :
	add_action( 'bellini_before_page_content', 'bellini_static_slider',		   			10 );
endif;

add_action( 'wp_footer', 'bellini_scroll_to_top' );
add_action( 'wp_footer', 'bellini_structured_data' );


// Pagination

add_action('bellini_loop_after', 'bellini_pagination');

add_action( 'customize_controls_enqueue_scripts', 'bellini_upsell_notice' );
add_filter( 'excerpt_length', 'bellini_excerpt_length', 999 );