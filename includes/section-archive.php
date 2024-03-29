<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                <!-- <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid"> -->
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <span class=" text-muted"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?>, </span>
                    <span class=" text-muted"><i class="far fa-calendar-alt"></i><?= get_the_date(); ?>, </span>
                    <span class=" text-muted"><i class="far fa-comment"></i><?php comments_number(); ?>, </span>

                    <div class="card-text"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read more <i class="fas fa-arrow-right"></i> </a>
                    <p class=" text-muted"><i class="fas fa-border-all"></i> <?php the_category('| '); ?></p>
                    <p class=" text-muted">
                    <?php if(has_tag()){?>
                    <i class="fas fa-tag"></i> <?php the_tags('| '); ?>
                    <?php }else {echo 'Tags: There is No Tags.';}?>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;
else : endif; ?>