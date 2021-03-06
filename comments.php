        <hr class="" aria-hidden="true">

        <div class="comments" id="comments">

            <div class="comments-header">

                <?php if (comments_open()){ ?>
                    <h3 class="comment-reply-title">
                        <?php
                            if (!have_comments()){
                                echo "0 comments";
                            }else if (get_comments_number() === 1){
                                echo "1 Comment";
                            }else{
                                echo get_comments_number() . " Comments";
                            }
                        ?>
                    </h3>
                <?php 
                    }else{
                        echo "Comment is disabled";
                    }
                ?>
                </div>

            <div class="comments-inner">

                <?php
                    
                    wp_list_comments(array(
                        "style" => "ul",
                        "callback" => "comment_styling",
                    ));

                ?>

            </div><!-- .comments-inner -->

        </div><!-- comments -->
        
        <?php

            if (comments_open()){
                comment_form(
                    array(
                        "class_form" => "",
                        "title_reply_before" => '<h2>',
                        "title_reply_after" => '</h2>',
                    )
                );
            };

        ?>