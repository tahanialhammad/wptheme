<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        $logo = '<a href="' . get_bloginfo('url') . '" target="_self" >
    <img src="' . $logo[0] . '" alt="' . get_bloginfo('name') . '" title="' . get_bloginfo('name') . '"></a>';
    } else {
        $logo = '<h3>' . get_bloginfo('name') . '</h3>';
    };
    ?>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><?= $logo ?></a>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <form class="form-inline my-2 my-lg-0">
                <?php get_search_form(); ?>
                   
                </form>
            </div>
        </nav>
    </header>
    <main class="container mb-4">