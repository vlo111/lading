<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wptest
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<?php $commenter = wp_get_current_commenter();
$req = get_option('require_name_email');
$aria_req = ($req ? " aria-required='true'" : '');
$fields = array(
    'author' => '<div class="row"><input id="author"  placeholder="напишите сфой имя"  class="form-control col-md-5" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />' . '</div>',
    'email' => '<div class="row"><input id="email"  placeholder="напишите сфой почту"  class="form-control col-md-5"  name="email"  type="text" value="' . esc_attr($commenter['comment_author_email']) . '"  size="30"' . $aria_req . ' />' . '</div>',
);

$comments_args = array(
    'fields' => $fields,
    'comment_notes_before' => '',
    // change the title of send button
    'label_submit' => 'оставить отзыв',
    // change the title of the reply section
    'title_reply' => '',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    'action' => site_url('/wp-comments-post.php'),
    // redefine your own textarea (the comment body)
    'comment_field' => '<div class="row"><textarea class="form-control col-md-5" id="comment" name="comment" aria-required="true" cols="37" rows="5" placeholder="напишите сфой отзыв"></textarea></div>',
    'class_submit' => 'otziv-button col-md-offset-2',
);
?>


<?php
// You can start editing here -- including this comment!
if (have_comments()) : ?>

    <div class="filback-title">
        <hr>
        <p><?php
            printf( // WPCS: XSS OK.
                esc_html(_nx('One thought on &ldquo;%2$s&rdquo;', get_the_title() . ' %1$s', get_comments_number(), 'comments title', 'wptest')),
                number_format_i18n(get_comments_number()));
            ?></p>
        <hr>
    </div>
    <div class="text-area-block">
        <div class="text-are-img">
            <img src="<?php bloginfo('template_url'); ?>/img/chat.png" alt="">
        </div>
        <div class="text-are-form">
            <?php comment_form($comments_args); ?>
        </div>
    </div>

    <?php
    $coment = new Comments(); ?>
    <ol class="comment-list">
        <?php wp_list_comments(array(
            'style' => 'ol',
            'short_ping' => true,
            'reply_text' => 'ОТВЕТИТЬ',
            'walker' => $coment
        ));
        ?>
    </ol>

    <!-- .comment-list -->
<?php endif; // Check for have_comments(). ?>