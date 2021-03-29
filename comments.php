<div>
    <div>
        <h3><?php if (!have_comments()) {
                echo "Leave a comment";
            } else {
                echo get_comments_number() . " Comments";
            };
            ?></h3>
    </div>
    <div>
        <?php
        if (comments_open()) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h3 class="" >',
                    'title_reply_after' => '</h3>',
                )
            );
        };
        ?>
    </div>
    <div>
        <?php
        wp_list_comments(
            array(
                'avatar_size' => 50,
                'style' => 'dev'
            )
        );
        ?>
    </div>


    <?php
    // if ( post_password_required()) return;
    // if(!comments_open()&& get_comments_number()&& post_type_supports(get_post_type(),'comments')){echo "<center><h3>mag niet comment</h3></center>";
    // }else{
    //     echo '<div class="comment-form">'.comment_form().'</div>';
    // }
    // if(have_comments()){
    //     wp_list_comments();
    //     paginate_comments_links();
    // }
    ?>
</div>