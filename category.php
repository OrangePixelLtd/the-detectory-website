<?php
/**
 * Category Archive — The Detectory
 *
 * @package App_Landing
 */

get_header();

$category             = get_queried_object();
$category_description = category_description();
?>

<main id="primary" class="site-main">
    <section class="section section-blog">
        <div class="container">
            <div class="text-center blog-header" data-animate="fade-in">
                <span class="section-label"><?php esc_html_e( 'Category', 'app-landing' ); ?></span>
                <h1 class="section-title"><?php echo esc_html( $category->name ); ?></h1>
                <?php if ( $category_description ) : ?>
                    <div class="section-subtitle"><?php echo wp_kses_post( $category_description ); ?></div>
                <?php else : ?>
                    <p class="section-subtitle">
                        <?php
                        printf(
                            /* translators: %s: category name */
                            esc_html__( 'Posts filed under %s.', 'app-landing' ),
                            esc_html( $category->name )
                        );
                        ?>
                    </p>
                <?php endif; ?>
            </div>

            <?php get_template_part( 'template-parts/blog-archive' ); ?>
        </div>
    </section>
</main>

<?php
get_footer();
