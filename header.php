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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php my_bootstrap_navbar(); ?>
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>
    <main class="container my-4">