<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bellini
 */
get_header();?>
<div class="bellini__canvas">
<div class="row">
<?php get_sidebar('left');?>
	<div id="primary" class="content-area single-post__content <?php bellini_sidebar_content_class(); ?>">
		<main id="main" class="site-main row" role="main" itemscope itemprop="mainEntityOfPage">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( 'jetpack-testimonial' === get_post_type() ){
				get_template_part( 'template-parts/content', 'testimonial' );
			}else{
				if ( absint($bellini['bellini_layout_single-post']) === 3 ):
					get_template_part( 'template-parts/content', 'single--l3' );
				endif;
			}

			?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>