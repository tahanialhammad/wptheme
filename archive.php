<!-- defulat category part  -->
<?php get_header(); ?>
Standard Post Archive
<section class="page-wrap">
    <div class="container">
        <section class="row">

            <div class="col-md-3">
                <?php if (is_active_sidebar('blog-sidebar')) : ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-9">
                <h1><?= single_cat_title(); ?></h1>

                <?php get_template_part('includes/section', 'archive') ?>

                <!-- post-pagination -->
                <div class="post-pagination">
                    <?php if (get_previous_posts_link()) {
                        previous_posts_link('<i class="fas fa-chevron-left"></i> Prev');
                    } else {
                        echo '<span>No Previous Page</span>';
                    } ?>

                    <?php next_posts_link(); ?>
                    <!-- <?php the_posts_pagination(); ?> -->
                </div>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>