<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'una_create_options' );

/**
 * Initialize Titan & options here
 */
function una_create_options() {

	$titan = TitanFramework::getInstance( 'una' );
	
    $backgroundSection = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Backgrounds', 'una' ),
	) );
    
    $backgroundSection->createOption( array(
	    'name' => __( 'Sidebar Background Color', 'una' ),
	    'id' => 'sidebar_bg_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'una' ),
	    'default' => '#FFFFFF',
		'css' => 'body:before { background-color: value }',
	) );
	
    $backgroundSection->createOption( array(
	    'name' => __( 'Body Background Color', 'una' ),
	    'id' => 'body_bg_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'una' ),
	    'default' => '#FAFAFA',
		'css' => 'body { background-color: value }',
	) );
    
    $backgroundSection->createOption( array(
	    'name' => __( 'Panels Background Color', 'una' ),
	    'id' => 'panels_bg_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the panel background of your theme', 'una' ),
	    'default' => '#FFFFFF',
		'css' => '.hentry,.footer,.comments-area { background-color: value }',
	) );
    
    $brandSection = $titan->createThemeCustomizerSection( array(
        'name' => 'title_tagline',
    ) );
    
    $brandSection->createOption( array(
        'name' => 'Logo',
        'id' => 'brand_logo',
        'type' => 'upload',
        'desc' => 'Upload your logo'
    ) );
    
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	
	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Theme Typography', 'una' ),
	) );

	$section->createOption( array(
	    'name' => __( 'Headings Font', 'una' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings in the site', 'una' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Lato',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6,th,.page-title, .comments-title, .comment-reply-title, .post-navigation .post-title,.entry-title,.entry-title a { value }',
	) );
    
    $section->createOption( array(
	    'name' => __( 'Headings Text Color', 'una' ),
	    'id' => 'headings_text_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'una' ),
	    'default' => '#2C2C2C',
		'css' => 'h1, h2, h3, h4, h5, h6,th { color: value }',
	) );
    
    $section->createOption( array(
	    'name' => __( 'Text Font', 'una' ),
	    'id' => 'body_text_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for text (excluding titles) in the site', 'una' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Roboto',
	    ),
		'css' => 'body,a,blockquote,td,p{ value }',
	) );
	
    $section->createOption( array(
	    'name' => __( 'Text Color', 'una' ),
	    'id' => 'body_text_color',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'una' ),
	    'default' => '#2C2C2C',
		'css' => 'body,a,blockquote,td,p { color: value }',
	) );
	
	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */
	
	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Theme Settings', 'una' ),
	) );
	
	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'General', 'una' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'Custom Javascript Code', 'una' ),
	    'id' => 'custom_js',
	    'type' => 'code',
	    'desc' => __( 'If you want to add some additional Javascript code into your site, add them here and it will be included in the frontend header. No need to add <code>script</code> tags', 'una' ),
	    'lang' => 'javascript',
	) );
    
    $generalTab->createOption( array(
	    'name' => __( 'Display Search', 'una' ),
	    'id' => 'display_search',
	    'type' => 'enable',
        'default' => true
	) );
	
	$generalTab->createOption( array(
	    'type' => 'save',
	) );
	
	
	$footerTab = $adminPanel->createTab( array(
	    'name' => __( 'Footer', 'una' ),
	) );
	
	$footerTab->createOption( array(
		'name' => __( 'Copyright Text', 'una' ),
		'id' => 'copyright',
		'type' => 'text',
		'desc' => __( 'Enter your copyright text here (sample only)', 'una' ),
	) );
	
	$footerTab->createOption( array(
	    'type' => 'save',
	) );
}