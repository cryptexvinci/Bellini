<?php
global $bellini;

if ( ! function_exists( 'bellini_structured_data' ) ) :
    function bellini_structured_data(){
        global $post;
        global $bellini;

        $site_name                          = get_bloginfo("name");
        $site_description                   = get_bloginfo("description");
        $site_url                           = home_url();
        $inLanguage                         = get_bloginfo("language");
        $title                              = esc_html($post->post_title);
        $commentCount                       = intval($post->comment_count);
        $articleBody                        = esc_html($post->post_content);
        $url                                = esc_url(get_permalink( $post->ID ));
        $datePublished                      = get_the_time('Y-m-d', $post->ID);
        $dateModified                       = get_post_field('post_modified', $post->ID );
        $description                        = esc_html(get_the_excerpt( $post->ID ));
        $author                             = get_the_author();
        $author_post_url                    = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
        $image_data                         = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbnail" );

        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            $custom_logo_id             = get_theme_mod( 'custom_logo' );
            $organization_logo          = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        }

        ?>



    <?php if ( is_singular('post') ): ?>
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo $url;?>"
          },
          "headline": "<?php echo $title;?>",
          "url":"<?php echo $url;?>",
           "image":{
              "@type":"ImageObject",
              "url":"<?php echo $image_data[0];?>",
              "width": "<?php echo $image_data[1];?>",
              "height":"<?php echo $image_data[2];?>"
           },
          "datePublished": "<?php echo $datePublished;?>",
          "dateModified": "<?php echo $dateModified;?>",
          "inLanguage": "<?php echo $inLanguage;?>",
          "articleBody": "<?php echo $articleBody;?>",
          "commentCount": "<?php echo $commentCount;?>",
          "author": {
            "@type": "Person",
            "name": "<?php echo $author;?>",
            "sameAs": "<?php echo $author_post_url;?>"
          },
          "creator": {
            "@type": "Person",
            "name": "<?php echo $author;?>",
            "sameAs": "<?php echo $author_post_url;?>"
          },
            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ):?>
           "publisher": {
            "@type": "Organization",
            "name": "<?php echo $site_name;?>",
            "logo": {
                  "@type": "ImageObject",
                  "url": "<?php echo $organization_logo[0];?>",
                  "width":"<?php echo $organization_logo[1];?>",
                  "height":"<?php echo $organization_logo[2];?>"
                }
            },
            <?php endif;?>
          "description": "<?php echo $description;?>"
        }
        </script>
    <?php endif;?>


    <?php if ( is_page() ): ?>
        <script type="application/ld+json">
        {
            "@context":"http://schema.org",
            "@type":"WebPage",
            "@id":"<?php echo $url;?>",
            "name":"<?php echo $title;?>",
        }
        </script>
    <?php endif;?>


    <?php

    }
endif;