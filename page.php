<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
get_header();?>

<div id="main" class="site-main">
<?php do_action( 'bellini_before_page_content' );?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- Page header -->
<header class="col-md-12 page__header entry-header">
	<div class="single page-meta">
		<?php
			edit_post_link(
						sprintf(
							esc_html__( 'Edit %s', 'bellini' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
							'<span class="edit-link">',
							'</span>'
			);

		the_title( '<h1 class="entry-title element-title single-page__title">', '</h1>' );
		bellini_breadcrumb_integration(); ?>
	</div>
</header>

<div class="col-md-12">
<div class="bellini__canvas">
<div class="row">
	<?php get_sidebar('left'); ?>

	<main id="primary" role="main" class="content-area single-page__content <?php bellini_sidebar_content_class(); ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container--card-content">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bellini' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
		</div>

	<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>
	</main>

	<?php get_sidebar();?>
	<?php endwhile; // End of the loop. ?>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>