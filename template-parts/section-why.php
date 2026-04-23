<?php
/**
 * Why The Detectory Section
 *
 * @package App_Landing
 */

$reasons = array(
    array(
        'title' => 'Built by a detectorist, who happens to be a developer',
        'text'  => 'I detect. I\'ve sat in club meets where half the membership didn\'t know the rally had moved. Every feature in The Detectory exists because I wanted it to exist for my own club first.',
    ),
    array(
        'title' => 'Private by default, always',
        'text'  => 'Your club, your finds, your data, and nobody else\'s business. No adverts. No algorithms. No strangers scrolling past your best hammered.',
    ),
    array(
        'title' => 'Works in a club, or on your own',
        'text'  => 'Running a club? The admin is sorted. In a club? A cleaner feed and fewer missed messages. Out on your own? A private finds diary, backed up and there whenever you open the app — new phone, old phone, or a coffee shop in France.',
    ),
    array(
        'title' => 'Fast, even in a field',
        'text'  => 'Built for how you actually use a phone — on the sofa, at the pub, or standing on a headland with one bar of signal. Quick to open, quick to do what you need, quick to put away.',
    ),
    array(
        'title' => 'For the bits between the digs',
        'text'  => 'The part of detecting that isn\'t detecting — the RSVPs, the permissions, the write-ups — is the part that eats the most time. The Detectory gives that time back.',
    ),
);
?>

<section class="section section-why" id="why">
    <div class="container">
        <div class="why-split">
            <div class="why-layout">
                <div class="why-header" data-animate="fade-in">
                    <span class="section-label">Why The Detectory</span>
                    <h2 class="section-title">Made by a detectorist, for detectorists.</h2>
                    <p class="section-subtitle">
                        I built The Detectory because I kept losing Saturdays to my club's group chat. It does one thing: it helps detectorists and their clubs stay organised, without getting in the way of the actual detecting.
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
