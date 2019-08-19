<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
global $bellini;
get_header(); ?>
<main id="primary" role="main" class="content-area">
<div id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>
			<header class="page-header col-md-12">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
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
<?php get_footer(); ?>