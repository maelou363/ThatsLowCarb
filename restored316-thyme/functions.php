<?php
/**
 * Thyme Theme.
 *
 * This file adds functions to the Thyme Theme.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once CHILD_DIR . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'thyme_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function thyme_localization_setup() {

	load_child_theme_textdomain( 'thyme-theme', CHILD_DIR . '/languages' );

}

// Adds helper functions.
require_once CHILD_DIR . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once CHILD_DIR . '/lib/customize.php';

// Includes Customizer CSS.
require_once CHILD_DIR . '/lib/output.php';

// Adds Custom Actions functions.
require_once CHILD_DIR . '/lib/custom-actions.php';

// Adds WooCommerce support.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once CHILD_DIR . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 1.0.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once CHILD_DIR . '/lib/gutenberg/init.php';
}

add_action( 'wp_enqueue_scripts', 'thyme_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function thyme_enqueue_scripts_styles() {

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		'//fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700|Noto+Serif+SC:300,400,700&display=swap',
		[],
		genesis_get_theme_version()
	);
	
	wp_enqueue_style( 'dashicons' );
	
	wp_enqueue_script( 'thyme-block-effects', get_stylesheet_directory_uri() . '/js/block-effects.js', array(), '1.0.0', true );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script(
		genesis_get_theme_handle() . '-responsive-menu',
		CHILD_URL . "/js/responsive-menus{$suffix}.js",
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);

	wp_localize_script(
		genesis_get_theme_handle() . '-responsive-menu',
		'genesis_responsive_menu',
		thyme_responsive_menu_settings()
	);

	wp_enqueue_script(
		genesis_get_theme_handle() . '-smooth-scroll',
		CHILD_URL . '/js/smooth-scroll.js',
		[ 'jquery' ],
		genesis_get_theme_version(),
		true
	);
	
	if ( class_exists( 'FacetWP' ) ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-facetwp',
			get_stylesheet_directory_uri() . '/lib/facetwp/facetwp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);
	}
	
	// Setup page if has top banner.
	if ( get_theme_mod( 'thyme-top-banner-visibility', true ) ) {

		wp_enqueue_script( 'top-banner-js', get_stylesheet_directory_uri() . '/js/top-banner.js', array( 'jquery' ), CHILD_DIR, true );

	}

}

add_action( 'body_class', 'thyme_top_banner_classes' );
/**
 * Adds top-banner body classes.
 *
 * @since 1.0.0
 *
 * @param array $classes Current classes.
 * @return array The new classes.
 */
function thyme_top_banner_classes( $classes ) {

	if ( get_theme_mod( 'thyme-top-banner-visibility', true ) ) {

		$classes[] = 'top-banner-hidden';

		if ( is_customize_preview() ) {
			$classes[] = 'customizer-preview';
		}
	}

	return $classes;

}


/**
 * Defines responsive menu settings.
 *
 * @since 1.0.0
 */
function thyme_responsive_menu_settings() {

	$settings = array(
		'mainMenu'          => __( 'Menu', 'thyme-theme' ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', 'thyme-theme' ),
		'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'       => array(
			'combine' => array(
				'.nav-header',
				'.nav-secondary',
				'.nav-primary',
			),
		),
	);

	return $settings;

}

//* Hook menu in footer
add_action( 'genesis_footer', 'thyme_footer_menu', 7 );
function thyme_footer_menu() {
    genesis_nav_menu( array(
        'theme_location' => 'footer',
        'depth'          => 1,
    ) );
}

add_action( 'after_setup_theme', 'thyme_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.2.0
 */
function thyme_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'thyme_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 1.2.0
 */
function thyme_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'vertical-entry-image', 400, 600, TRUE );
	add_image_size( 'horizontal-entry-image', 900, 600, TRUE );
	add_image_size( 'genesis-singular-images', 1280, 400, true );
}
  
add_filter('image_size_names_choose', 'thyme_image_sizes');
function thyme_image_sizes($sizes) {
        $addsizes = array(
                "vertical-entry-image" => __( "Vertical Entry Image"),
                "horizontal-entry-image" => __( "Horizontal Entry Image")
                );
        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
}

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav', 5 );

//* Load Entry Navigation
add_action( 'genesis_after_entry', 'genesis_prev_next_post_nav', 1 );

// Reposition Related Posts if plugin is active
add_filter( 'rp4wp_append_content', '__return_false' );
add_action( 'genesis_after_header', 'add_related_posts' );
	function add_related_posts() {
		if( function_exists('rp4wp') & is_singular('post')) {
			rp4wp_children();
		}
	}

// Reposition featured image on single posts
remove_action( 'genesis_entry_content', 'genesis_do_singular_image', 8 );
add_action( 'genesis_before_content', 'genesis_do_singular_image' );

add_filter( 'genesis_author_box_gravatar_size', 'thyme_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function thyme_author_box_gravatar( $size ) {

	return 120;

}

add_filter( 'genesis_comment_list_args', 'thyme_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function thyme_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}

add_action( 'genesis_before_footer', 'thyme_before_footer_cta', 9 );
/**
 * Hooks in before footer CTA widget area.
 *
 * @since 1.0.0
 */
function thyme_before_footer_cta() {

	genesis_widget_area(
		'before-footer-cta',
		array(
			'before' => '<div class="before-footer-cta"><div class="wrap">',
			'after'  => '</div></div>',
		)
	);

}

add_action( 'genesis_before_footer', 'thyme_before_footer_insta', 12 );
/**
 * Hooks in before footer Instagram widget area.
 *
 * @since 1.0.0
 */
function thyme_before_footer_insta() {

	genesis_widget_area(
		'before-footer-insta',
		array(
			'before' => '<div class="before-footer-insta"><div class="wrap">',
			'after'  => '</div></div>',
		)
	);

}

add_filter( 'genesis_nav_items', 'thyme_social_icons', 10, 2 );
add_filter( 'wp_nav_menu_items', 'thyme_social_icons', 10, 2 );
/**
 * Adds Social Media, and Mini Logo to Primary Navigation
 *
 * @since 1.0.0
 *
 */
function thyme_social_icons($menu, $args) {
	$args = (array)$args;
	if ( 'primary' !== $args['theme_location'] )
		return $menu;
	
	ob_start();
	$mini_logo      = get_theme_mod( 'thyme-mini-logo', thyme_get_default_mini_logo() );
	$mini_logo_link = sprintf( '<a class="mini-logo-link" href="%1$s"><img class="mini-logo" src="%2$s" alt="%3$s" /></a>', trailingslashit( home_url() ), esc_url( $mini_logo ), get_bloginfo( 'name' ) );

	if ( $mini_logo ) {
		echo $mini_logo_link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	
		echo '<li class="nav-social">';
		genesis_widget_area('nav-social-menu');
		echo '</li>';
	$social = ob_get_clean();
	return $menu . $social;
	
}

add_filter( 'genesis_before_footer', 'thyme_custom_footer_logo', 8 );
/**
 * Outputs the footer logo above the footer credits.
 *
 * @since 1.2.0
 */
function thyme_custom_footer_logo() {

	$footer_logo      = get_theme_mod( 'thyme-footer-logo', thyme_get_default_footer_logo() );
	$footer_logo_link = sprintf( '<a class="footer-logo-link" href="%1$s"><img class="footer-logo" src="%2$s" alt="%3$s" /></a>', trailingslashit( home_url() ), esc_url( $footer_logo ), get_bloginfo( 'name' ) );

	if ( $footer_logo ) {
		echo $footer_logo_link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

}

add_action( 'genesis_before', 'thyme_do_top_banner' );
/**
 * Output the Top Banner if visible.
 *
 * @since 1.0.0
 */
function thyme_do_top_banner() {

	if ( get_theme_mod( 'thyme-top-banner-visibility', true ) ) {

		$button = sprintf( '<button id="thyme-top-banner-close"><span class="dashicons dashicons-no-alt"></span><span class="screen-reader-text">%s</span></button>', __( 'Close Top Banner', 'thyme-theme' ) );
		printf(
			'<div class="thyme-top-banner">%s%s</div>',
			get_theme_mod( 'thyme-top-banner-text', thyme_get_default_top_banner_text() ),
			$button
		);

	}

}

add_shortcode( 'get_sidebar', 'sidebar_shortcode' );
/**
 * Get Sidebar function.
 *
 * @since 1.0.0
 *
 * @param  array  $atts    Passed Arguments to Shortcode.
 * @param  string $content Passed content between opening and closing shortcode.
 * @return html Sidebar.
 */
function sidebar_shortcode( $atts, $content = 'null' ) {
	$allatts = shortcode_atts( array( 'id' => '' ), $atts );

	$id = $allatts['id'];

	ob_start();
	genesis_widget_area(
		$id,
		array(
			'before' => "<div id=\"$id\" class=\"$id\"><div class=\"widget-area\"><div class=\"wrap\">",
			'after'  => '</div></div></div>',
		)
	);
	$sidebar = ob_get_contents();
	ob_end_clean();

	return $sidebar;
}

/**
 * Function to select grid column class
 *
 * @since 1.0.0
 *
 * @param  Number $grid Grid Number.
 * @return string Class name for Grid.
 */
function thyme_column_class( $grid ) {
	$classname = array(
		'2' => 'one-half',
		'3' => 'one-third',
		'4' => 'one-fourth',
	);

	return $classname[ $grid ];

}


add_filter( 'post_class', 'thyme_post_class' );
/**
 * Function to apply class to post.
 *
 * @since 1.0.0
 *
 * @param  array $classes Classes applied to Post.
 * @return array Classes with appended new classes.
 */
function thyme_post_class( $classes ) {
	global $wp_query;

	$childthemesettings = genesis_get_config( 'child-theme-settings' )[ GENESIS_SETTINGS_FIELD ];

	if ( is_front_page() || is_singular() ) {
		return $classes;
	}

	if ( class_exists( 'woocommerce' ) ) {

		$shop = get_option( 'woocommerce_shop_page_id' );

		if ( is_post_type_archive( 'product' ) || is_page( $shop ) ) {
			return $classes;
		}
	}

	$grid = get_theme_mod( 'thyme_archive_grid', $childthemesettings['content_archive_grid'] );

	$class = thyme_column_class( $grid );

	$classes[] = $class;

	if ( 0 === $wp_query->current_post % $grid ) {
		$classes[] = 'first';
	}

	return $classes;
}

// Registers widget areas.
genesis_register_sidebar( array(
	'id'          => 'nav-social-menu',
	'name'        => __( 'Nav Social Menu', 'thyme-theme' ),
	'description' => __( 'This is the nav social menu section.', 'thyme-theme' ),
) );
genesis_register_sidebar(
	array(
	'id'          => 'before-footer-cta',
	'name'        => __( 'Before Footer CTA', 'thyme-theme' ),
	'description' => __( 'This is the before footer CTA section.', 'thyme-theme' ),
) );
genesis_register_sidebar(
	array(
	'id'          => 'before-footer-insta',
	'name'        => __( 'Footer Instagram', 'thyme-theme' ),
	'description' => __( 'This is the before footer instagram section.', 'thyme-theme' ),
) );
genesis_register_sidebar(
	array(
	'id'          => 'block-sidebar',
	'name'        => __( 'Block Sidebar', 'thyme-theme' ),
	'description' => __( 'This is the front page sidebar section.', 'thyme-theme' ),
	)
);
