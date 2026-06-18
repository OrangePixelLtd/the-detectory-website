<?php
/**
 * Blog Tile — single post card used in the blog archive grid.
 *
 * @package App_Landing
 */
?>
<a class="card blog-card" href="<?php the_permalink(); ?>" data-animate="slide-up">
    <div class="blog-card-image">
        <img src="<?php echo esc_url( app_landing_get_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>"
             alt="<?php echo esc_attr( get_the_title() ); ?>"
             loading="lazy">
    </div>
    <div class="blog-card-body">
        <span class="blog-card-meta"><?php echo esc_html( get_the_date() ); ?></span>
        <h3 class="blog-card-title"><?php the_title(); ?></h3>
        <p class="blog-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '…' ) ); ?></p>
        <span class="blog-card-link"><?php esc_html_e( 'Read more', 'app-landing' ); ?> <span aria-hidden="true">&rarr;</span></span>
    </div>
</a>
