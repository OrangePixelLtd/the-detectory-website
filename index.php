<?php
/**
 * Main template fallback
 *
 * @package App_Landing
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 8rem;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
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
