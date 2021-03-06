<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */
?>

<div class="entry-header<?php if ( has_post_thumbnail() ) echo ' has-post-thumbnail'; ?><?php echo has_post_thumbnail() ? ' invert' : ''; ?>">

	<?php
		$utility = longriver_utility()->utility;
		$sub_title = get_post_meta( $post->ID, 'sub_title', true );
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
		<?php $utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => '<h3 %1$s>%4$s</h3>',
				'echo'  => true,
			) );
		?>

		<?php if( $sub_title ) echo '<p class="entry-sub-title">' . $sub_title . '</p>' ?>
	</div>

</div>
