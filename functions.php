<?php
//* Start the engine!
include_once( get_template_directory() . '/lib/init.php' );

define( 'CHILD_THEME_NAME', 'TasukuForce' );
define( 'CHILD_THEME_URL', 'http://www.tasukuforce.com' );
define( 'CHILD_TEHME_VERSION', '0.0.1' );

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
