<?php

/**
 * http://howidivit.com/2018/03/06/how-to-add-custom-divi-theme-options-about-the-admin-style/
 * http://howidivit.com/2018/02/28/et_epanel_tab_names-divi-filter-add-custom-options-divi-epanel/
 *
 * //Custom module
 * http://howidivit.com/2018/05/01/divi-3-1-update-i-intro-to-the-series/
 * http://howidivit.com/2018/05/17/divi-3-1-step-by-step-iii-how-to-add-a-custom-module/
 */

require_once( get_template_directory() . esc_attr( "/options_extra.php" ) );

// These are the options for our select in Option Three
$myCustomOptions = array(
	'option_one' => esc_html__( 'Option One', $themename ),
	'option_two' => esc_html__( 'Option Two', $themename ),
);

$custom_opt = array(
	// you can change "wrap-custom" to "wrap-[the name you want]" according to the tab name
	array(
		"name" => "wrap-custom",
		"type" => "contenttab-wrapstart",
	),

	array( "type" => "subnavtab-start", ),

	array(
		"name" => "custom-1",
		"type" => "subnav-tab",
		"desc" => esc_html__( "Options", $themename )
	),

	array( "type" => "subnavtab-end", ),

	array(
		"name" => "custom-1",
		"type" => "subcontent-start",
	),

	array(
		"name" => esc_html__( "Add private notes to posts.", $themename ),
		"id"   => $shortname . "_custom_one",
		"type" => "checkbox",
		"std"  => "on",
		"desc" => esc_html__( "My Custom Desc for Option One.", $themename )
	),

	array(
		"name"            => esc_html__( "Option Two", $themename ),
		"id"              => $shortname . "_custom_two",
		"type"            => "text",
		"std"             => "",
		"desc"            => esc_html__( "My Custom Desc for Option Two.", $themename ),
		"validation_type" => "url"
	),

	array(
		"name"            => esc_html__( "Option Three", $themename ),
		"id"              => $shortname . "_custom_three",
		"type"            => "select",
		"options"         => $myCustomOptions,
		"std"             => "",
		"desc"            => esc_html__( "My Custom Desc for Option Three.", $themename ),
		"validation_type" => "url"
	),

	array(
		"name" => esc_html__( "Option Four", $themename ),
		"id"   => $shortname . "_custom_four",
		"type" => "textarea",
		"std"  => "",
		"desc" => esc_html__( "My Custom Desc for Option Four.", $themename )
	),

	array(
		"name" => "custom-1",
		"type" => "subcontent-end",
	),

	// you can change "wrap-custom" to "wrap-[the name you want]" according to the tab name
	array(
		"name" => "wrap-custom",
		"type" => "contenttab-wrapend",
	),
	// end of RagingOne->Options Tab

);

$options = array_merge( $options, $custom_opt );






return $options;


?>