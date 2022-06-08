<?php
/**
 * Template part for posts pagination.
 *
 * @package Longriver
 */
the_posts_pagination( apply_filters( 'longriver_content_posts_pagination',
	array(
		'prev_text' => sprintf( '<span>%s</span>', esc_html__( 'Previous', 'longriver' ) ),
		'next_text' => sprintf( '<span>%s</span>', esc_html__( 'Next', 'longriver' ) ),
	)
) );
