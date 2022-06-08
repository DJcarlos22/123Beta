<?php
/**
 * Plugins configuration example.
 *
 * @var array
 */
$plugins = array(
		'power-builder-integrator' => array(
			'name'   => esc_html__( 'Power Builder Integrator', 'longriver' ),
			'source' => 'remote',
			'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/power-builder-integrator.zip',
			'access' => 'skins',
		),
		'power-builder' => array(
			'name'   => esc_html__( 'Power Builder', 'longriver' ),
			'source' => 'local',
			'path'   => LONGRIVER_THEME_DIR . '/assets/includes/plugins/power-builder.zip',
			'access' => 'skins',
		),
		'cherry-data-importer' => array(
			'name'   => esc_html__( 'Cherry Data Importer', 'longriver' ),
			'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
			'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
			'access' => 'base',
		),
		'cherry-testi' => array(
				'name'   => esc_html__( 'Cherry Testimonials', 'longriver' ),
				'access' => 'skins',
		),
		'cherry-team-members' =>array(
			'name'   => esc_html__( 'Cherry Team Members', 'longriver' ),
			'access' => 'skins',
		),
		'cherry-sidebars' => array(
			'name'   => esc_html__( 'Cherry Sidebars', 'longriver' ),
			'access' => 'skins',
		),
		'cherry-search' => array(
			'name'   => esc_html__( 'Cherry Search', 'longriver' ),
			'access' => 'skins',
		),
		'contact-form-7' => array(
			'name'   => esc_html__( 'Contact Form 7', 'longriver' ),
			'access' => 'skins',
		),
		'mp-timetable' => array(
			'name'   => esc_html__( 'Timetable and Event Schedule', 'longriver' ),
			'access' => 'skins',
		),
	);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'cherry-testi',
				'power-builder',
				'power-builder-integrator',
				'cherry-team-members',
				'cherry-sidebars',
				'cherry-search',
				'contact-form-7',
				'mp-timetable',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp.template-help.com/wordpress_63613',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'name'  => esc_html__( 'LongRiver', 'longriver' ),
		),


	),
);

$texts = array(
	'theme-name' => 'LongRiver '
);

