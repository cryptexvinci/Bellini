<?php
/**
 *
 * Template name: Page Builder
 *
 * @package bellini
 */
get_header(); ?>

	<main role="main">
		<?php
			bellini_get_sidebar_before_content();

				while ( have_posts() ) : the_post(); ?>

					<div id="page-<?php the_ID(); ?>" class="page-builder__container">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
			<?php
				endwhile;

				bellini_get_sidebar_after_content();
			?>
	</main>
<?php
get_footer();