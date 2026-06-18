<?php
/**
 * Benefits Section — The Detectory
 *
 * @package App_Landing
 */

$benefits = array(
    array(
        'icon'  => 'lock',
        'title' => 'Private, and staying that way',
        'text'  => 'Your club isn\'t searchable, crawlable, or visible from outside. No strangers scrolling past your best hammered.',
    ),
    array(
        'icon'  => 'calendar',
        'title' => 'Fewer missed dig days',
        'text'  => 'The farm gate, the time, and who\'s turning up — all in one place. RSVPs included, so the organiser knows the numbers.',
    ),
    array(
        'icon'  => 'megaphone',
        'title' => 'A quieter group chat',
        'text'  => 'Club business lands where it should. The group chat can go back to being the group chat.',
    ),
    array(
        'icon'  => 'sparkle',
        'title' => 'A second opinion in your pocket',
        'text'  => 'Photograph a find and get a likely period, type, and similar finds — a starting point for research, not a valuation. (Pro)',
    ),
    array(
        'icon'  => 'compass',
        'title' => 'A front door for newcomers',
        'text'  => 'People can find your club and your open events without needing a social-media account or knowing someone already in it.',
    ),
    array(
        'icon'  => 'map-pin',
        'title' => 'A log that stays yours',
        'text'  => 'Photos, notes, locations — private to you by default, shareable only when you choose. On a new phone or an old one, it\'s still there.',
    ),
);
?>

<section class="section section-benefits" id="benefits">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">Benefits</span>
            <h2 class="section-title">What changes when your club moves in</h2>
            <p class="section-subtitle">Beyond the feature list — here's what actually shifts when The Detectory&trade; replaces the patchwork.</p>
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
