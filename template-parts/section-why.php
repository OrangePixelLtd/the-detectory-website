<?php
/**
 * Why The Detectory Section
 *
 * @package App_Landing
 */

$reasons = array(
    array(
        'title' => 'Built specifically for detectorists',
        'text'  => 'Not a generic social network. Not a repurposed business tool. Every feature was designed around how UK detectorists and their clubs actually operate.',
    ),
    array(
        'title' => 'Private by default',
        'text'  => 'Your club, your finds, your data. Nothing is public unless you decide it should be. No algorithms, no strangers, no data harvesting.',
    ),
    array(
        'title' => 'Useful whether you\'re in a club or not',
        'text'  => 'Club organisers get proper management tools. Members get a cleaner experience. Solo detectorists get a private space to log finds and stay organised.',
    ),
    array(
        'title' => 'Modern and mobile-first',
        'text'  => 'Built for how people use their phones today. Fast, clean, and easy to use whether you\'re at home or standing in a field.',
    ),
    array(
        'title' => 'Solves real problems',
        'text'  => 'No more chasing RSVPs in group chats, missing event details, or losing track of what you\'ve found. One app, everything in one place.',
    ),
);
?>

<section class="section section-why" id="why">
    <div class="container">
        <div class="why-split">
            <div class="why-layout">
                <div class="why-header" data-animate="fade-in">
                    <span class="section-label">Why The Detectory</span>
                    <h2 class="section-title">Purpose-built. Not repurposed.</h2>
                    <p class="section-subtitle">
                        There are plenty of apps that try to do everything for everyone. This isn't one of them. The Detectory does one thing well — it helps detectorists and their clubs stay organised.
                    </p>
                </div>

                <div class="why-list">
                    <?php foreach ( $reasons as $index => $reason ) : ?>
                        <div class="why-item" data-animate="fade-in" data-animate-delay="<?php echo esc_attr( $index * 0.1 ); ?>s">
                            <div class="why-marker" aria-hidden="true"></div>
                            <div class="why-content">
                                <h3 class="why-title"><?php echo esc_html( $reason['title'] ); ?></h3>
                                <p class="why-text"><?php echo esc_html( $reason['text'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="why-polaroids" data-animate="fade-in" data-animate-delay="0.2s" aria-hidden="true">
                <div class="polaroid polaroid--1">
                    <div class="polaroid-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/countryside.jpg' ); ?>" alt="" loading="lazy" width="280" height="200">
                        <span class="polaroid-caption">Perfect conditions</span>
                    </div>
                </div>
                <div class="polaroid polaroid--2">
                    <div class="polaroid-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/coins-pile.jpg' ); ?>" alt="" loading="lazy" width="280" height="200">
                        <span class="polaroid-caption">Nice finds!</span>
                    </div>
                </div>
                <div class="polaroid polaroid--3">
                    <div class="polaroid-frame">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hayling-detect.jpg' ); ?>" alt="" loading="lazy" width="280" height="200">
                        <span class="polaroid-caption">Out detecting</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
