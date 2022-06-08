<?php
/**
 * The template for displaying comments.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 *
 * @package Longriver
 */
?>
<div class="comment-author vcard">
	<?php echo longriver_comment_author_avatar( array( 'size' => 120 ) ); ?>
</div>
<div class="comment-content-wrap">
	<footer class="comment-meta">
		<div class="comment-metadata">
			<?php echo esc_html__( 'by ', 'longriver' ) . '<span class="fn">' . get_comment_author_link() . '</span>'; ?>
			<?php echo longriver_get_comment_date( array( 'format' => 'M d, Y' ) ); ?>
		</div>
		<div class="reply">
			<?php echo longriver_get_comment_reply_link( array( 'reply_text' => esc_html__( 'Reply', 'longriver' ) ) ); ?>
		</div>
	</footer>
	<div class="comment-content">
		<?php echo longriver_get_comment_text(); ?>
	</div>
</div>
