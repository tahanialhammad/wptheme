<?php get_header(); ?>
The single-project template
<section>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <!-- this has a featured image -->
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'projects') ?>
                <!-- post block -->
                <?php wp_link_pages(); ?>
            </div>
            <div class="col-lg-6">
            <h3>info from extra fields</h3><hr>
                <ul>
                    <?php if(get_post_meta( $post->ID, 'Tools', true )):?>   
                    <li>Tools: <?= get_post_meta( $post->ID, 'Tools', true )?></li>
                    <?php endif; ?>

                    <?php if(get_post_meta( $post->ID, 'Time', true )):?>
                    <li>Time : <?= get_post_meta( $post->ID, 'Time', true )?></li>
                    <?php endif; ?> 
                </ul> 
            </div>
        </div>


    </div>
</section>

<?php get_footer(); ?>