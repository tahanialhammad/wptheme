<!-- <?php get_header('secondary'); ?> -->
<?php get_header(); ?>
The Front page template 
<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php get_template_part('includes/section', 'content') ?>
        <p>Search</p>
        <?php get_search_form(); ?>
    </div>
</section>

<?php get_footer(); ?>