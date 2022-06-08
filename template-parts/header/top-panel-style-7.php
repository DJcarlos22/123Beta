<?php
/**
 * Template part for top panel in header (style-7 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */

// Don't show top panel if all elements are disabled.
if ( ! longriver_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel <?php echo longriver_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php longriver_top_message( '<div class="top-panel__message">%s</div>' ); ?>
				<?php longriver_contact_block( 'header' ); ?>
			</div>

			<div class="top-panel__right">
				<?php longriver_top_menu(); ?>
				<?php longriver_social_list( 'header' ); ?>
				<?php longriver_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
