<?php
/**
 * Thyme Theme.
 *
 * This file adds the required CSS to the front end to the Thyme Theme.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_action( 'wp_enqueue_scripts', 'thyme_css' );
/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 1.0.0
 */
function thyme_css() {

	$color_link   = get_theme_mod( 'thyme_link_color', thyme_get_default_link_color() );
	$color_button   = get_theme_mod( 'thyme_button_color', thyme_get_default_button_color() );
	$color_banner   = get_theme_mod( 'thyme_banner_color', thyme_get_default_banner_color() );
	$color_accent = get_theme_mod( 'thyme_accent_color', thyme_get_default_accent_color() );
	$color_body = get_theme_mod( 'thyme_body_color', thyme_get_default_body_color() );
	$logo         = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
	
		if ( $logo ) {
		$logo_height           = absint( $logo[2] );
		$logo_max_width        = get_theme_mod( 'thyme_logo_width', 400 );
		$logo_half_width       = $logo_max_width / 2;
		$logo_width            = absint( $logo[1] );
		$logo_ratio            = $logo_width / max( $logo_height, 1 );
		$logo_effective_height = min( $logo_width, $logo_max_width ) / max( $logo_ratio, 1 );
		$logo_padding          = max( 0, ( 50 - $logo_effective_height ) / 2 );
	}

	$css = '';

	$css .= ( thyme_get_default_link_color() !== $color_link ) ? sprintf(
		'

		a,
		.entry-title a:focus,
		.entry-title a:hover,
		.genesis-nav-menu a:focus,
		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		.gs-faq__question:focus,
		.gs-faq__question:hover,
		.menu-toggle:focus,
		.menu-toggle:hover,
		.site-footer a:focus,
		.site-footer a:hover,
		.sub-menu-toggle:focus,
		.sub-menu-toggle:hover {
			color: %1$s;
		}

		',
		$color_link
	) : '';
	
	$css .= ( thyme_get_default_button_color() !== $color_button ) ? sprintf(
		'

		a.button,
		button,
		.button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		input[type="reset"],
		input[type="submit"],
		.entry-content a.button,
		.entry-content a.button:focus,
		.entry-content a.button:hover,
		.widget a.button:focus,
		.widget a.button:hover,
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"],
		.site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover,
		.site-container .wprm-recipe-jump {
			background-color: %1$s;
			color: %2$s;
		}
			
		',
		$color_button,
		thyme_color_contrast( $color_button )
	) : '';
	
	$css .= ( thyme_get_default_banner_color() !== $color_banner ) ? sprintf(
		'

		.thyme-top-banner {
			background-color: %1$s;
			color: %2$s;
		}
		
		.thyme-top-banner a, 
		.thyme-top-banner a:focus, 
		.thyme-top-banner a:hover {
			color: %2$s;
		}
		
		#thyme-top-banner-close, 
		#thyme-top-banner-close:focus, 
		#thyme-top-banner-close:hover {
			color: %2$s;
		}

		',
		$color_banner,
		thyme_color_contrast( $color_banner )
	) : '';

	$css .= ( thyme_get_default_accent_color() !== $color_accent ) ? sprintf(
		'
		.before-footer-cta {
			background-color: %1$s;
			color: %2$s;
		}
		
		.before-footer-cta a {
			color: %2$s;
		}
		
		.wprm-header,
		.wprm-container {
			background-color: %1$s !important;
		}
		
		',
		$color_accent,
		thyme_color_contrast( $color_accent )
	) : '';
	
	$css .= ( thyme_get_default_body_color() !== $color_body ) ? sprintf(
		'

		body,
		::placeholder,
		input, select, textarea,
		.entry-title a,
		.genesis-nav-menu a,
		.site-title a, 
		.site-title a:focus, 
		.site-title a:hover,
		.site-footer a,
		.entry-content a,
		.entry-meta a,
		.comment-respond a,
		.entry-comments a,
		.entry-pings a,
		.footer-widgets a,
		.author-box a,
		.breadcrumb a,
		.more-from-category a,
		.entry-content a:hover,
		.entry-meta a:focus,
		.entry-meta a:hover,
		.comment-respond a:focus,
		.comment-respond a:hover,
		.entry-comments a:focus,
		.entry-comments a:hover,
		.entry-pings a:focus,
		.entry-pings a:hover,
		.footer-widgets a:hover,
		.author-box a:focus,
		.author-box a:hover,
		.breadcrumb a:focus,
		.breadcrumb a:hover,
		.more-from-category a:focus,
		.more-from-category a:hover,
		.before-footer-cta a {
			color: %1$s;
		}

		',
		$color_body
	) : '';

	$css .= ( has_custom_logo() && ( 400 !== $logo_max_width ) ) ? sprintf(
		'
		.wp-custom-logo .site-container .title-area {
			max-width: %1$spx;
		}

		',
		$logo_max_width,
		$logo_half_width
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
