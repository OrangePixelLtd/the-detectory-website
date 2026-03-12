<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="footer-brand">the <span class="brand-accent">detectory</span></div>
                <p class="footer-desc">
                    A private, modern club management app built for UK metal detecting clubs.
                </p>
                <div class="store-buttons">
                    <a href="#" class="store-btn store-btn--dark" aria-label="Download on the App Store">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        <span class="store-btn-text">
                            <span class="store-btn-label">Download on the</span>
                            <span class="store-btn-store">App Store</span>
                        </span>
                    </a>
                    <a href="#" class="store-btn store-btn--dark" aria-label="Get it on Google Play">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3.18 23.54c-.34-.19-.57-.55-.57-.95V1.41c0-.4.23-.76.57-.95L14.43 12 3.18 23.54zm1.15-23L16 11.59l-2.87-2.87L4.33.54zM20.16 10.33l-3.07 1.77L14.27 12l2.82-2.82 3.07 1.77c.52.3.52 1.08 0 1.38zM4.33 23.46l8.8-8.32L16 12.41 4.33 23.46z"/></svg>
                        <span class="store-btn-text">
                            <span class="store-btn-label">Get it on</span>
                            <span class="store-btn-store">Google Play</span>
                        </span>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="footer-heading">Product</h4>
                <ul class="footer-nav">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#why">Why The Detectory</a></li>
                    <li><a href="#download">Download</a></li>
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
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> The Detectory. All rights reserved.
            </p>
            <div class="footer-bottom-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
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
