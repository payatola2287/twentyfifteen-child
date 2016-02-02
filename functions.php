<?php
/**
 * Enqueue scripts and styles.
 */
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( 'dashicons');
    
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Remove the twentyfifteen customizer for it'll be replaced properly by this theme
 */
function remove_twentyfifteen_customizers(){
    remove_action( 'customize_register', 'twentyfifteen_customize_register', 11 );
}
add_action( 'init','remove_twentyfifteen_customizers' );


/**
 * Remove Default Colors,Default Header image, and Default Background image option from theme customizer
 */
function una_theme_customize_deregister( $wp_customize ) {
 $wp_customize->remove_control("header_image");
 $wp_customize->remove_section("colors");
 $wp_customize->remove_section("background_image");
}
add_action( "customize_register", "una_theme_customize_deregister" );

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_stylesheet_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Load Titan Framework plugin checker
 */
require get_stylesheet_directory() . '/titan-framework-checker.php';

/**
 * Load Titan Framework options
 */
require get_stylesheet_directory() . '/titan-options.php';