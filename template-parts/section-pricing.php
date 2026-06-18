<?php
/**
 * Pricing Section — The Detectory
 *
 * @package App_Landing
 */

$free_features = array(
    'Join 1 club',
    'Run 1 club with up to 5 members',
    '1 photo per post or find',
    'Unlimited posts, finds, comments, likes',
    'Create and RSVP to events',
    'Permission slips and event maps with field colour coding',
    'Push notifications and event reminders',
    'Member directory and dig points',
);

$pro_features = array(
    'AI find identification — period, type, and similar finds',
    'Join unlimited clubs',
    'Grow your club without limits — no member cap',
    'Up to 5 photos per post or find',
    'Upload videos up to 3 minutes',
    'Pro badge on your profile',
    'Cancel anytime — 5-day grace period if you downgrade',
);

$footnotes = array(
    'Cancel anytime in your app store.',
    'Subscriptions managed through Apple App Store or Google Play.',
    'If you cancel Pro and your club is over the 5-member cap, members keep their access for 5 days, then the club becomes read-only until you upgrade or remove members.',
    'Event cover photos are always a single image regardless of plan.',
);
?>

<section class="section section-pricing" id="pricing">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Pricing</span>
            <h2 class="section-title">Start free. Upgrade only if you outgrow it.</h2>
            <p class="section-subtitle">Most clubs never need to — Pro's just there when you do.</p>
        </div>

        <p class="pricing-prelude" data-animate="fade-in" data-animate-delay="0.05s">
            Pro pays for the bits that cost real money to run — videos, bigger clubs, more photos. Everything else stays free, forever.
        </p>

        <div class="pricing-toggle-wrap" data-animate="fade-in" data-animate-delay="0.1s">
            <div class="pricing-toggle" role="radiogroup" aria-label="<?php echo esc_attr__( 'Billing period', 'app-landing' ); ?>">
                <input type="radio" name="pricing-billing" id="bill-monthly" class="pricing-toggle-input">
                <label for="bill-monthly" class="pricing-toggle-pill">Monthly</label>

                <input type="radio" name="pricing-billing" id="bill-yearly" class="pricing-toggle-input" checked>
                <label for="bill-yearly" class="pricing-toggle-pill">
                    <span>Yearly</span>
                    <span class="pricing-toggle-save">Save 37%</span>
                </label>
            </div>
        </div>

        <div class="pricing-grid">
            <article class="card pricing-card pricing-card--lead" data-animate="slide-up" data-animate-delay="0.15s">
                <header class="pricing-card-header">
                    <h3 class="pricing-card-name">Free</h3>
                    <p class="pricing-card-tagline">Everything a small club needs to run dig days.</p>
                    <div class="pricing-card-prices">
                        <div class="price-display">
                            <span class="price-amount">£0</span>
                            <span class="price-period">forever</span>
                        </div>
                    </div>
                </header>

                <ul class="pricing-features">
                    <?php foreach ( $free_features as $feature ) : ?>
                        <li>
                            <span class="pricing-feature-icon" aria-hidden="true"><?php echo app_landing_get_svg_icon( 'check' ); ?></span>
                            <span><?php echo esc_html( $feature ); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#download" class="btn btn-primary">Download — it's free</a>
            </article>

            <article class="card pricing-card pricing-card--secondary" data-animate="slide-up" data-animate-delay="0.25s">
                <header class="pricing-card-header">
                    <h3 class="pricing-card-name">Pro</h3>
                    <p class="pricing-card-tagline">For when your club outgrows the free plan.</p>

                    <div class="pricing-card-prices">
                        <div class="price-display price-display--monthly">
                            <span class="price-amount">£7.99</span>
                            <span class="price-period">per month</span>
                        </div>
                        <div class="price-display price-display--yearly">
                            <span class="price-amount">£64.99</span>
                            <span class="price-period">per year</span>
                        </div>
                    </div>
                </header>

                <ul class="pricing-features">
                    <li class="pricing-features-divider">Everything in Free, plus</li>
                    <?php foreach ( $pro_features as $feature ) : ?>
                        <li>
                            <span class="pricing-feature-icon" aria-hidden="true"><?php echo app_landing_get_svg_icon( 'check' ); ?></span>
                            <span><?php echo esc_html( $feature ); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#download" class="btn btn-secondary">Upgrade in-app later</a>
            </article>
        </div>

        <ul class="pricing-notes" data-animate="fade-in" data-animate-delay="0.35s">
            <?php foreach ( $footnotes as $note ) : ?>
                <li><?php echo esc_html( $note ); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
