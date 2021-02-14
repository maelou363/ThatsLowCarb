<?php
/**
 * Thyme child theme editor color palette.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

/**
 * Editor color palette config.
 */
return [
	[
		'name'  => __( 'Button color', 'thyme-theme' ), 
		'slug'  => 'theme-button',
		'color' => get_theme_mod( 'thyme_button_color', thyme_get_default_button_color() ),
	],
	[
		'name'  => __( 'Primary color', 'thyme-theme' ), 
		'slug'  => 'theme-primary',
		'color' => get_theme_mod( 'thyme_primary_color', thyme_get_default_primary_color() ),
	],
	[
		'name'  => __( 'Accent color', 'thyme-theme' ),
		'slug'  => 'theme-secondary',
		'color' => get_theme_mod( 'thyme_accent_color', thyme_get_default_accent_color() ),
	],
	[
		'name'  => __( 'Body color', 'thyme-theme' ),
		'slug'  => 'theme-third',
		'color' => get_theme_mod( 'thyme_body_color', thyme_get_default_body_color() ),
	],
];
