<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card mb-3">
            <div class="card-header">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>"
                     class="img-fluid mb-3 img-thumbnail mr-4">
                <?php endif; ?>
                <div>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more <i class="fas fa-arrow-right"></i> </a>
                </div>
            </div>
            <div class="card-footer text-muted">
                <?php comments_number(); ?>
            </div>

        </div>
<?php endwhile;
else : endif; ?>