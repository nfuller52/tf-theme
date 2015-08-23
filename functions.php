<?php

/**
 * Theme Setup
 * @since 1.0.0
 *
 * This setup function attaches all of the site-wide functions
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'TasukuForce Theme' );
define( 'CHILD_THEME_URL', 'http://www.tasukuforce.com/' );
define( 'CHILD_THEME_VERSION', '0.0.1' );

//* Add HTML5 markup structure
add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
	)
);

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


// TasukuForce Site Customizations
/////////////////////////////////////

// Remove the site-description h2 from the header
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

// Add the navigation to the header
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav' );
