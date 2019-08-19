<?php
global $bellini;
get_header();

// Get author data
$author         = get_the_author();
$description    = get_the_author_meta( 'description' );
$url            = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );

?>

<main id="main" class="site-main" role="main">
    <div class="bellini__canvas">
    <div class="row">


        <div id="primary" class="content-area single-page__content col-md-12">
            <section class="author-bio-page">
                <div class="row">
                    <div class="col-md-3"><?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'bellini_author_bio_avatar_size', 300 ) ); ?></div>
                    <div class="col-md-9">
                        <h1 class="author-bio-title"><?php echo esc_html( strip_tags( $author ) ); ?></h1>
                        <?php
                            if ( $description ) : ?>
                            <p class="author-bio-description">
                                <?php echo wp_kses_post( $description ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <div class="author-bio-page--posts">
                <h3>Posts by <?php echo get_the_author(); ?>:</h3>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                        if ( absint($bellini['bellini_layout_blog']) === 1 ){
                            get_template_part( 'template-parts/content' );
                        }else{
                            get_template_part( 'template-parts/content-lb-5');
                        }

                    endwhile; ?>
            </div>
        </div>
<?php endif; ?>

</div>
</div>
</main>
<?php
get_footer();