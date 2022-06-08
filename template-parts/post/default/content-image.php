<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>

	<?php $utility       = longriver_utility()->utility;
	$blog_featured_image = get_theme_mod( 'blog_featured_image', longriver_theme()->customizer->get_default( 'blog_featured_image' ) );
	$size                = longriver_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) );
	$cats_visible        = longriver_is_meta_visible( 'blog_post_categories', 'loop' );
	?>

	<?php get_template_part( 'template-parts/content-entry-meta-loop' ); ?>

	<?php if ( 'small' === $blog_featured_image && has_post_thumbnail() ) : ?>
		<div class="post-format-wrap">
			<?php do_action( 'cherry_post_format_image', array( 'size' => $size['size'] ) ); ?>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="post-list__item-content">
		<?php if ( 'small' !== $blog_featured_image ) : ?>
			<div class="post-format-wrap">
				<?php do_action( 'cherry_post_format_image', array( 'size' => $size['size'] ) ); ?>

				<?php $cats_visible = longriver_is_meta_visible( 'blog_post_categories', 'loop' );

				$utility->meta_data->get_terms( array(
					'visible'   => $cats_visible,
					'type'      => 'category',
					'before'    => '<div class="post__cats">',
					'after'     => '</div>',
					'echo'      => true,
				) );
				?>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>

		<?php if ( 'small' === $blog_featured_image ) :
			$utility->meta_data->get_terms( array(
				'visible'   => $cats_visible,
				'type'      => 'category',
				'before'    => '<div class="post__cats">',
				'after'     => '</div>',
				'echo'      => true,
			) );
		endif; ?>

		<header class="entry-header">
			<?php longriver_sticky_label(); ?>

			<?php $title_html = ( is_single() ) ? '<h3 %1$s>%4$s</h3>' : '<h6 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h6>';

			$utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => $title_html,
				'echo'  => true,
			) );
			?>
		</header><!-- .entry-header -->

		<div class="entry-content"><?php
			$blog_content = get_theme_mod( 'blog_posts_content', longriver_theme()->customizer->get_default( 'blog_posts_content' ) );
			$length             = ( 'full' === $blog_content ) ? -1 : 55;
			$content_visible    = ( 'none' !== $blog_content ) ? true : false;
			$content_type       = ( 'full' !== $blog_content ) ? 'post_excerpt' : 'post_content';

			$utility->attributes->get_content( array(
				'visible'      => $content_visible,
				'length'       => $length,
				'content_type' => $content_type,
				'echo'         => true,
			) );
		?></div><!-- .entry-content -->

		<?php $tags_visible = longriver_is_meta_visible( 'blog_post_tags', 'loop' );

		$utility->meta_data->get_terms( array(
			'visible'   => $tags_visible,
			'type'      => 'post_tag',
			'delimiter' => '',
			'before'    => '<div class="post__tags h6-style">',
			'after'     => '</div>',
			'prefix'    => '',
			'echo'      => true,
		) );
		?>

		<footer class="entry-footer">
			<?php $btn_text = get_theme_mod( 'blog_read_more_text', longriver_theme()->customizer->get_default( 'blog_read_more_text' ) );
			$btn_visible    = $btn_text ? true : false;

			$utility->attributes->get_button( array(
				'visible' => $btn_visible,
				'class'   => 'post-btn btn',
				'text'    => $btn_text,
				'html'    => '<a href="%1$s" %3$s>%4$s</a>',
				'echo'    => true,
			) );
			?>

			<?php longriver_share_buttons( 'loop' ); ?>
		</footer><!-- .entry-footer -->
	</div><!-- .post-list__item-content -->

</article><!-- #post-## -->
