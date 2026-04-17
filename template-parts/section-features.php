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
        'image' => 'members-screen.jpeg',
        'alt'   => 'Members management screen showing owner, admins, and members of a detecting club',
    ),
    array(
        'icon'  => 'calendar',
        'title' => 'Events and RSVP tracking',
        'text'  => 'Create events with all the details. Members RSVP directly so you always know the numbers.',
        'video' => 'event-screen-opt',
        'poster' => 'members-screen.jpeg',
        'alt'   => 'Events and RSVP tracking screen',
    ),
    array(
        'icon'  => 'edit',
        'title' => 'News, posts, and updates',
        'text'  => 'Share finds, post announcements, and keep members up to date with a clean, scrollable feed.',
        'video' => 'feed-screen-opt',
        'poster' => 'members-screen.jpeg',
        'alt'   => 'News and posts feed',
    ),
    array(
        'icon'  => 'bell',
        'title' => 'Notifications that matter',
        'text'  => 'Members get notified about new events, posts, and important club activity. Nothing missed.',
        'image' => 'notification-event-changed.jpeg',
        'alt'   => 'Push notification showing an event change',
    ),
    array(
        'icon'  => 'map-pin',
        'title' => 'Private finds logging',
        'text'  => 'Record your finds with photos, notes, and locations. Your personal log — private by default, shareable if you choose.',
        'video' => 'log-find-opt',
        'poster' => 'members-screen.jpeg',
        'alt'   => 'Finds log screen',
    ),
    array(
        'icon'  => 'compass',
        'title' => 'Discover clubs and events',
        'text'  => 'Browse detecting clubs and public events near you. A straightforward way to get involved or try something new.',
        'image' => 'join-club.webp',
        'alt'   => 'Discover and join clubs screen',
    ),
);
?>

<section class="section section-features" id="features">
    <div class="features-bg-image" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hayling-detect.jpg' ); ?>" alt="" loading="lazy">
    </div>
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Features</span>
            <h2 class="section-title">Focused features. No filler.</h2>
            <p class="section-subtitle">Everything you need to manage club life or stay organised as a solo detectorist — nothing you don't.</p>
        </div>

        <div class="features-showcase">
            <div class="features-showcase-phone" data-animate="fade-in">
                <div class="phone-frame">
                    <div class="phone-notch" aria-hidden="true"></div>
                    <div class="phone-screen">
                        <?php foreach ( $features as $index => $feature ) : ?>
                            <?php if ( ! empty( $feature['video'] ) ) : ?>
                                <video
                                    class="phone-video features-screenshot<?php echo 0 === $index ? ' is-active' : ''; ?>"
                                    data-feature-image="feature-<?php echo esc_attr( $index ); ?>"
                                    muted
                                    loop
                                    playsinline
                                    preload="metadata"
                                    aria-label="<?php echo esc_attr( $feature['alt'] ); ?>"
                                    <?php if ( ! empty( $feature['poster'] ) ) : ?>
                                        poster="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $feature['poster'] ); ?>"
                                    <?php endif; ?>
                                    width="300"
                                    height="662"
                                >
                                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/' . $feature['video'] . '.webm' ); ?>" type="video/webm">
                                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/' . $feature['video'] . '.mp4' ); ?>" type="video/mp4">
                                </video>
                            <?php else : ?>
                                <img
                                    class="phone-screenshot features-screenshot<?php echo 0 === $index ? ' is-active' : ''; ?>"
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $feature['image'] ); ?>"
                                    alt="<?php echo esc_attr( $feature['alt'] ); ?>"
                                    data-feature-image="feature-<?php echo esc_attr( $index ); ?>"
                                    loading="<?php echo 0 === $index ? 'eager' : 'lazy'; ?>"
                                    width="300"
                                    height="650"
                                >
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="phone-home-bar" aria-hidden="true"></div>
                </div>
            </div>

            <div class="features-list">
                <?php foreach ( $features as $index => $feature ) : ?>
                    <button
                        type="button"
                        class="feature-item<?php echo 0 === $index ? ' is-active' : ''; ?>"
                        data-feature-target="feature-<?php echo esc_attr( $index ); ?>"
                        data-animate="fade-in"
                        data-animate-delay="<?php echo esc_attr( $index * 0.06 ); ?>s"
                    >
                        <div class="feature-icon">
                            <?php echo app_landing_get_svg_icon( $feature['icon'] ); ?>
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title"><?php echo esc_html( $feature['title'] ); ?></h3>
                            <p class="feature-text"><?php echo esc_html( $feature['text'] ); ?></p>
                        </div>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
