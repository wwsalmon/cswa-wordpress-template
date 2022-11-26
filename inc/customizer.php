<?php
function cswa_template_customizer($wp_customize)
{
    $wp_customize->add_section('action-banner', array(
        'title' => "Action Bar"
    ));
    $wp_customize->add_setting('cswa-home-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'cswa-home-image-control', array(
        "label" => "Home photo",
        "section" => "static_front_page",
        "settings" => "cswa-home-image",
        "width" => 2667,
        "height" => 2000,
        "flex-width" => true,
        "flex-height" => true
    )));
//    $wp_customize->add_setting('sz-template-text');
//    $wp_customize->add_control('sz-template-text-control', array(
//        'label' => 'text field',
//        'type' => 'string',
//        'section' => 'sz-template-section',
//        'settings' => 'sz-template-home-text'
//    ));
    $wp_customize->add_setting('cswa-banner-check');
    $wp_customize->add_control('cswa-banner-check-control', array(
        'label' => 'show action banner?',
        'type' => 'checkbox',
        'section' => 'action-banner',
        'settings' => 'cswa-banner-check'
    ));
    $wp_customize->add_setting('cswa-banner-blurb');
    $wp_customize->add_control('cswa-banner-blurb-control', array(
        'label' => 'action banner text',
        'type' => 'string',
        'section' => 'action-banner',
        'settings' => 'cswa-banner-blurb'
    ));
    $wp_customize->add_setting('cswa-banner-link');
    $wp_customize->add_control('cswa-banner-link-control', array(
        'label' => 'action banner link',
        'type' => 'string',
        'section' => 'action-banner',
        'settings' => 'cswa-banner-link'
    ));
}

add_action('customize_register', 'cswa_template_customizer');