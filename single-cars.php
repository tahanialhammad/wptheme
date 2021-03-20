<?php get_header(); ?>
The single-cars template
<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <!-- this has a featured image -->
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'cars') ?>
                <!-- post block -->
                <?php wp_link_pages(); ?>
            </div>
            <div class="col-lg-6">
            <h3>info from extra fields</h3><hr>
                <!-- <ul>
                    <li>Color: <?= get_post_meta( $post->ID, 'Color', true )?></li>

                    <?php if(get_post_meta( $post->ID, 'Registration', true )):?>
                    <li>Registration : <?= get_post_meta( $post->ID, 'Registration', true )?></li>
                    <?php endif; ?> 
                </ul>  -->
                <ul>
                    <li>Color: <?php the_field('color'); ?></li>
                    <li>Registration :  <?php the_field('registration'); ?></li>
                </ul>
            </div>
        </div>


    </div>
</section>

<?php get_footer(); ?>