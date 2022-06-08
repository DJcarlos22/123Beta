<?php
/**
 * Default manifest file
 *
 * @var array
 */
$settings = array(
	'xml'             => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => esc_html__( 'LongRiver', 'longriver' ),
			'full'     => get_template_directory() . '/assets/demo-content/default/default-full.xml',
			'lite'     => get_template_directory() . '/assets/demo-content/default/default-min.xml',
			'thumb'    => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'demo_url' => 'http://ld-wp.template-help.com/wordpress_63613',
		),

	),
	'import'          => array(
		'chunk_size'            => $this->chunk_size,
		'regenerate_chunk_size' => 3,
	),
	'remap'         => array(
		'post_meta' => array(),
		'term_meta' => array(),
		'options'   => array(),
	),
	'export'      => array(
		'message' => esc_html__( 'or export all content with TemplateMonster Data Export tool', 'longriver' ),
		'logo'    => $this->url( 'assets/img/monster-logo.png' ),
		'options' => array(
			'bp-pages',
			'bp-active-components',
			'mp_timetable_general',
			'cherry-team',
			'cherry-team_default',

		),
		'tables' => array(
				'mp_timetable_data',
		),
	),
	'success-links'  => array(
		'home'       => array(
			'label'  => esc_html__( 'View your site', 'longriver' ),
			'type'   => 'primary',
			'target' => '_self',
			'url'    => esc_url( home_url( '/' ) ),
			),
		'customize'  => array(
			'label'  => esc_html__( 'Customize your theme', 'longriver' ),
			'type'   => 'default',
			'target' => '_self',
			'url'    => esc_url( admin_url( 'customize.php' ) ),
		),
	),
	'slider'   => array(
		'path' => 'https://raw.githubusercontent.com/templatemonster/tm-wizard-slider/default/slides.json',
	),
);
