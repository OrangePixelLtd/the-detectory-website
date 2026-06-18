<?php
/**
 * Download CTA Section — The Detectory
 *
 * @package App_Landing
 */

$app_store_url   = get_theme_mod( 'app_landing_app_store_url', app_landing_get_default( 'app_store_url' ) );
$google_play_url = get_theme_mod( 'app_landing_google_play_url', app_landing_get_default( 'google_play_url' ) );
?>

<section class="section section-cta" id="download">
    <div class="cta-bg-image" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/rolling-hills.jpg' ); ?>" alt="">
    </div>
    <div class="cta-bg-glow" aria-hidden="true"></div>

    <div class="container">
        <div class="cta-content" data-animate="fade-in">
            <span class="section-label"><?php esc_html_e( 'Download Now', 'app-landing' ); ?></span>
            <h2 class="cta-title"><?php esc_html_e( 'The app is', 'app-landing' ); ?> <span class="text-gradient"><?php esc_html_e( 'live', 'app-landing' ); ?></span></h2>
            <p class="cta-text">
                <?php esc_html_e( "The Detectory™ is out now on the App Store and Google Play. Download it free, start your club, and get out detecting.", 'app-landing' ); ?>
            </p>

            <div class="store-buttons store-buttons--centered" data-animate="fade-in" data-animate-delay="0.1s">
                <a href="<?php echo esc_url( $app_store_url ); ?>" class="store-btn" target="_blank" rel="noopener">
                    <?php echo app_landing_get_svg_icon( 'apple' ); ?>
                    <span class="store-btn-text">
                        <span class="store-btn-label"><?php esc_html_e( 'Download on the', 'app-landing' ); ?></span>
                        <span class="store-btn-store"><?php esc_html_e( 'App Store', 'app-landing' ); ?></span>
                    </span>
                </a>
                <a href="<?php echo esc_url( $google_play_url ); ?>" class="store-btn" target="_blank" rel="noopener">
                    <?php echo app_landing_get_svg_icon( 'google-play' ); ?>
                    <span class="store-btn-text">
                        <span class="store-btn-label"><?php esc_html_e( 'Get it on', 'app-landing' ); ?></span>
                        <span class="store-btn-store"><?php esc_html_e( 'Google Play', 'app-landing' ); ?></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
