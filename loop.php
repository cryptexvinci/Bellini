<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 * @package bellini
 */
global $bellini;

do_action( 'bellini_loop_before' );

while ( have_posts() ) : the_post();

	/**
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
		if ( absint($bellini['bellini_layout_blog']) === 1 ){
			get_template_part( 'template-parts/content' );
		}else{
			get_template_part( 'template-parts/content-lb-5');
		}

endwhile;

do_action( 'bellini_loop_after' );