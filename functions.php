<?php
include_once( get_template_directory() . '/lib/init.php' );

define( 'CHILD_THEME_NAME', 'TasukuForce' );
define( 'CHILD_THEME_URL', 'http://www.tasukuforce.com' );
define( 'CHILD_TEHME_VERSION', '0.0.1' );

add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'genesis-responsive-viewport' );
add_theme_support( 'custom-background' );
add_theme_support( 'genesis-footer-widgets', 3 );
