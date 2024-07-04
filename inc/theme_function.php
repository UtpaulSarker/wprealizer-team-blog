<?php

function customizer_register($wp_customize){
    //header area function
    $wp_customize->add_section('header_area', array(
        'title' => __('Header Area', 'UtpaulSarker'),
        'description' => 'If You Want to change Logo & Banner You can Do it',
    ));
    $wp_customize->add_setting(
        'theme_logo', array(
            'default' => get_bloginfo('template_directory') . '/img/logo.png',
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label' => 'Logo Area',
        'section' => 'header_area',
        'setting' => 'theme_logo',
        'description' => 'Change logo Here',
    )));

    $wp_customize->add_setting(
        'theme_banner', array(
            'default' => get_bloginfo('template_directory') . '/img/banner-ad.jpg',
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_banner', array(
        'label' => 'Banner Area',
        'section' => 'header_area',
        'setting' => 'theme_banner',
        'description' => 'Change Banner Here',
    )));


    //copyright area

    $wp_customize->add_section('copyright_secton', array(
        'title' => __('Copyright Area', 'UtpaulSarker'),
        'description' => 'If You Want to change your Copyright area You can Do It',
    ));

    $wp_customize->add_setting('copyright_area',array(
        'default' => ' Copyright &copy;2024 All rights reserved | This template is made with  by Colorlib',));

    $wp_customize->add_control('copyright_area', array(
        'label' => 'Copyright Text',
        'description' => 'If you need to change your footer you can do it here',
        'setting' => 'copyright_area',
        'section' => 'copyright_secton',
    ));

}

add_action('customize_register', 'customizer_register');