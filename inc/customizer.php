<?php
/**
 * Theme Customizer Settings — The Detectory
 *
 * @package App_Landing
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function app_landing_customize_register( $wp_customize ) {

    // Panel
    $wp_customize->add_panel( 'app_landing_panel', array(
        'title'    => __( 'The Detectory', 'app-landing' ),
        'priority' => 30,
    ) );

    // ==================== Store Links ====================
    $wp_customize->add_section( 'app_landing_store_links', array(
        'title' => __( 'App Store Links', 'app-landing' ),
        'panel' => 'app_landing_panel',
    ) );

    $wp_customize->add_setting( 'app_landing_app_store_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'app_landing_app_store_url', array(
        'label'   => __( 'App Store URL', 'app-landing' ),
        'section' => 'app_landing_store_links',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'app_landing_google_play_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'app_landing_google_play_url', array(
        'label'   => __( 'Google Play URL', 'app-landing' ),
        'section' => 'app_landing_store_links',
        'type'    => 'url',
    ) );

    // ==================== Colors ====================
    $wp_customize->add_section( 'app_landing_colors', array(
        'title' => __( 'Theme Colors', 'app-landing' ),
        'panel' => 'app_landing_panel',
    ) );

    $colors = array(
        'color_primary'       => array( 'label' => __( 'Primary Red', 'app-landing' ),      'default' => '#D91B27' ),
        'color_primary_light' => array( 'label' => __( 'Primary Light', 'app-landing' ),     'default' => '#FF4444' ),
        'color_primary_dark'  => array( 'label' => __( 'Primary Dark', 'app-landing' ),      'default' => '#A01520' ),
    );

    foreach ( $colors as $key => $color ) {
        $setting_id = 'app_landing_' . $key;
        $wp_customize->add_setting( $setting_id, array(
            'default'           => $color['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $setting_id, array(
            'label'   => $color['label'],
            'section' => 'app_landing_colors',
        ) ) );
    }
}
add_action( 'customize_register', 'app_landing_customize_register' );
