<?php
/**
 *
 * Template name: Blog Posts
 *
 * @package bellini
 */
get_header(); ?>

<main id="primary" role="main" class="content-area">
<div id="main" class="site-main">
<?php
		//Fix homepage pagination
		if ( get_query_var('paged') ) {
		    $paged = get_query_var('paged');
		} else if ( get_query_var('page') ) {
		    $paged = get_query_var('page');
		} else {
		    $paged = 1;
		}
		$args = array(
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => $paged,
		);

		if(has_filter('bellini_template_blog_args')) {
			$args = apply_filters('bellini_template_blog_args', $args);
		}

		$wp_query = null;
		$wp_query = new WP_Query();
		$wp_query->query( $args );


		if ( have_posts() ) : ?>
				<header class="col-md-12 page__header entry-header">
				<?php
					the_title( '<h1 class="entry-title element-title single-page__title">', '</h1>' );
				 	bellini_breadcrumb_integration();
				 ?>
				</header>
			<div class="bellini__canvas">
			<div class="row">

				<div class="template__blog <?php bellini_blog_sidebar();?>">
				<div class="row">
				<?php
				/* Start the Loop */
						get_template_part( 'loop' );
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					wp_reset_postdata();
				?>
				</div>
				</div>
				<?php get_sidebar('blog');?>
			</div>
			</div>
	</div><!-- #primary -->
</main><!-- #main -->
<?php
get_footer();