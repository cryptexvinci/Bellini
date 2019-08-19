<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
global $bellini;
get_header();
do_action('bellini_before_main_content');?>

<main id="primary" class="content-area" role="main">
<div id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>

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
do_action('bellini_after_main_content');
get_footer();