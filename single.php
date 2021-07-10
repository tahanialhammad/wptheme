<?php get_header(); ?>
This is the default single post template 
<section class="page-wrap">
    <div class="container">
    <!-- <h1><?php the_title(); ?></h1> -->
     <!-- this has a featured image -->
         <!-- <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?> -->

        <?php get_template_part('includes/section', 'blogcontent') ?>

        <!-- post block -->
        <?php wp_link_pages(); ?>

        <!-- post-pagination -->
        <div class="post-pagination">
            <?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i> %title'); ?>
            <?php next_post_link('%link', '%title <i class="fas fa-chevron-right"></i>'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>