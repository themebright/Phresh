<?php

if ( post_password_required() ) {
	return;
}

?>

<div id="comments">
	<?php if ( have_comments() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<div class="comment-replies">
			<h2><?php comments_number(); ?></h2>

			<ol class="comments">
				<?php wp_list_comments( apply_filters( 'devoted_list_comments', array(
					'style' => 'ol',
					'type' => 'comment',
					'avatar_size' => 80,
					'reply_text' => phresh_icon( 'editor-break' ) . phresh_srt( esc_html__( 'Reply', 'devoted' ) ),
				) ) ); ?>
			</ol>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comments-pagination pagination">
				<?php paginate_comments_links(); ?>
			</nav>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && have_comments() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<div class="comments-closed"><?php esc_html_e( 'Comments are closed.', 'devoted' ); ?></div>
	<?php endif; ?>

	<?php comment_form( array(
		'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
		'title_reply_after' => '</h2>',
		'cancel_reply_before' => false,
		'cancel_reply_after' => false,
		'cancel_reply_link' => phresh_icon( 'no' ) . phresh_srt( esc_html__( 'Cancel Reply', 'phresh' ) ),
	) ); ?>
</div>
