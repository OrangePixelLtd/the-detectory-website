<?php
/**
 * Feature Highlights Section — The Detectory
 *
 * @package App_Landing
 */

$features = array(
    array(
        'icon'  => 'users',
        'title' => 'Clubs and member access',
        'text'  => 'Create private clubs with controlled membership. Admins manage who joins and what they see.',
    ),
    array(
        'icon'  => 'calendar',
        'title' => 'Events and RSVP tracking',
        'text'  => 'Create events with all the details. Members RSVP directly so you always know the numbers.',
    ),
    array(
        'icon'  => 'edit',
        'title' => 'News, posts, and updates',
        'text'  => 'Share finds, post announcements, and keep members up to date with a clean, scrollable feed.',
    ),
    array(
        'icon'  => 'bell',
        'title' => 'Notifications that matter',
        'text'  => 'Members get notified about new events, posts, and important club activity. Nothing missed.',
    ),
    array(
        'icon'  => 'map-pin',
        'title' => 'Private finds logging',
        'text'  => 'Record your finds with photos, notes, and locations. Your personal log — private by default, shareable if you choose.',
    ),
    array(
        'icon'  => 'compass',
        'title' => 'Discover clubs and events',
        'text'  => 'Browse detecting clubs and public events near you. A straightforward way to get involved or try something new.',
    ),
);
?>

<section class="section section-features" id="features">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Features</span>
            <h2 class="section-title">Focused features. No filler.</h2>
            <p class="section-subtitle">Everything you need to manage club life or stay organised as a solo detectorist — nothing you don't.</p>
        </div>

        <div class="features-grid grid grid-2">
            <?php foreach ( $features as $index => $feature ) : ?>
                <div class="card feature-card" data-animate="fade-in" data-animate-delay="<?php echo esc_attr( $index * 0.08 ); ?>s">
                    <div class="feature-icon">
                        <?php echo app_landing_get_svg_icon( $feature['icon'] ); ?>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                        <p class="feature-text"><?php echo esc_html( $feature['text'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
