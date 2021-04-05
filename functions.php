<?php 
/* Load stylesheet */
function load_css()
{
    $version= wp_get_theme()->get('version');
    wp_enqueue_style("tahani_style", get_template_directory_uri() . '/style.css', array('bootstrap_style'), $version , "all");
    wp_enqueue_style("main_style", get_template_directory_uri() . '/assets/css/main.css', array('bootstrap_style'), true, "all");
    wp_enqueue_style("bootstrap_style","https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css", array(),"4.6.0", "all");
    wp_enqueue_style("fontawesome_style", "https://pro.fontawesome.com/releases/v5.10.0/css/all.css", array(),"5.10.0", "all");
};
add_action('wp_enqueue_scripts', 'load_css');

/* Load Javascript */
function load_js()
{
    wp_enqueue_script("bootstrap1_js", "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), true, "all");
    wp_enqueue_script("bootstrap2_js", "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), true, "all");
    wp_enqueue_script("bootstrap3_js", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js", array(), true, "all");

    wp_enqueue_script("tahani_js", get_template_directory_uri() . '/assets/js/main.js', array(), true, "all");
    wp_enqueue_script('jquery');
};
add_action('wp_enqueue_scripts', 'load_js');

/* Theme options */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('title-tag');
add_theme_support('custom-logo');

/* Menus */
register_nav_menus(array(
    'main-menu'=>"Main-menu",
    'footer-menu'=>"Footer-menu",
));


/* Custom  images size */
add_image_size( 'blog-large', 800, 400, false );
add_image_size( 'blog-small', 300, 200, true );


/* Register Sidebars */
function my_sidebars()
{
    register_sidebar(
        array(
            'name'=>'Page Sidebar',
            'id'=>'page-sidebar',
            'before_title'=>'<h4 class="text-uppercase">',
            'after_title'=>'</h4>',
            'before_widget' => '<div class="mt-2 border-bottom">',
            'after_widget' =>'</div>',
        )
    );
    register_sidebar(
        array(
            'name'=>'Blog Sidebar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h4 class="text-uppercase">',
            'after_title'=>'</h4>',
            'before_widget' => '<div class="mt-2 border-bottom">',
            'after_widget' =>'</div>',
        )
    );
}
add_action( 'widgets_init', 'my_sidebars');

/* Register Footer */
function my_footer()
{
    register_sidebar(
        array(
            "name" => "Footer 1",
            "id" => "footer1",
            "befor_title" => '<h3 class="text-uppercase">',
            "after_title" => '</h3>',
            'before_widget' => '<div>',
            'after_widget' =>'</div>',
        )
    );
    register_sidebar(
        array(
            "name" => "Footer 2",
            "id" => "footer2",
            "befor_title" => '<h3 class="text-uppercase">',
            "after_title" => '</h3>',
            'before_widget' => '<div>',
            'after_widget' =>'</div>',
        )
    );
    register_sidebar(
        array(
            "name" => "Footer 3",
            "id" => "footer3",
            "befor_title" => '<h3 class="text-uppercase">',
            "after_title" => '</h3>',
            'before_widget' => '<div>',
            'after_widget' =>'</div>',
        )
    );
}
add_action('widgets_init', 'my_footer');


/* Custom Post Types */

function my_projects_post_type()
{
    $args= array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type( 'projects', $args );
}
add_action('init', 'my_projects_post_type');


/* Taxonomy */

function my_projects_taxonomy()
{
    $args= array(
        'labels' => array(
            'name' => 'Topics',
            'singular_name' => 'Topic'
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy( 'topics', array('projects'), $args );
}
add_action('init', 'my_projects_taxonomy');

/* Register Bootstrap Navigation Walker */
require_once('class-wp-bootstrap-navwalker.php');

function my_bootstrap_navbar(){
    wp_nav_menu(array(
        'theme_location'    => 'main-menu',
        'depth'             => 2,
        'container'         => false,
        // 'container_class'   => 'collapse navbar-collapse',
        // 'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav ml-auto',
        // 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ));
}
/* Custom excerpt length */
function my_excerpt_length($length){
    return 35;
}
add_filter( 'excerpt_length', 'my_excerpt_length');

/*  Change the excerpt more string */
function my_theme_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'my_theme_excerpt_more' );
