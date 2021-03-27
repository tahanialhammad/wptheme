<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-center align-items-center">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail mr-4">
            <?php endif; ?>
            <div>
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more <i class="fas fa-arrow-right"></i> </a>
                <p><?php comments_number(); ?></p>
            </div>
        </div>
    </div>
<?php endwhile;
else : endif; ?>