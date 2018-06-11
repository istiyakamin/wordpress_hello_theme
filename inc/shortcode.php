<?php 

/**
 * Returns the parsed shortcode.
 *
 * @param array   {
 *     Attributes of the shortcode.
 *
 *     @type string $id ID of...
 * }
 * @param string  Shortcode content.
 *
 * @return string HTML content to display the shortcode.
 */
function shortcode_callback_func( $atts = array(), $content = '' ) {
	extract($atts = shortcode_atts( array(
		'color' => 'blue',
		'size'  => '40px',
	), $atts, 'hello' ));

	$content = do_shortcode( $content);
	return "<p style='color:".$color."; font-size:".$size.";'>".$content."</p>";
}
add_shortcode( 'hello', 'shortcode_callback_func' );


function nested_shortcode( $atts = array(), $content = '' ) {
	extract($atts = shortcode_atts( array(
		'color' => 'blue',
		'size'  => '40px',
	), $atts, 'welcome' ));

	$content = do_shortcode( $content);
	return "<p style='color:".$color."; font-size:".$size.";'>".$content."</p>";
}
add_shortcode( 'welcome', 'nested_shortcode' );


 ?>