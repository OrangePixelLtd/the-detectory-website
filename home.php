<?php
/**
 * Blog Index — The Detectory
 *
 * Renders the page assigned to Settings → Reading → Posts page.
 *
 * @package App_Landing
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section section-blog">
        <div class="container">
            <div class="text-center blog-header" data-animate="fade-in">
                <span class="section-label"><?php esc_html_e( 'Blog', 'app-landing' ); ?></span>
                <h1 class="section-title"><?php esc_html_e( 'Stories from The Detectory', 'app-landing' ); ?></h1>
                <p class="section-subtitle"><?php esc_html_e( 'Updates, tips and finds from the field.', 'app-landing' ); ?></p>
            </div>

            <?php get_template_part( 'template-parts/blog-archive' ); ?>
        </div>
    </section>
</main>

<?php
get_footer();
