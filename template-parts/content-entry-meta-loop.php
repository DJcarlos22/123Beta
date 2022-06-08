<?php
/**
 * Template part for displaying entry-meta.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */
?>
<?php
	$utility = longriver_utility()->utility;
	$author_visible = longriver_is_meta_visible( 'blog_post_author', 'loop' );
?>

<?php if ( 'post' === get_post_type() ) : ?>

	<div class="entry-meta">
		<div class="entry-meta__data">
			<?php $utility->meta_data->get_author( array(
				'visible' => $author_visible,
				'class'   => 'posted-by__author',
				'prefix'  => esc_html__( 'By ', 'longriver' ),
				'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
				'echo'    => true,
			) );
			?>

			<?php $date_visible = longriver_is_meta_visible( 'blog_post_publish_date', 'loop' );

			$utility->meta_data->get_date( array(
				'visible' => $date_visible,
				'html'    => '<span class="post__date">%1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s">%6$s%7$s</time></a></span>',
				'class'   => 'post__date-link',
				'echo'    => true,
			) );
			?>

			<?php $comment_visible = longriver_is_meta_visible( 'blog_post_comments', 'loop' );

			$utility->meta_data->get_comment_count( array(
				'visible' => $comment_visible,
				'html'    => '<span class="post__comments">%1$s<a href="%2$s" %3$s %4$s>%5$s%6$s</a></span>',
				'sufix'   => get_comments_number_text( esc_html__( 'No comment(s)', 'longriver' ), esc_html__( '1 comment', 'longriver' ), esc_html__( '% comments', 'longriver' ) ),
				'class'   => 'post__comments-link',
				'echo'    => true,
			) );
			?>
		</div>
	</div><!-- .entry-meta -->

<?php endif; ?>
