<?php get_header(); ?>
This is the single post template
<section>
    <div class="container">

        <?php get_template_part('includes/section', 'blogcontent') ?>

        <!-- post pagaination block -->
        <?php wp_link_pages(); ?>
        
         <!-- post-pagination -->
         <div class="post-pagination">
            <?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i> %title'); ?>
            <?php next_post_link('%link', '%title <i class="fas fa-chevron-right"></i>'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>