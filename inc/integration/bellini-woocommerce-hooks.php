<?php
global $bellini;

/*--------------------------------------------------------------
## General
--------------------------------------------------------------*/

	remove_action( 'woocommerce_before_main_content', 		'woocommerce_output_content_wrapper',     	10 );
	remove_action( 'woocommerce_before_main_content', 		'woocommerce_breadcrumb',     				20 );
	remove_action( 'woocommerce_after_main_content',  		'woocommerce_output_content_wrapper_end', 	10 );
	remove_action( 'woocommerce_sidebar',  					'woocommerce_get_sidebar', 					10 );

	add_action( 'woocommerce_before_main_content',    		'bellini_before_content',              		10 );
	add_action( 'woocommerce_before_main_content',    		'bellini_breadcrumb_integration',           20 );
	add_action( 'woocommerce_after_main_content',     		'bellini_after_content',               		10 );


/*--------------------------------------------------------------
## Shop / Archive Pages
--------------------------------------------------------------*/

/*
woocommerce_before_main_content
	woocommerce_output_content_wrapper - 10
	woocommerce_breadcrumb - 20

woocommerce_archive_description
	woocommerce_taxonomy_archive_description - 10
	woocommerce_product_archive_description - 10

woocommerce_before_shop_loop
	woocommerce_result_count - 20
	woocommerce_catalog_ordering - 30

woocommerce_after_shop_loop
	woocommerce_pagination - 10

woocommerce_after_main_content
	woocommerce_output_content_wrapper_end - 10

woocommerce_sidebar
	woocommerce_get_sidebar - 10
*/

	add_action( 'woocommerce_before_shop_loop',     		'bellini_before_shop_products',        		6 );
	add_action( 'woocommerce_before_shop_loop',    			'bellini_woocommerce_before_shop_filter',       8 );
	add_action( 'woocommerce_before_shop_loop',    			'bellini_woo_close_div',       	38 );

	add_action( 'woocommerce_after_shop_loop',    			'bootstrap_grid_col_12',       	8 );
	add_action( 'woocommerce_after_shop_loop',    			'bellini_woo_close_div',       	12 );
	add_action( 'woocommerce_after_shop_loop',    			'bellini_woo_close_div',   					14 );
	add_action( 'woocommerce_after_shop_loop',    			'bellini_woocommerce_shop_sidebar',   		16 );

/*--------------------------------------------------------------
## Shop / Archive Pages - Pagination
--------------------------------------------------------------*/

if ( absint($bellini['bellini_woo_shop_product_pagination_layout']) === 1 ):

	remove_action( 'woocommerce_before_shop_loop',    	'woocommerce_result_count',     20 );
	remove_action( 'woocommerce_before_shop_loop',    	'woocommerce_catalog_ordering', 30 );
	remove_action( 'woocommerce_after_shop_loop',    	'woocommerce_pagination',       10 );

	add_action( 'woocommerce_before_shop_loop',    		'bootstrap_grid_col_4',       	12 );
	add_action( 'woocommerce_before_shop_loop',    		'woocommerce_catalog_ordering', 14 );
	add_action( 'woocommerce_before_shop_loop',    		'bellini_woo_close_div',       	22 );
	add_action( 'woocommerce_before_shop_loop',    		'bootstrap_grid_col_4',       	28 );
	add_action( 'woocommerce_before_shop_loop',    		'woocommerce_result_count',     29 );
	add_action( 'woocommerce_before_shop_loop',    		'bellini_woo_close_div',       	32 );
	add_action( 'woocommerce_before_shop_loop',    		'bootstrap_grid_col_4',       	34 );
	add_action( 'woocommerce_before_shop_loop',    		'bellini_woo_pagination',       35 );
	add_action( 'woocommerce_before_shop_loop',    		'bellini_woo_close_div',       	36 );

endif;

if ( absint($bellini['bellini_woo_shop_product_pagination_layout']) === 2 ):

	add_action( 'woocommerce_before_shop_loop',    			'bootstrap_grid_col_6',     12 );
	add_action( 'woocommerce_before_shop_loop',    			'bellini_woo_close_div',    22 );
	add_action( 'woocommerce_before_shop_loop',    			'bootstrap_grid_col_6',     28 );
	add_action( 'woocommerce_before_shop_loop',    			'bellini_woo_close_div',    32 );
endif;



/*--------------------------------------------------------------
## Product Items (content-product.php)
--------------------------------------------------------------*/

/**
woocommerce_before_shop_loop_item
	woocommerce_template_loop_product_link_open - 10

woocommerce_before_shop_loop_item_title
	woocommerce_show_product_loop_sale_flash - 10
	woocommerce_template_loop_product_thumbnail - 10

woocommerce_shop_loop_item_title
	woocommerce_template_loop_product_title - 10

woocommerce_after_shop_loop_item_title
	woocommerce_template_loop_rating - 5
	woocommerce_template_loop_price - 10

woocommerce_after_shop_loop_item
	woocommerce_template_loop_product_link_close - 5
	woocommerce_template_loop_add_to_cart - 10

*/

/* Layout 1 */

	remove_action( 'woocommerce_after_shop_loop_item', 			'woocommerce_template_loop_add_to_cart',        	10 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 	'woocommerce_template_loop_price',              	10 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 	'woocommerce_template_loop_rating',        			5 );
	add_action( 'woocommerce_before_shop_loop_item', 			'bellini_before_woo_product_archive_item_one', 		1 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'bellini_woo_product_info_archive_item', 			12 );
	add_action( 'woocommerce_before_shop_loop_item_title', 		'bellini_woo_product_info_title_archive_item', 		15 );
	add_action( 'woocommerce_after_shop_loop_item_title', 		'bellini_woocommerce_template_loop_price', 			10 );


if ( absint($bellini['bellini_woo_single_product_layout']) === 1 ):
/* Layout 1 */
	add_action( 'woocommerce_before_single_product_summary', 'bellini_single_product_one_left', 	5 );
	add_action( 'woocommerce_before_single_product_summary', 'bellini_woo_close_div', 				25 );
	add_action( 'woocommerce_before_single_product_summary', 'bellini_single_product_one_right', 	30 );
	add_action( 'woocommerce_single_product_summary', 'bellini_woo_close_div', 						60 );
	add_action( 'woocommerce_after_single_product_summary', 'bellini_column_twelve', 				5 );
	add_action( 'woocommerce_after_single_product_summary', 'bellini_woo_close_div', 				25 );

endif;


/*--------------------------------------------------------------
## Product Category Layout
--------------------------------------------------------------*/

if ( absint($bellini['woo_product_category_layout']) === 1 ):
/* Category Layout 1 */
	add_action( 'woocommerce_before_subcategory', 'bellini_woo_product_category_layout_one_inner_open', 5 );
	add_action( 'woocommerce_after_subcategory', 'bellini_woo_product_category_layout_one_inner_close', 12 );
endif;

/*--------------------------------------------------------------
## Checkout Page
--------------------------------------------------------------*/

add_action( 'woocommerce_checkout_order_review', 'bellini_woo_order_heading', 5 );

/*--------------------------------------------------------------
## Cart Page
--------------------------------------------------------------*/

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display' );


/*--------------------------------------------------------------
## Extension: WooCommerce Dynamic Gallery
--------------------------------------------------------------*/

if ( class_exists( 'WC_Gallery_Display_Class' ) ) :

	if ( absint($bellini['bellini_woo_single_product_layout']) === 1 ):
		remove_action( 'woocommerce_before_single_product_summary', 'wc_dynamic_gallery_show', 30);
		add_action( 'woocommerce_before_single_product_summary', 'wc_dynamic_gallery_show', 20);
	endif;

endif;



add_filter( 'woocommerce_catalog_orderby', 'bellini_woocommerce_catalog_orderby_labels', 20 );
add_action( 'woocommerce_before_shop_loop', 'bellini_premmerce_active_filters_widget', 40 );