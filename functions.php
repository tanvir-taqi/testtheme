<?php 

// functions

// Theme Title
add_theme_support("title-tag");


//theme css and jquery file calling
function css_js_file_calling(){

    // styles
wp_enqueue_style("info_style", get_stylesheet_uri());
wp_register_style("bootstrap", get_template_directory_uri() . '/styles/bootstrap.css', array(), '5.3.3', 'all');
wp_enqueue_style("bootstrap");
wp_register_style("custom", get_template_directory_uri() . '/styles/custom.css', array(), '1.0.0', 'all');
wp_enqueue_style("custom");

    // scripts  
    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap_script", get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.3', true);
    wp_enqueue_script("main", get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action("wp_enqueue_scripts","css_js_file_calling");

// google font enqueue

function add_google_font(){
    wp_enqueue_style('google_font','https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', false);
};
add_action("wp_enqueue_scripts","add_google_font");

// theme functions
function logo_customizer_register($wp_customize) {
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
    
};
add_action( 'customize_register', 'logo_customizer_register' );

// =============== 
// nav menu register 
// ================

register_nav_menu('primary',__('Main Menu', 'test-theme')) ;


// Walker Menu Properties
function nav_description( $item_output, $item, $args){
    $link_after = isset($args->link_after) ? $args->link_after : '';

    if( !empty($item->description)){
        $item_output = str_replace(
            $link_after . '</a>', 
            '<span class="walker_nav">' . $item->description . '</span>' . $link_after . '</a>', 
            $item_output
        );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'nav_description', 10, 3);

