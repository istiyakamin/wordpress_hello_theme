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
function work_section( $atts = array(), $content = '' ) {
    extract(shortcode_atts( array(
		'work_section_icon' => 'fa fa-star',
		'work_section_title' => 'Work Section title',
		'work_section_desc' => 'Work Section description',
		'work_group' => '',
	), $atts, 'work_section_base' ));

	ob_start();
?>


	<div class="about_section_area">
        <div class="container-fluid">
            <div class="row">

            	<?php 
            	$work_area = vc_param_group_parse_atts($work_group);
            	?>
            	

				
                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="<?php echo esc_attr($single_work['work_section_icon']) ?>"></i>
                        <h3><?php echo esc_html( $work_section_title ) ?></h3>
                        <p><?php echo esc_html( $work_section_desc ) ?></p>
                    </div>
                </div><!--col-md-4 -->
				
 
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'work_section_base', 'work_section' );



 ?>
