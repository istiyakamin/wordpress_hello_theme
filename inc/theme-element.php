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
		'title_section_1'            => 'its a default value',
		'title_section_desc_1'       => 'its a default description value',
		'title_section_desc_1_color' => 'red',
		'title_section_1_img'        => get_template_directory_uri().'/images/we_are_alwayes.jpg',
	), $atts, 'section_1_base' ));


	ob_start();
?>

<div class="looking_for_specific_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="looking_for_left para_default">
                    <h3 style="color:#8224e3"><?php echo esc_html($title_section_1) ?></h3>
                    <p style="color: <?php echo esc_html( $title_section_desc_1_color ) ?>"><?php echo esc_html( $title_section_desc_1 ) ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">

                	<?php 
                	$vs_img = wp_get_attachment_image_src($title_section_1_img, 'full');
                	 ?>
                                            <img src="<?php echo esc_url($vs_img['0']); ?>" alt="images">
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
