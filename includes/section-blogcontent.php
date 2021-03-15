<!--single post-->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<!-- this is a single page template  -->
<?= get_the_date(); ?>

<?php the_content(); ?>

<!-- <?php the_author(); ?> -->
<?php 
$fname = get_the_author_meta( 'first_name');
$lname = get_the_author_meta( 'last_name');
// echo $fname . '-' .$lname;
?>
<p>Posted by: <?= $fname; ?> - <?= $lname; ?></p>

<?php
$tags = get_the_tags();
foreach($tags as $tag): ?>
<a href=" <?= get_tag_link( $tag->term_id ); ?>" class="badge bg-success">
    <?= $tag->name; ?>
</a>  
<?php endforeach; ?>

<?php
$categories= get_the_category();
foreach($categories as $cat): ?>
    <a href=" <?= get_category_link( $cat->term_id ); ?>" class="badge bg-primary">
        <?= $cat->name; ?>
    </a>
<?php endforeach; ?>

<?php comments_template(); ?>

<?php endwhile; else: endif; ?>