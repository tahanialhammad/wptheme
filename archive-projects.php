<!-- cars category part  -->
<?php get_header(); ?>
The custem srachive template for post type projects 
<section>
    <div class="container">
        <section class="row">

            <div class="col-lg-3">
                <?php if (is_active_sidebar('blog-sidebar')) : ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </div>

            <div class="col-lg-9">
                <h1><?= single_cat_title(); ?></h1>

                <?php get_template_part('includes/section', 'archive') ?>

                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>