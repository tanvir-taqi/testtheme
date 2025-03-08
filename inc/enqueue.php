<?php

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
