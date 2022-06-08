<?php
/**
 * Template for displaying audio post format item content
 *
 * @package Longriver
 */
?>

<?php if ( 'on' === $module->_var( 'show_categories' ) ) {
	?><div class="post__cats"><?php
		echo get_the_category_list( ' ' );
	?></div><?php
} ?>

<div class="tm_pb_content_container">
	<?php $utility = longriver_utility()->utility;
	$permalink     = $utility->satellite->get_post_permalink();
	?>
	<a class="post-featured-content post-quote" href="<?php echo esc_url( $permalink ); ?>">
		<?php do_action( 'cherry_post_format_quote' ); ?>
	</a>

	<?php longriver_get_builder_module_template( 'blog/meta.php', $module ); ?>
	<?php if ( 'on' === $module->_var( 'show_more' ) ) {
		longriver_get_builder_module_template( 'blog/more.php' );
	} ?>
</div>
