<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container">
        <div class="header-inner">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-brand"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                    the<span class="brand-accent">detectory</span>
                </a>
            <?php endif; ?>

            <button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle navigation', 'app-landing' ); ?>" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<nav class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'app-landing' ); ?>">
    <button class="nav-close" aria-label="<?php esc_attr_e( 'Close menu', 'app-landing' ); ?>">
        <span></span>
        <span></span>
    </button>
    <?php
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'depth'          => 1,
            'fallback_cb'    => false,
        ) );
    } else {
        ?>
        <ul>
            <li><a href="#who-its-for"><?php esc_html_e( 'Who It\'s For', 'app-landing' ); ?></a></li>
            <li><a href="#benefits"><?php esc_html_e( 'Benefits', 'app-landing' ); ?></a></li>
            <li><a href="#how-it-works"><?php esc_html_e( 'How It Works', 'app-landing' ); ?></a></li>
            <li><a href="#features"><?php esc_html_e( 'Features', 'app-landing' ); ?></a></li>
            <li><a href="#why"><?php esc_html_e( 'Why Us', 'app-landing' ); ?></a></li>
            <li><a href="#download" class="btn btn-primary nav-cta"><?php esc_html_e( 'Download', 'app-landing' ); ?></a></li>
        </ul>
        <?php
    }
    ?>
</nav>
