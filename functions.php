<?php
/**
 * The Detectory Theme Functions
 *
 * @package App_Landing
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'APP_LANDING_VERSION', '1.2.36' );

/**
 * Theme Setup
 */
function app_landing_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'app-landing' ),
    ) );
}
add_action( 'after_setup_theme', 'app_landing_setup' );

/**
 * Enqueue Styles and Scripts
 */
function app_landing_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'app-landing-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

    // Theme Styles
    wp_enqueue_style(
        'app-landing-style',
        get_stylesheet_uri(),
        array( 'app-landing-fonts' ),
        APP_LANDING_VERSION
    );

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11'
    );

    wp_enqueue_style(
        'app-landing-animations',
        get_template_directory_uri() . '/assets/css/animations.css',
        array( 'app-landing-style', 'swiper-css' ),
        APP_LANDING_VERSION
    );

    wp_enqueue_style(
        'app-landing-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array( 'app-landing-style' ),
        APP_LANDING_VERSION
    );

    // Scripts
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11',
        true
    );

    wp_enqueue_script(
        'app-landing-scroll',
        get_template_directory_uri() . '/assets/js/scroll-animations.js',
        array( 'swiper-js' ),
        APP_LANDING_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'app_landing_scripts' );

/**
 * Add defer attribute to theme script
 */
function app_landing_script_attributes( $tag, $handle ) {
    if ( 'app-landing-scroll' === $handle ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'app_landing_script_attributes', 10, 2 );

/**
 * Inject Customizer color overrides
 */
function app_landing_customizer_css() {
    $primary       = get_theme_mod( 'app_landing_color_primary', '#D91B27' );
    $primary_light = get_theme_mod( 'app_landing_color_primary_light', '#FF4444' );
    $primary_dark  = get_theme_mod( 'app_landing_color_primary_dark', '#A01520' );

    $css = ":root {
        --color-primary: {$primary};
        --color-primary-light: {$primary_light};
        --color-primary-dark: {$primary_dark};
    }";

    wp_add_inline_style( 'app-landing-style', $css );
}
add_action( 'wp_enqueue_scripts', 'app_landing_customizer_css', 20 );

/**
 * App-mode: serve bare content when ?source=app is present.
 *
 * Usage: thedetectory.com/privacy-policy/?source=app
 * Returns styled page content without header, footer, or nav.
 */
function app_landing_app_mode_template( $template ) {
    if ( ! isset( $_GET['source'] ) || 'app' !== $_GET['source'] ) {
        return $template;
    }

    if ( ! is_singular() ) {
        return $template;
    }

    return get_template_directory() . '/template-app.php';
}
add_filter( 'template_include', 'app_landing_app_mode_template' );

/**
 * Output favicon meta tags
 */
function app_landing_favicons() {
    $uri = get_template_directory_uri() . '/assets/images/favicon';
    ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( $uri . '/apple-touch-icon.png' ); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( $uri . '/favicon-32x32.png' ); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( $uri . '/favicon-16x16.png' ); ?>">
    <link rel="manifest" href="<?php echo esc_url( $uri . '/site.webmanifest' ); ?>">
    <?php
}
add_action( 'wp_head', 'app_landing_favicons', 5 );

/**
 * Includes
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-tags.php';
