<?php
/**
 * Benefits Section — The Detectory
 *
 * @package App_Landing
 */

$benefits = array(
    array(
        'icon'  => 'lock',
        'title' => 'Private clubs by default',
        'text'  => 'Your club is invite-only. Members, posts, and events stay within the club — not visible to the public.',
    ),
    array(
        'icon'  => 'calendar',
        'title' => 'Events and RSVPs sorted',
        'text'  => 'Create events, collect RSVPs, and share all the details in one place. No more chasing replies.',
    ),
    array(
        'icon'  => 'megaphone',
        'title' => 'Clear club communication',
        'text'  => 'Post updates, share news, and keep members informed without relying on group chats.',
    ),
    array(
        'icon'  => 'smartphone',
        'title' => 'Mobile-first and simple',
        'text'  => 'Designed for phones first. Quick to open, easy to use, no training needed.',
    ),
    array(
        'icon'  => 'compass',
        'title' => 'Discover clubs and events',
        'text'  => 'Find detecting clubs near you or browse public events. A simple way in for anyone looking to get involved.',
    ),
    array(
        'icon'  => 'map-pin',
        'title' => 'Log finds privately',
        'text'  => 'Keep a personal record of your finds and detecting sessions. Your data, your eyes only — whether in a club or solo.',
    ),
);
?>

<section class="section section-benefits" id="benefits">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Benefits</span>
            <h2 class="section-title">Built around how detectorists actually work</h2>
            <p class="section-subtitle">Whether you run a club or detect solo, every feature exists to make your detecting life simpler and better organised.</p>
        </div>

        <div class="benefits-grid grid grid-3">
            <?php foreach ( $benefits as $index => $benefit ) : ?>
                <div class="card benefit-card" data-animate="slide-up" data-animate-delay="<?php echo esc_attr( $index * 0.1 ); ?>s">
                    <div class="benefit-icon">
                        <?php echo app_landing_get_svg_icon( $benefit['icon'] ); ?>
                    </div>
                    <h3 class="benefit-title"><?php echo esc_html( $benefit['title'] ); ?></h3>
                    <p class="benefit-text"><?php echo esc_html( $benefit['text'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
