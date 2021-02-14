<?php
/**
 * Thyme Theme.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Thyme Theme
 * @author  Restored 316 // Lauren Gaige
 * @license GPL-2.0-or-later
 * @link    http://www.restored316designs.com/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'Atomic Blocks', 'thyme-theme' ),
			'slug'       => 'atomic-blocks/atomicblocks.php',
			'public_url' => 'https://atomicblocks.com/',
		],
		[
			'name'       => __( 'Simple Social Icons', 'thyme-theme' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		],
		[
			'name'       => __( 'Genesis eNews Extended', 'thyme-theme' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		],
		[
			'name'       => __( 'WPForms Lite', 'thyme-theme' ),
			'slug'       => 'wpforms-lite/wpforms.php',
			'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
		],
		[
			'name'       => __( 'WP Recipe Maker', 'thyme-theme' ),
			'slug'       => 'wp-recipe-maker/wp-recipe-maker.php',
			'public_url' => 'https://wordpress.org/plugins/wp-recipe-maker/',
		],
		[
			'name'       => __( 'Related Posts for WordPress', 'thyme-theme' ),
			'slug'       => 'related-posts-for-wp/related-posts-for-wp.php',
			'public_url' => 'https://wordpress.org/plugins/related-posts-for-wp/',
		],
		[
			'name'       => __( 'Smash Balloon Social Photo Feed', 'thyme-theme' ),
			'slug'       => 'instagram-feed/instagram-feed.php',
			'public_url' => 'https://wordpress.org/plugins/instagram-feed/',
		],
	],
	'content'          => [
		'home2' => [
			'post_title'     => 'Home Option #2',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home2.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'home3' => [
			'post_title'     => 'Home Option #3',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/home3.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'pricing' => [
			'post_title'     => 'Pricing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/pricing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'about'   => [
			'post_title'     => 'About',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'sales-page'   => [
			'post_title'     => 'Sales Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/sales-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'contact' => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'category-index' => [
			'post_title'     => 'Recipe Index',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/category-index.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'landing' => [
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'instagram' => [
			'post_title'     => 'Instagram',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/instagram.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'page_template'  => 'page-templates/landing.php',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
		'facetwp' => [
			'post_title'     => 'FacetWP Recipe Index',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/facet-index.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_title' 		   => true,
				'_genesis_hide_singular_image' => true,
			],
		],
	],
	'navigation_menus' => [
		'primary'   => [
			'homepage' => [
				'title' => 'Home',
			],
			'about'    => [
				'title' => 'About',
			],
			'contact'  => [
				'title' => 'Contact',
			],
		],
		'footer'   => [
			'category-index'  => [
				'title' => 'Recipe Index',
			],
			'sales-page'  => [
				'title' => 'Sales Page',
			],
			'pricing'  => [
				'title' => 'Pricing',
			],
		],
	],
	'widgets'          => [
		'header-right' => [
			[
				'type' => 'nav_menu',
				'args' => [
					'title'			=> '',
					'menu'          => 'footer-menu',
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'sidebar' => [
			[
				'type' => 'text',
				'args' => [
					'title'   => 'Hey! It is nice to meet you!',
					'content' => 'UPLOAD YOUR IMAGE HERE. <br> Write something here about yourself!',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'NEVER MISS A POST',
					'text'        => '',
					'fname-field' => 'FNAME',
					'email-field' => 'EMAIL',
					'fname_text'  => 'First Name',
					'input_text'  => 'Email',
					'button_text' => 'Join the Others!',
					'action'      => '#',
					'filter'      => 1,
					'visual'      => 1,
				],
			],
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '40',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#6E8843',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
			[
				'type' => 'categories',
				'args' => [
					'title'  => 'Search by Category',
					'dropdown' => 1,
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'nav-social-menu' => [
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '30',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'alignleft',
					'icon_color'             => '#6E8843',
					'icon_color_hover'       => '#000000',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
		],
		'before-footer-cta' => [
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'Never miss a recipe',
					'text'        => 'Subscribe below to receive a 30 day meal plan',
					'fname-field' => 'FNAME',
					'email-field' => 'EMAIL',
					'fname_text'  => 'First Name',
					'input_text'  => 'Email',
					'button_text' => 'Go',
					'action'      => '#',
					'filter'      => 1,
					'visual'      => 1,
				],
			],
		],
		'before-footer-insta' => [
			[
				'type' => 'custom_html',
				'args' => [
					'title'   => '',
					'content' => '[instagram-feed num=7 cols=7 showheader=false showbutton=false showfollow=false]',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
		],
		'block-sidebar' => [
			[
				'type' => 'text',
				'args' => [
					'title'   => 'Hey! It is nice to meet you!',
					'content' => 'UPLOAD YOUR IMAGE HERE. <br> Write something here about yourself!',
					'filter'  => 1,
					'visual'  => 1,
				],
			],
			[
				'type' => 'enews-ext',
				'args' => [
					'title'       => 'NEVER MISS A POST',
					'text'        => '',
					'fname-field' => 'FNAME',
					'email-field' => 'EMAIL',
					'fname_text'  => 'First Name',
					'input_text'  => 'Email',
					'button_text' => 'Join the Others!',
					'action'      => '#',
					'filter'      => 1,
					'visual'      => 1,
				],
			],
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '40',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#6E8843',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'footer-1' => [
			[
				'type' => 'search',
				'args' => [
					'title'  => '',
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
		'footer-2' => [
			[
				'type' => 'simple-social-icons',
				'args' => [
					'title'                  => '',
					'size'                   => '40',
					'border_radius'          => '0',
					'border_width'           => '0',
					'alignment'              => 'aligncenter',
					'icon_color'             => '#000000',
					'icon_color_hover'       => '#6E8843',
					'background_color'       => 'transparent',
					'background_color_hover' => 'transparent',
					'facebook'               => '#',
					'instagram'              => '#',
					'pinterest'              => '#',
					'twitter'                => '#',
					'filter'                 => 1,
					'visual'                 => 1,
				],
			],
		],
		'footer-3' => [
			[
				'type' => 'categories',
				'args' => [
					'title'  => '',
					'dropdown' => 1,
					'filter' => 1,
					'visual' => 1,
				],
			],
		],
	],
];
