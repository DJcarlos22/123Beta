<?php
/**
 * Template for displaying read more button
 *
 * @package Longriver
 */
?>
<?php
	tm_builder_core()->utility()->attributes->get_button( array(
		'text'  => esc_html__( 'Read More', 'longriver' ),
		'class' => 'post-btn btn',
		'html'  => '<a href="%1$s" %3$s>%4$s%5$s</a>',
		'echo'  => true,
	) );
