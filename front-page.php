<?php get_header(); ?>
The Front page template 
<div class="container">
The front page template
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content') ?>
</div>

<?php get_footer(); ?>