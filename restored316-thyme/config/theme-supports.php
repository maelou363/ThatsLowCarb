<?php
/**
 * Thyme child theme.
 *
 * Theme supports.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 300,
		'width'       => 800,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	],
	'genesis-accessibility'           => [
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => [
		'primary'   => __( 'Above Header', 'thyme-theme' ),
		'secondary' => __( 'Below Header', 'thyme-theme' ),
		'footer' 	=> __( 'Footer Menu', 'thyme-theme' ),
	],
];
