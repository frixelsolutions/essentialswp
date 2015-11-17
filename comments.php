<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>

        <ul class="media-list">
            <?php wp_list_comments(array('callback' => 'essentialswp_comment')); ?>
        </ul><!-- /.commentlist -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <div class="nav-previous">
                    <?php previous_comments_link( _e('&larr; Older Comments', 'essentialswp')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(_e('Newer Comments &rarr;', 'essentialswp')); ?>
                </div>
            </nav>
        <?php endif; // check for comment navigation ?>

        <?php elseif (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
            <p class="nocomments"><?php _e('Comments are closed.', 'essentialswp'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>





</div><!-- #comments .comments-area -->