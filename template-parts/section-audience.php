<?php
/**
 * Audience Section — The Detectory
 *
 * @package App_Landing
 */

$audiences = array(
    array(
        'icon'  => 'settings',
        'label' => 'Club Organisers',
        'title' => 'Run your club without the chaos',
        'text'  => 'Manage events, members, and updates in one place. No more juggling WhatsApp, spreadsheets, and paper sign-in sheets.',
    ),
    array(
        'icon'  => 'users',
        'label' => 'Club Members',
        'title' => 'Stay in the loop effortlessly',
        'text'  => 'See upcoming events, RSVP in a tap, and catch every club update without scrolling through endless group chats.',
    ),
    array(
        'icon'  => 'compass',
        'label' => 'Looking to Join In',
        'title' => 'Find clubs and events near you',
        'text'  => 'Discover detecting clubs or browse public events in your area. A simple way to get involved and meet other detectorists.',
    ),
    array(
        'icon'  => 'map-pin',
        'label' => 'Solo Detectorists',
        'title' => 'Stay organised on your own terms',
        'text'  => 'Log your finds privately, keep a personal record of your detecting sessions, and stay connected to the wider community when you want to.',
    ),
);
?>

<section class="section section-audience" id="who-its-for">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Who It's For</span>
            <h2 class="section-title">Built for every kind of detectorist</h2>
            <p class="section-subtitle">Whether you run a club, belong to one, want to find one, or detect on your own — The Detectory fits how you detect.</p>
        </div>

        <div class="audience-grid grid">
            <?php foreach ( $audiences as $index => $audience ) : ?>
                <div class="card audience-card" data-animate="fade-in" data-animate-delay="<?php echo esc_attr( $index * 0.1 ); ?>s">
                    <div class="audience-icon">
                        <?php echo app_landing_get_svg_icon( $audience['icon'] ); ?>
                    </div>
                    <div class="audience-content">
                        <span class="audience-label"><?php echo esc_html( $audience['label'] ); ?></span>
                        <h3 class="audience-title"><?php echo esc_html( $audience['title'] ); ?></h3>
                        <p class="audience-text"><?php echo esc_html( $audience['text'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
