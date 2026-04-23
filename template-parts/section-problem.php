<?php
/**
 * Problem Section — The Detectory
 *
 * @package App_Landing
 */

$problems = array(
    array(
        'icon'  => 'message-circle',
        'title' => 'Where\'s this Saturday\'s dig?',
        'text'  => 'Scrolling back through 200 messages on a Friday night to find the farm gate location, because someone posted it in the group chat at some point.',
    ),
    array(
        'icon'  => 'help-circle',
        'title' => 'Who\'s actually turning up?',
        'text'  => 'Three thumbs-ups, two question marks, and one "maybe if the weather holds". The organiser\'s still guessing how many sausage rolls to order.',
    ),
    array(
        'icon'  => 'clipboard',
        'title' => 'Clipboards. Always clipboards.',
        'text'  => 'Sign your name, tick a box, and hope the paper doesn\'t end up in a muddy puddle before it makes it back to the secretary.',
    ),
    array(
        'icon'  => 'bell-off',
        'title' => 'Half the club missed the message',
        'text'  => 'Posted on WhatsApp. Shared on Facebook. Pinned to the noticeboard. Three members still turn up at the wrong field.',
    ),
    array(
        'icon'  => 'layers',
        'title' => 'A different tool for every job',
        'text'  => 'WhatsApp for chat. A spreadsheet for members. Email for notices. A biscuit tin of permissions. Somehow it all has to stay straight.',
    ),
);
?>

<section class="section section-problem" id="problem">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">The Problem</span>
            <h2 class="section-title">Sound familiar?</h2>
            <p class="section-subtitle">If you run a club, or belong to one, you've probably lived every one of these.</p>
        </div>

        <div class="problem-grid">
            <?php foreach ( $problems as $index => $problem ) : ?>
                <div class="problem-item" data-animate="fade-in" data-animate-delay="<?php echo esc_attr( $index * 0.08 ); ?>s">
                    <div class="problem-icon">
                        <?php echo app_landing_get_svg_icon( $problem['icon'] ); ?>
                    </div>
                    <div class="problem-content">
                        <h3 class="problem-title"><?php echo esc_html( $problem['title'] ); ?></h3>
                        <p class="problem-text"><?php echo esc_html( $problem['text'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
