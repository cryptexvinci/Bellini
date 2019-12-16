<?php
/*--------------------------------------------------------------
## 1.0 Panels
--------------------------------------------------------------*/

// Frontpage Panel
$wp_customize->add_panel( 'bellini_frontpage_panel', array(
	'priority'       => 2,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Frontpage','bellini' ),
	'description'    => esc_html__( 'Your frontpage elements','bellini' ),
) );

// Color Panel
$wp_customize->add_panel( 'bellini_colors_panel', array(
	'priority'       => 3,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'General Styles','bellini' ),
	'description'    => esc_html__( 'Customize your sites color and font','bellini' ),
) );

	// Header Panel
	$wp_customize->add_panel( 'bellini_header_panel', array(
		'priority'       => 4,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Header','bellini' ),
		'description'    => esc_html__( 'Customize your sites Header Colors & Layout','bellini' ),
	) );

// Layout & Positioning Panel
$wp_customize->add_panel( 'bellini_placeholder_layout_panel', array(
	'priority'       => 4,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Blog Customizer','bellini' ),
	'description'    => esc_html__( 'Change layout or shape and postion of components.','bellini' ),
) );


// Show / Hide
$wp_customize->add_panel( 'bellini_show_hide_components', array(
	'priority'       => 5,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Show / Hide','bellini' ),
	'description'    => esc_html__('Check 3rd Party Software & App Settings','bellini' ),
) );

// Default Image & Text Panel
$wp_customize->add_panel( 'bellini_misc_panel', array(
	'priority'       => 6,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Other Options','bellini' ),
	'description'    => esc_html__( 'Set default content link text, image or social icons','bellini' ),
) );

	// 3rd party Integrations
	$wp_customize->add_panel( 'woocommerce', array(
		'priority'       => 7,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'WooCommerce','bellini' ),
		'description'    => esc_html__('Check 3rd Party Software & App Settings','bellini' ),
	) );

	// Footer Panel
	$wp_customize->add_panel( 'bellini_footer_panel', array(
		'priority'       => 8,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Footer','bellini' ),
		'description'    => esc_html__( 'Customize your sites Footer Section Colors & Layout','bellini' ),
	) );

/*--------------------------------------------------------------
## 2.0 Section
--------------------------------------------------------------*/

// Go Premium
$wp_customize->add_section('bellini_lite_go_premium_section_one',array(
	'title' => esc_html__( 'Go Premium', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 500,
	)
);

/*--------------------------------------------------------------
## General Style Section
--------------------------------------------------------------*/

	// General
	$wp_customize->add_section('bellini_general_layout',array(
		'title' => esc_html__( 'Container Width', 'bellini' ),
		'capability' => 'edit_theme_options',
		'priority' => 1,
		'panel' => 'bellini_colors_panel'
		)
	);

// Background Color
$wp_customize->add_section('section_color',array(
	'title' => esc_html__( 'Site Background Color', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 2,
	'panel' => 'bellini_colors_panel'
	)
);

// Text Color
$wp_customize->add_section('text_color',array(
	'title' => esc_html__( 'Site Text Color', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 2,
	'panel' => 'bellini_colors_panel'
	)
);


// Button Color
$wp_customize->add_section('bellini_link_color_section',array(
	'title' => esc_html__( 'Buttons & Links Color', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 4,
	'panel' => 'bellini_colors_panel'
	)
);

/*--------------------------------------------------------------
## Sections
--------------------------------------------------------------*/

// Social Accounts
$wp_customize->add_section('bellini_social_accounts',array(
	'title' => esc_html__( 'Social Accounts', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 1,
	'panel' => 'bellini_misc_panel'
	)
);

// Show -Hide Elements
$wp_customize->add_section('bellini_show_hide_components',array(
	'title' => esc_html__( 'Show / Hide', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 2,
	'panel' => 'bellini_misc_panel'
	)
);

// Custom CSS
$wp_customize->add_section('bellini_custom_css_section',array(
	'title' => esc_html__( 'Custom Code', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 3,
	'panel' => 'bellini_misc_panel'
	)
);


/*--------------------------------------------------------------
## Customizer Section: Frontpage
--------------------------------------------------------------*/

	// Front Page Section Category
	$wp_customize->add_section('bellini_frontpage_section_slider',array(
			'title' 			=> esc_html__( 'Slider', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 1,
			'panel' 			=> 'bellini_frontpage_panel',
		)
	);

	// Front Page Feature Blocks
	$wp_customize->add_section('bellini_frontpage_section_blocks',array(
			'title' 			=> esc_html__( 'Blocks', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 2,
			'panel' 			=> 'bellini_frontpage_panel',
		)
	);

	// Front Page Section Category
	$wp_customize->add_section('bellini_frontpage_section_category',array(
			'title' 			=> esc_html__( 'Product Categories', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 2,
			'panel' 			=> 'bellini_frontpage_panel',
			'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
			'description' 		=> esc_html__('Display WooCommerce Product Categories','bellini'),
		)
	);

	// Front Page WooCommerce Products
	$wp_customize->add_section('bellini_frontpage_section_product',array(
			'title' 			=> esc_html__( 'Product Listings', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 3,
			'panel' 			=> 'bellini_frontpage_panel',
			'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
		)
	);

	// Front Page Section Featured Product
	$wp_customize->add_section('bellini_frontpage_section_featured',array(
			'title' 			=> esc_html__( 'Featured Products', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 4,
			'panel' 			=> 'bellini_frontpage_panel',
			'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
		)
	);


	// Homepage Blog Posts
	$wp_customize->add_section('bellini_frontpage_section_blog',array(
			'title' 			=> esc_html__( 'Blog Posts', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 5,
			'panel' 			=> 'bellini_frontpage_panel',
		)
	);

	// Text Field
	$wp_customize->add_section('bellini_frontpage_section_text_field',array(
			'title' 			=> esc_html__( 'Text Field', 'bellini' ),
			'capability' 		=> 'edit_theme_options',
			'priority' 			=> 6,
			'panel' 			=> 'bellini_frontpage_panel',
		)
	);


	if ( function_exists( 'Homepage_Control')){
		// Homepage Control
		$wp_customize->get_section('homepage_control')->panel 		= 'bellini_frontpage_panel';
		$wp_customize->get_section('homepage_control')->priority 	= 20;
	}else{
		// Reorder Frontpage Section
		$wp_customize->add_section('bellini_frontpage_section_reorder',array(
				'title' 			=> esc_html__( 'Re-order Frontpage Section', 'bellini' ),
				'capability' 		=> 'edit_theme_options',
				'priority' 			=> 20,
				'panel' 			=> 'bellini_frontpage_panel',
			)
		);
	}

// Typography
$wp_customize->add_section('bellini_typography',
	array(
		'title' => esc_html__( 'Typography', 'bellini' ),
		'capability' => 'edit_theme_options',
		'priority' => 10,
		'panel' => 'bellini_colors_panel'
	)
);

/*--------------------------------------------------------------
## Blog Customizer
--------------------------------------------------------------*/

	// Post Archive Layouts
	$wp_customize->add_section('bellini_post_layout_settings',array(
			'title' => esc_html__( 'Post Archive Layouts', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 1,
			'panel' => 'bellini_placeholder_layout_panel'
		)
	);

	// Single Post Layouts
	$wp_customize->add_section('bellini_single_post_layout_settings',array(
			'title' => esc_html__( 'Single Post Layout', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 2,
			'panel' => 'bellini_placeholder_layout_panel'
		)
	);

	// Page Layout
	$wp_customize->add_section('bellini_page_layout_settings',array(
			'title' => esc_html__( 'Page Layouts', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 3,
			'panel' => 'bellini_placeholder_layout_panel'
		)
	);

/*--------------------------------------------------------------
## 4.0 Header Sections
--------------------------------------------------------------*/

	// Header Layout Section
	$wp_customize->add_section('bellini_header_section_layout',array(
		'title' => esc_html__( 'Header Layouts', 'bellini' ),
		'capability' => 'edit_theme_options',
		'priority' => 1,
		'panel' => 'bellini_header_panel'
		)
	);

	// Header Havigation  Section Layout
	$wp_customize->add_section('bellini_header_navigation_section',array(
		'title' => esc_html__( 'Header Havigation Layout', 'bellini' ),
		'capability' => 'edit_theme_options',
		'priority' => 2,
		'panel' => 'bellini_header_panel'
		)
	);

	// Header Havigation  Section Layout
	$wp_customize->add_section('bellini_header_color_section',array(
		'title' => esc_html__( 'Header Colors', 'bellini' ),
		'capability' => 'edit_theme_options',
		'priority' => 3,
		'panel' => 'bellini_header_panel'
		)
	);




	// Page Layout
	$wp_customize->add_section('bellini_page_layout_settings',array(
			'title' => esc_html__( 'Page Layouts', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 5,
			'panel' => 'bellini_placeholder_layout_panel'
		)
	);

/*--------------------------------------------------------------
## 10.0 Footer Sections
--------------------------------------------------------------*/
	// Footer Layout
	$wp_customize->add_section('bellini_layout_settings_footer',array(
			'title' => esc_html__( 'Footer Layouts', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 1,
			'panel' => 'bellini_footer_panel'
		)
	);

	// Footer Layout
	$wp_customize->add_section('bellini_settings_footer_widget',array(
			'title' => esc_html__( 'Footer Widgets', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 2,
			'panel' => 'bellini_footer_panel'
		)
	);

	// Pagination & Breadcrumb
	$wp_customize->add_section('bellini_layout_settings_other',array(
			'title' => esc_html__( 'Pagination & Breadcrumb', 'bellini' ),
			'capability' => 'edit_theme_options',
			'priority' => 7,
			'panel' => 'bellini_misc_panel'
		)
	);

// Widget Area
$wp_customize->add_section('bellini_widget_color_section',array(
	'title' => esc_html__( 'Widget Area', 'bellini' ),
	'capability' => 'edit_theme_options',
	'priority' => 5,
	'panel' => 'bellini_colors_panel'
	)
);


/*--------------------------------------------------------------
## 4.0 WooCommerce Sections
--------------------------------------------------------------*/

	$wp_customize->add_section( 'bellini_woocommerce_integration', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Shop page Layouts','bellini' ),
		'panel'     	 => 'woocommerce',
		'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
	) );

	$wp_customize->add_section( 'bellini_woocommerce_single_layout_section', array(
		'priority'       => 2,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Single Product Pages','bellini' ),
		'panel'     	 => 'woocommerce',
		'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
	) );

	$wp_customize->add_section( 'bellini_woocommerce_category_layout_section', array(
		'priority'       => 3,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Product Category Layout','bellini' ),
		'panel'     	 => 'woocommerce',
		'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
	) );

	$wp_customize->add_section( 'bellini_woocommerce_color_section', array(
		'priority'       => 4,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'Button, Sale Badge & Rating Color','bellini' ),
		'panel'     	 => 'woocommerce',
		'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
	) );

	$wp_customize->add_section( 'bellini_woocommerce_sidebar_layout_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'title'          => esc_html__( 'WooCommerce Sidebars','bellini' ),
		'panel'     	 => 'woocommerce',
		'active_callback' 	=> 'is_plugin_active_woocommerce_bellini',
	) );