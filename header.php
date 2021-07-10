<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="<?php bloginfo('charset'); ?>"> <!-- from TwentyTwenty Theme  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <!-- <title><?php wp_title(); ?></title> -->
    <!-- <title>
        <?php wp_title('|', 'true', 'right'); ?>
        <?php bloginfo('name'); ?>
    </title> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- bootstrap navbar from elzero webschool  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?= get_bloginfo('url'); ?>">Navbar<?= get_bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php my_bootstrap_navbar(); ?>
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>

    <header>
        <div class="container">
            <h1>test</h1>
            <!-- <h1><?php the_title(); ?></h1> -->
            <a href=""><?= get_bloginfo('name'); ?></a>


            <div>
                <!-- <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } ?> -->

                <?php if (has_custom_logo()) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'thumbnail');
                } else {
                    $logo = '<h3>' . get_bloginfo('name') . '</h3>';
                };
                ?>
                <a class="navbar-brand" href="<?= get_bloginfo('url'); ?>"><img src="<?php echo $logo[0]; ?>" alt=""></a>

                <div class="container">
                    <nav>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'main-menu'
                        )); ?>
                    </nav>
                </div>

    </header>

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?= get_bloginfo('url'); ?>"><img src="<?php echo $logo[0]; ?>" alt=""></a>
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
            </div>
        </nav>
    </header>


    <main class="container my-4">