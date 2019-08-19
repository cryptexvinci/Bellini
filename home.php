<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
global $bellini;
get_header();
do_action('bellini_before_main_content'); ?>

<main id="primary" class="content-area" role="main">
<div id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php the_title(); ?></h1>
				</header>
			<?php
			endif;?>

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
	</div>
</main>
<?php
do_action('bellini_after_main_content');
get_footer(); ?>