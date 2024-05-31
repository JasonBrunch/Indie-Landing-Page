<?php
/**
 * Indie-Game Theme Customizer
 *
 * @package Indie-Game
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function indie_game_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'indie_game_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'indie_game_customize_partial_blogdescription',
            )
        );
    }

        // Add Header Section
        $wp_customize->add_section('header_section', array(
            'title'    => __('Header Settings', 'indie-game'),
            'priority' => 20,
        ));
    
        // Header Enable/Disable Setting
        $wp_customize->add_setting('header_enabled', array(
            'default'           => true,
            'sanitize_callback' => 'wp_validate_boolean',
        ));
    
        $wp_customize->add_control('header_enabled', array(
            'label'   => __('Enable Header', 'indie-game'),
            'section' => 'header_section',
            'type'    => 'checkbox',
        ));

    // Add Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'indie-game'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Welcome to Chrono Rebellion',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'indie-game'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'An epic journey awaits',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'indie-game'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));

    // Hero Background Image
    $wp_customize->add_setting('hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label'    => __('Hero Background Image', 'indie-game'),
        'section'  => 'hero_section',
        'settings' => 'hero_background_image',
    )));
}
add_action( 'customize_register', 'indie_game_customize_register' );






/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function indie_game_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function indie_game_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function indie_game_customize_preview_js() {
    wp_enqueue_script( 'indie-game-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'indie_game_customize_preview_js' );