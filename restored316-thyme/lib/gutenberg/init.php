<?php
/**
 * Gutenberg theme support.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_action( 'wp_enqueue_scripts', 'thyme_pro_enqueue_gutenberg_frontend_styles' );
/**
 * Enqueues Gutenberg front-end styles.
 *
 * @since 1.0.0
 */
function thyme_pro_enqueue_gutenberg_frontend_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg',
		CHILD_URL . '/lib/gutenberg/front-end.css',
		[ genesis_get_theme_handle() ],
		genesis_get_theme_version()
	);

}

add_action( 'enqueue_block_editor_assets', 'thyme_pro_block_editor_styles' );
/**
 * Enqueues Gutenberg admin editor fonts and styles.
 *
 * @since 1.0.0
 */
function thyme_pro_block_editor_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-gutenberg-fonts',
		'https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700|Noto+Serif+SC:300,400,700&display=swapp',
		[],
		genesis_get_theme_version()
	);

}

add_theme_support( 'editor-styles' );

add_editor_style( '/lib/gutenberg/style-editor.css' );

add_theme_support( 'align-wide' );

add_theme_support( 'responsive-embeds' );

add_theme_support( 'editor-font-sizes', genesis_get_config( 'editor-font-sizes' ) );

add_theme_support( 'editor-color-palette', genesis_get_config( 'editor-color-palette' ) );

require_once CHILD_DIR . '/lib/gutenberg/inline-styles.php';

add_action( 'after_setup_theme', 'thyme_pro_content_width', 0 );
/**
 * Sets content width to match the “wide” Gutenberg block width.
 */
function thyme_pro_content_width() {

	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound -- See https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/924
	$GLOBALS['content_width'] = apply_filters( 'thyme_pro_content_width', 1200 );

}
