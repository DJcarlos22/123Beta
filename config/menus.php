<?php
/**
 * Menus configuration.
 *
 * @package Longriver
 */

add_action( 'after_setup_theme', 'longriver_register_menus', 5 );
/**
 * Register menus.
 */
function longriver_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'longriver' ),
		'main'         => esc_html__( 'Main', 'longriver' ),
		'main_landing' => esc_html__( 'Landing Main', 'longriver' ),
		'footer'       => esc_html__( 'Footer', 'longriver' ),
		'social'       => esc_html__( 'Social', 'longriver' ),
	) );
}
