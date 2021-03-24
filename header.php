<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My WP Theme</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        Header
        <div class="container">
        <nav>  
            <?php wp_nav_menu(array(
            'theme_location'=>'main-menu',
            'menu_class'=>'main-menu'
            )); ?>
        </nav>
        </div>
    </header>