<?php
/**
 * Template part for default header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Longriver
 */

$message                  = get_theme_mod( 'top_panel_text', longriver_theme()->customizer->get_default( 'top_panel_text' ) );
$contact_block_visibility = get_theme_mod( 'header_contact_block_visibility', longriver_theme()->customizer->get_default( 'header_contact_block_visibility' ) );

?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php longriver_header_logo() ?>
			<?php longriver_site_description(); ?>
		</div>

		<?php if ( $contact_block_visibility ) : ?>
			<?php longriver_contact_block( 'header' ); ?>
		<?php endif; ?>

		<?php longriver_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
	</div>
</div>
<div class="header-container_wrap gradient invert">
	<div class="container">
		<div class="header-container__flex">
			<?php longriver_main_menu(); ?>

			<?php longriver_header_btn(); ?>
		</div>
	</div>
</div>
