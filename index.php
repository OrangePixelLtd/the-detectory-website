<?php
/**
 * Main template fallback
 *
 * @package App_Landing
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 4rem;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 style="margin-bottom: 2rem;"><?php the_title(); ?></h1>
                    <p class="last-updated"><?php
                        /* translators: %s: date the page was last modified */
                        printf( esc_html__( 'Last updated: %s', 'app-landing' ), get_the_modified_date() );
                    ?></p>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p><?php esc_html_e( 'No content found.', 'app-landing' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
