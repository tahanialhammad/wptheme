<?php get_header(); ?>
The index template

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
                <div class="post-pagination text-center">
                    <?php previous_posts_link(); ?>
                    <?php next_posts_link(); ?>
                </div>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>