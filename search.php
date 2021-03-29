<?php get_header(); ?>
The Search Template
<section>
    <div class="container">
        <h1>Search Resultes for '<?php echo get_search_query(); ?>':</h1>

        <?php get_template_part('includes/section', 'searchresults') ?>

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</section>

<?php get_footer(); ?>