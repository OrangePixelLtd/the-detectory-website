<?php
/**
 * App-mode template — bare content, no header/footer.
 *
 * Loaded automatically when ?app=1 is in the query string.
 *
 * @package App_Landing
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'app-mode' ); ?>>

<main class="container" style="padding-top: 2.5rem; padding-bottom: 2.5rem;">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article class="entry-content">
            <h1 style="margin-bottom: 2rem;"><?php the_title(); ?></h1>
            <p class="last-updated"><?php
                /* translators: %s: date the page was last modified */
                printf( esc_html__( 'Last updated: %s', 'app-landing' ), get_the_modified_date() );
            ?></p>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</main>

<?php wp_footer(); ?>
</body>
</html>
