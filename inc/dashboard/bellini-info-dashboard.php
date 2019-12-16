<?php

/**
 * Redirect to Getting Started page on theme activation
 */


add_action( 'admin_menu', 'bellini_getting_started_menu' );
add_action( 'admin_init', 'bellini_redirect_on_activation' );
add_action( 'admin_enqueue_scripts', 'bellini_start_load_admin_scripts' );

if ( ! function_exists( 'bellini_redirect_on_activation' ) ) {
	function bellini_redirect_on_activation() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
				wp_redirect( admin_url( "themes.php?page=bellini-getting-started" ) );
		}
	}
}

if ( ! function_exists( 'bellini_start_load_admin_scripts' ) ) {
	function bellini_start_load_admin_scripts() {

		// Load styles only on our page
		global $pagenow;
		if( 'themes.php' != $pagenow )
			return;

		wp_register_style( 'bellini-getting-started', get_template_directory_uri() . '/inc/dashboard/bellini-info-dashboard.css', false, '1.5.0' );
		wp_enqueue_style( 'bellini-getting-started' );
	}
}



/* Hook a menu under Appearance */
if ( ! function_exists( 'bellini_getting_started_menu' ) ) {
	function bellini_getting_started_menu() {
		add_theme_page(
			esc_attr__( 'Get Started', 'bellini' ),
			esc_attr__( 'Get Started', 'bellini' ),
			'manage_options',
			'bellini-getting-started',
			'bellini_getting_started'
		);
	}
}


/**
 * Theme Info Page
 */
if ( ! function_exists( 'bellini_getting_started' ) ) {
	function bellini_getting_started() {

		// Theme info
		$theme = wp_get_theme( 'bellini' );
	?>

			<div class="wrap getting-started">
			<div class="getting-started__header">

				<div class="intro">
					<h2 class="theme-names"><?php esc_html_e( 'Welcome to ', 'bellini' ); ?>
						<span class="name-bold"><?php esc_html_e( 'Bellini ', 'bellini' ); ?></span>
					</h2>

					<div class="club-discount">
						<p><strong><?php esc_html_e( 'Exclusive 20% Discount! Only $36', 'bellini' ); ?></strong></p>
						<p><?php
								$themes_link = '<code><strong>BELLINI20</strong></code>';
								printf( __( 'Use the code %s to get 20&#37; off when you purchase Bellini Pro!. Get Bellini Pro for only $36. For limited period only.', 'bellini' ), $themes_link );
							?>
						</p>
					</div>
				</div>


				<div class="cards">
					<h3 class="theme-f-h"><?php esc_html_e( 'Feel like stepping up ? ', 'bellini' ); ?></h3>

					<div class="text-block no-bottom-margin">
						<div class="col-40 dashboard-upgrade-right">
							<span class="dashboard-upgrade-button">Upgrade</span>
							<h2 class="dashboard-upgrade-title">One Click Demo Import</h2>
							<p>Import Pre Built Websites with just one click.</p>
							<div class="dashboard-upgrade-benefit">
							<ul>
								<li>No hassle! Spend less time building website.</li>
								<li>Check out the growing Bellini Demo Templates.</li>
							</ul>

							</div>
						</div>

						<div class="col-60 dashboard-upgrade-left">
							<img src="<?php echo get_template_directory_uri() . '/images/demo-import.jpg'; ?>" alt="<?php esc_html_e( 'Unique Layouts', 'bellini' ); ?>">
						</div>
					</div>

					<div class="text-block no-bottom-margin">
						<div class="col-40 dashboard-upgrade-right">
							<span class="dashboard-upgrade-button">Upgrade</span>
							<h2 class="dashboard-upgrade-title">Deep WooCommerce Integration</h2>
							<p>Developed following WooCommerce guideline.</p>
							<div class="dashboard-upgrade-benefit">
							<ul>
								<li>100% compatible with WooCommerce</li>
								<li>Lots of layout for Shop and Product pages.</li>
								<li>Optimized for higher conversion.</li>
							</ul>

							</div>
						</div>

						<div class="col-60 dashboard-upgrade-left">
							<img src="<?php echo get_template_directory_uri() . '/images/woocommerce.jpg'; ?>" alt="<?php esc_html_e( 'SEO', 'bellini' ); ?>">
						</div>
					</div>


					<div class="text-block no-bottom-margin">
						<div class="col-40 dashboard-upgrade-right">
							<span class="dashboard-upgrade-button">Upgrade</span>
							<h2 class="dashboard-upgrade-title">Commited, One to One Support</h2>
							<p>Expert advice is only an email away.</p>
							<div class="dashboard-upgrade-benefit">
							<ul>
								<li>Dedicated support team for Pro users.</li>
								<li>One to one email support.</li>
							</ul>

							</div>
						</div>

						<div class="col-60 dashboard-upgrade-left">
							<img src="<?php echo get_template_directory_uri() . '/images/email-support.jpg'; ?>" alt="<?php esc_html_e( 'WooCommerce Compatibility', 'bellini' ); ?>">
						</div>
					</div>
				</div>


				<div class="cards bellini__upgrade-info-box no-top-margin">
				<div class="dashboard-cta flexify--center">

					<div class="col-60 dashboard-cta-left">
						<h2>Get the most out of Bellini</h2>
						<p>Live customization is the beginning of what Bellini can do to help you design your website. Upgrade now.</p>
					</div>

					<div class="col-40 dashboard-cta-right">
						<a class="theme__cta--download--pro" href="<?php echo esc_url('https://atlantisthemes.com/bellini-woocommerce-theme/'); ?>">Upgrade Now</a>
					</div>
				</div>
				</div>


			<div class="cards dashboard__blocks">

				<div class="col-50">
					<h3>Getting Started</h3>
					<ol>
						<li>Start <a href="<?php echo esc_url( admin_url('customize.php') ); ?>">Customizing</a> your website.</li>
						<li>Install <a href="<?php echo esc_url('https://wordpress.org/plugins/homepage-control/'); ?>">Homepage Control</a> to re-order Frontpage sections.</li>
						<li>Upgrade to Pro to unlock all features.</li>
					</ol>
				</div>

				<div class="col-50">
					<h3>Get Support</h3>
					<ol>
						<li>WordPress.org <a href="<?php echo esc_url('https://wordpress.org/support/theme/bellini'); ?>">Support Forum</a></li>
						<li><a href="<?php echo esc_url('https://atlantisthemes.com/contact/'); ?>">Email Support</a> (Pro Users)</li>
					</ol>
				</div>

				<div class="col-50">
					<h3>Help Docs</h3>
					<ol>
						<li><a href="<?php echo esc_url('https://atlantisthemes.com/docs/front-page/how-to-set-up-the-front-page/'); ?>">How To Set up the Front Page</a>.</li>
						<li><a href="<?php echo esc_url('https://atlantisthemes.com/docs/front-page/blocks-front-page/how-to-display-blocks-on-front-page/'); ?>">How To Display Blocks on Front page</a>.</li>
						<li><a href="<?php echo esc_url('https://atlantisthemes.com/docs/integrations/woocommerce/how-to-display-sidebar-in-woocommerce-shop-page/'); ?>">How To Display Sidebar in WooCommerce Shop Page</a>.</li>
					</ol>
				</div>
			</div>


			</div>
			</div>

		<?php
	}
}