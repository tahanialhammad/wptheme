<!--single projects post content-->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<!-- this is a single page template  -->


<?php the_content(); ?>

<?php
$tags = get_the_tags();
if($tags):
foreach($tags as $tag): ?>
<a href=" <?= get_tag_link( $tag->term_id ); ?>" class="badge bg-success">
    <?= $tag->name; ?>
</a>  
<?php endforeach; endif ?>

<?php
$categories= get_the_category();
foreach($categories as $cat): ?>
    <a href=" <?= get_category_link( $cat->term_id ); ?>" class="badge bg-primary">
        <?= $cat->name; ?>
    </a>
<?php endforeach; ?>


<?= get_the_date(); ?>

<?php endwhile; else: endif; ?>