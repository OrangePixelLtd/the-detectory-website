<?php
/**
 * Front Page Template — The Detectory
 *
 * @package App_Landing
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part( 'template-parts/section', 'hero' ); ?>
    <?php get_template_part( 'template-parts/section', 'problem' ); ?>
    <?php get_template_part( 'template-parts/section', 'audience' ); ?>
    <?php get_template_part( 'template-parts/section', 'benefits' ); ?>
    <?php get_template_part( 'template-parts/section', 'how-it-works' ); ?>
    <?php get_template_part( 'template-parts/section', 'features' ); ?>
    <?php get_template_part( 'template-parts/section', 'why' ); ?>
    <?php get_template_part( 'template-parts/section', 'cta' ); ?>
</main>

<?php
get_footer();
