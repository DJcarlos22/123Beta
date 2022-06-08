<?php
/**
 * Template part for top panel in header (style-6 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */

// Don't show top panel if all elements are disabled.
if ( ! longriver_is_top_panel_visible() ) {
	return;
}
$message                  = get_theme_mod( 'top_panel_text', longriver_theme()->customizer->get_default( 'top_panel_text' ) );
$contact_block_visibility = get_theme_mod( 'header_contact_block_visibility', longriver_theme()->customizer->get_default( 'header_contact_block_visibility' ) );
$social_menu_visibility   = get_theme_mod( 'header_social_links', longriver_theme()->customizer->get_default( 'header_social_links' ) );
?>

<div class="top-panel <?php echo longriver_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php longriver_top_message( '<div class="top-panel__message">%s</div>' ); ?>
				<?php if ( empty( $message ) ) {
					longriver_contact_block( 'header' );
				} ?>
			</div>
			<div class="top-panel__right">
				<?php longriver_top_menu(); ?>
				<?php if ( ! $contact_block_visibility || empty( $message ) ) {
					longriver_social_list( 'header' );
				} ?>
				<?php longriver_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			</div>
		</div>

		<?php if ( $contact_block_visibility && ! empty( $message ) ) : ?>
		<div class="top-panel__bottom">
			<?php longriver_social_list( 'header' ); ?>
			<?php longriver_contact_block( 'header' ); ?>
		</div>
		<?php endif; ?>
	</div>
</div><!-- .top-panel -->
