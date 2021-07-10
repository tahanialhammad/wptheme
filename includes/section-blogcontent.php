<!--single post-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- this is a single page template  -->

        <!-- Edit post link to Auth user -->
<?php edit_post_link('Edit <i class="fas fa-pencil-alt"></i>'); ?>


<!-- post info -->
        <h1><?php the_title(); ?></h1>
        <span class=" text-muted"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?>, </span>

        <span class=" text-muted"><i class="far fa-calendar-alt"></i><?= get_the_date(); ?>, </span>
        <span class=" text-muted"><i class="far fa-clock"></i><?= get_the_time(); ?>, </span>
        <span class=" text-muted"><i class="far fa-comment"></i><?php comments_number(); ?>, </span>


        <!-- this has a featured image -->
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>


        <?php the_content(); ?>
        <!-- <?php the_author(); ?> -->
        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        // echo $fname . '-' .$lname;
        ?>
        <p>Posted by: <?= $fname; ?> - <?= $lname; ?></p>

<!-- tags -->
        <?php
        $tags = get_the_tags();
        if ($tags) :
            foreach ($tags as $tag) : ?>
                <a href=" <?= get_tag_link($tag->term_id); ?>" class="text-white badge bg-success">
                    <i class="fas fa-tag"></i> <?= $tag->name; ?>
                </a>
        <?php endforeach;
        endif ?>

<!-- categories -->
        <?php
        $categories = get_the_category();
        foreach ($categories as $cat) : ?>
            <a href=" <?= get_category_link($cat->term_id); ?>" class="text-white badge bg-primary">
                <i class="fas fa-border-all"></i> <?= $cat->name; ?>
            </a>
        <?php endforeach; ?>

        <!-- deffult comment form -->
        <?php comments_template(); ?>


<?php endwhile;
else : endif; ?>