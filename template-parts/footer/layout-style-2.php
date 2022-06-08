<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package Longriver
 */

?>
<div class="footer-container <?php echo longriver_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<?php
			longriver_footer_logo();
			longriver_footer_copyright();
			longriver_contact_block( 'footer' );
			longriver_footer_menu();
			longriver_social_list( 'footer' );
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
