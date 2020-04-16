<?php

if( have_comments() ) {
    
    comments_number();

    foreach( $comments as $comment ) {
        echo get_avatar( $comment, 60, '', '', null );
        comment_author();
        comment_date();
        comment_text();
    }

    the_comments_pagination();
}

?>

<br>

<!-- Comment form -->
<div class="comments">

    <?php

    comment_form([
        'comment_field'         =>  '<div class="clear"></div>

            <div class="col_full">
                <label>Comment</label>
                <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
            </div>',
            'fields'                =>  [
                'author'            =>  
                    '<div class="col_one_third">
                        <label>' . __( 'Name', 'industrious' ) . '</label>
                        <input type="text" name="author" class="sm-form-control" />
                    </div>',
                'email'             =>  
                    '<div class="col_one_third">
                        <label>' . __( 'Email', 'industrious' ) . '</label>
                        <input type="text" name="email" class="sm-form-control" />
                    </div>',
                'url'               =>  
                    '<div class="col_one_third col_last">
                        <label>' . __( 'Website', 'industrious' ) . '</label>
                        <input type="text" name="url" class="sm-form-control" />
                    </div>'
            ],
            'class_submit'          =>  'button button-3d nomargin',
            'label_submit'          =>  __( 'Submit Comment', 'industrious' ),
            'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'industrious' )
    ]);

    ?>

</div>