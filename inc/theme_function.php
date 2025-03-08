<?php

// theme functions
function customizer_register_func($wp_customize) {
    // header area
    $wp_customize->add_section("header_area", array(
        "title"=> __("Header Area","test-theme"),
        "description"=>"Update Header",
    ) );
    $wp_customize->add_setting("logo", array(
        "default"=> get_bloginfo('template_directory') . './img/logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'=> 'Logo Upload',
        "description"=>"Update your logo here",
        'setting' => 'logo',
        'section' => 'header_area',
    )) );
    
    // menu position
    $wp_customize->add_section("menu_option", array(
        "title"=> __("Menu Position Option","test-theme"),
        "description"=>"Update menu position",
    ) );
    $wp_customize->add_setting("header_menu_position", array(
        "default"=>'Right Menu',
    ) );
    $wp_customize->add_control('header_menu_position', array(
        'label' => 'Menu Position',
        "description"=>"Select Your Menu Position",
        'setting' => 'header_menu_position',
        'section' => 'menu_option',
        'type' => 'radio',
        'choices'=> array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
    // FOOTER COPYRIGHT SECTION
    $wp_customize->add_section("footer_option", array(
        "title"=> __("Footer Option","test-theme"),
        "description"=>"Update Footer Settign",
    ) );
    $wp_customize->add_setting("copyright_section", array(
        "default"=>'&copy Copyright 2025 | Tanvir Taqi',
    ) );
    $wp_customize->add_control('copyright_section', array(
        'label' => 'Copyright Text',
        "description"=>"Update Your Copyright Text",
        'setting' => 'copyright_section',
        'section' => 'footer_option',
       
    ));
};
add_action( 'customize_register', 'customizer_register_func' );