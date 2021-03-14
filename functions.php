<?php 
//Load stylesheet
function load_css(){
    wp_register_style("main_style",get_template_directory_uri().'/assets/css/main.css', array(),true,"all");
    wp_enqueue_style('main_style');
};
add_action('wp_enqueue_scripts','load_css');

//Load Javascript
function load_js(){
    wp_register_script("main_js",get_template_directory_uri().'/assets/js/main.js', array(),true,"all");
    wp_enqueue_script('main_js');
};
add_action('wp_enqueue_scripts','load_js');
