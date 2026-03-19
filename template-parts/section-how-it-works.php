<?php
/**
 * How It Works Section — The Detectory
 *
 * @package App_Landing
 */

$steps = array(
    array(
        'number' => '01',
        'title'  => 'Download the app',
        'text'   => 'Available on the App Store and Google Play. Free to download and get started in minutes.',
    ),
    array(
        'number' => '02',
        'title'  => 'Set up your profile',
        'text'   => 'Create your account and you\'re ready to go — join a club, browse events, or start logging finds straight away.',
    ),
    array(
        'number' => '03',
        'title'  => 'Join or create a club',
        'text'   => 'Accept an invite, discover clubs near you, or set up your own. Solo detectorists can skip this entirely.',
    ),
    array(
        'number' => '04',
        'title'  => 'Everything in one place',
        'text'   => 'Events, RSVPs, news, finds — whether you\'re running a club or detecting on your own, it\'s all here.',
    ),
);
?>

<section class="section section-how-it-works" id="how-it-works">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">How It Works</span>
            <h2 class="section-title">Up and running in minutes</h2>
            <p class="section-subtitle">No complicated setup. No training sessions. Just download and start using it however suits you.</p>
        </div>

        <div class="steps-grid">
            <?php foreach ( $steps as $index => $step ) : ?>
                <div class="step" data-animate="fade-in" data-animate-delay="<?php echo esc_attr( $index * 0.12 ); ?>s">
                    <div class="step-number"><?php echo esc_html( $step['number'] ); ?></div>
                    <div class="step-content">
                        <h3 class="step-title"><?php echo esc_html( $step['title'] ); ?></h3>
                        <p class="step-text"><?php echo esc_html( $step['text'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
