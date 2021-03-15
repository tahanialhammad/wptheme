<?php get_header(); ?>
The defult Blog page template 
<section>
    <div class="container">
        <h1><?= single_cat_title(); ?></h1>
        
        <?php get_template_part('includes/section', 'archive') ?>
        
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</section>
<?php get_footer(); ?>