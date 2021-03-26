<?php 
//Load stylesheet
function load_css()
{
    $version= wp_get_theme()->get('version');
    wp_enqueue_style("tahani_style", get_template_directory_uri() . '/style.css', array('bootstrap_style'), $version , "all");
    wp_enqueue_style("main_style", get_template_directory_uri() . '/assets/css/main.css', array('bootstrap_style'), true, "all");
    wp_enqueue_style("bootstrap_style","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(),"4.0.0", "all");
    wp_enqueue_style("fontawesome_style", "https://pro.fontawesome.com/releases/v5.10.0/css/all.css", array(),"5.10.0", "all");
};
add_action('wp_enqueue_scripts', 'load_css');

//Load Javascript
function load_js()
{
    wp_enqueue_script("bootstrap1_js", "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), true, "all");
    wp_enqueue_script("bootstrap2_js", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), true, "all");
    wp_enqueue_script("bootstrap3_js", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), true, "all");

    wp_enqueue_script("tahani_js", get_template_directory_uri() . '/assets/js/main.js', array(), true, "all");
    wp_enqueue_script('jquery');
};
add_action('wp_enqueue_scripts', 'load_js');

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('title-tag');
add_theme_support('custom-logo');

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

//Register Footer
function my_footer()
{
    register_sidebar(
        array(
            "name" => "Footer 1",
            "id" => "footer1",
            "befor_title" => "<h3>",
            "after_title" => "</h3>",
        )
    );
    register_sidebar(
        array(
            "name" => "Footer 2",
            "id" => "footer2",
            "befor_title" => "<h3>",
            "after_title" => "</h3>",
        )
    );
    register_sidebar(
        array(
            "name" => "Footer 3",
            "id" => "footer3",
            "befor_title" => "<h3>",
            "after_title" => "</h3>"
        )
    );
}
add_action('widgets_init', 'my_footer');


//Custom Post Types
function my_first_post_type()
{
    $args= array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'car'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type( 'cars', $args );
}
add_action('init', 'my_first_post_type');


//Taxonomy
function my_first_taxonomy()
{
    $args= array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy( 'brands', array('cars'), $args );
}
add_action('init', 'my_first_taxonomy');

/* Register Custom Navigation Walker */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
