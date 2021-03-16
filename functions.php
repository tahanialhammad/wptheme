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

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(array(
    'main-menu'=>"Main-menu",
    'footer-menu'=>"Footer-menu",
));


//Custom  images size
add_image_size( 'blog-large', 800, 400, false );
add_image_size( 'blog-small', 300, 200, true );


//Register Sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name'=>'Page Sidebar',
            'id'=>'page-sidebar',
            'before_title'=>'<h4 class="weidgets-title">',
            'after_title'=>'</h4>'
        )
    );
    register_sidebar(
        array(
            'name'=>'Blog Sidebar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h4 class="weidgets-title">',
            'after_title'=>'</h4>'
        )
    );
}
add_action( 'widgets_init', 'my_sidebars');
