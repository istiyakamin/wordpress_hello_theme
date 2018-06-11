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
function consult_section_1( $atts = array(), $content = '' ) {
	extract(shortcode_atts( array(
		'title_section_1'      => 'its a default value',
		'title_section_desc_1' => 'its a default description value',
	), $atts, 'section_1_base' ));


	ob_start();
?>

<div class="looking_for_specific_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="looking_for_left para_default">
                    <h3 style="color:#8224e3"><?php echo esc_html($title_section_1) ?></h3>
                    <p><?php echo esc_html( $title_section_desc_1 ) ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                                            <img src="http://localhost/wp-project/hello/wp-content/uploads/2018/05/blog_grid_img_01.jpg" alt="images">
                </div>
            </div>
        </div><!--row -->
    </div><!--container -->
</div>


<?php

	return ob_get_clean();

	// do shortcode actions here
}
add_shortcode( 'section_1_base', 'consult_section_1' );



 ?>
