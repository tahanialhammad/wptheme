<?php get_header(); ?>

<section>
    <div class="container">
    This is the page template
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('includes/section', 'content') ?>
    </div>
</section>
<?php get_footer(); ?>