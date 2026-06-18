<?php
/**
 * Hero Section — The Detectory
 *
 * @package App_Landing
 */
?>

<section class="section section-hero" id="hero">
    <div class="hero-bg-glow" aria-hidden="true"></div>

    <div class="container">
        <div class="hero-grid">
            <div class="hero-intro">
                <h1 class="hero-title" data-animate="fade-in">
                    Your club. Your finds. <span class="text-gradient">Finally in one place.</span>
                </h1>

                <p class="hero-subtitle" data-animate="fade-in" data-animate-delay="0.1s">
                    Events, RSVPs, permissions, posts, and a private finds log with AI identification — built for UK detecting clubs and the detectorists in them. No group chat. No social media. No clipboards.
                </p>
            </div>

            <div class="hero-phone-wrapper" data-animate="phone-3d">
                <div class="hero-phone-scene">
                    <div class="hero-phone" data-phone-tilt>
                        <div class="phone-frame">
                            <div class="phone-notch" aria-hidden="true"></div>
                            <div class="phone-screen">
                                <video
                                    class="phone-video"
                                    autoplay
                                    muted
                                    loop
                                    playsinline
                                    preload="auto"
                                    poster="<?php echo esc_url( get_template_directory_uri() . '/assets/images/homescreen.webp' ); ?>"
                                >
                                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/dmdc-demo-opt.webm' ); ?>" type="video/webm">
                                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/dmdc-demo-opt.mp4' ); ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="phone-home-bar" aria-hidden="true"></div>
                        </div>
                        <div class="phone-glow" aria-hidden="true"></div>
                    </div>
                </div>
            </div>

            <div class="hero-actions">
                <div class="store-buttons" data-animate="fade-in" data-animate-delay="0.2s">
                    <a href="<?php echo esc_url( get_theme_mod( 'app_landing_app_store_url', app_landing_get_default( 'app_store_url' ) ) ); ?>" class="store-btn" target="_blank" rel="noopener">
                        <?php echo app_landing_get_svg_icon( 'apple' ); ?>
                        <span class="store-btn-text">
                            <span class="store-btn-label"><?php esc_html_e( 'Download on the', 'app-landing' ); ?></span>
                            <span class="store-btn-store"><?php esc_html_e( 'App Store', 'app-landing' ); ?></span>
                        </span>
                    </a>
                    <a href="<?php echo esc_url( get_theme_mod( 'app_landing_google_play_url', app_landing_get_default( 'google_play_url' ) ) ); ?>" class="store-btn" target="_blank" rel="noopener">
                        <?php echo app_landing_get_svg_icon( 'google-play' ); ?>
                        <span class="store-btn-text">
                            <span class="store-btn-label"><?php esc_html_e( 'Get it on', 'app-landing' ); ?></span>
                            <span class="store-btn-store"><?php esc_html_e( 'Google Play', 'app-landing' ); ?></span>
                        </span>
                    </a>
                </div>

                <p class="hero-note" data-animate="fade-in" data-animate-delay="0.3s">
                    Built by a detectorist. Private by default.
                </p>
            </div>
        </div>
    </div>
</section>
