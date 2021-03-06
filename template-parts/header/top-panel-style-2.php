<?php
/**
 * Template part for top panel in header (style-2 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */

// Don't show top panel if all elements are disabled.
if ( ! longriver_is_top_panel_visible() ) {
	return;
}
?>

<div class="top-panel <?php echo longriver_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php longriver_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			</div>
			<div class="top-panel__right">
				<?php longriver_top_menu(); ?>
				<?php longriver_social_list( 'header' ); ?>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
