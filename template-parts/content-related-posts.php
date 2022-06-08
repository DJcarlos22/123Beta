<?php
/**
 * The template for displaying related posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Longriver
 * @subpackage single-post
 */
?>

<div class="related-post page-content<?php echo esc_attr( $grid_class ); ?><?php if ( has_post_thumbnail() ) echo 'has-post-thumbnail'; ?>">
	<div class="entry-meta">
		<div class="entry-meta__data">
			<?php $utility->meta_data->get_author( array(
				'visible' => $settings['author_visible'],
				'class'   => 'posted-by__author',
				'prefix'  => esc_html__( 'By ', 'longriver' ),
				'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
				'echo'    => true,
			) );
			?>

			<?php $utility->meta_data->get_date( array(
				'visible' => $settings['date_visible'],
				'html'    => '<span class="post__date">%1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s">%6$s%7$s</time></a></span>',
				'class'   => 'post__date-link',
				'echo'    => true,
			) );
			?>

			<?php $utility->meta_data->get_comment_count( array(
				'visible' => $settings['comment_count'],
				'html'    => '<span class="post__comments">%1$s<a href="%2$s" %3$s %4$s>%5$s%6$s</a></span>',
				'sufix'   => get_comments_number_text( esc_html__( 'No comment(s)', 'longriver' ), esc_html__( '1 comment', 'longriver' ), esc_html__( '% comments', 'longriver' ) ),
				'class'   => 'post__comments-link',
				'echo'    => true,
			) );
			?>
		</div>
	</div>

	<figure class="post-thumbnail">
		<?php $utility->media->get_image( array(
			'visible'     => $settings['image_visible'],
			'class'       => 'post-thumbnail__img',
			'html'        => '<a href="%1$s" class="post-thumbnail__link post-thumbnail--fullwidth" ><img src="%3$s" alt="%4$s" %2$s %5$s ></a>',
			'placeholder' => false,
			'size'        => 'post-thumbnail',
			'mobile_size' => 'post-thumbnail',
			'echo'        => true
		) );
		?>

		<?php $utility->meta_data->get_terms( array(
			'type'      => 'category',
			'visible'   => $settings['category_visible'],
			'before'    => '<div class="post__cats">',
			'after'     => '</div>',
			'echo'      => true
		) );
		?>
	</figure><!-- .post-thumbnail -->
	<header class="entry-header">
		<?php echo $title; ?>
	</header>

	<div class="entry-content"><?php
		echo $excerpt;
	?></div>

	<?php $utility->meta_data->get_terms( array(
		'visible'   => $settings['tag_visible'],
		'type'      => 'post_tag',
		'delimiter' => '',
		'before'    => '<div class="post__tags">',
		'after'     => '</div>',
		'prefix'    => '',
		'echo'      => true,
	) );
	?>
</div>
