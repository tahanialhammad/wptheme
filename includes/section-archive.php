<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="card mb-3">
        <?php if (has_post_thumbnail()) : ?>
            <img class="card-img-top" src="<?php the_post_thumbnail_url('‘medium’'); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <span class=" text-muted"><i class="fas fa-user"></i> <?php the_author(); ?>, </span>
            <span class=" text-muted"><i class="far fa-calendar-alt"></i><?= get_the_date(); ?>, </span>
            <span class=" text-muted"><i class="far fa-comment"></i><?php comments_number(); ?>, </span>
            <div class="card-text"><?php the_excerpt(); ?></div>
            <p class=" text-muted"><i class="fas fa-border-all"></i> <?php the_category('| '); ?></p>
                    <p class=" text-muted">
                    <?php if(has_tag()){?>
                    <i class="fas fa-tag"></i> <?php the_tags('| '); ?>
                    <?php }else {echo 'Tags: There is No Tags.';}?>
                    </p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leez meer <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="card-footer text-muted">
            <?php comments_number(); ?>
        </div>
    </div>
      
      
      OR
      
      
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-center align-items-center">

            <?php if (has_post_thumbnail()) : ?>
                <!-- <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>"
                    class="img-fluid mb-3 img-thumbnail mr-4"> -->
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>"
                    class="img-fluid mb-3 mr-3">
            <?php endif; ?>
            <!-- <?php the_post_thumbnail('blog-small'); ?> -->
            <div class="blog-content">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <!-- <span class=" text-muted"><i class="fas fa-user"></i> <?php the_author(); ?>, </span> -->
                <span class=" text-muted"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?>, </span>

                <span class=" text-muted"><i class="far fa-calendar-alt"></i><?= get_the_date(); ?>, </span>
                <span class=" text-muted"><i class="far fa-clock"></i><?= get_the_time(); ?>, </span>
                <span class=" text-muted"><i class="far fa-comment"></i><?php comments_number(); ?>, </span>
                <span class=" text-muted"><i class="far fa-comment"></i><?php comments_popup_link('0 comments'); ?>, </span>

                <p><?php the_excerpt(); ?></p>

                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more <i class="fas fa-arrow-right"></i> </a>
            </div>
        </div>
    </div>
<?php endwhile;
else : endif; ?>