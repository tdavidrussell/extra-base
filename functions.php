<?php
/**
 * Child Theme Functions
 *
 * Functions or examples that may be used in a child them. Don't for get to edit them, to get them working.
 *
 * @link https://make.wordpress.org/core/handbook/inline-documentation-standards/php-documentation-standards/#6-file-headers
 * @since 20151214.1
 *
 * @category            WordPress_Theme
 * @package             Extra_Base_Child_Theme
 * @subpackage          theme_functions
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ROEXB_VERSION', '20151231.1' );
define( 'ROEXB_CDIR', get_stylesheet_directory() ); // if child, will be the file path, with out backslash
define( 'ROEXB_CURI', get_stylesheet_uri() ); // URL, if child, will be the url to the theme directory, no back slash

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );


/**
 * Add custom style sheet to the HTML Editor
 **/
function roexb_theme_add_editor_styles() {
	if ( file_exists( get_stylesheet_directory() . "/editor-style.css" ) ) {
		add_editor_style( 'editor-style.css' );
	}
}

add_action( 'init', 'roexb_theme_add_editor_styles' );


/**
 * Setup Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
/*
function roexb_theme_setup() {
	load_child_theme_textdomain( 'roexb-theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'rotwsbase_theme_setup' );
*/

/**
 * Load a custom.css style sheet, if it exists in a child theme.
 *
 * @return void
 */
function roexb_enqueue_custom_stylesheets() {
	if ( ! is_admin() ) {
		if ( is_child_theme() ) {
			if ( file_exists( get_stylesheet_directory() . "/custom.css" ) ) {
				wp_enqueue_style( 'roexb-theme-custom-css', get_template_directory_uri() . '/custom.css' );
			}
		}
	}
}

//add_action( 'wp_enqueue_scripts', 'roexb_enqueue_custom_stylesheets', 11 );

?>