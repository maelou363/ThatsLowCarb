<?php
/**
 * Thyme Theme.
 *
 * This file adds the Customizer additions to the Thyme Theme.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

add_action( 'customize_register', 'thyme_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function thyme_customizer_register( $wp_customize ) {
	
	$childthemesettings = genesis_get_config( 'child-theme-settings' )[ GENESIS_SETTINGS_FIELD ];

	$wp_customize->add_setting(
		'thyme_link_color',
		[
			'default'           => thyme_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_link_color',
			[
				'description' => __( 'Change the hover color of linked titles, menu items, and more.', 'thyme-theme' ),
				'label'       => __( 'Link Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_link_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'thyme_button_color',
		[
			'default'           => thyme_get_default_button_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_button_color',
			[
				'description' => __( 'Change the default background color of all buttons.', 'thyme-theme' ),
				'label'       => __( 'Button Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_button_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'thyme_primary_color',
		[
			'default'           => thyme_get_default_primary_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_primary_color',
			[
				'description' => __( 'Change the primary color for your site. This affects the overlay background of post titles and the grid section title background on your site.', 'thyme-theme' ),
				'label'       => __( 'Primary Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_primary_color',
			]
		)
	);
	
		$wp_customize->add_setting(
		'thyme_banner_color',
		[
			'default'           => thyme_get_default_banner_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_banner_color',
			[
				'description' => __( 'Change the banner color for your site. This affects the Top Banner of our site only.', 'thyme-theme' ),
				'label'       => __( 'Banner Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_banner_color',
			]
		)
	);

	$wp_customize->add_setting(
		'thyme_accent_color',
		[
			'default'           => thyme_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_accent_color',
			[
				'description' => __( 'Change the accent color for your site. This affects the Bottom CTA space.', 'thyme-theme' ),
				'label'       => __( 'Accent Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_accent_color',
			]
		)
	);
	
	$wp_customize->add_setting(
		'thyme_body_color',
		[
			'default'           => thyme_get_default_body_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'thyme_body_color',
			[
				'description' => __( 'Change the default color for your body text and heading titles.', 'thyme-theme' ),
				'label'       => __( 'Body Color', 'thyme-theme' ),
				'section'     => 'colors',
				'settings'    => 'thyme_body_color',
			]
		)
	);

	$wp_customize->add_setting(
		'thyme_logo_width',
		[
			'default'           => 400,
			'sanitize_callback' => 'absint',
			'validate_callback' => 'thyme_validate_logo_width',
		]
	);

	// Adds a control for the logo size.
	$wp_customize->add_control(
		'thyme_logo_width',
		[
			'label'       => __( 'Logo Width', 'thyme-theme' ),
			'description' => __( 'The maximum width of the logo in pixels.', 'thyme-theme' ),
			'priority'    => 9,
			'section'     => 'title_tagline',
			'settings'    => 'thyme_logo_width',
			'type'        => 'number',
			'input_attrs' => [
				'min' => 100,
			],

		]
	);
	
	// Adds control for the nav mini logo upload.
	$wp_customize->add_setting(
		'thyme-mini-logo',
		array(
			'default'           => thyme_get_default_mini_logo(),
			'sanitize_callback' => 'esc_attr',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thyme-mini-logo',
			array(
				'description' => __( 'Select an image to display to the left of your top navigation menu.', 'thyme-theme' ),
				'label'       => __( 'Nav Mini Logo', 'thyme-theme' ),
				'section'     => 'title_tagline',
				'settings'    => 'thyme-mini-logo',
			)
		)
	);
	
	// Adds control for the footer logo upload.
	$wp_customize->add_setting(
		'thyme-footer-logo',
		array(
			'default'           => thyme_get_default_footer_logo(),
			'sanitize_callback' => 'esc_attr',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thyme-footer-logo',
			array(
				'description' => __( 'Select an image to display above the footer credits.', 'thyme-theme' ),
				'label'       => __( 'Footer Logo', 'thyme-theme' ),
				'section'     => 'title_tagline',
				'settings'    => 'thyme-footer-logo',
			)
		)
	);
	
	// Top Banner Section.
	$wp_customize->add_section(
		'thyme-top-banner-settings', array(
			'description' => sprintf( '<strong>%s</strong><p>%s</p>', __( 'Modify the settings for the top banner section.', 'thyme-theme' ), __( 'Each time the customizer is opened, the top banner will be displayed in the live preview so you can easily customize the content.', 'thyme-theme' ) ),
			'title'       => __( 'Top Banner Section', 'thyme-theme' ),
		)
	);

	$wp_customize->add_setting(
		'thyme-top-banner-visibility', array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'thyme-top-banner-visibility', array(
			'description' => __( 'Check the box to display a dismissible banner at the top of all pages.', 'thyme-theme' ),
			'label'       => __( 'Show Top Banner?', 'thyme-theme' ),
			'section'     => 'thyme-top-banner-settings',
			'settings'    => 'thyme-top-banner-visibility',
			'type'        => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'thyme-top-banner-text', array(
			'default'           => thyme_get_default_top_banner_text(),
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh',
		)
	);

	$wp_customize->add_control(
		'thyme-top-banner-text', array(
			'description' => __( 'Change the text for the dismissible banner (allows HTML).', 'thyme-theme' ),
			'label'       => __( 'Top Banner Text', 'thyme-theme' ),
			'section'     => 'thyme-top-banner-settings',
			'settings'    => 'thyme-top-banner-text',
			'type'        => 'textarea',
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'thyme-top-banner-text', array(
				'selector'        => '.thyme-top-banner',
				'settings'        => array( 'thyme-top-banner-text' ),
				'render_callback' => function() {
					return get_theme_mod( 'thyme-top-banner-text' );
				},
			)
		);
	}
	
	$wp_customize->add_setting(
		'thyme_archive_full_width_content',
		[
			'default'           => $childthemesettings['content_archive_full_width'],
			'sanitize_callback' => 'absint',
			'type'              => 'theme_mod',
		]
	);

	// Add a control for the show archive post content.
	$wp_customize->add_control(
		'thyme_archive_full_width_content',
		[
			'label'    => __( 'Enable Full Width', 'thyme-theme' ),
			'priority' => 9,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_full_width_content',
			'type'     => 'checkbox',
			'std'      => 1,

		]
	);

	$wp_customize->add_setting(
		'thyme_archive_grid',
		[
			'default'           => $childthemesettings['content_archive_grid'],
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the select grid.
	$wp_customize->add_control(
		'thyme_archive_grid',
		[
			'label'       => __( 'Grid Column', 'thyme-theme' ),
			'description' => __( 'Select column for archive.', 'thyme-theme' ),
			'priority'    => 9,
			'section'     => 'genesis_archives',
			'settings'    => 'thyme_archive_grid',
			'type'        => 'select',
			'choices'     => array(
				'2' => __( '2', 'thyme-theme' ),
				'3' => __( '3', 'thyme-theme' ),
				'4' => __( '4', 'thyme-theme' ),
			),

		]
	);

	$wp_customize->add_setting(
		'thyme_archive_show_info',
		[
			'default'           => $childthemesettings['content_archive_show_info'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post info.
	$wp_customize->add_control(
		'thyme_archive_show_info',
		[
			'label'    => __( 'Show Post Info', 'thyme-theme' ),
			'priority' => 12,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_show_info',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_show_content',
		[
			'default'           => $childthemesettings['content_archive_show_content'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post content.
	$wp_customize->add_control(
		'thyme_archive_show_content',
		[
			'label'    => __( 'Show Post Content', 'thyme-theme' ),
			'priority' => 13,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_show_content',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_show_meta',
		[
			'default'           => $childthemesettings['content_archive_show_meta'],
			'type'              => 'theme_mod',
			'sanitize_callback' => 'absint',
		]
	);

	// Add a control for the show archive post meta.
	$wp_customize->add_control(
		'thyme_archive_show_meta',
		[
			'label'    => __( 'Show Post Meta', 'thyme-theme' ),
			'priority' => 14,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_show_meta',
			'type'     => 'checkbox',
			'std'      => 1,
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_image_position',
		[
			'default'           => $childthemesettings['content_archive_image_position'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for the select grid.
	$wp_customize->add_control(
		'thyme_archive_image_position',
		[
			'label'    => __( 'Image Position', 'thyme-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_image_position',
			'type'     => 'select',
			'choices'  => array(
				'after-title'  => __( 'After Title', 'thyme-theme' ),
				'before-title' => __( 'Before Title', 'thyme-theme' ),
			),
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_meta_position',
		[
			'default'           => $childthemesettings['content_archive_meta_position'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for add meta text.
	$wp_customize->add_control(
		'thyme_archive_meta_position',
		[
			'label'    => __( 'Post Meta Position', 'thyme-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_meta_position',
			'type'     => 'select',
			'choices'  => array(
				'no'           => __( 'No Changes', 'thyme-theme' ),
				'after-title'  => __( 'After Title', 'thyme-theme' ),
				'before-title' => __( 'Before Title', 'thyme-theme' ),
			),
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_info_text',
		[
			'default'           => $childthemesettings['content_archive_info_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for info text.
	$wp_customize->add_control(
		'thyme_archive_info_text',
		[
			'label'    => __( 'Post Info Text', 'thyme-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_info_text',
			'type'     => 'text',
		]
	);

	$wp_customize->add_setting(
		'thyme_archive_meta_text',
		[
			'default'           => $childthemesettings['content_archive_meta_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for meta text.
	$wp_customize->add_control(
		'thyme_archive_meta_text',
		[
			'label'    => __( 'Post Meta Text', 'thyme-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_archive_meta_text',
			'type'     => 'text',
		]
	);

	$wp_customize->add_setting(
		'thyme_more_text',
		[
			'default'           => $childthemesettings['read_more_text'],
			'sanitize_callback' => 'sanitize_text_field',
		]
	);

	// Add a control for meta text.
	$wp_customize->add_control(
		'thyme_more_text',
		[
			'label'    => __( 'Read More Text (if applied) ', 'thyme-theme' ),
			'priority' => 20,
			'section'  => 'genesis_archives',
			'settings' => 'thyme_more_text',
			'type'     => 'text',
		]
	);

}

/**
 * Displays a message if the entered width is not numeric or greater than 100.
 *
 * @param object $validity The validity status.
 * @param int    $width The width entered by the user.
 * @return int The new width.
 */
function thyme_validate_logo_width( $validity, $width ) {

	if ( empty( $width ) || ! is_numeric( $width ) ) {
		$validity->add( 'required', __( 'You must supply a valid number.', 'thyme-theme' ) );
	} elseif ( $width < 100 ) {
		$validity->add( 'logo_too_small', __( 'The logo width cannot be less than 100.', 'thyme-theme' ) );
	}

	return $validity;

}
