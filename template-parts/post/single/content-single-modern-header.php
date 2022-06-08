<?php
/**
 * Template part for displaying modern single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */
?>

<div class="single-modern-header invert">

	<?php
		$utility = longriver_utility()->utility;
	?>

	<div class="post-thumbnail">
		<?php $utility->media->get_image( array(
			'size'        => 'longriver-thumb-xl',
			'mobile_size' => 'longriver-thumb-xl',
			'html'        => '<img class="wp-post-image" src="%3$s" alt="%4$s">',
			'placeholder' => false,
			'echo'        => true,
		) );
		?>
	</div><!-- .post-thumbnail -->

	<div class="container">

		<?php $cats_visible = longriver_is_meta_visible( 'single_post_categories', 'single' );

		$utility->meta_data->get_terms( array(
			'visible'   => $cats_visible,
			'type'      => 'category',
			'before'    => '<div class="post__cats">',
			'after'     => '</div>',
			'echo'      => true,
		) );
		?>

		<header class="entry-header">
			<?php $utility->attributes->get_title( array(
					'class' => 'entry-title',
					'html'  => '<h3 %1$s>%4$s</h3>',
					'echo'  => true,
				) );
			?>
		</header><!-- .entry-header -->

		<?php get_template_part( 'template-parts/content-entry-meta-single' ); ?>

	</div>

</div>
