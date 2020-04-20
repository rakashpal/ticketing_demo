<?php

function _wordpress_theme_support() {

	
	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	
	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	
	add_theme_support( 'title-tag' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	
	load_theme_textdomain( '_wordPress' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	
}

add_action( 'after_setup_theme', '_wordpress_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function _wordpress_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( '_wordpress-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );

}

add_action( 'wp_enqueue_scripts', '_wordpress_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function _wordpress_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//wp_enqueue_script( '_wordpress-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_script_add_data( '_wordpress-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', '_wordpress_register_scripts' );


function _wordpress_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Menu', '_wordPress' ),
		'user'   => __( 'User Menu', '_wordPress' ),
		'admin'   => __( 'Admin Menu', '_wordPress' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', '_wordpress_menus' );

show_admin_bar(false);

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
   if ($args->theme_location == 'primary' || $args->theme_location == 'user') {
      if (is_user_logged_in()) {
         $items .= '<li class="right"><a href="'. wp_logout_url() .'">'. __("Log Out") .'</a></li>';
      } else {
         $items .= '<li class="right"><a href="'. wp_login_url(get_permalink()) .'">'. __("Log In") .'</a></li>';
      }
   }
   return $items;
}
add_filter( 'login_redirect', function() { return home_url(); } );
add_filter( 'registration_redirect', function() { return home_url(); });

add_action('wp_logout',function(){  wp_redirect( home_url() ); exit();});
