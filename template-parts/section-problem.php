<?php
/**
 * Problem Section — The Detectory
 *
 * @package App_Landing
 */

$problems = array(
    array(
        'icon'  => 'message-circle',
        'title' => 'Event details buried in chat',
        'text'  => 'Important dig info lost in endless WhatsApp threads. Members miss dates, times, and locations.',
    ),
    array(
        'icon'  => 'help-circle',
        'title' => 'RSVP confusion',
        'text'  => 'No clear way to know who is coming. Organisers end up chasing replies across multiple channels.',
    ),
    array(
        'icon'  => 'clipboard',
        'title' => 'Paper sign-in sheets',
        'text'  => 'Still passing around clipboards at the gate. Records get lost, damaged, or never digitised.',
    ),
    array(
        'icon'  => 'bell-off',
        'title' => 'Missed member updates',
        'text'  => 'Not everyone checks the group chat. Important news about permissions, rules, or finds goes unseen.',
    ),
    array(
        'icon'  => 'layers',
        'title' => 'Too many disconnected tools',
        'text'  => 'WhatsApp for chat, email for notices, spreadsheets for members, paper for attendance. Nothing connects.',
    ),
);
?>

<section class="section section-problem" id="problem">
    <div class="container">
        <div class="text-center" data-animate="fade-in">
            <span class="section-label">The Problem</span>
            <h2 class="section-title">Sound familiar?</h2>
            <p class="section-subtitle">Club life shouldn't mean juggling five different tools and hoping nothing falls through the cracks.</p>
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
