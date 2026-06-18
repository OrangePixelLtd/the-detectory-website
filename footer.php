<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="footer-brand">the <span class="brand-accent">detectory</span><span>&trade;</span></div>
                <p class="footer-desc">
                    A private, modern club management app built for UK metal detecting clubs.
                </p>
                <div class="store-buttons store-buttons--sm">
                    <a href="<?php echo esc_url( get_theme_mod( 'app_landing_app_store_url', app_landing_get_default( 'app_store_url' ) ) ); ?>" class="store-btn store-btn--dark store-btn--sm" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Download on the App Store', 'app-landing' ); ?>">
                        <?php echo app_landing_get_svg_icon( 'apple' ); ?>
                        <span class="store-btn-text">
                            <span class="store-btn-label"><?php esc_html_e( 'Download on the', 'app-landing' ); ?></span>
                            <span class="store-btn-store"><?php esc_html_e( 'App Store', 'app-landing' ); ?></span>
                        </span>
                    </a>
                    <a href="<?php echo esc_url( get_theme_mod( 'app_landing_google_play_url', app_landing_get_default( 'google_play_url' ) ) ); ?>" class="store-btn store-btn--dark store-btn--sm" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Get it on Google Play', 'app-landing' ); ?>">
                        <?php echo app_landing_get_svg_icon( 'google-play' ); ?>
                        <span class="store-btn-text">
                            <span class="store-btn-label"><?php esc_html_e( 'Get it on', 'app-landing' ); ?></span>
                            <span class="store-btn-store"><?php esc_html_e( 'Google Play', 'app-landing' ); ?></span>
                        </span>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="footer-heading">Product</h4>
                <ul class="footer-nav">
                    <li><a href="/#features">Features</a></li>
                    <li><a href="/#how-it-works">How It Works</a></li>
                    <li><a href="/#why">Why The Detectory&trade;</a></li>
                    <li><a href="/#download">Download</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Support</h4>
                <ul class="footer-nav">
                    <li><a href="/blog">Help Centre</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Legal</h4>
                <ul class="footer-nav">
                    <?php
                    $privacy_url = get_privacy_policy_url();
                    if ( $privacy_url ) : ?>
                        <li><a href="<?php echo esc_url( $privacy_url ); ?>"><?php esc_html_e( 'Privacy Policy', 'app-landing' ); ?></a></li>
                    <?php endif; ?>
                    <?php
                    $terms_page = get_page_by_path( 'terms' );
                    if ( $terms_page ) : ?>
                        <li><a href="<?php echo esc_url( get_permalink( $terms_page ) ); ?>"><?php esc_html_e( 'Terms of Service', 'app-landing' ); ?></a></li>
                    <?php endif; ?>
                    <li><a href="/cookie-policy-uk"><?php esc_html_e( 'Cookie Policy', 'app-landing' ); ?></a></li>
                    <li><a href="/child-safety"><?php esc_html_e( 'Child Safety', 'app-landing' ); ?></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> The Detectory&trade;. All rights reserved.
            </p>
            <div class="footer-bottom-links">
                <?php if ( $privacy_url ) : ?>
                    <a href="<?php echo esc_url( $privacy_url ); ?>"><?php esc_html_e( 'Privacy', 'app-landing' ); ?></a>
                <?php endif; ?>
                <?php if ( $terms_page ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $terms_page ) ); ?>"><?php esc_html_e( 'Terms', 'app-landing' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<button class="back-to-top" aria-label="<?php esc_attr_e( 'Back to top', 'app-landing' ); ?>">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
