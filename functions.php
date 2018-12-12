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

define( 'ROEXB_VERSION', '20181211.1' );
define( 'ROEXB_CDIR', get_stylesheet_directory() ); // if child, will be the file path, with out backslash
define( 'ROEXB_CURI', get_stylesheet_uri() ); // URL, if child, will be the url to the theme directory, no back slash

require( ROEXB_CDIR . '/includes/functions-admin-post-images.php' );
//require( ROEXB_CDIR . '/includes/functions-blog-module.php' );
//require( ROEXB_CDIR . '/includes/functions-extra-projects.php' );
require( ROEXB_CDIR . '/includes/functions-header.php' );
require( ROEXB_CDIR . '/includes/functions-images.php' );
//require( ROEXB_CDIR . '/includes/functions-login.php' );
//require( ROEXB_CDIR . '/includes/functions-post-private-note.php' );
require( ROEXB_CDIR . '/includes/functions-rone.php' );
//require( ROEXB_CDIR . '/includes/functions-users.php' );


/**
 * Add to the social links
 * https://scrawlon.com/2015/09/21/add-more-social-media-options-to-wordpress-divi-theme/
 */
function load_custom_core_options() {
	if ( ! function_exists( 'et_load_core_options' ) ) {
		function et_load_core_options() {
			$options = require_once( get_stylesheet_directory() . esc_attr( "/epanel/custom-options-panel.php" ) );
			$options = require_once( get_stylesheet_directory() . esc_attr( "/epanel/custom-options-tab.php" ) );
		}
	}
}
//add_action( 'after_setup_theme', 'load_custom_core_options' );

function extra_social_networks_22($icons){

	$si = array(
		'github' => esc_html__( 'GitHub', 'extra' ),

		);

	$icons =  array_merge($icons,$si);
	return $icons;

}
//add_action("extra_social_networks","extra_social_networks_22");
/**
 * Add Custom TAB to Theme options
 * http://howidivit.com/2018/02/28/et_epanel_tab_names-divi-filter-add-custom-options-divi-epanel/
 *http://howidivit.com/2018/03/06/how-to-add-custom-divi-theme-options-about-the-admin-style/
 *
 */
function custom_epanel_tab( $tabs ) {
	$custom_tab = 'Raging One';
	$keys        = array_keys( $tabs );
	$values      = array_values( $tabs );

	array_splice( $keys, 7, 0, 'custom' );
	array_splice( $values, 7, 0, $custom_tab );

	return array_combine( $keys, $values );
}
//add_filter( 'et_epanel_tab_names', 'custom_epanel_tab' );




/**
 * Setup Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
/*
function rone_theme_setup() {
	load_child_theme_textdomain( 'ro-theme-textdomain', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'rone_theme_setup' );
*/

/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function ro_enqueue_awesome() {
	wp_enqueue_style( 'ro-font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.0.3' );
}

add_action( 'wp_enqueue_scripts', 'ro_enqueue_awesome' );


?>