<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Longriver
 */

$footer_contact_block_visibility = get_theme_mod( 'footer_contact_block_visibility', longriver_theme()->customizer->get_default( 'footer_contact_block_visibility' ) );
?>

<div class="footer-container <?php echo longriver_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<div class="site-info-wrap">
			<?php longriver_footer_logo(); ?>
			<?php if ( $footer_contact_block_visibility ) : ?>
			<div class="site-info__bottom">
			<?php endif; ?>
				<?php longriver_footer_copyright(); ?>
				<?php longriver_contact_block( 'footer' ); ?>
			<?php if ( $footer_contact_block_visibility ) : ?>
			</div>
			<?php endif; ?>
			<?php longriver_footer_menu(); ?>
			<?php longriver_social_list( 'footer' ); ?>
		</div>

	</div><!-- .site-info -->
</div><!-- .container -->
