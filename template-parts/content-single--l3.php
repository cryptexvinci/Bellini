<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellini
 */
global $bellini;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="container--card-content clearfix">
<header class="entry-header single-post__header--l3">
	<?php
		if($bellini['bellini_show_post_meta'] == true):
			bellini_category();
		endif;
	?>
	<div class="post__header__inner">
	<?php the_title( '<h1 class="entry-title element-title element-title--post single-post__title--l3">', '</h1>' ); ?>

	<?php if($bellini['bellini_show_post_meta'] == true):
		bellini_post_author();
		bellini_published_on();
	endif; ?>

	</div>
    <!-- Featured Image -->
	<?php bellini_single_post_thumbnail();?>

</header>
<?php
	if ( has_excerpt( $post->ID ) ):?>
		<div class="single-post__excerpt--l3 text-center">
			<?php echo get_the_excerpt();?>
		</div>
<?php endif;?>
<div class="entry-content single-post__body--l3">
	<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bellini' ),
				'after'  => '</div>',
			) );
		?>
</div><!-- .entry-content -->

<?php
if($bellini['bellini_show_post_meta'] == true): ?>
	<footer class="single-post__footer--l3">
		<?php bellini_post_tag(); ?>
	</footer><!-- .entry-footer -->
<?php endif
;?>

	<?php the_post_navigation();?>
	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>
</div>
</article><!-- #post-## -->