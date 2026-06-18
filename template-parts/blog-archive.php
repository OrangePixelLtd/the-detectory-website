<?php
/**
 * Blog Archive — shared layout: category filter pills, post grid, pagination.
 *
 * Used by home.php (blog index) and category.php (category archive).
 *
 * @package App_Landing
 */

$categories      = get_categories( array( 'hide_empty' => true ) );
$current_cat_id  = is_category() ? (int) get_queried_object_id() : 0;
?>

<?php if ( ! empty( $categories ) ) : ?>
    <div class="blog-filters" data-animate="fade-in">
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"
           class="filter-pill <?php echo is_home() ? 'is-active' : ''; ?>">
            <?php esc_html_e( 'All', 'app-landing' ); ?>
        </a>
        <?php foreach ( $categories as $category ) : ?>
            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"
               class="filter-pill <?php echo ( $current_cat_id === (int) $category->term_id ) ? 'is-active' : ''; ?>">
                <?php echo esc_html( $category->name ); ?>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
    <div class="blog-grid grid grid-3">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'blog-card' );
        endwhile;
        ?>
    </div>

    <nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Blog pagination', 'app-landing' ); ?>">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 1,
            'prev_text' => __( '&laquo; Previous', 'app-landing' ),
            'next_text' => __( 'Next &raquo;', 'app-landing' ),
        ) );
        ?>
    </nav>
<?php else : ?>
    <p class="blog-empty"><?php esc_html_e( 'No posts found.', 'app-landing' ); ?></p>
<?php endif; ?>
