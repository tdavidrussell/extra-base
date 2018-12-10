<?

/**
 * https://scrawlon.com/2015/09/21/add-more-social-media-options-to-wordpress-divi-theme/
 *
 */

require_once( get_template_directory() . esc_attr( "/options_extra.php" ) );
global $options;
$epanel_key = "name";
$epanel_value = "Show RSS Icon";

$custom_options = array (
	array( "name" => esc_html__( "Show GitHub Icon", $themename ),
	       "id" => "show_github_icon",
	       //"id" => $shortname."_show_github_icon",
	       "type" => "checkbox2",
	       "std" => "on",
	       "desc" => esc_html__( "Here you can choose to display the GitHub Icon. ", $themename ) ),

	array( "name" => esc_html__( "Show LinkedIn Icon", $themename ),
	       "id" => "show_linkedin_icon",
	       "type" => "checkbox2",
	       "std" => "on",
	       "desc" => esc_html__( "Here you can choose to display the LinkedIn Icon on your homepage. ", $themename ) ),

	array( "name" => esc_html__( "GitHub Profile Url", $themename ),
	       "id" => "github_url",
	       "std" => "#",
	       "type" => "text",
	       "validation_type" => "url",
	       "desc" => esc_html__( "Enter the URL of your GitHub feed. ", $themename ) ),

	array( "name" => esc_html__( "LinkedIn Profile Url", $themename ),
	       "id" => "linkedin_url",
	       "std" => "#",
	       "type" => "text",
	       "validation_type" => "url",
	       "desc" => esc_html__( "Enter the URL of your LinkedIn Profile. ", $themename ) )

);

foreach( $options as $index => $value ) {
	if ( isset($value[$epanel_key]) && $value[$epanel_key] === $epanel_value ) {
		foreach( $custom_options as $custom_index => $custom_option ) {
			$options = insertArrayIndex($options, $custom_option, $index+$custom_index+1);
		}
		break;
	}
}


function insertArrayIndex($array, $new_element, $index) {
	$start = array_slice($array, 0, $index);
	$end = array_slice($array, $index);
	$start[] = $new_element;

	return array_merge($start, $end);
}

return $options;


?>