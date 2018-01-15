<?php
/**
 * Child Theme Functions
 *
 * Functions or examples that may be used in a child them. Don't for get to edit them, to get them working.
 *
 * @link                https://make.wordpress.org/core/handbook /inline-documentation-standards/php-documentation-standards/#6-file-headers
 * @since               20151214.1
 *
 * @category            WordPress_Theme
 * @package             Extra_Base_Theme
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ROEXB_VERSION', '20180115.1' );
define( 'ROEXB_CDIR', get_stylesheet_directory() ); // if child, will be the file path, with out backslash
define( 'ROEXB_CURI', get_stylesheet_uri() ); // URL, if child, will be the url to the theme directory, no back slash

require( ROEXB_CDIR . '/includes/functions-admin-post-images.php' );
require( ROEXB_CDIR . '/includes/functions-blog-module.php' );
//require( ROEXB_CDIR . '/includes/functions-extra-projects.php' );
require( ROEXB_CDIR . '/includes/functions-header.php' );
require( ROEXB_CDIR . '/includes/functions-images.php' );
//require( ROEXB_CDIR . '/includes/functions-login.php' );
//require( ROEXB_CDIR . '/includes/functions-post-private-note.php' );
require( ROEXB_CDIR . '/includes/functions-rone.php' );
//require( ROEXB_CDIR . '/includes/functions-users.php' );


/**
 * Setup Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
/*
function ro_theme_setup() {
	load_child_theme_textdomain( 'ro-theme-textdomain', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ro_theme_setup' );
*/




?>