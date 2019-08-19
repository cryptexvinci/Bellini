<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bellini
 */
get_header(); ?>
<div class="bellini__canvas">
<div class="row">
	<main id="primary" role="main" class="content-area col-md-9">
		<section id="main" class="site-main">
		<div class="row bellini__canvas">

		<?php if ( have_posts() ) : ?>

			<header class="page-header col-md-12">
				<!-- Title for search results containing search term -->
				<h1 class="page-title">
					<?php
					/**
					 * Structure assumes we're using a search.php template
					 *
					 * @link https://codex.wordpress.org/Creating_a_Search_Page
					 */
					printf( esc_html__( 'Search Results for: %s', 'bellini' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<ol>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>
			<?php endwhile; ?>
			</ol>

			<?php
				bellini_pagination();

		 else :
			 get_template_part( 'template-parts/content', 'none' );

		 endif;
		 ?>
		</div>
		</section><!-- #main -->
	</main><!-- #primary -->
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>