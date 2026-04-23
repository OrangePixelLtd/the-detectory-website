<?php
/**
 * Waitlist CTA Section — The Detectory
 *
 * @package App_Landing
 */
?>

<section class="section section-cta" id="waitlist">
    <div class="cta-bg-image" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/rolling-hills.jpg' ); ?>" alt="">
    </div>
    <div class="cta-bg-glow" aria-hidden="true"></div>

    <div class="container">
        <div class="cta-content" data-animate="fade-in">
            <span class="section-label">Join the Waitlist</span>
            <h2 class="cta-title">Get in <span class="text-gradient">early</span></h2>
            <p class="cta-text">
                The Detectory is in the final stretch before launch. Drop your email below and I'll let you know the moment it's live — waitlist members get first access.
            </p>

            <div class="waitlist-form">
                <?php echo do_shortcode( '[gravityform id="1" title="true" ajax="true"]' ); ?>
            </div>
        </div>
    </div>
</section>
