<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="footer-brand">the <span class="brand-accent">detectory</span></div>
                <p class="footer-desc">
                    A private, modern club management app built for UK metal detecting clubs.
                </p>
                <a href="#waitlist" class="btn btn-primary footer-cta">Join the Waitlist</a>
            </div>

            <div>
                <h4 class="footer-heading">Product</h4>
                <ul class="footer-nav">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#why">Why The Detectory</a></li>
                    <li><a href="#waitlist">Join Waitlist</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Support</h4>
                <ul class="footer-nav">
                    <li><a href="#">Help Centre</a></li>
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
                    <li><a href="#"><?php esc_html_e( 'Cookie Policy', 'app-landing' ); ?></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> The Detectory. All rights reserved.
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
