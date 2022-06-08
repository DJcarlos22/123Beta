<?php
/**
 * Thumbnails configuration.
 *
 * @package Longriver
 */

add_action( 'after_setup_theme', 'longriver_register_image_sizes', 5 );
/**
 * Register image sizes.
 */
function longriver_register_image_sizes() {
	set_post_thumbnail_size( 390, 303, true );

	// Registers a new image sizes.
	add_image_size( 'longriver-thumb-s', 40, 40, true );
	add_image_size( 'longriver-slider-thumb', 120, 117, true );
	add_image_size( 'longriver-thumb-m', 330, 400, true );
	add_image_size( 'longriver-thumb-team', 320, 320, true );
	add_image_size( 'longriver-thumb-m-2', 678, 485, true );
	add_image_size( 'longriver-thumb-masonry', 418, 9999 );
	add_image_size( 'longriver-thumb-l', 1051, 541, true );
	add_image_size( 'longriver-thumb-xl', 1920, 734, true );
	add_image_size( 'longriver-author-avatar', 330, 250, true );

	add_image_size( 'longriver-thumb-270-318', 270, 318, true );
	add_image_size( 'longriver-thumb-945-515', 945, 515, true );
	add_image_size( 'longriver-thumb-990-512', 990, 512, true );
}
