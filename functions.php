<?php
	add_theme_support('post-thumbnails');

	register_nav_menu('primary', 'Primary Menu');
	register_nav_menu('secondary', 'Footer Navigation');

// Widget Areas

function header_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="header-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Custom Header Widget Area About',
        'id'            => 'custom-header-widget-about',
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
    ) );
 
}
add_action( 'widgets_init', 'header_widgets_init' );


function wit_about_article_top($wp_customize){
     $wp_customize->add_section('wit_about_article_top_section', array(
            'title'=> 'Article Top'
        ));

     $wp_customize->add_setting('wit_about_article_top_headline', array(
            'default' => 'Example Header'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_top_headline_control', array(
            'label' => 'Headline',
            'section' => 'wit_about_article_top_section',
            'settings' => 'wit_about_article_top_headline'
        )));

    $wp_customize->add_setting('wit_about_article_top_text', array(
            'default' => 'Example text'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_top_text_control', array(
            'label' => 'Text',
            'section' => 'wit_about_article_top_section',
            'settings' => 'wit_about_article_top_text'
        )));

    $wp_customize->add_setting('wit_about_article_top_img');

     $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'wit_about_article_top_img_control', array(
            'label' => 'Image',
            'section' => 'wit_about_article_top_section',
            'settings' => 'wit_about_article_top_img',
            'width' => 250,
            'height' => 200
        )));

} 

add_action('customize_register', 'wit_about_article_top');

// MIDDLE SECTION

function wit_about_article_middle($wp_customize){
     $wp_customize->add_section('wit_about_article_middle_section', array(
            'title'=> 'Article Middle'
        ));

     $wp_customize->add_setting('wit_about_article_middle_headline', array(
            'default' => 'Example Header'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_middle_headline_control', array(
            'label' => 'Headline',
            'section' => 'wit_about_article_middle_section',
            'settings' => 'wit_about_article_middle_headline'
        )));

    $wp_customize->add_setting('wit_about_article_middle_text', array(
            'default' => 'Example text'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_middle_text_control', array(
            'label' => 'Text',
            'section' => 'wit_about_article_middle_section',
            'settings' => 'wit_about_article_middle_text'
        )));

    $wp_customize->add_setting('wit_about_article_middle_img');

     $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'wit_about_article_middle_img_control', array(
            'label' => 'Image',
            'section' => 'wit_about_article_middle_section',
            'settings' => 'wit_about_article_middle_img',
            'width' => 250,
            'height' => 200
        )));

} 

add_action('customize_register', 'wit_about_article_middle');

//bottom section

function wit_about_article_bottom($wp_customize){
     $wp_customize->add_section('wit_about_article_bottom_section', array(
            'title'=> 'Article Bottom'
        ));

     $wp_customize->add_setting('wit_about_article_bottom_headline', array(
            'default' => 'Example Header'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_bottom_headline_control', array(
            'label' => 'Headline',
            'section' => 'wit_about_article_bottom_section',
            'settings' => 'wit_about_article_bottom_headline'
        )));

    $wp_customize->add_setting('wit_about_article_bottom_text', array(
            'default' => 'Example text'
        ));

     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wit_about_article_bottom_text_control', array(
            'label' => 'Text',
            'section' => 'wit_about_article_bottom_section',
            'settings' => 'wit_about_article_bottom_text'
        )));

    $wp_customize->add_setting('wit_about_article_bottom_img');

     $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'wit_about_article_bottom_img_control', array(
            'label' => 'Image',
            'section' => 'wit_about_article_bottom_section',
            'settings' => 'wit_about_article_bottom_img',
            'width' => 250,
            'height' => 200
        )));

} 

add_action('customize_register', 'wit_about_article_bottom');

?>